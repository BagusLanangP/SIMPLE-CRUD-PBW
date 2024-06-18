<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profil::insert([
            [
                'user_id' => 1,
                'namaLengkap' => 'John Doe',
                'tempatLahir' => 'Anytown',
                'tanggal' => 1,
                'bulan' => 'Januari',
                'tahun' => 1990,
                'warganegara' => 'Indonesia',
                'jenisKelamin' => 1, // 1 for Male, 2 for Female
                'pekerjaan' => 'Software Developer',
                'agama' => 'Islam',
                'nik' => '1234567890123456',
                'no_KK' => '1234567890123456',
                'golonganDarah' => 'O',
                'rt' => '01',
                'rw' => '02',
                'banjar' => 'Banjar 1',
                'desa' => 'Desa Anyar',
                'kecamatan' => 'Kecamatan Baru',
                'kabupaten' => 'Kabupaten Lama',
                'provinsi' => 'Provinsi Tertua',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan lebih banyak data profil jika diperlukan
        ]);
    }
}
