<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\BasisPengetahuan;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class DataAturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = [
            'titlePage' => 'Data Aturan',
            'navLink' => 'data-aturan',
            'dataAturan' => BasisPengetahuan::all()
        ];

        return view('backend.pages.data-aturan.index', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = [
            'titlePage' => 'Tambah Data Aturan',
            'navLink' => 'data-aturan',
            'dataPenyakit' => Penyakit::all(),
            'dataGejala' => Gejala::all()
        ];

        return view('backend.pages.data-aturan.add', $datas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateReq = $request->validate([
            'nama_penyakit' => 'required',
            'kode_gejala' => 'required',
            'nama_gejala' => 'required',
            'nilai_cf' => 'required'
        ]);

        try {
            $aturan = new BasisPengetahuan;
            $aturan->nama_penyakit = $validateReq['nama_penyakit'];
            $aturan->kode_gejala = $validateReq['kode_gejala'];
            $aturan->nama_gejala = $validateReq['nama_gejala'];
            $aturan->nilai_cf = $validateReq['nilai_cf'];
            $aturan->save();
            return redirect()->to('data-aturan')->with('success', 'Data Aturan berhasil ditambahkan');
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BasisPengetahuan $basisPengetahuan, $data_aturan)
    {
        $dataAturan = $basisPengetahuan->find($data_aturan);

        $datas = [
            'titlePage' => 'Ubah Data Aturan',
            'navLink' => 'data-aturan',
            'idDataAturan' => $data_aturan,
            'dataaturan' => $dataAturan,
            'dataPenyakit' => Penyakit::all(),
            'dataGejala' => Gejala::all()
        ];

        return view('backend.pages.data-aturan.edit', $datas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BasisPengetahuan $basisPengetahuan, $data_aturan)
    {
        $dataAturan = $basisPengetahuan->find($data_aturan);

        $validateReq = $request->validate([
            'nama_penyakit' => 'required',
            'kode_gejala' => 'required',
            'nama_gejala' => 'required',
            'nilai_cf' => 'required'
        ]);

        try {
            $dataAturan->nama_penyakit = $validateReq['nama_penyakit'];
            $dataAturan->kode_gejala = $validateReq['kode_gejala'];
            $dataAturan->nama_gejala = $validateReq['nama_gejala'];
            $dataAturan->nilai_cf = $validateReq['nilai_cf'];
            $dataAturan->save();
            return redirect()->to('data-aturan')->with('success', 'Data Aturan berhasil diubah');
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BasisPengetahuan $basisPengetahuan, $data_aturan)
    {
        $dataAturan = $basisPengetahuan->find($data_aturan);

        try {
            $dataAturan->delete();
            return redirect()->to('data-aturan')->with('success', 'Data Aturan berhasil dihapus');
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }
    }
}
