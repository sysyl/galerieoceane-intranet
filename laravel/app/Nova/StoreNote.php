<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;

use Abelys\Notes\Notes;
use Inspheric\Fields\Indicator;
use Carbon\Carbon;

class StoreNote extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\StoreNote::class;

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
        'name', 'content',
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
    public static $displayInNavigation = false;

    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('Store Notes');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('Store Note');
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
            Text::make(__('Name'), 'name')->rules('required', 'max:60')->sortable(),
            Textarea::make(__('Content'), 'content')
            ->showOnIndex()
            ->readMore()
            ->withMeta(['extraAttributes' => [
                'placeholder' => __('Make it less than 200 characters')]
            ]),

            Select::make(__('Priority'), 'priority')->options([
                '0' => 'Small',
                '1' => 'Medium',
                '2' => 'High',
            ])->default(0)->displayUsingLabels()->onlyOnForms(),
            Indicator::make(__('Priority'), 'priority')
            ->labels([
                '0' => 'Small',
                '1' => 'Medium',
                '2' => 'High',
            ])
            ->colors([
                '0' => 'green',
                '1' => 'blue',
                '2' => 'red',
            ]),

            Select::make(__('Status'), 'status')->options([
                'draft' => __('Draft'),
                'published' => __('Published'),
            ])->default('draft')->displayUsingLabels()->onlyOnForms(),
            Indicator::make(__('Status'), 'status')
            ->labels([
                'draft' => __('Draft'),
                'published' => __('Published'),
            ])
            ->colors([
                'draft' => 'orange',
                'published' => 'green',
            ]),

            Date::make(__('Published At'), 'published_at'),

            BelongsTo::make(__('Store'), 'store', Store::class),
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
