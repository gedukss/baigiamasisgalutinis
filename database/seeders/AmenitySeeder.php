<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('amenities')->insert([
            [
                "name" => "Swimming pool",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Gym",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Parking space",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Tennis court",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Basketball court",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Playground",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Elevator",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Concierge services",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Sauna",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Hot tub",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Rooftop terrace",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Private balcony",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "On-site laundry facilities",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "24-hour security",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Pet-friendly facilities",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Outdoor recreation areas",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Smart home technology",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "High-speed internet",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Walk-in closet",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Hardwood floors",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Dishwasher",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Fireplace",
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
