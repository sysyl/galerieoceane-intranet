<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Country;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Http\Requests\NovaRequest;

use Dniccum\PhoneNumber\PhoneNumber;
use Eminiarts\Tabs\Tabs;

class ShoppingMall extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\ShoppingMall::class;

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
        'name',
    ];

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Parameters';

    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('Shopping Malls');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('Shopping Mall');
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
            (new Tabs(__('Shopping Mall'), [
                'Details' => [
                    ID::make()->sortable(),
                    Avatar::make('Avatar')->disk('s3'),
                    Text::make(__('Name'), 'name')->rules('required', 'max:60')->sortable(),
                    PhoneNumber::make(__('Phonenumber'), 'phonenumber')
                    ->format('+33 (#)# ## ## ## ##')
                    ->country('FR')
                    ->linkOnIndex()
                    ->linkOnDetail(),

                    Heading::make(__('Address Information')),
                    $this->addressFields(),
                ],

                HasMany::make(__('Stores'), 'stores', Store::class),
                HasMany::make(__('Retail Spaces'), 'retailSpaces', RetailSpace::class),
            ]))->withToolbar()->defaultSearch(true),
        ];
    }

    /**
     * Get the address fields for the resource.
     *
     * @return \Illuminate\Http\Resources\MergeValue
     */
    protected function addressFields()
    {
        return $this->merge([
            Place::make(__('Address'), 'address_line_1')->hideFromIndex()->countries(['FR']),
            Text::make(__('City'), 'city')->hideFromIndex(),
            Text::make(__('State'), 'state')->hideFromIndex(),
            Text::make(__('Postal Code'), 'postal_code')->hideFromIndex(),
            Text::make(__('Suburb'), 'suburb')->hideFromIndex(),
            Country::make(__('Country'), 'country')->hideFromIndex(),
            Text::make(__('Latitude'), 'latitude')->hideFromIndex(),
            Text::make(__('Longitude'), 'longitude')->hideFromIndex(),
        ]);
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
