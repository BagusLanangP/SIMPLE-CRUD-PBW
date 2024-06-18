<?php

namespace Database\Seeders;

use App\Models\Jenissurat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class JenissuratSeeder extends Seeder
{
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Jenissurat::truncate();
        Schema::enableForeignKeyConstraints();
        //

        $data = [
            ['name' => 'Biodata Penduduk'],
            ['name' => 'Wali'],
            ['name' => 'Keramain'],
            ['name' => 'Domisili'],   
            ['name' => 'Dispensasi Waktu'],     
            ['name' => 'Kelahiran'], 
            ['name' => 'Permohonan Akta'],
            ['name' => 'Permohonan Penduduk'],
            ['name' => 'Permohonan Cerai'],
            ['name' => 'Undangan'],      
        ];

        foreach ( $data as $value){
            Jenissurat::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        };


    }
    /**
     * Run the database seeds.
     */
}
