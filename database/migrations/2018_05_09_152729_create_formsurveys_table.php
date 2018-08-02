<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formsurveys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kode_kecamatan');
            $table->integer('kode_kelurahan');
            $table->integer('kode_lingkungan');
            $table->string('nomor_rumah');
            $table->integer('nomor_kk');
            $table->string('nama');
            $table->integer('nik');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('status_kerja');
            $table->string('usia_sekolah');
            $table->string('sekolah');
            $table->string('pendidikan_terakhir');
            $table->string('lama_pendidikan');
            $table->string('pendidikan_berjalan');
            $table->string('imb');
            $table->string('slf');
            $table->string('skbg');
            $table->string('nomor_siup');
            $table->string('nomor_situ');
            $table->string('nomor_tdp');
            $table->integer('nop');
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
        Schema::dropIfExists('formsurveys');
    }
}
