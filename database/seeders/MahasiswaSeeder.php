<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Mahasiswa')->insert([
            'nim' => '1941720142',
            'nama' => 'Reynaldi Ramadhani',
            'email'=>'nexrey19@gmail.com',
            'jurusan' => 'JTI',
            'tanggal_lahir' => '19-12-2000',
            'no_handphone' => '08123456789',
        ]);
    }
}
