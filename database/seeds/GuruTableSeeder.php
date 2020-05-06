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
            'nama_belakang' => '',
            'alamat' => 'jl. Ngagel Rejo',
            'telepon' => '089776993667',
            'tempat_lahir' => 'Surabaya',
            'jk' => 'Laki-Laki',
            'email' => 'guru@gmail.com',
            'password' => bcrypt('password')
        ]);

        // DB::table('guru')->insert([
        //     'nip' => '02',
        //     'nama_depan' => 'Black',
        //     'nama_belakang' => 'Metal',
        //     'alamat' => 'jl. Kedung Baruk',
        //     'telepon' => '089776993667',
        //     'tempat_lahir' => 'Surabaya',
        //     'jk' => 'Laki-Laki',
        //     'email' => 'black@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

        // DB::table('guru')->insert([
        //     'nip' => '03',
        //     'nama_depan' => 'Mata',
        //     'nama_belakang' => 'Kucing',
        //     'alamat' => 'jl. Kedung Baruk',
        //     'telepon' => '089776993667',
        //     'tempat_lahir' => 'Surabaya',
        //     'jk' => 'Laki-Laki',
        //     'email' => 'mata@gmail.com',
        //     'password' => bcrypt('password')
        // ]);
    }
}
