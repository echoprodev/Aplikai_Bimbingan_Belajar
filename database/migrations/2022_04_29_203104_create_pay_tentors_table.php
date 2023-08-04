<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayTentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_tentor', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi');
            $table->string('nama_tentor');
            $table->string('periode_bayar');
            $table->string('tanggal_bayar');
            $table->string('keterangan');
            $table->string('bukti_bayar');
            $table->string('editor');
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
        Schema::dropIfExists('pay_tentor');
    }
}
