<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik')->unique();
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('desa_cimuja', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('jbtn');
            $table->string('nik')->unique();
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('jns_kl');
            $table->string('gol_darah');
            $table->string('agama');
            $table->string('pddk_trkhr');
            $table->string('jns_pkrj');
            $table->string('cacat');
            $table->string('status_kwn');
            // ???????
            // $table->string('hub_klrg');
            // tambahan skangkat, ahirjabatan, keterangan, instansi, nip, foto
            $table->string('skangkat');
            $table->string('ahirjabatan');
            $table->string('keterangan');
            $table->string('instansi');
            $table->string('nip');
            $table->string('foto'); 
            $table->string('status');
            $table->timestamps();
        });

        Schema::create('struktur_jabatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis_jabatan');
            $table->timestamps();
        });

        Schema::create('jabatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jabatan');
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('desa_cimuja');
        Schema::dropIfExists('struktur_jabatan');
        Schema::dropIfExists('jabatan');
    }
}
