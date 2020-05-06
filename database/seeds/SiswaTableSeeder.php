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
            'id_kelas_jurusan' => 1,
            'nisn' => '18050974021',
            'nama_depan' => 'Sandy',
            'nama_belakang' => 'Putra',
            'alamat' => 'jl. Kedung Baruk',
            'telepon' => '089649693199',
            'tempat_lahir' => 'Surabaya',
            'jk' => 'Laki-Laki',
            'email' => 'sandy231@gmail.com',
            'password' => bcrypt('password')
        ]);

        DB::table('siswas')->insert([
            'id_kelas_jurusan' => 1,
            'nisn' => '18050974023',
            'nama_depan' => 'Aisyathus',
            'nama_belakang' => 'Gading',
            'alamat' => 'jl. Gajah Mada',
            'telepon' => '083097662172',
            'tempat_lahir' => 'Madiun',
            'jk' => 'Perempuan',
            'email' => 'aisyathus123@gmail.com',
            'password' => bcrypt('password')
        ]);

        DB::table('siswas')->insert([
            'id_kelas_jurusan' => 1,
            'nisn' => '180509740',
            'nama_depan' => 'Elsa',
            'nama_belakang' => 'Meilinda',
            'alamat' => 'jl. Manukan Kulon',
            'telepon' => '083097662172',
            'tempat_lahir' => 'Surabaya',
            'jk' => 'Perempuan',
            'email' => 'elsa625@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
