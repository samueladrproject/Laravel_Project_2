@extends('backend.index')

@section('content-wrapper')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-success">
                        <i class="fas fa-home me-1"></i>
                        Dashboard
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $countDataPenyakit }}</h3>
                            <p>Data Penyakit</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bug"></i>
                        </div>
                        <a href="{{ URL::to('data-penyakit') }}" class="small-box-footer">
                            Selengkapnya
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $countDataGejala }}</h3>
                            <p>Data Gejala</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-vial"></i>
                        </div>
                        <a href="{{ URL::to('data-gejala') }}" class="small-box-footer">
                            Selengkapnya
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $countDataAturan }}</h3>
                            <p>Data Aturan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <a href="{{ URL::to('data-aturan') }}" class="small-box-footer">
                            Selengkapnya
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $countDataRiwayat }}</h3>
                            <p>Data Riwayat</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-history"></i>
                        </div>
                        <a href="{{ URL::to('data-riwayat') }}" class="small-box-footer">
                            Selengkapnya
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
