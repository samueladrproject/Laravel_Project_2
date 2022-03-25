<?php

namespace App\Http\Controllers\frontend;

use App\Models\BasisPengetahuan;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Http\Controllers\Controller;
use App\Models\Diagnosa;
use App\Models\Pasien;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function index()
    {
        $listgejala = Gejala::all();
        $dataGejala = [];
        $idx = 0;
        $nomorGejala = 1;
        foreach ($listgejala as $gejala) {
            $dataGejala[$idx] = [
                'real_kode_gejala' => $gejala->kode_gejala,
                'nama_gejala' => $gejala->nama_gejala
            ];
            $nomorGejala++;
            $idx++;
        }

        shuffle($dataGejala);
        $newDataGejala = $dataGejala;

        $newIndexNumber = 1;
        $newidx = 0;
        foreach ($newDataGejala as $newGejala) {
            $newDataGejala[$newidx]['kode_gejala'] = 'G' . $newIndexNumber;
            $newIndexNumber++;
            $newidx++;
        }

        $datas = [
            'titlePage' => 'Konsultasi',
            'navLink' => 'konsultasi',
            'dataGejala' => $listgejala
        ];

        return view('frontend.pages.konsultasi', $datas);
    }

    public function hasilkonsultasi(Request $request)
    {

        $validateReq = $request->validate([
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'usia' => 'required',
            'alamat' => 'required',
            'no_handphone' => 'required',
            'pilihanGejala' => 'required'
        ]);

        $dataPenyakit = Penyakit::all();
        $dataAturan = new BasisPengetahuan();

        foreach ($dataPenyakit as $penyakit) {
            $dataResult[$penyakit->nama_penyakit] = "";
            $fetchData[$penyakit->nama_penyakit] = $dataAturan
                ->where('nama_penyakit', $penyakit->nama_penyakit)
                ->select('nama_gejala')
                ->get()
                ->toArray();

            $daftarGejala[$penyakit->nama_penyakit] = [];
            foreach ($fetchData[$penyakit->nama_penyakit] as $dataGejala) {
                array_push($daftarGejala[$penyakit->nama_penyakit], $dataGejala['nama_gejala']);
            }

            $resultProcess[$penyakit->nama_penyakit] = array_intersect($daftarGejala[$penyakit->nama_penyakit], $validateReq['pilihanGejala']);
        }

        // Menentukan Nilai CF
        foreach ($resultProcess as $key => $value) {
            $fetchDataCF[$key] = [];
            foreach ($value as $a => $b) {
                $fetchDataCF[$key][$a] = $dataAturan
                    ->where('nama_penyakit', $key)
                    ->where('nama_gejala', $b)
                    ->select('nilai_cf')
                    ->first()->nilai_cf;
            }
            if (count($fetchDataCF[$key]) > 0) {
                $fixIndexes[$key] = array_values($fetchDataCF[$key]);
            }
        }

        foreach ($fixIndexes as $kunci => $harga) {
            $hasilPerhitunganDataCF[$kunci] = round($this->persentaseCF($kunci, $harga), 3);
        }

        $dataFetchPenyakit = Penyakit::where('nama_penyakit',  array_search(max($hasilPerhitunganDataCF), $hasilPerhitunganDataCF))
            ->get()
            ->toArray();

        $jsonDiagnosa = [
            'nama_pasien' => $validateReq['nama_pasien'],
            'jenis_kelamin' => $validateReq['jenis_kelamin'],
            'usia' => $validateReq['usia'],
            'alamat' => $validateReq['alamat'],
            'no_handphone' => $validateReq['no_handphone'],
            'nama_penyakit' => array_search(max($hasilPerhitunganDataCF), $hasilPerhitunganDataCF),
            'persentase' => max($hasilPerhitunganDataCF) * 100,
            'probabilitas' => max($hasilPerhitunganDataCF)
        ];

        foreach ($validateReq['pilihanGejala'] as $key => $value) {
            $jsonDiagnosa['gejala'][$key]['kode_gejala'] = Gejala::where('nama_gejala', $value)->get()->toArray()[0]['kode_gejala'];
            $jsonDiagnosa['gejala'][$key]['nama_gejala'] = $value;
        }

        $jsonDiagnosa['solusi'] = Penyakit::where('nama_penyakit', $jsonDiagnosa['nama_penyakit'])
            ->select('solusi')
            ->get()
            ->toArray()[0]['solusi'];

        $dataInputPasien = [
            'nama_pasien' => $jsonDiagnosa['nama_pasien'],
            'jenis_kelamin' => $jsonDiagnosa['jenis_kelamin'],
            'usia' => $jsonDiagnosa['usia'],
            'alamat' => $jsonDiagnosa['alamat'],
            'no_handphone' => $jsonDiagnosa['no_handphone']
        ];

        $dataInputDiagnosa = [
            'tanggal_diagnosa' => date('Y-m-d'),
            'nama_pasien' => $jsonDiagnosa['nama_pasien'],
            'nama_gejala' => json_encode($jsonDiagnosa['gejala']),
            'hasil_diagnosa' => json_encode([
                'nama_penyakit' => $jsonDiagnosa['nama_penyakit'],
                'persentase' => $jsonDiagnosa['persentase'],
                'probabilitas' => $jsonDiagnosa['probabilitas']
            ]),
            'solusi' => $jsonDiagnosa['solusi']
        ];

        $idPasien = Pasien::insertGetId($dataInputPasien);
        $idDiagnosa = Diagnosa::insertGetId($dataInputDiagnosa);

        if ($idPasien == $idDiagnosa) {
            $idData = $idPasien;
        }

        return redirect()->to('konsultasi/' . $idData);
    }

    public function showhasil($id_pasien)
    {
        $dataPasien = Pasien::find($id_pasien);
        $dataDiagnosa = Diagnosa::find($id_pasien);

        $datas = [
            'titlePage' => 'Hasil Konsultasi',
            'navLink' => 'konsultasi',
            'dataPasien' => $dataPasien,
            'dataDiagnosa' => $dataDiagnosa
        ];

        return view('frontend.pages.hasilkonsultasi', $datas);
    }

    public function persentaseCF(String $NamaAttributes, $datArray, int $index = 0, $startdataacuan = null)
    {
        $arrStartPoint = $datArray;

        if ($startdataacuan == null) {
            $dataacuan = $arrStartPoint[$index];
        } else {
            $dataacuan = $startdataacuan;
        }

        if (!isset($arrStartPoint[$index + 1])) {
            $arrStartPoint[$index + 1] = 0;
        }

        $dataCF[$index] = $dataacuan + $arrStartPoint[$index + 1] * (1 - $dataacuan);

        if ($startdataacuan == null) {
            unset($arrStartPoint[$index]);
            unset($arrStartPoint[$index + 1]);
        } else {
            unset($arrStartPoint[$index]);
        }

        if (count($arrStartPoint) > 1) {
            return $this->persentaseCF($NamaAttributes, $arrStartPoint, $index + 1, $dataCF[$index]);
        }

        if (count($arrStartPoint) > 1) {
            return $dataCF[$index];
        } else {
            return $dataCF[$index];
        }
    }
}
