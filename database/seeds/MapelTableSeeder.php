<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mapel')->insert([
            'id_guru' => 1,
            'id_jurusan' => 1,
            'nama_mapel' => 'Pemrograman Dasar',
            'deskripsi' => 'Deskripsi Pertama'
        ]);

        DB::table('mapel')->insert([
            'id_guru' => 2,
            'id_jurusan' => 1,
            'nama_mapel' => 'Sistem Operasi',
            'deskripsi' => 'Deskripsi Kedua'
        ]);

        DB::table('mapel')->insert([
            'id_guru' => 3,
            'id_jurusan' => 1,
            'nama_mapel' => 'Simulasi Digital',
            'deskripsi' => 'Deskripsi Ketiga'
        ]);
    }
}
