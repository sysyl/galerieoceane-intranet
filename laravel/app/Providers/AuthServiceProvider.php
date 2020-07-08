<?php

namespace App\Providers;

use App\Policies\ShoppingMallPolicy;
use App\ShoppingMall;
use App\Policies\RetailSpacePolicy;
use App\RetailSpace;
use App\Policies\ProductPolicy;
use App\Product;
use App\Policies\StorePolicy;
use App\Store;
use App\Policies\StoreRevenuePolicy;
use App\StoreRevenue;
use App\Policies\StoreNotePolicy;
use App\StoreNote;
use App\Policies\EmployeePolicy;
use App\Employee;
use App\Policies\UserPolicy;
use App\User;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        ShoppingMall::class => ShoppingMallPolicy::class,
        RetailSpace::class => RetailSpacePolicy::class,
        Product::class => ProductPolicy::class,
        Store::class => StorePolicy::class,
        StoreRevenue::class => StoreRevenuePolicy::class,
        StoreNote::class => StoreNotePolicy::class,
        Employee::class => EmployeePolicy::class,
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Implicitly grant "Super ADMIN" role all permissions
        // This works in the app by using gate-related functions like auth()->user->can() and @can()
        Gate::before(function ($user, $ability) {
            return $user->hasRole('super-admin') ? true : null;
        });
    }
}
