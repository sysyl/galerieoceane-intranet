<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

use App\Nova\Metrics\StoresPerProduct;
use App\Nova\Metrics\TotalRevenuesLastYear;
use App\Nova\Metrics\TotalRevenuesPerProductForTheLastTwelveMonths;
use App\Nova\Metrics\ActiveStores;
use App\Nova\Metrics\TotalRevenuesForTheLastTwelveMonths;

use App\Policies\PermissionPolicy;
use App\Policies\RolePolicy;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            new ActiveStores,
            (new TotalRevenuesLastYear)->canSeeWhen('view TotalRevenuesLastYear', User::class),
            (new TotalRevenuesForTheLastTwelveMonths)->help('Latest Value is displayed.')->canSeeWhen('view TotalRevenuesForTheLastTwelveMonths', User::class),
            new StoresPerProduct,
            (new TotalRevenuesPerProductForTheLastTwelveMonths)->help('Revenues in M€.')->canSeeWhen('view TotalRevenuesPerProductForTheLastTwelveMonths', User::class),
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            \Vyuldashev\NovaPermission\NovaPermissionTool::make()
                ->rolePolicy(RolePolicy::class)
                ->permissionPolicy(PermissionPolicy::class),
            new \Bolechen\NovaActivitylog\NovaActivitylog(),
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
