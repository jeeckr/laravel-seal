<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_kelas')->unsigned()->default(1);
            $table->string('nisn')->unique();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jk', ['Laki-Laki', 'Perempuan'])->nullable();
            $table->string('image')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('siswas');
    }
}
