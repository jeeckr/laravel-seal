<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKepsekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepsek', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip')->unique();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('alamat');
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
        Schema::dropIfExists('kepsek');
    }
}
