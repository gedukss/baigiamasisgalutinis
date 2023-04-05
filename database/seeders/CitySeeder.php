<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            [
                'name' => 'New York',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'name' => 'Los Angeles',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'name' => 'San Francisco',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'name' => 'Miami',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'name' => 'Paris',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'name' => 'London',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
        ]);
    }
}
