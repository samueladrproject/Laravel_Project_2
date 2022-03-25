<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class BantuanController extends Controller
{
    public function index()
    {
        $datas = [
            'titlePage' => 'Bantuan',
            'navLink' => 'bantuan'
        ];

        return view('frontend.pages.bantuan', $datas);
    }
}
