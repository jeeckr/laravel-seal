<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(SiswaTableSeeder::class);
        $this->call(GuruTableSeeder::class);
        $this->call(KelasTableSeeder::class);
        $this->call(MapelTableSeeder::class);
        $this->call(JurusanTableSeeder::class);
    }
}
