<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            [
                "name" => "House",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                "name" => "Apartment",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                "name" => "Commercial",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
        ]);
    }
}
