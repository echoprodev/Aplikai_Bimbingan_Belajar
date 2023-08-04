<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuridsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('murid', function (Blueprint $table) {
            $table->id();
            $table->string('kode_siswa');
            $table->string('nama_siswa');
            $table->string('lahir');
            $table->string('jenis_kelamin');
            $table->string('asal_sekolah');
            $table->string('kelas');
            $table->string('no_hp');
            $table->string('sumber_info');
            $table->text('alamat_rumah');
            $table->string('wali_siswa');
            $table->string('nama_tentor');
            $table->string('jadwal_les');
            $table->string('jumlah_pertemuan');
            $table->string('pembayaran');
            $table->string('tgl_join');
            $table->string('status');
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
        Schema::dropIfExists('murid');
    }
}
