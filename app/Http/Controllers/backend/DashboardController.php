<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\BasisPengetahuan;
use App\Models\Diagnosa;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $datas = [
            'titlePage' => 'Dashboard',
            'navLink' => 'dashboard',
            'countDataPenyakit' => Penyakit::count(),
            'countDataGejala' => Gejala::count(),
            'countDataAturan' => BasisPengetahuan::count(),
            'countDataRiwayat' => Diagnosa::count()
        ];

        return view('backend.pages.dashboard', $datas);
    }
}
