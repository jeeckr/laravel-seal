<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeskripsiToMapel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mapel', function (Blueprint $table) {
            $table->text('deskripsi')->after('nama_mapel');
            $table->integer('id_jurusan')->unsigned()->reference('id')->on('jurusan')->onDelete('cascade')->after('id_guru');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mapel', function (Blueprint $table) {
            // $table->dropColumn('deskripsi');
            // $table->dropColumn('id_jurusan');
            // $table->dropColumn('id_kelas');
        });
    }
}
