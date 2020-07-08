<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Panel;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Http\Requests\NovaRequest;

use Dniccum\PhoneNumber\PhoneNumber;
use Eminiarts\Tabs\Tabs;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;
use Carbon\Carbon;

use App\Nova\Metrics\ActiveStores;
use App\Nova\Metrics\StoresPerProduct;
use App\Nova\Metrics\TotalRevenuesForTheLastTwelveMonths;
use App\Nova\Metrics\RevenuesForTheLastTwelveMonths;
use App\Nova\Metrics\RevenuesForTheLastYear;
use App\Nova\Metrics\RevenuesForTheCurrentYear;

class Store extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Store::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name', 'description', 'phonenumber_1', 'phonenumber_2', 'emergency_phonenumber_1', 'emergency_phonenumber_2',
    ];

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Store Management';

    /**
     * The default sort associated with the resource.
     *
     * @var string
     */
    public static $defaultSort = [
        'name' => 'asc'
    ];

    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('Stores');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('Store');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            (new Tabs(__('Store'), [
                'Details' => [
                    ID::make()->sortable(),
                    Avatar::make('Avatar')->disk('s3'),
                    Text::make(__('Name'), 'name')->rules('required', 'max:60')->sortable(),
                    Boolean::make(__('Active'), 'active')->default(1),
                    Date::make(__('Termination Date'), 'termination_date')->hideFromIndex(),

                    PhoneNumber::make(__('Phonenumber 1'), 'phonenumber_1')
                    ->format('+33 (#)# ## ## ## ##')
                    ->country('FR')
                    ->linkOnIndex()
                    ->linkOnDetail(),

                    PhoneNumber::make(__('Phonenumber 2'), 'phonenumber_2')
                    ->format('+33 (#)# ## ## ## ##')
                    ->disableValidation()
                    ->country('FR')
                    ->linkOnIndex()
                    ->linkOnDetail()
                    ->hideFromIndex(),

                    PhoneNumber::make(__('Emergency Phonenumber 1'), 'emergency_phonenumber_1')
                    ->format('+33 (#)# ## ## ## ##')
                    ->country('FR')
                    ->linkOnIndex()
                    ->linkOnDetail(),

                    PhoneNumber::make(__('Emergency Phonenumber 2'), 'emergency_phonenumber_2')
                    ->format('+33 (#)# ## ## ## ##')
                    ->disableValidation()
                    ->country('FR')
                    ->linkOnIndex()
                    ->linkOnDetail()
                    ->hideFromIndex(),
                ],

                __('Additional Information') => [
                    Textarea::make(__('Description'), 'description')->withMeta(['extraAttributes' => [
                        'placeholder' => __('Make it less than 100 characters')]
                    ]),
                    Select::make(__('Unit Size'), 'unit_size')->options([
                        '0' => 'Small Unit',
                        '1' => 'Medium Unit',
                    ])->default(0)->displayUsingLabels()->hideFromIndex(),

                    BelongsTo::make(__('Retail Space'), 'retailSpace', RetailSpace::class)->nullable(),
                    BelongsTo::make(__('Product'), 'product', Product::class)->hideFromIndex(),
                    BelongsTo::make(__('Shopping Mall'), 'shoppingMall', ShoppingMall::class)->withMeta([
                        'belongsToId' => 1
                    ])->hideFromIndex(),
                ],

                HasMany::make(__('Store Revenues'), 'storeRevenues', StoreRevenue::class),
                HasMany::make(__('Store Notes'), 'storeNotes', StoreNote::class),

                BelongsToMany::make(__('Employees'), 'employees', Employee::class),
            ]))->withToolbar()->defaultSearch(true),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [
            new ActiveStores,
            new StoresPerProduct,
            (new TotalRevenuesForTheLastTwelveMonths)->help(__('Latest Value is displayed.'))->canSeeWhen('view TotalRevenuesForTheLastTwelveMonths', User::class),
            (new RevenuesForTheLastTwelveMonths)->help(__('Latest Value is displayed.'))->onlyOnDetail()->canSeeWhen('view StoreRevenues', User::class),
            (new RevenuesForTheLastYear)->onlyOnDetail()->canSeeWhen('view StoreRevenues', User::class),
            (new RevenuesForTheCurrentYear)->help(__('Not available at the start of the year.'))->onlyOnDetail()->canSeeWhen('view StoreRevenues', User::class),
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new Filters\StoreActive,
            new Filters\StoreProductId,
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            (new DownloadExcel)->withHeadings(),
        ];
    }

    public static function relatableRetailSpaces(NovaRequest $request, $query)
    {
        // Display only empty RetailSpaces + Current One
        $current_retail_space_id = DB::table('stores')->where('id', $request->resourceId)->value('retail_space_id');

        return $query
            ->where("rented", 0)
            ->where("deleted_at", null)
            ->orWhere("id", $current_retail_space_id);
    }
}
