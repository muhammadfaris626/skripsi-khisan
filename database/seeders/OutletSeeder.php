<?php

namespace Database\Seeders;

use App\Models\Outlet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'code' => 'PHDKS-DPM',
                'name' => 'Daya Perintis Makassar'
            ],
            [
                'code' => 'PHDKS-UPM',
                'name' => 'Unhas Perintis Makassar'
            ],
        ];

        foreach ($data as $key => $value) {
            Outlet::create($value);
        }
    }
}
