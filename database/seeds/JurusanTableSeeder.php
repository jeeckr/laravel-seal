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
            'nama_jurusan' => 'Rekayasa Perangkat Lunak',
        ]);

        DB::table('jurusan')->insert([
            'id_kelas' => 1,
            'nama_jurusan' => 'Teknik Komputer dan Jaringan',
        ]);

        DB::table('jurusan')->insert([
            'id_kelas' => 1,
            'nama_jurusan' => 'Multimedia',
        ]);
    }
}
