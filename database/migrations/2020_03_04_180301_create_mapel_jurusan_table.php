<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapelJurusanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapel_jurusan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_jurusan')->unsigned()->reference('id')->on('jurusan')->onDelete('cascade');
            $table->integer('id_mapel')->unsigned()->reference('id')->on('mapel')->onDelete('cascade');
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
        Schema::dropIfExists('mapel_jurusan');
    }
}
