<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Http\Requests\NovaRequest;

use Dniccum\PhoneNumber\PhoneNumber;
use Carbon\Carbon;

class Employee extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Employee::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'lastname';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'lastname', 'firstname', 'email', 'phonenumber',
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
        'lastname' => 'asc'
    ];

    /**
     * Get the value that should be displayed to represent the resource.
     *
     * @return string
     */
    public function title()
    {
        return $this->lastname . ' ' . $this->firstname;
    }

    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('Employees');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('Employee');
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
            Text::make(__('Lastname'), 'lastname')->rules('required', 'max:60')->sortable(),
            Text::make(__('Firstname'), 'firstname')->rules('required', 'max:60')->sortable(),
            Select::make(__('Role'), 'role')->options([
                '0' => 'Manager',
                '1' => 'Technical Manager',
                '2' => 'Allround',
            ])->default(0)->displayUsingLabels()->hideFromIndex(),
            Boolean::make(__('Active'), 'active')->default(1),
            Date::make(__('Exit Date'), 'exit_date')->hideFromIndex(),
            PhoneNumber::make(__('Phonenumber'), 'phonenumber')
            ->format('+33 (#)# ## ## ## ##')
            ->disableValidation()
            ->country('FR')
            ->linkOnIndex()
            ->linkOnDetail(),

            BelongsToMany::make(__('Stores'), 'stores', Store::class)
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
        return [
            new Filters\EmployeeActive,
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
        return [];
    }
}
