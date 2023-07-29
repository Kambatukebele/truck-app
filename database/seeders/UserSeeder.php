<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'kams', 
            'email' => 'kams@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 1,
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 

        ]);

        DB::table('users')->insert([
            'name' => 'leeraldy', 
            'email' => 'leer@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 1,
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);

        DB::table('users')->insert([
            'name' => 'bryan', 
            'email' => 'bryan@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 2,
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);

        DB::table('users')->insert([
            'name' => 'brandon', 
            'email' => 'brandon@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 2,
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);

        DB::table('users')->insert([
            'name' => 'foreman', 
            'email' => 'foreman@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 2,
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);

        DB::table('users')->insert([
            'name' => 'andy', 
            'email' => 'andy@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 3,
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
         DB::table('users')->insert([
            'name' => 'jordan', 
            'email' => 'jordan@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 3,
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
         DB::table('users')->insert([
            'name' => 'ngannou', 
            'email' => 'ngannou@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 3,
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
         DB::table('users')->insert([
            'name' => 'mike', 
            'email' => 'mike@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 4,
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
         DB::table('users')->insert([
            'name' => 'bankole', 
            'email' => 'bankole@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 4,
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
         DB::table('users')->insert([
            'name' => 'kamuru', 
            'email' => 'kamuru@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 4,
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
         DB::table('users')->insert([
            'name' => 'ali', 
            'email' => 'ali@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 5,
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('users')->insert([
            'name' => 'lebron', 
            'email' => 'lebron@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 5,
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('users')->insert([
            'name' => 'koby', 
            'email' => 'koby@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 5,
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
    }
}