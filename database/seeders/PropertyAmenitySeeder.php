<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PropertyAmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('amenity_property')->insert([
            ['property_id' => 1, 'amenity_id' => 1],
            ['property_id' => 1, 'amenity_id' => 4],
            ['property_id' => 1, 'amenity_id' => 7],
            ['property_id' => 2, 'amenity_id' => 1],
            ['property_id' => 2, 'amenity_id' => 9],
            ['property_id' => 2, 'amenity_id' => 14],
            ['property_id' => 3, 'amenity_id' => 1],
            ['property_id' => 3, 'amenity_id' => 12],
            ['property_id' => 3, 'amenity_id' => 19],
            ['property_id' => 4, 'amenity_id' => 1],
            ['property_id' => 4, 'amenity_id' => 11],
            ['property_id' => 4, 'amenity_id' => 22],
            ['property_id' => 5, 'amenity_id' => 1],
            ['property_id' => 5, 'amenity_id' => 3],
            ['property_id' => 5, 'amenity_id' => 8],
            ['property_id' => 6, 'amenity_id' => 1],
            ['property_id' => 6, 'amenity_id' => 5],
            ['property_id' => 6, 'amenity_id' => 20],
            ['property_id' => 7, 'amenity_id' => 1],
            ['property_id' => 7, 'amenity_id' => 6],
            ['property_id' => 7, 'amenity_id' => 15],
            ['property_id' => 8, 'amenity_id' => 1],
            ['property_id' => 8, 'amenity_id' => 10],
            ['property_id' => 8, 'amenity_id' => 18],
            ['property_id' => 9, 'amenity_id' => 1],
            ['property_id' => 9, 'amenity_id' => 2],
            ['property_id' => 9, 'amenity_id' => 21],
            ['property_id' => 10, 'amenity_id' => 1],
            ['property_id' => 10, 'amenity_id' => 13],
            ['property_id' => 10, 'amenity_id' => 16],
            ['property_id' => 11, 'amenity_id' => 1],
            ['property_id' => 11, 'amenity_id' => 17],
            ['property_id' => 11, 'amenity_id' => 22],
            ['property_id' => 12, 'amenity_id' => 1],
            ['property_id' => 12, 'amenity_id' => 6],
            ['property_id' => 12, 'amenity_id' => 9],
        ]);
    }
}
