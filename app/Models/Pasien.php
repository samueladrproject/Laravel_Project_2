<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'tabel_data_pasien';
    protected $primaryKey = 'id_pasien';
    protected $fillable = [
        'nama_pasien',
        'jenis_kelamin',
        'usia',
        'alamat',
        'no_handphone'
    ];
}
