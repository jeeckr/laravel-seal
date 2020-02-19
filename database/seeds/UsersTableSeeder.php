<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// DB::table('users')->insert([
		// 	'role_id' => '1',
		// 	'name' => 'Admin',
		// 	'username' => 'isAdmin',
		// 	'email' => 'admin@gmail.com',
		// 	'password' => bcrypt('12341234')
		// ]);

		// DB::table('users')->insert([
		// 	'role_id' => '2',
		// 	'name' => 'Siswa',
		// 	'username' => 'isSiswa',
		// 	'email' => 'siswa@gmail.com',
		// 	'password' => bcrypt('12341234')
		// ]);

		// DB::table('users')->insert([
		// 	'role_id' => '3',
		// 	'name' => 'Guru',
		// 	'username' => 'isGuru',
		// 	'email' => 'guru@gmail.com',
		// 	'password' => bcrypt('12341234')
		// ]);

		// DB::table('users')->insert([
		// 	'role_id' => '4',
		// 	'name' => 'Kepala Sekolah',
		// 	'username' => 'isKepalaSekolah',
		// 	'email' => 'kepalasekolah@gmail.com',
		// 	'password' => bcrypt('12341234')
		// ]);
	}
}
