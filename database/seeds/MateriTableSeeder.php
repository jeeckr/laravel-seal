<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materi')->insert([
            'id_mapel' => 1,
            'bab' => 1,
            'judul' => 'Pengenalan Bahasa Pemrograman',
            'isi_materi' => 'materi 1'
        ]);

        DB::table('materi')->insert([
            'id_mapel' => 1,
            'bab' => 2,
            'judul' => 'Variabel, Tipe Data dan Operator',
            'isi_materi' => 'materi 2'
        ]);

        DB::table('materi')->insert([
            'id_mapel' => 1,
            'bab' => 3,
            'judul' => 'Struktur Percabangan',
            'isi_materi' => 'materi 3'
        ]);

        DB::table('materi')->insert([
            'id_mapel' => 1,
            'bab' => 4,
            'judul' => 'Struktur Perulangan',
            'isi_materi' => 'materi 4'
        ]);

        DB::table('materi')->insert([
            'id_mapel' => 1,
            'bab' => 5,
            'judul' => 'Pengembangan Algoritma Aplikasi',
            'isi_materi' => 'materi 5'
        ]);
    }
}
