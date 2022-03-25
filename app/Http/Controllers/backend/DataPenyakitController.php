<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class DataPenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = [
            'titlePage' => 'Data Penyakit',
            'navLink' => 'data-penyakit',
            'dataPenyakit' => Penyakit::all()
        ];

        return view('backend.pages.data-penyakit.index', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = [
            'titlePage' => 'Tambah Data Penyakit',
            'navLink' => 'data-penyakit',
        ];

        return view('backend.pages.data-penyakit.add', $datas);
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
            'kode_penyakit' => 'required|unique:tabel_data_penyakit',
            'nama_penyakit' => 'required',
            'solusi' => 'required'
        ]);

        try {
            $penyakit = new Penyakit;
            $penyakit->kode_penyakit = $validateReq['kode_penyakit'];
            $penyakit->nama_penyakit = $validateReq['nama_penyakit'];
            $penyakit->solusi = $validateReq['solusi'];
            $penyakit->save();
            return redirect()->to('data-penyakit')->with('success', 'Data Penyakit berhasil ditambahkan');
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function show(Penyakit $penyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function edit(Penyakit $penyakit, $data_penyakit)
    {
        $dataPenyakit = $penyakit->find($data_penyakit);

        $datas = [
            'titlePage' => 'Ubah Data Penyakit',
            'navLink' => 'data-penyakit',
            'idDataPenyakit' => $data_penyakit,
            'datapenyakit' => $dataPenyakit
        ];

        return view('backend.pages.data-penyakit.edit', $datas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penyakit $penyakit, $data_penyakit)
    {
        $dataPenyakit = $penyakit->find($data_penyakit);

        $validateReq = $request->validate([
            'kode_penyakit' => 'required',
            'nama_penyakit' => 'required',
            'solusi' => 'required'
        ]);

        try {
            $dataPenyakit->kode_penyakit = $validateReq['kode_penyakit'];
            $dataPenyakit->nama_penyakit = $validateReq['nama_penyakit'];
            $dataPenyakit->solusi = $validateReq['solusi'];
            $dataPenyakit->save();
            return redirect()->to('data-penyakit')->with('success', 'Data Penyakit berhasil diubah');
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penyakit $penyakit, $data_penyakit)
    {
        $dataPenyakit = $penyakit->find($data_penyakit);

        try {
            $dataPenyakit->delete();
            return redirect()->to('data-penyakit')->with('success', 'Data Penyakit berhasil dihapus');
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }
    }
}
