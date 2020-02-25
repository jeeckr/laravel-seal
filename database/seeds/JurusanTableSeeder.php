<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan')->insert([
            'id_kelas' => 1,
            'nama_jurusan' => 'RPL',
        ]);

        DB::table('jurusan')->insert([
            'id_kelas' => 1,
            'nama_jurusan' => 'Tkj',
        ]);

        DB::table('jurusan')->insert([
            'id_kelas' => 1,
            'nama_jurusan' => 'MM',
        ]);
    }
}
