<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $table = 'tabel_data_penyakit';
    protected $primaryKey = 'id_penyakit';
    protected $fillable = [
        'kode_penyakit',
        'nama_penyakit',
        'solusi'
    ];
}
