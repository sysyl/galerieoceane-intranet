<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;

use Abelys\Notes\Notes;
use Carbon\Carbon;

class StoreRevenue extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\StoreRevenue::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Store Management';

    /**
     * Indicates if the resource should be displayed in the sidebar.
     *
     * @var bool
     */
    public static $displayInNavigation = true;

    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('Store Revenues');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('Store Revenue');
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
            ID::make()->sortable(),

            Currency::make(__('Amount'), 'amount')
            ->currency('EUR')
            ->rules('required')
            ->Help(__('Last month revenue'))
            ->sortable(),

            Date::make(__('Report Date'), 'report_date')
            ->default(Carbon::now()->subMonth()->endOfMonth()->toDateString())
            ->rules('required')
            ->Help(__('Default value is set to Last Day of Previous Month'))
            ->readonly(function ($request) {
                return $request->isUpdateOrUpdateAttachedRequest();
            }),

            Textarea::make(__('Remarks'), 'remarks')
            ->showOnIndex()
            ->readMore()
            ->withMeta(['extraAttributes' => [
                'placeholder' => __('Make it less than 200 characters')]
            ]),

            BelongsTo::make(__('Store'), 'store', Store::class)
            ->readonly(function ($request) {
                return $request->isUpdateOrUpdateAttachedRequest();
            }),
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
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
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
        return [];
    }
}
