<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Gejala;
use Illuminate\Http\Request;

class DataGejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = [
            'titlePage' => 'Data Gejala',
            'navLink' => 'data-gejala',
            'dataGejala' => Gejala::all()
        ];

        return view('backend.pages.data-gejala.index', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = [
            'titlePage' => 'Tambah Data Gejala',
            'navLink' => 'data-gejala',
        ];

        return view('backend.pages.data-gejala.add', $datas);
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
            'kode_gejala' => 'required|unique:tabel_data_gejala',
            'nama_gejala' => 'required'
        ]);

        try {
            $gejala = new Gejala;
            $gejala->kode_gejala = $validateReq['kode_gejala'];
            $gejala->nama_gejala = $validateReq['nama_gejala'];
            $gejala->save();
            return redirect()->to('data-gejala')->with('success', 'Data Gejala berhasil ditambahkan');
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function show(Gejala $gejala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function edit(Gejala $gejala, $data_gejala)
    {
        $dataGejala = $gejala->find($data_gejala);

        $datas = [
            'titlePage' => 'Ubah Data Gejala',
            'navLink' => 'data-gejala',
            'idDataGejala' => $data_gejala,
            'datagejala' => $dataGejala
        ];

        return view('backend.pages.data-gejala.edit', $datas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gejala $gejala, $data_gejala)
    {
        $dataGejala = $gejala->find($data_gejala);

        $validateReq = $request->validate([
            'kode_gejala' => 'required',
            'nama_gejala' => 'required'
        ]);

        try {
            $dataGejala->kode_gejala = $validateReq['kode_gejala'];
            $dataGejala->nama_gejala = $validateReq['nama_gejala'];
            $dataGejala->save();
            return redirect()->to('data-gejala')->with('success', 'Data Gejala berhasil diubah');
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gejala $gejala, $data_gejala)
    {
        $dataGejala = $gejala->find($data_gejala);

        try {
            $dataGejala->delete();
            return redirect()->to('data-gejala')->with('success', 'Data Gejala berhasil dihapus');
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }
    }
}
