<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Str;
class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // User Permission
        $userPermission1 = Permission::create(['name' => 'menu: user']);
        $userPermission2 = Permission::create(['name' => 'create: user']);
        $userPermission3 = Permission::create(['name' => 'read: user']);
        $userPermission4 = Permission::create(['name' => 'update: user']);
        $userPermission5 = Permission::create(['name' => 'delete: user']);

        // Role Permission
        $rolePermission1 = Permission::create(['name' => 'menu: role']);
        $rolePermission2 = Permission::create(['name' => 'create: role']);
        $rolePermission3 = Permission::create(['name' => 'read: role']);
        $rolePermission4 = Permission::create(['name' => 'update: role']);
        $rolePermission5 = Permission::create(['name' => 'delete: role']);

        // Permission Permission
        $permissionPermission1 = Permission::create(['name' => 'menu: permission']);
        $permissionPermission2 = Permission::create(['name' => 'create: permission']);
        $permissionPermission3 = Permission::create(['name' => 'read: permission']);
        $permissionPermission4 = Permission::create(['name' => 'update: permission']);
        $permissionPermission5 = Permission::create(['name' => 'delete: permission']);

        // Master Position Permission
        $positionPermission1 = Permission::create(['name' => 'menu: position']);
        $positionPermission2 = Permission::create(['name' => 'create: position']);
        $positionPermission3 = Permission::create(['name' => 'read: position']);
        $positionPermission4 = Permission::create(['name' => 'update: position']);
        $positionPermission5 = Permission::create(['name' => 'delete: position']);
        // Master Grade Permission
        $gradePermission1 = Permission::create(['name' => 'menu: grade']);
        $gradePermission2 = Permission::create(['name' => 'create: grade']);
        $gradePermission3 = Permission::create(['name' => 'read: grade']);
        $gradePermission4 = Permission::create(['name' => 'update: grade']);
        $gradePermission5 = Permission::create(['name' => 'delete: grade']);
        // Master Outlet Permission
        $outletPermission1 = Permission::create(['name' => 'menu: outlet']);
        $outletPermission2 = Permission::create(['name' => 'create: outlet']);
        $outletPermission3 = Permission::create(['name' => 'read: outlet']);
        $outletPermission4 = Permission::create(['name' => 'update: outlet']);
        $outletPermission5 = Permission::create(['name' => 'delete: outlet']);
        // Master Category Achievement Permission
        $categoryAchievementPermission1 = Permission::create(['name' => 'menu: category-achievement']);
        $categoryAchievementPermission2 = Permission::create(['name' => 'create: category-achievement']);
        $categoryAchievementPermission3 = Permission::create(['name' => 'read: category-achievement']);
        $categoryAchievementPermission4 = Permission::create(['name' => 'update: category-achievement']);
        $categoryAchievementPermission5 = Permission::create(['name' => 'delete: category-achievement']);
        // Master Column List Permission
        $columnListPermission1 = Permission::create(['name' => 'menu: column-list']);
        $columnListPermission2 = Permission::create(['name' => 'create: column-list']);
        $columnListPermission3 = Permission::create(['name' => 'read: column-list']);
        $columnListPermission4 = Permission::create(['name' => 'update: column-list']);
        $columnListPermission5 = Permission::create(['name' => 'delete: column-list']);
        // Employee Permission
        $employeePermission1 = Permission::create(['name' => 'menu: employee']);
        $employeePermission2 = Permission::create(['name' => 'create: employee']);
        $employeePermission3 = Permission::create(['name' => 'read: employee']);
        $employeePermission4 = Permission::create(['name' => 'update: employee']);
        $employeePermission5 = Permission::create(['name' => 'delete: employee']);
        // Evaluation Permission
        $evaluationPermission1 = Permission::create(['name' => 'menu: evaluation']);
        $evaluationPermission2 = Permission::create(['name' => 'create: evaluation']);
        $evaluationPermission3 = Permission::create(['name' => 'read: evaluation']);
        $evaluationPermission4 = Permission::create(['name' => 'update: evaluation']);
        $evaluationPermission5 = Permission::create(['name' => 'delete: evaluation']);




        // $Permission1 = Permission::create(['name' => 'menu: ']);
        // $Permission2 = Permission::create(['name' => 'create: ']);
        // $Permission3 = Permission::create(['name' => 'read: ']);
        // $Permission4 = Permission::create(['name' => 'update: ']);
        // $Permission5 = Permission::create(['name' => 'delete: ']);


        $rootRole = Role::create(['name' => 'root'])->syncPermissions([
            $userPermission1,$userPermission2,$userPermission3,$userPermission4,$userPermission5,
            $rolePermission1,$rolePermission2,$rolePermission3,$rolePermission4,$rolePermission5,
            $permissionPermission1,$permissionPermission2,$permissionPermission3,$permissionPermission4,$permissionPermission5,
            $positionPermission1, $positionPermission2, $positionPermission3, $positionPermission4, $positionPermission5,
            $gradePermission1, $gradePermission2, $gradePermission3, $gradePermission4, $gradePermission5,
            $outletPermission1, $outletPermission2, $outletPermission3, $outletPermission4, $outletPermission5,
            $categoryAchievementPermission1, $categoryAchievementPermission2, $categoryAchievementPermission3, $categoryAchievementPermission4, $categoryAchievementPermission5,
            $columnListPermission1, $columnListPermission2, $columnListPermission3, $columnListPermission4, $columnListPermission5,
            $employeePermission1, $employeePermission2, $employeePermission3, $employeePermission4, $employeePermission5,
            $evaluationPermission1, $evaluationPermission2, $evaluationPermission3, $evaluationPermission4, $evaluationPermission5,

            // Permission1, Permission2, Permission3, Permission4, Permission5,
        ]);

        $mumRole = Role::create(['name' => 'multi unit manager']);
        $micRole = Role::create(['name' => 'manager in charge']);
        $trainerRole = Role::create(['name' => 'trainer']);
        $employeeRole = Role::create(['name' => 'crew']);


        User::create([
            'username' => 'root',
            'name' => 'Root',
            'email' => 'root@system.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ])->assignRole($rootRole);
        // User::create([
        //     'name' => 'Multi Unit Manager 1',
        //     'email' => 'mum1@system.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ])->assignRole($mumRole);
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'mum1@system.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ])->assignRole($mumRole);
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'mum1@system.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ])->assignRole($mumRole);
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'mum1@system.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ])->assignRole($mumRole);
    }
}
