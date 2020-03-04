<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_siswa')->unsigned()->reference('id')->on('siswas')->onDelete('cascade');
            $table->integer('id_soal')->unsigned()->reference('id')->on('soal')->onDelete('cascade');
            $table->string('jawaban');
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
        Schema::dropIfExists('jawaban_siswa');
    }
}
