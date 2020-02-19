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
            'role_id' => '2',
            'nis' => '0',
            'nama' => 'siswa',
            'alamat' => 'surabaya',
            'telepon' => '6666666',
            'jk' => 'L',
            'email' => 'siswa@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
