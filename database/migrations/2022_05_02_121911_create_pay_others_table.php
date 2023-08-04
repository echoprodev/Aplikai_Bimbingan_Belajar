<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayOthersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_other', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi');
            $table->string('nama');
            $table->string('nama_barang');
            $table->string('nominal_bayar');
            $table->string('kategori_bayar');
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
        Schema::dropIfExists('pay_other');
    }
}
