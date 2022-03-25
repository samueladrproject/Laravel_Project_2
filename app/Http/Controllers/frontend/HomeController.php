<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $datas = [
            'titlePage' => 'Beranda',
            'navLink' => 'beranda'
        ];
        return view('frontend.pages.home', $datas);
    }
}
