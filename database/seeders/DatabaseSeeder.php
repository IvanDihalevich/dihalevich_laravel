<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Call other seeders
        $this->call(UsersTableSeeder::class);
        $this->call(BlogCategoriesTableSeeder::class);

        // Create 100 blog posts
        \App\Models\BlogPost::factory(100)->create();
    }
}
