<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            'nama_kelas' => '10',
        ]);

        DB::table('kelas')->insert([
            'nama_kelas' => '11',
        ]);

        DB::table('kelas')->insert([
            'nama_kelas' => '12',
        ]);
    }
}
