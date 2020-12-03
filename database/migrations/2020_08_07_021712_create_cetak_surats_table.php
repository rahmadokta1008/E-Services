<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCetakSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cetak_surats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_surat');
            $table->string('nik',16);
            $table->string('nama');
            $table->string('nosurat')->nullable();
            $table->date('tglsurat');
            $table->string('urusan')->nullable();
            $table->string('pihakkedua')->nullable();
            $table->string('usaha')->nullable();
            $table->string('noktp')->nullable();
            $table->string('notlp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('tempat')->nullable();
            $table->string('hari')->nullable();
            $table->date('tgl')->nullable();
            $table->year('tahun')->nullable();
            $table->string('hubungan')->nullable();
            $table->string('statusnikah')->nullable();
            $table->string('hiburan')->nullable();
            $table->string('sebabninggal')->nullable();
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
        Schema::dropIfExists('cetak_surats');
    }
}
