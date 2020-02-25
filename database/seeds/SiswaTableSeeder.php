<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'nisn' => '21',
            'nama_depan' => 'Siswa',
            'nama_belakang' => 'Sandy',
            'alamat' => 'jl. Kedung Baruk',
            'telepon' => '089649693199',
            'tempat_lahir' => 'Surabaya',
            'jk' => 'Laki-Laki',
            'email' => 'siswa@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
