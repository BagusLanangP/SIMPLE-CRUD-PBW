<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
        ]);
    }
}
