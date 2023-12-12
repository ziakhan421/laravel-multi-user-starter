<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([

            // Admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin@gmail.com'),
                'role' => 'Admin',
            ],

            // User
            [
                'name' => 'Company',
                'username' => 'company',
                'email' => 'company@gmail.com',
                'password' => Hash::make('company@gmail.com'),
                'role' => 'Company',
            ],
        ]);
    }
}
