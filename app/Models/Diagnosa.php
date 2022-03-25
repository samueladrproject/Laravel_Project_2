<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    protected $table = 'tabel_data_diagnosa';
    protected $primaryKey = 'id_diagnosa';
    protected $fillable = [
        'tanggal_diagnosa',
        'nama_pasien',
        'nama_gejala',
        'hasil_diagnosa',
        'solusi'
    ];
}
