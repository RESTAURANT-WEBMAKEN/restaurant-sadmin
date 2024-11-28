<?php

namespace Database\Seeders;

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
            'name' => 'Webmaken',
            'email' => 'webmaken1@gmail.com',
            'password' => 'Webmaken@123',
        ]);

        // $this->call(RestaurantSeeder::class);
        // $this->call(RestaurantFTPDetailsSeeder::class);
        // $this->call(RestaurantSSHDetailsSeeder::class);
        // $this->call(RestaurantDatatbaseDetailsSeeder::class);
    }
}
