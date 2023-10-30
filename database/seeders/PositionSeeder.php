<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'code' => 'MUM',
                'name' => 'Multi Unit Manager'
            ],
            [
                'code' => 'OM',
                'name' => 'Outlet Manager'
            ],
            [
                'code' => 'SM',
                'name' => 'Shift Manager'
            ],
            [
                'code' => 'SPV',
                'name' => 'Supervisor'
            ],
            [
                'code' => 'PIC',
                'name' => 'Personal In Charge'
            ],
            [
                'code' => 'BOH',
                'name' => 'Back Of The House'
            ],
            [
                'code' => 'OT',
                'name' => 'Order Taker'
            ],
            [
                'code' => 'DEL',
                'name' => 'Delivery'
            ],
            [
                'code' => 'T',
                'name' => 'Trainer'
            ],
        ];
        foreach ($data as $key => $value) {
            Position::create($value);
        }
    }
}
