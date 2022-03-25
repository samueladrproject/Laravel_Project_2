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
        Schema::create('tabel_data_basispengetahuan', function (Blueprint $table) {
            $table->id('id_basis');
            $table->string('nama_penyakit');
            $table->string('kode_gejala');
            $table->string('nama_gejala');
            $table->string('nilai_cf');
            $table->timestamps();
        });

        DB::table('tabel_data_basispengetahuan')->insert(
            array(
                array(
                    'nama_penyakit' => 'Trauma Kompleks',
                    'kode_gejala' => 'G00001',
                    'nama_gejala' => 'Kesulitan tidur',
                    'nilai_cf' => '0.55',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Kompleks',
                    'kode_gejala' => 'G00002',
                    'nama_gejala' => 'Sering/mudah menangis',
                    'nilai_cf' => '0.55',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Kompleks',
                    'kode_gejala' => 'G00003',
                    'nama_gejala' => 'Menjauh dari lingkungan sosial',
                    'nilai_cf' => '0.25',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Kompleks',
                    'kode_gejala' => 'G00004',
                    'nama_gejala' => 'Rasa takut dan khawatir berlebihan',
                    'nilai_cf' => '0.70',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Kompleks',
                    'kode_gejala' => 'G00005',
                    'nama_gejala' => 'Sering merasa sedih',
                    'nilai_cf' => '0.55',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Kompleks',
                    'kode_gejala' => 'G00006',
                    'nama_gejala' => 'Diliputi rasa bersalah berlebihan',
                    'nilai_cf' => '0.55',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Kompleks',
                    'kode_gejala' => 'G00007',
                    'nama_gejala' => 'Menghindari sebuah tempat/objek',
                    'nilai_cf' => '0.25',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Kompleks',
                    'kode_gejala' => 'G00008',
                    'nama_gejala' => 'Kehilangan motivasi',
                    'nilai_cf' => '0.25',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Kompleks',
                    'kode_gejala' => 'G00009',
                    'nama_gejala' => 'Sering cemas',
                    'nilai_cf' => '0.10',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Kompleks',
                    'kode_gejala' => 'G00010',
                    'nama_gejala' => 'Moody',
                    'nilai_cf' => '0.55',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Kompleks',
                    'kode_gejala' => 'G00011',
                    'nama_gejala' => 'Bicara terlalu cepat',
                    'nilai_cf' => '0.10',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Akut',
                    'kode_gejala' => 'G00012',
                    'nama_gejala' => 'Mendengar suara aneh',
                    'nilai_cf' => '0.26',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Akut',
                    'kode_gejala' => 'G00013',
                    'nama_gejala' => 'Kehilangan minat untuk melakukan aktivitas',
                    'nilai_cf' => '0.11',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Akut',
                    'kode_gejala' => 'G00014',
                    'nama_gejala' => 'Emosi menjadi datar',
                    'nilai_cf' => '0.005',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Akut',
                    'kode_gejala' => 'G00015',
                    'nama_gejala' => 'Ingatan terganggu',
                    'nilai_cf' => '0.11',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Akut',
                    'kode_gejala' => 'G00016',
                    'nama_gejala' => 'Mimpi buruk',
                    'nilai_cf' => '0.70',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Akut',
                    'kode_gejala' => 'G00017',
                    'nama_gejala' => 'Mempercayai sesuatu yang tidak nyata (halusinasi)',
                    'nilai_cf' => '0.26',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Akut',
                    'kode_gejala' => 'G00018',
                    'nama_gejala' => 'Sulit mengendalikan emosi',
                    'nilai_cf' => '0.70',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Akut',
                    'kode_gejala' => 'G00019',
                    'nama_gejala' => 'Perasaan putus asa',
                    'nilai_cf' => '0.70',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
                array(
                    'nama_penyakit' => 'Trauma Akut',
                    'kode_gejala' => 'G00020',
                    'nama_gejala' => 'Kecenderungan untuk menghindar',
                    'nilai_cf' => '0.85',
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
        Schema::dropIfExists('tabel_data_basispengetahuan');
    }
};
