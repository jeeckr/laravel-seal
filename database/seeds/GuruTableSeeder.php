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
            'role_id' => '3',
            'nip' => '0',
            'nama' => 'guru',
            'alamat' => 'surabaya',
            'telepon' => '6666666',
            'jk' => 'L',
            'email' => 'guru@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
