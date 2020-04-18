<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuisSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuis_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_kuis')->unsigned()->reference('id')->on('kuis')->onDelete('cascade');
            $table->integer('id_siswa')->unsigned()->reference('id')->on('siswas')->onDelete('cascade');
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
        Schema::dropIfExists('kuis_siswa');
    }
}
