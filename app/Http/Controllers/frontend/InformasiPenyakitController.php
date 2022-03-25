<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class InformasiPenyakitController extends Controller
{
    public function index()
    {
        $datas = [
            'titlePage' => 'Informasi Penyakit',
            'navLink' => 'informasi-penyakit'
        ];

        return view('frontend.pages.infopenyakit', $datas);
    }
}
