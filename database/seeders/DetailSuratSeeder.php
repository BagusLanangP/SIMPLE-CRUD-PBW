<?php

namespace Database\Seeders;
use Carbon\Carbon;
use App\Models\detailSurat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class detailSuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Schema::disableForeignKeyConstraints();
        // DB::table('detail_surats')->truncate(); 
        // Schema::enableForeignKeyConstraints();
        // DB::table('detail_surats')->insert([
        //     ['surat_id' => 1, 'field' => 'nama', 'value' => 'John Doe',  'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()],
        //     ['surat_id' => 1, 'field' => 'nik', 'value' => '123456789',  'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()],
        //     ['surat_id' => 1, 'field' => 'alamat', 'value' => '123 Main St',  'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()]
        // ]);

    }
}
