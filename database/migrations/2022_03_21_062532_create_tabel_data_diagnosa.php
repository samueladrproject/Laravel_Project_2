<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_data_diagnosa', function (Blueprint $table) {
            $table->id('id_diagnosa');
            $table->date('tanggal_diagnosa');
            $table->string('nama_pasien');
            $table->longText('nama_gejala');
            $table->longText('hasil_diagnosa');
            $table->string('solusi');
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
        Schema::dropIfExists('tabel_data_diagnosa');
    }
};
