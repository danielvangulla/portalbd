<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CtAbsensiKomponengaji extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_komponengajis', function (Blueprint $table) {
            $table->increments('id');
				$table->string('kode',5);
				$table->string('keterangan',80);
				$table->integer('jenis');  //jenis komponen gaji apakah penerimaan atau potongan. 0: penerimaan, 1: potongan
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
        Schema::dropIfExists('absensi_komponengajis');
    }
}
