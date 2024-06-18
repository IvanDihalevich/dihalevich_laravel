<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [];

        $users[] = [
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // replace with a hashed password
            'remember_token' => Str::random(10),
        ];

        for ($i = 1; $i <= 10; $i++) {
            $users[] = [
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'), // replace with a hashed password
                'remember_token' => Str::random(10),
            ];
        }

        DB::table('users')->insert($users);
    }
}
