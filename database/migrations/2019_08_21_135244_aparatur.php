<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Aparatur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aparatur', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('jk');
            $table->date('tgllahir');
            $table->string('pendidikan');
            $table->string('jabatan');
            $table->string('skangkat');
            $table->string('skahir');
            $table->string('keterangan');
            $table->string('instansi');
            $table->string('nip');
            $table->string('foto');
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
        Schema::dropIfExists('aparatur');
    }
}
