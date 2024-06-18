<?php

namespace Database\Seeders;

use App\Models\FormInput;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ForminputSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fields = [
            ['jenissurats_id' => 1, 'name' => 'namaLengkap', 'type' => 'text'],
            ['jenissurats_id' => 1, 'name' => 'tempatLahir', 'type' => 'text'],
            ['jenissurats_id' => 1, 'name' => 'tanggal', 'type' => 'number'],
            ['jenissurats_id' => 1, 'name' => 'bulan', 'type' => 'text'],
            ['jenissurats_id' => 1, 'name' => 'tahun', 'type' => 'number'],
            ['jenissurats_id' => 1, 'name' => 'warganegara', 'type' => 'text'],
            ['jenissurats_id' => 1, 'name' => 'agama', 'type' => 'text'],
            ['jenissurats_id' => 1, 'name' => 'jenisKelamin', 'type' => 'enum'],
            ['jenissurats_id' => 1, 'name' => 'pekerjaan', 'type' => 'text'],
            ['jenissurats_id' => 1, 'name' => 'desa', 'type' => 'text'],
            ['jenissurats_id' => 1, 'name' => 'kecamatan', 'type' => 'text'],
            ['jenissurats_id' => 1, 'name' => 'kabupaten', 'type' => 'text'],
            ['jenissurats_id' => 1, 'name' => 'nik', 'type' => 'text'],
            ['jenissurats_id' => 1, 'name' => 'no_KK', 'type' => 'text'],
            ['jenissurats_id' => 1, 'name' => 'keperluan', 'type' => 'text'],
            ['jenissurats_id' => 1, 'name' => 'berlaku', 'type' => 'date'],
            ['jenissurats_id' => 1, 'name' => 'golonganDarah', 'type' => 'text'],
            // Add more fields for other jenissurats_id if needed

            // // jenissurats_id 2
            // ['jenissurats_id' => 2, 'name' => 'namaLengkap', 'type' => 'text'],
            // ['jenissurats_id' => 2, 'name' => 'nik', 'type' => 'text'],
            // ['jenissurats_id' => 2, 'name' => 'tempatLahir', 'type' => 'text'],
            // ['jenissurats_id' => 2, 'name' => 'tanggal', 'type' => 'number'],
            // ['jenissurats_id' => 2, 'name' => 'bulan', 'type' => 'text'],
            // ['jenissurats_id' => 2, 'name' => 'tahun', 'type' => 'number'],
            // ['jenissurats_id' => 2, 'name' => 'alamat', 'type' => 'text'],
            // ['jenissurats_id' => 2, 'name' => 'kecamatan', 'type' => 'text'],
            // ['jenissurats_id' => 2, 'name' => 'kabupaten', 'type' => 'text'],
            // ['jenissurats_id' => 2, 'name' => 'agama', 'type' => 'text'],
            // ['jenissurats_id' => 2, 'name' => 'pekerjaan', 'type' => 'text'],
            // ['jenissurats_id' => 2, 'name' => 'form_nama_wali', 'type' => 'text'],
            // ['jenissurats_id' => 2, 'name' => 'form_tempat_lahir_wali', 'type' => 'text'],
            // ['jenissurats_id' => 2, 'name' => 'form_tgl_lahir_wali', 'type' => 'number'],
            // ['jenissurats_id' => 2, 'name' => 'form_agama_wali', 'type' => 'text'],
            // ['jenissurats_id' => 2, 'name' => 'form_pekerjaan_wali', 'type' => 'text'],
            // ['jenissurats_id' => 2, 'name' => 'form_alamat_wali', 'type' => 'text'],
            // ['jenissurats_id' => 2, 'name' => 'form_hubungan_wali', 'type' => 'text'],
            // ['jenissurats_id' => 2, 'name' => 'form_sebab_wali', 'type' => 'text'],

            // // jenissurats_id 3
            // ['jenissurats_id' => 3, 'name' => 'nama', 'type' => 'text'],
            // ['jenissurats_id' => 3, 'name' => 'tempatLahir', 'type' => 'text'],
            // ['jenissurats_id' => 3, 'name' => 'tanggal', 'type' => 'number'],
            // ['jenissurats_id' => 3, 'name' => 'bulan', 'type' => 'text'],
            // ['jenissurats_id' => 3, 'name' => 'tahun', 'type' => 'number'],
            // ['jenissurats_id' => 3, 'name' => 'umur', 'type' => 'number'],
            // ['jenissurats_id' => 3, 'name' => 'warganegara', 'type' => 'text'],
            // ['jenissurats_id' => 3, 'name' => 'agama', 'type' => 'text'],
            // ['jenissurats_id' => 3, 'name' => 'jenisKelamin', 'type' => 'enum'],
            // ['jenissurats_id' => 3, 'name' => 'pekerjaan', 'type' => 'text'],
            // ['jenissurats_id' => 3, 'name' => 'alamat', 'type' => 'text'],
            // ['jenissurats_id' => 3, 'name' => 'desa', 'type' => 'text'],
            // ['jenissurats_id' => 3, 'name' => 'kecamatan', 'type' => 'text'],
            // ['jenissurats_id' => 3, 'name' => 'kabupaten', 'type' => 'text'],
            // ['jenissurats_id' => 3, 'name' => 'ktp', 'type' => 'text'],
            // ['jenissurats_id' => 3, 'name' => 'kk', 'type' => 'text'],
            // ['jenissurats_id' => 3, 'name' => 'keperluan', 'type' => 'text'],
            // ['jenissurats_id' => 3, 'name' => 'berlaku', 'type' => 'date'],
            // ['jenissurats_id' => 3, 'name' => 'golonganDarah', 'type' => 'text'],

            // // jenissurats_id 4
            // ['jenissurats_id' => 4, 'name' => 'nama', 'type' => 'text'],
            // ['jenissurats_id' => 4, 'name' => 'nik', 'type' => 'text'],
            // ['jenissurats_id' => 4, 'name' => 'tempatLahir', 'type' => 'text'],
            // ['jenissurats_id' => 4, 'name' => 'tanggal', 'type' => 'number'],
            // ['jenissurats_id' => 4, 'name' => 'bulan', 'type' => 'text'],
            // ['jenissurats_id' => 4, 'name' => 'tahun', 'type' => 'number'],
            // ['jenissurats_id' => 4, 'name' => 'jenisKelamin', 'type' => 'enum'],
            // ['jenissurats_id' => 4, 'name' => 'agama', 'type' => 'text'],
            // ['jenissurats_id' => 4, 'name' => 'status', 'type' => 'text'],
            // ['jenissurats_id' => 4, 'name' => 'pendidikan', 'type' => 'text'],
            // ['jenissurats_id' => 4, 'name' => 'pekerjaan', 'type' => 'text'],
            // ['jenissurats_id' => 4, 'name' => 'kewarganegaraan', 'type' => 'text'],
            // ['jenissurats_id' => 4, 'name' => 'alamat', 'type' => 'text'],
            // ['jenissurats_id' => 4, 'name' => 'rt', 'type' => 'text'],
            // ['jenissurats_id' => 4, 'name' => 'rw', 'type' => 'text'],
            // ['jenissurats_id' => 4, 'name' => 'dusun', 'type' => 'text'],
            // ['jenissurats_id' => 4, 'name' => 'desa', 'type' => 'text'],
            // ['jenissurats_id' => 4, 'name' => 'kecamatan', 'type' => 'text'],
            // ['jenissurats_id' => 4, 'name' => 'kabupaten', 'type' => 'text'],
            // ['jenissurats_id' => 4, 'name' => 'keperluan', 'type' => 'text'],

            // // jenissurats_id 5
            // ['jenissurats_id' => 5, 'name' => 'namaLengkap', 'type' => 'text'],
            // ['jenissurats_id' => 5, 'name' => 'tempatLahir', 'type' => 'text'],
            // ['jenissurats_id' => 5, 'name' => 'tanggal', 'type' => 'number'],
            // ['jenissurats_id' => 5, 'name' => 'bulan', 'type' => 'text'],
            // ['jenissurats_id' => 5, 'name' => 'tahun', 'type' => 'number'],
            // ['jenissurats_id' => 5, 'name' => 'pekerjaan', 'type' => 'text'],
            // ['jenissurats_id' => 5, 'name' => 'alamat', 'type' => 'text'],

            // // jenissurats_id 6
            // ['jenissurats_id' => 6, 'name' => 'namaLengkap', 'type' => 'text'],
            // ['jenissurats_id' => 6, 'name' => 'tempatLahir', 'type' => 'text'],
            // ['jenissurats_id' => 6, 'name' => 'tanggal', 'type' => 'number'],
            // ['jenissurats_id' => 6, 'name' => 'bulan', 'type' => 'text'],
            // ['jenissurats_id' => 6, 'name' => 'tahun', 'type' => 'number'],
            // ['jenissurats_id' => 6, 'name' => 'warganegara', 'type' => 'text'],
            // ['jenissurats_id' => 6, 'name' => 'agama', 'type' => 'text'],
            // ['jenissurats_id' => 6, 'name' => 'jenisKelamin', 'type' => 'enum'],
            // ['jenissurats_id' => 6, 'name' => 'pekerjaan', 'type' => 'text'],
            // ['jenissurats_id' => 6, 'name' => 'alamat', 'type' => 'text'],
            // ['jenissurats_id' => 6, 'name' => 'desa', 'type' => 'text'],
            // ['jenissurats_id' => 6, 'name' => 'kecamatan', 'type' => 'text'],
            // ['jenissurats_id' => 6, 'name' => 'kabupaten', 'type' => 'text'],
            // ['jenissurats_id' => 6, 'name' => 'ktp', 'type' => 'text'],
            // ['jenissurats_id' => 6, 'name' => 'kk', 'type' => 'text'],
            // ['jenissurats_id' => 6, 'name' => 'berlaku', 'type' => 'date'],
            // ['jenissurats_id' => 6, 'name' => 'golonganDarah', 'type' => 'text'],

            // // jenissurats_id 7
            // ['jenissurats_id' => 7, 'name' => 'namaLengkap', 'type' => 'text'],
            // ['jenissurats_id' => 7, 'name' => 'tempatLahir', 'type' => 'text'],
            // ['jenissurats_id' => 7, 'name' => 'tanggal', 'type' => 'number'],
            // ['jenissurats_id' => 7, 'name' => 'bulan', 'type' => 'text'],
            // ['jenissurats_id' => 7, 'name' => 'tahun', 'type' => 'number'],
            // ['jenissurats_id' => 7, 'name' => 'warganegara', 'type' => 'text'],
            // ['jenissurats_id' => 7, 'name' => 'agama', 'type' => 'text'],
            // ['jenissurats_id' => 7, 'name' => 'jenisKelamin', 'type' => 'enum'],
            // ['jenissurats_id' => 7, 'name' => 'pekerjaan', 'type' => 'text'],
            // ['jenissurats_id' => 7, 'name' => 'alamat', 'type' => 'text'],
            // ['jenissurats_id' => 7, 'name' => 'desa', 'type' => 'text'],
            // ['jenissurats_id' => 7, 'name' => 'kecamatan', 'type' => 'text'],
            // ['jenissurats_id' => 7, 'name' => 'kabupaten', 'type' => 'text'],
            // ['jenissurats_id' => 7, 'name' => 'ktp', 'type' => 'text'],
            // ['jenissurats_id' => 7, 'name' => 'kk', 'type' => 'text'],
            // ['jenissurats_id' => 7, 'name' => 'berlaku', 'type' => 'date'],
            // ['jenissurats_id' => 7, 'name' => 'golonganDarah', 'type' => 'text'],

            // // jenissurats_id 8
            // ['jenissurats_id' => 8, 'name' => 'namaLengkap', 'type' => 'text'],
            // ['jenissurats_id' => 8, 'name' => 'jenisKelamin', 'type' => 'enum'],
            // ['jenissurats_id' => 8, 'name' => 'tempatLahir', 'type' => 'text'],
            // ['jenissurats_id' => 8, 'name' => 'tanggal', 'type' => 'number'],
            // ['jenissurats_id' => 8, 'name' => 'bulan', 'type' => 'text'],
            // ['jenissurats_id' => 8, 'name' => 'tahun', 'type' => 'number'],
            // ['jenissurats_id' => 8, 'name' => 'status', 'type' => 'text'],
            // ['jenissurats_id' => 8, 'name' => 'warganegara', 'type' => 'text'],
            // ['jenissurats_id' => 8, 'name' => 'pekerjaan', 'type' => 'text'],
            // ['jenissurats_id' => 8, 'name' => 'no_ktp', 'type' => 'text'],
            // ['jenissurats_id' => 8, 'name' => 'alamat', 'type' => 'text'],
            // ['jenissurats_id' => 8, 'name' => 'desa', 'type' => 'text'],
            // ['jenissurats_id' => 8, 'name' => 'kecamatan', 'type' => 'text'],
            // ['jenissurats_id' => 8, 'name' => 'kabupaten', 'type' => 'text'],
            // ['jenissurats_id' => 8, 'name' => 'banjar', 'type' => 'text'],
            // ['jenissurats_id' => 8, 'name' => 'rt', 'type' => 'text'],
            // ['jenissurats_id' => 8, 'name' => 'no_kk', 'type' => 'text'],
            // ['jenissurats_id' => 8, 'name' => 'nik', 'type' => 'text'],
            // ['jenissurats_id' => 8, 'name' => 'keterangan', 'type' => 'text'],

            // // jenissurats_id 9
            // ['jenissurats_id' => 9, 'name' => 'namaLengkap', 'type' => 'text'],
            // ['jenissurats_id' => 9, 'name' => 'tempatLahir', 'type' => 'text'],
            // ['jenissurats_id' => 9, 'name' => 'tanggal', 'type' => 'number'],
            // ['jenissurats_id' => 9, 'name' => 'bulan', 'type' => 'text'],
            // ['jenissurats_id' => 9, 'name' => 'tahun', 'type' => 'number'],
            // ['jenissurats_id' => 9, 'name' => 'umur', 'type' => 'number'],
            // ['jenissurats_id' => 9, 'name' => 'warganegara', 'type' => 'text'],
            // ['jenissurats_id' => 9, 'name' => 'agama', 'type' => 'text'],
            // ['jenissurats_id' => 9, 'name' => 'jenisKelamin', 'type' => 'enum'],
            // ['jenissurats_id' => 9, 'name' => 'pekerjaan', 'type' => 'text'],
            // ['jenissurats_id' => 9, 'name' => 'alamat', 'type' => 'text'],
            // ['jenissurats_id' => 9, 'name' => 'desa', 'type' => 'text'],
            // ['jenissurats_id' => 9, 'name' => 'kecamatan', 'type' => 'text'],
            // ['jenissurats_id' => 9, 'name' => 'kabupaten', 'type' => 'text'],
            // ['jenissurats_id' => 9, 'name' => 'no_ktp', 'type' => 'text'],
            // ['jenissurats_id' => 9, 'name' => 'no_kk', 'type' => 'text'],
            // ['jenissurats_id' => 9, 'name' => 'keperluan', 'type' => 'text'],
            // ['jenissurats_id' => 9, 'name' => 'berlaku', 'type' => 'date'],
            // ['jenissurats_id' => 9, 'name' => 'golonganDarah', 'type' => 'text'],

            // // jenissurats_id 10
            // ['jenissurats_id' => 10, 'name' => 'kepadaYth', 'type' => 'text'],
            // ['jenissurats_id' => 10, 'name' => 'alamat', 'type' => 'text'],
            // ['jenissurats_id' => 10, 'name' => 'hari', 'type' => 'text'],
            // ['jenissurats_id' => 10, 'name' => 'waktu', 'type' => 'text'],
            // ['jenissurats_id' => 10, 'name' => 'tempat', 'type' => 'text'],
            // ['jenissurats_id' => 10, 'name' => 'acara', 'type' => 'text'],
        ];

        // Fetch the profile table columns
        $profileColumns = Schema::getColumnListing('profils');

        foreach ($fields as &$field) {
            if (in_array($field['name'], $profileColumns)) {
                $field['available'] = 1;
                $field['created_at'] = Carbon::now();
                $field['updated_at'] = Carbon::now();
            } else {
                $field['available'] = 0;
                $field['created_at'] = Carbon::now();
                $field['updated_at'] = Carbon::now();
            }
        }

        FormInput::insert($fields);
    }
}
