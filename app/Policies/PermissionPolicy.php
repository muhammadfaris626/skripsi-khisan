<?php

namespace App\Policies;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PermissionPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('menu: permission');
    }

    public function view(User $user, Permission $permission): bool
    {
        return $user->can('read: permission');
    }

    public function create(User $user): bool
    {
        return $user->can('create: permission');
    }

    public function update(User $user, Permission $permission): bool
    {
        return $user->can('update: permission');
    }

    public function delete(User $user, Permission $permission): bool
    {
        return $user->can('delete: permission');
    }
}
