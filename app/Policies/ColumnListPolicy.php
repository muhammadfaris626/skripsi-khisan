<?php

namespace App\Policies;

use App\Models\ColumnList;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ColumnListPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('menu: column-list');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ColumnList $columnList): bool
    {
        return $user->can('read: column-list');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create: column-list');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ColumnList $columnList): bool
    {
        return $user->can('update: column-list');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ColumnList $columnList): bool
    {
        return $user->can('delete: column-list');
    }
}
