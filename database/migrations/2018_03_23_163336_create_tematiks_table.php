<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTematiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tematiks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_grid_peta');
            $table->string('nama_peta');
            $table->integer('kategoritematiks_id')->unsigned();
            $table->foreign('kategoritematiks_id')
                ->references('id')
                ->on('kategoritematiks')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('jenistematiks_id')->unsigned();
            $table->foreign('jenistematiks_id')
                ->references('id')
                ->on('jenistematiks')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('tematikhargas_id')->unsigned();
            $table->foreign('tematikhargas_id')
                ->references('id')
                ->on('tematikhargas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('lores')->nullable();
            $table->string('hires')->nullable();
            $table->string('tingkat');
            $table->string('skala');
            $table->string('sumber');
            $table->integer('tahun_tematik');
            $table->integer('tahun_peta_dasar');
            $table->string('mengesahkan');
            $table->string('pembuat');
            $table->string('keterangan');
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
        Schema::dropIfExists('tematiks');
    }
}
