<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_mapel')->unsigned()->reference('id')->on('mapel')->onDelete('cascade');
            $table->string('judul');
            $table->integer('jumlah_soal');
            $table->bigInteger('waktu');
            $table->enum('status_kuis', [0, 1])->default(1);
            $table->enum('status_siswa', [0, 1])->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kuis');
    }
}
