<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'registration_number' => 'PH2018020124',
                'name' => 'Wardila',
                'email' => 'wardila@gmail.com',
                'outlet_id' => 1,
                'position_id' => 1,
                'grade_id' => 1,
            ]
        ];

        foreach ($data as $key => $value) {
            Employee::create($value);
        }

        $user = [
            [
                'username' => 'PH2018020124',
                'name' => 'Wardila',
                'email' => 'wardila@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('PH2018020124')
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
