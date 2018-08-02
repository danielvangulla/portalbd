<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CtAbsensiKaryawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_karyawans', function (Blueprint $table) {
            $table->increments('id');
				$table->integer('idmesin');
				$table->integer('outlet');
				$table->string('nama');
				$table->string('lahir', 30);
				
				$table->date('tgllahir');
				$table->string('alamat', 100);
				$table->string('tlp', 30);
				$table->string('email',30);
				$table->string('ktp', 30);
				
				$table->tinyInteger('agama');
				$table->date('tglmasuk');
				$table->integer('departemen_id');
				$table->integer('departemensub_id');
				$table->integer('jabatan_id');
				
				$table->integer('groupgaji_id');
				$table->tinyInteger('kelamin');
				$table->tinyInteger('stat_kawin');
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
        Schema::dropIfExists('absensi_karyawans');
    }
}
