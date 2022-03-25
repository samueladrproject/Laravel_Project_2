@extends('backend.index')

@section('content-wrapper')
    <section class="content pt-4">
        <h3 class="text-success"><i class="nav-icon fas fa-search-plus mr-1"></i> Hasil Konsultasi</h3>
        <hr>
        <div class="card">
            <div class="card-body">
                <div class="d-inline d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                    <button class="btn btn-success" type="button" onclick="window.print();"><i class="fas fa-print me-1"></i>
                        Print</button>
                </div>
                <div class="card">
                    <div class="card-header bg-success">Detail Pasien</div>
                    <div class="card-body">
                        <table style="width: 100%;">
                            <colgroup>
                                <col span="1" style="width: 15%;">
                                <col span="1" style="width: 3%;">
                                <col span="1" style="width: 82%;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <td class="fw-bold">Nama Pasien</td>
                                    <td>:</td>
                                    <td>{{ $dataPasien->nama_pasien }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>{{ $dataPasien->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Usia</td>
                                    <td>:</td>
                                    <td>{{ $dataPasien->usia }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Alamat</td>
                                    <td>:</td>
                                    <td>{{ $dataPasien->alamat }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">No.Handphone</td>
                                    <td>:</td>
                                    <td>{{ $dataPasien->no_handphone }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-primary">Gejala yang dialami</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="bg-primary">
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Gejala</th>
                                    <th>Nama Gejala</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach (json_decode($dataDiagnosa->nama_gejala) as $gejala)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $gejala->kode_gejala }}</td>
                                        <td>{{ $gejala->nama_gejala }}</td>
                                    </tr>

                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-warning">Detail Penyakit</div>
                    <div class="card-body">
                        <p>
                            <b>{{ json_decode($dataDiagnosa->hasil_diagnosa)->nama_penyakit }}</b> /
                            {{ json_decode($dataDiagnosa->hasil_diagnosa)->persentase . ' %' }}
                            ({{ json_decode($dataDiagnosa->hasil_diagnosa)->probabilitas }})
                        </p>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header bg-danger">Solusi Penyakit</div>
                    <div class="card-body">{{ $dataDiagnosa->solusi }}</div>
                </div>
                <a href="{{ URL::to('data-riwayat') }}" class="btn btn-success">
                    <i class="fas fa-arrow-alt-circle-left me-1"></i>
                    Kembali ke Data Riwayat
                </a>
            </div>
        </div>
    </section>
@endsection
