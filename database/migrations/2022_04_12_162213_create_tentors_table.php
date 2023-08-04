<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tentor', function (Blueprint $table) {
            $table->id();
            $table->string('kode_tentor');
            $table->string('nama_tentor');
            $table->string('jenis_kelamin');
            $table->string('lahir');
            $table->string('agama');
            $table->string('keahlian');
            $table->string('pendidikan');
            $table->string('alamat');
            $table->string('tgl_join');
            $table->string('jenjang_mengajar');
            $table->string('kd_cabang');
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
        Schema::dropIfExists('tentor');
    }
}
