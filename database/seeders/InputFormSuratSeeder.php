<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon; // Tambahkan ini

class inputFormSuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('input_form_surats')->truncate(); // Gantilah 'input_form_surats' sesuai dengan nama tabel yang benar
        Schema::enableForeignKeyConstraints();

        DB::table('input_form_surats')->insert([
            //Surat Biodata Penduduk
            [
                'jenisSurat_id' => 1,
                'field' => 'namaLengkap',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 1,
                'field' => 'tempatLahir',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 1,
                'field' => 'tanggalLahir',
                'type' => 'date',
            ],
            [
                'jenisSurat_id' => 1,
                'field' => 'umur',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 1,
                'field' => 'wargaNegara',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 1,
                'field' => 'agama',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 1,
                'field' => 'jenisKelamin',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 1,
                'field' => 'pekerjaan',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 1,
                'field' => 'alamat',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 1,
                'field' => 'nik',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 1,
                'field' => 'nomorKk',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 1,
                'field' => 'keperluan',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 1,
                'field' => 'berlaku',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 1,
                'field' => 'golonganDarah',
                'type' => 'text',
            ],


            //Surat Wali
            [
                'jenisSurat_id' => 2,
                'field' => 'namaLengkap',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 2,
                'field' => 'nik',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 2,
                'field' => 'tempatLahir',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 2,
                'field' => 'tanggalLahir',
                'type' => 'date',
            ],
            [
                'jenisSurat_id' => 2,
                'field' => 'alamat',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 2,
                'field' => 'agama',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 2,
                'field' => 'pekerjaan',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 2,
                'field' => 'namaWali',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 2,
                'field' => 'tempatLahir',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 2,
                'field' => 'tanggalLahir',
                'type' => 'date',
            ],
            [
                'jenisSurat_id' => 2,
                'field' => 'agama',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 2,
                'field' => 'pekerjaan',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 2,
                'field' => 'alamat',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 2,
                'field' => 'hubungan',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 2,
                'field' => 'sebab',
                'type' => 'text',
            ],

            //Surat Keramaian
            [
                'jenisSurat_id' => 3,
                'field' => 'namaLengkap',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 3,
                'field' => 'tempatLahir',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 3,
                'field' => 'umur',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 3,
                'field' => 'namaLengkap',
                'type' => 'text',
            ],

            //Surat Domisili
            [
                'jenisSurat_id' => 4,
                'field' => 'namaLengkap',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 4,
                'field' => 'nik',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 4,
                'field' => 'tempatLahir',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 4,
                'field' => 'tanggalLahir',
                'type' => 'date',
            ],
            [
                'jenisSurat_id' => 4,
                'field' => 'kelamin',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 4,
                'field' => 'agama',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 4,
                'field' => 'status',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 4,
                'field' => 'pendidikan',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 4,
                'field' => 'pekerjaan',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 4,
                'field' => 'wargaNegara',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 4,
                'field' => 'alamat',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 4,
                'field' => 'keperluan',
                'type' => 'text',
            ],

            //Surat Dispensasi Waktu
            [
                'jenisSurat_id' => 5,
                'field' => 'namaLengkap',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 5,
                'field' => 'tempatLahir',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 5,
                'field' => 'tanggalLahir',
                'type' => 'date',
            ],
            [
                'jenisSurat_id' => 5,
                'field' => 'pekerjaan',
                'type' => 'text',
            ],
            [
                'jenisSurat_id' => 5,
                'field' => 'alamat',
                'type' => 'text',
            ],

            //Surat Kelahiran







        ]);
    }
}
