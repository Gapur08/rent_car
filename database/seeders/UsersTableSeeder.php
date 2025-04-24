<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Another User',
                'email' => 'another@example.com',
                'password' => bcrypt('password'),
                'work_place' => 'Another Work Place',
            ],
        ];

        foreach ($users as $user) {
            if (!DB::table('users')->where('email', $user['email'])->exists()) {
                DB::table('users')->insert([
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'email_verified_at' => now(),
                    'password' => bcrypt($user['password']), //Ensure bcrypt is used here too.
                    'remember_token' => Str::random(10), // This line is now correct
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}



