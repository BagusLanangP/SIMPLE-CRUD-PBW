<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\RoleSeedeer;
use Database\Seeders\SuratSeeder;
use Database\Seeders\JenissuratSeeder;
use Database\Seeders\DetailSuratSeeder;
use Database\Seeders\InputFormSuratSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
        UserSeeder::class,
        JenissuratSeeder::class,
        InputFormSuratSeeder::class,
        SuratSeeder::class,
        DetailSuratSeeder::class,
        RoleSeeder::class

    ]);
    }
}
