<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CtAbsensiGroupgajidetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_groupgajidetails', function (Blueprint $table) {
            $table->increments('id');
				$table->integer('groupgaji_id');
				$table->integer('komponengaji_id');
				$table->string('formula', 100);
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
        Schema::dropIfExists('absensi_groupgajidetails');
    }
}
