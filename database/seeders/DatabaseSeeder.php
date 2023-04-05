<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            AgentSeeder::class,
            TypeSeeder::class,
            CitySeeder::class,
            AmenitySeeder::class,
            PropertySeeder::class,
            PropertyAmenitySeeder::class,
        ]);
    }
}
