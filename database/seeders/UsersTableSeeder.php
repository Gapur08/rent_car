<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => Hash::make('password'),
                'work_place' => 'Some Work Place',
            ],
            [
                'name' => 'Another User',
                'email' => 'another@example.com',
                'password' => Hash::make('password'),
                'work_place' => 'Another Work Place',
            ],
        ];

        foreach ($users as $user) {
            // Check if the user already exists
            if (!DB::table('users')->where('email', $user['email'])->exists()) {
                DB::table('users')->insert([
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'email_verified_at' => now(),
                    'password' => $user['password'],
                    'remember_token' => Str::random(10),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }

}


