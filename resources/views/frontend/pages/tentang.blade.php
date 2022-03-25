@extends('frontend.index')

@section('content-wrapper')
    <section class="content pt-4">
        <div class="card">
            <div class="card-body">
                <h3 class="text-success"><i class="nav-icon fas fa-info-circle mr-1"></i> Tentang</h3>
                <hr>
                <div class="container-fluid py-2">
                    <img src="{{ URL::to('assets/img/tentang.png') }}" class="rounded mx-auto d-block mb-3">
                    <p class="text-justify">
                        <strong>Sistem pakar</strong> adalah suatu program komputer yang mengandung pengetahuan dari satu
                        atau lebih
                        pakar
                        manusia mengenai suatu bidang spesifik. Jenis program ini pertama kali dikembangkan oleh periset
                        kecerdasan buatan pada dasawarsa 1960-an dan 1970-an dan diterapkan secara komersial selama 1980-an.
                        Bentuk umum sistem pakar adalah suatu program yang dibuat berdasarkan suatu set aturan yang
                        menganalisis informasi (biasanya diberikan oleh pengguna suatu sistem) mengenai suatu kelas masalah
                        spesifik serta analisis matematis dari masalah tersebut. Tergantung dari desainnya, sistem pakar
                        juga mampu merekomendasikan suatu rangkaian tindakan pengguna untuk dapat menerapkan koreksi. Sistem
                        ini memanfaatkan kapabilitas penalaran untuk mencapai suatu simpulan.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
