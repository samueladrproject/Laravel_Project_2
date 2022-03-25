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
        Schema::create('tabel_data_gejala', function (Blueprint $table) {
            $table->id('id_gejala');
            $table->string('kode_gejala');
            $table->string('nama_gejala');
            $table->timestamps();
        });

        DB::table('tabel_data_gejala')->insert(
            array(
                array(
                    'kode_gejala' => 'G00001',
                    'nama_gejala' => 'Kesulitan tidur',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00002',
                    'nama_gejala' => 'Sering/mudah menangis',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00003',
                    'nama_gejala' => 'Menjauh dari lingkungan sosial',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00004',
                    'nama_gejala' => 'Rasa takut dan khawatir berlebihan',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00005',
                    'nama_gejala' => 'Sering merasa sedih',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00006',
                    'nama_gejala' => 'Diliputi rasa bersalah berlebihan',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00007',
                    'nama_gejala' => 'Menghindari sebuah tempat/objek',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00008',
                    'nama_gejala' => 'Kehilangan motivasi',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00009',
                    'nama_gejala' => 'Sering cemas',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00010',
                    'nama_gejala' => 'Moody',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00011',
                    'nama_gejala' => 'Bicara terlalu cepat',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00012',
                    'nama_gejala' => 'Mendengar suara aneh',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00013',
                    'nama_gejala' => 'Kehilangan minat untuk melakukan aktivitas',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00014',
                    'nama_gejala' => 'Emosi menjadi datar',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00015',
                    'nama_gejala' => 'Ingatan terganggu',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00016',
                    'nama_gejala' => 'Mimpi buruk',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00017',
                    'nama_gejala' => 'Mempercayai sesuatu yang tidak nyata (halusinasi)',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00018',
                    'nama_gejala' => 'Sulit mengendalikan emosi',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00019',
                    'nama_gejala' => 'Perasaan putus asa',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'kode_gejala' => 'G00020',
                    'nama_gejala' => 'Kecenderungan untuk menghindar',
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
        Schema::dropIfExists('tabel_data_gejala');
    }
};
