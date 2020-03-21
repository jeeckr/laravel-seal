<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasJurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas_jurusan')->insert([
            'id_kelas' => 1,
            'id_jurusan' => 1,
        ]);

        DB::table('kelas_jurusan')->insert([
            'id_kelas' => 1,
            'id_jurusan' => 2,
        ]);
        DB::table('kelas_jurusan')->insert([
            'id_kelas' => 1,
            'id_jurusan' => 3,
        ]);

        DB::table('kelas_jurusan')->insert([
            'id_kelas' => 2,
            'id_jurusan' => 1,
        ]);
    }
}
