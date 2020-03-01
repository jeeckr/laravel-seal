<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guru')->insert([
            'nip' => '01',
            'nama_depan' => 'Guru',
            'nama_belakang' => 'Sandy',
            'alamat' => 'jl. Kedung Baruk',
            'telepon' => '089776993667',
            'tempat_lahir' => 'Surabaya',
            'jk' => 'Laki-Laki',
            'email' => 'guru@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
