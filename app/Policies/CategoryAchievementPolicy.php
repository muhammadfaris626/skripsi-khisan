<?php

namespace App\Policies;

use App\Models\CategoryAchievement;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CategoryAchievementPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('menu: category-achievement');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, CategoryAchievement $categoryAchievement): bool
    {
        return $user->can('read: category-achievement');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create: category-achievement');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CategoryAchievement $categoryAchievement): bool
    {
        return $user->can('update: category-achievement');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CategoryAchievement $categoryAchievement): bool
    {
        return $user->can('delete: category-achievement');
    }
}
