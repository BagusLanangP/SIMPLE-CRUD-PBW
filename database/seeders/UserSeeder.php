<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate(); 
        Schema::enableForeignKeyConstraints();
        
        
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('password123'),
                'phone' => '1234567890',
                'alamat' => '123 Main St',
                'role_id' => 1,
                'foto' => 'default.jpg',
                'email_verified_at' => Carbon::now(),
                'status' => 'active',
                // 'profil' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('password456'),
                'phone' => '0987654321',
                'alamat' => '456 Elm St',
                'role_id' => 2,
                'foto' => 'default.jpg',
                'email_verified_at' => Carbon::now(),
                'status' => 'active',
                // 'profil' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' =>Carbon::now(),
            ],
            // Add more users as needed
        ]);
    }
}
