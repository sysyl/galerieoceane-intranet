<?php

namespace App\Policies;

use App\ShoppingMall;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShoppingMallPolicy
{
    use HandlesAuthorization;

    /**
     * Authorize all actions within the given policy.
     *
     * @param  $user
     * @param  $ability
     * @return mixed
     */
    public function before($user, $ability)
    {
        if ($user->can('all access granted on shopping malls')) {
            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        if ($user->can('view any shopping malls')) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\ShoppingMall  $shoppingMall
     * @return mixed
     */
    public function view(User $user, ShoppingMall $shoppingMall)
    {
        if ($user->can('view shopping malls')) {
            return true;
        }
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\ShoppingMall  $shoppingMall
     * @return mixed
     */
    public function update(User $user, ShoppingMall $shoppingMall)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\ShoppingMall  $shoppingMall
     * @return mixed
     */
    public function delete(User $user, ShoppingMall $shoppingMall)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\ShoppingMall  $shoppingMall
     * @return mixed
     */
    public function restore(User $user, ShoppingMall $shoppingMall)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\ShoppingMall  $shoppingMall
     * @return mixed
     */
    public function forceDelete(User $user, ShoppingMall $shoppingMall)
    {
        //
    }
}
