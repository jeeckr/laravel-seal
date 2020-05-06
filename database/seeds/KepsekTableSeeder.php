<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KepsekTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kepsek')->insert([
            'nip' => '01',
            'nama_depan' => 'Kepala',
            'nama_belakang' => 'Sekolah',
            'alamat' => 'Surabaya',
            'email' => 'kepsek@gmail.com',
            'password' => bcrypt('password')

        ]);
    }
}
