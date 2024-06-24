<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('surats')->truncate(); 
        Schema::enableForeignKeyConstraints();
        DB::table('surats')->insert([
            [
                'jenisSurat_id' => 1, 
                'nomorSurat' => '001', 
                'user_id' => 1, 
                'validate' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
