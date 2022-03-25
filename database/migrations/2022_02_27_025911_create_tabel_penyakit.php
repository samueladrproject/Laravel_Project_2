<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('tabel_data_penyakit', function (Blueprint $table) {
            $table->id('id_penyakit');
            $table->string('kode_penyakit');
            $table->string('nama_penyakit');
            $table->string('solusi');
            $table->timestamps();
        });

        DB::table('tabel_data_penyakit')->insert(
            array(
                array(
                    'kode_penyakit' => 'P00001',
                    'nama_penyakit' => 'Trauma Kompleks',
                    'solusi' => 'Terapi Relaksasi, Terapi Perilaku Kognitif, dan Terapi Kelompok',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_penyakit' => 'P00002',
                    'nama_penyakit' => 'Trauma Akut',
                    'solusi' => 'Terapi Relaksasi, Terapi Perilaku Kognitif, dan Terapi Penyingkapan',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                )
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_data_penyakit');
    }
};
