<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CtAbsensiRekap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_rekaps', function (Blueprint $table) {
            $table->increments('id');
				$table->integer('idmesin');
				$table->integer('outlet');
				$table->date('tglabsen');
				$table->datetime('masuk');
				$table->datetime('outistirahat');
				$table->datetime('inistirahat');
				$table->datetime('pulang');
				$table->integer('durasi');
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
        Schema::dropIfExists('absensi_rekaps');
    }
}
