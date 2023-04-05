<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agents')->insert([
            [
                'first_name' => 'John',
                'last_name' => 'Smith',
                'email' => 'johnsmith@example.com',
                'phone' => '555-111-1111',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'first_name' => 'Mark',
                'last_name' => 'Davis',
                'email' => 'markdavis@example.com',
                'phone' => '555-222-2222',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'first_name' => 'David',
                'last_name' => 'Garcia',
                'email' => 'davidgarcia@example.com',
                'phone' => '555-333-3333',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'first_name' => 'Michael',
                'last_name' => 'Brown',
                'email' => 'michaelbrown@example.com',
                'phone' => '555-444-4444',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'first_name' => 'Christopher',
                'last_name' => 'Wilson',
                'email' => 'christopherwilson@example.com',
                'phone' => '555-555-5555',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'first_name' => 'Matthew',
                'last_name' => 'Taylor',
                'email' => 'matthewtaylor@example.com',
                'phone' => '555-666-6666',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
        ]);
    }
}
