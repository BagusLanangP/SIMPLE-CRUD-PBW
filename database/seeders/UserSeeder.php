<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
>>>>>>> ca0e7b8dedd746d909fffd69fbc28df53698d2e9

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        User::insert([
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'password' => Hash::make('password'),
                'phone' => '1234567890',
                'alamat' => '1234 Main St, Anytown, USA',
                'role_id' => '2', // Default role 'user'
                'foto' => null,
                'email_verified_at' => now(),
                'status' => 'aktif',
                'profil' => 1,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan lebih banyak pengguna jika diperlukan
=======
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
>>>>>>> ca0e7b8dedd746d909fffd69fbc28df53698d2e9
        ]);
    }
}
