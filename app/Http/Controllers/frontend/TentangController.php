<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class TentangController extends Controller
{
    public function index()
    {
        $datas = [
            'titlePage' => 'Tentang',
            'navLink' => 'tentang'
        ];

        return view('frontend.pages.tentang', $datas);
    }
}
