<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Diagnosa;
use App\Models\Pasien;
use Illuminate\Http\Request;

class DataRiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = [
            'titlePage' => 'Data Riwayat',
            'navLink' => 'data-riwayat',
            'dataDiagnosa' => Diagnosa::all()
        ];

        return view('backend.pages.data-riwayat.index', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_pasien)
    {
        $dataPasien = Pasien::find($id_pasien);
        $dataDiagnosa = Diagnosa::find($id_pasien);

        $datas = [
            'titlePage' => 'Hasil Konsultasi',
            'navLink' => 'data-riwayat',
            'dataPasien' => $dataPasien,
            'dataDiagnosa' => $dataDiagnosa
        ];

        return view('backend.pages.data-riwayat.hasilkonsultasi', $datas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diagnosa $diagnosa, Pasien $pasien, $data_riwayat)
    {
        $dataPasien = Pasien::find($data_riwayat);
        $dataDiagnosa = Diagnosa::find($data_riwayat);

        try {
            $dataPasien->delete();
            $dataDiagnosa->delete();
            return redirect()->to('data-riwayat')->with('success', 'Data Riwayat berhasil dihapus');
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }
    }
}
