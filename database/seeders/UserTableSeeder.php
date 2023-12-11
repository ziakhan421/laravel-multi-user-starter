<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
                'password' => Hash::make('123456'),
                'company_name' => null,
                'role' => 'admin',
                'plan' => null,
                'plan_date' => null,
                'created_by' => 1,
            ],

            // User
            [
                'name' => 'Company',
                'username' => 'company',
                'company_name' => 'My Company',
                'plan' => 2,
                'plan_date' => Carbon::now()->toDateString(),
                'email' => 'company@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'Company',
                'created_by' => 1,
            ],
        ]);
    }
}
