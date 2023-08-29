<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
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
            "company_name" => "kamba&CoulibalyLLC",
            "company_phone" => '1-237-388-8002',
            "company_address" => Str::random(10),
            "company_address_2" => Str::random(10),
            "company_city" => Str::random(10),
            "company_state" => Str::random(10),
            "company_zipcode" => Str::random(10),
            "company_website" => Str::random(10),
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 

        ]);

        DB::table('users')->insert([
            'name' => 'leeraldy', 
            'email' => 'leer@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 1,
            "company_name" => "kamba&CoulibalyLLC",
            "company_phone" => '1-237-388-8002',
            "company_address" => "1936 Ernie Tunnel Apt. 925",
            "company_address_2" => "",
            "company_city" => "Lake Vilmaburgh",
            "company_state" => "Indiana",
            "company_zipcode" => "20436",
            "company_website" => "https:kambacoulibaly.com",
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);

        DB::table('users')->insert([
            'name' => 'bryan', 
            'email' => 'bryan@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 2,
            "company_name" => "kamba&CoulibalyLLC",
            "company_phone" => '1-237-388-8002',
            "company_address" => "1936 Ernie Tunnel Apt. 925",
            "company_address_2" => "",
            "company_city" => "Lake Vilmaburgh",
            "company_state" => "Indiana",
            "company_zipcode" => "20436",
            "company_website" => "https:kambacoulibaly.com",
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);

        DB::table('users')->insert([
            'name' => 'brandon', 
            'email' => 'brandon@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 2,
            "company_name" => "",
            "company_phone" => "",
            "company_address" => "",
            "company_address_2" => "",
            "company_city" => "",
            "company_state" => "",
            "company_zipcode" => "",
            "company_website" => "",
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);

        DB::table('users')->insert([
            'name' => 'foreman', 
            'email' => 'foreman@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 2,
            "company_name" => "",
            "company_phone" => "",
            "company_address" => "",
            "company_address_2" => "",
            "company_city" => "",
            "company_state" => "",
            "company_zipcode" => "",
            "company_website" => "",
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);

        DB::table('users')->insert([
            'name' => 'andy', 
            'email' => 'andy@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 3,
            "company_name" => "Andy & co",
            "company_phone" => '1-765-3834-1345',
            "company_address" => "5331 Rexford Court,",
            "company_address_2" => "",
            "company_city" => "9339 W Lake ",
            "company_state" => "Alaska (AK)",
            "company_zipcode" => "https://andyll.com",
            "company_website" => Str::random(10),
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
         DB::table('users')->insert([
            'name' => 'jordan', 
            'email' => 'jordan@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 3,
            "company_name" => "jordan",
            "company_phone" => '1-137-188-4452',
            "company_address" => "2438 6th Ave",
            "company_address_2" => "",
            "company_city" => "Ketchikan",
            "company_state" => " Alaska (AK)",
            "company_zipcode" => "99901",
            "company_website" => "https://jordanll.com",
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
         DB::table('users')->insert([
            'name' => 'ngannou', 
            'email' => 'ngannou@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 3,
            "company_name" => Str::random(10),
            "company_phone" => '1-237-388-8002',
            "company_address" => Str::random(10),
            "company_address_2" => Str::random(10),
            "company_city" => Str::random(10),
            "company_state" => Str::random(10),
            "company_zipcode" => Str::random(10),
            "company_website" => Str::random(10),
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
         DB::table('users')->insert([
            'name' => 'mike', 
            'email' => 'mike@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 4,
            "company_name" => Str::random(10),
            "company_phone" => '1-237-388-8002',
            "company_address" => Str::random(10),
            "company_address_2" => Str::random(10),
            "company_city" => Str::random(10),
            "company_state" => Str::random(10),
            "company_zipcode" => Str::random(10),
            "company_website" => Str::random(10),
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
         DB::table('users')->insert([
            'name' => 'bankole', 
            'email' => 'bankole@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 4,
            "company_name" => Str::random(10),
            "company_phone" => '1-237-388-8002',
            "company_address" => Str::random(10),
            "company_address_2" => Str::random(10),
            "company_city" => Str::random(10),
            "company_state" => Str::random(10),
            "company_zipcode" => Str::random(10),
            "company_website" => Str::random(10),
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
         DB::table('users')->insert([
            'name' => 'kamuru', 
            'email' => 'kamuru@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 4,
            "company_name" => Str::random(10),
            "company_phone" => '1-237-388-8002',
            "company_address" => Str::random(10),
            "company_address_2" => Str::random(10),
            "company_city" => Str::random(10),
            "company_state" => Str::random(10),
            "company_zipcode" => Str::random(10),
            "company_website" => Str::random(10),
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
         DB::table('users')->insert([
            'name' => 'ali', 
            'email' => 'ali@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 5,
            "company_name" => Str::random(10),
            "company_phone" => '1-237-388-8002',
            "company_address" => Str::random(10),
            "company_address_2" => Str::random(10),
            "company_city" => Str::random(10),
            "company_state" => Str::random(10),
            "company_zipcode" => Str::random(10),
            "company_website" => Str::random(10),
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('users')->insert([
            'name' => 'lebron', 
            'email' => 'lebron@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 5,
            "company_name" => Str::random(10),
            "company_phone" => '1-237-388-8002',
            "company_address" => Str::random(10),
            "company_address_2" => Str::random(10),
            "company_city" => Str::random(10),
            "company_state" => Str::random(10),
            "company_zipcode" => Str::random(10),
            "company_website" => Str::random(10),
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
        DB::table('users')->insert([
            'name' => 'koby', 
            'email' => 'koby@gmail.com',
            'password'=> Hash::make('password123'),
            'role_id' => 5,
            "company_name" => Str::random(10),
            "company_phone" => '1-237-388-8002',
            "company_address" => Str::random(10),
            "company_address_2" => Str::random(10),
            "company_city" => Str::random(10),
            "company_state" => Str::random(10),
            "company_zipcode" => Str::random(10),
            "company_website" => Str::random(10),
             'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(), 
        ]);
    }
}