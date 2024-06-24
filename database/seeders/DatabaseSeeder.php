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
<<<<<<< HEAD
        RoleSeeder::class,
        ForminputSeeder::class,
        ProfileSeeder::class,

=======
        InputFormSuratSeeder::class,
        SuratSeeder::class,
        DetailSuratSeeder::class,
        RoleSeeder::class
>>>>>>> ca0e7b8dedd746d909fffd69fbc28df53698d2e9
    ]);
    }
}
