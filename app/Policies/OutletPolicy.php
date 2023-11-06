<?php

namespace App\Policies;

use App\Models\Outlet;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class OutletPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('menu: outlet');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Outlet $outlet): bool
    {
        return $user->can('read: outlet');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create: outlet');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Outlet $outlet): bool
    {
        return $user->can('update: outlet');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Outlet $outlet): bool
    {
        return $user->can('delete: outlet');
    }
}
