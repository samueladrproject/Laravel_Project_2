<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BasisPengetahuan extends Model
{
    protected $table = 'tabel_data_basispengetahuan';
    protected $primaryKey = 'id_basis';
    protected $fillable = [
        'nama_penyakit',
        'kode_gejala',
        'nama_gejala',
        'nilai_cf'
    ];
}
