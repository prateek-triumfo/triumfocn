<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash; // Add this at the top if not already
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Dheeraj',
            'email' => 'dheeraj@example.com',
           'password' => Hash::make('dheeraj@123')
        ]);
    }
}
