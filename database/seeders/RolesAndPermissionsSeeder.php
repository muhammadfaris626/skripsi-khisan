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
        $userPermission1 = Permission::create(['name' => 'create: user']);
        $userPermission2 = Permission::create(['name' => 'read: user']);
        $userPermission3 = Permission::create(['name' => 'update: user']);
        $userPermission4 = Permission::create(['name' => 'delete: user']);
        $userPermission5 = Permission::create(['name' => 'menu: user']);
        // Role Permission
        $rolePermission1 = Permission::create(['name' => 'create: role']);
        $rolePermission2 = Permission::create(['name' => 'read: role']);
        $rolePermission3 = Permission::create(['name' => 'update: role']);
        $rolePermission4 = Permission::create(['name' => 'delete: role']);
        $rolePermission5 = Permission::create(['name' => 'menu: role']);
        // Permission Permission
        $permissionPermission1 = Permission::create(['name' => 'create: permission']);
        $permissionPermission2 = Permission::create(['name' => 'read: permission']);
        $permissionPermission3 = Permission::create(['name' => 'update: permission']);
        $permissionPermission4 = Permission::create(['name' => 'delete: permission']);
        $permissionPermission5 = Permission::create(['name' => 'menu: permission']);

        $rootRole = Role::create(['name' => 'root'])->syncPermissions([
            $userPermission1,$userPermission2,$userPermission3,$userPermission4,$userPermission5,
            $rolePermission1,$rolePermission2,$rolePermission3,$rolePermission4,$rolePermission5,
            $permissionPermission1,$permissionPermission2,$permissionPermission3,$permissionPermission4,$permissionPermission5
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
