<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->unsignedBigInteger('lawyer_id')->nullable();
            $table->string('nama_klien', 100);
            $table->string('email_klien', 50);
            $table->string('phone', 20);
            $table->date('tgl_meet');
            $table->string('status', 35);
            $table->longText('keterangan');
            $table->timestamps();

            $table->foreign('lawyer_id')->references('id')->on('lawyer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('transaksi');
    }
}
