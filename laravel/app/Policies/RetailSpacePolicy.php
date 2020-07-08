<?php

namespace App\Policies;

use App\RetailSpace;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RetailSpacePolicy
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
        if ($user->can('all access granted on retail spaces')) {
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
        if ($user->can('view any retail spaces')) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\RetailSpace  $retailSpace
     * @return mixed
     */
    public function view(User $user, RetailSpace $retailSpace)
    {
        if ($user->can('view retail spaces')) {
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
     * @param  \App\RetailSpace  $retailSpace
     * @return mixed
     */
    public function update(User $user, RetailSpace $retailSpace)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\RetailSpace  $retailSpace
     * @return mixed
     */
    public function delete(User $user, RetailSpace $retailSpace)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\RetailSpace  $retailSpace
     * @return mixed
     */
    public function restore(User $user, RetailSpace $retailSpace)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\RetailSpace  $retailSpace
     * @return mixed
     */
    public function forceDelete(User $user, RetailSpace $retailSpace)
    {
        //
    }
}
