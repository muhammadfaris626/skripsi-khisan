<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RolePolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('menu: role');
    }

    public function view(User $user, Role $role): bool
    {
        return $user->can('read: role');
    }

    public function create(User $user): bool
    {
        return $user->can('create: role');
    }

    public function update(User $user, Role $role): bool
    {
        return $user->can('update: role');
    }

    public function delete(User $user, Role $role): bool
    {
        return $user->can('delete: role');
    }
}
