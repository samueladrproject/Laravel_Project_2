@extends('frontend.index')

@section('content-wrapper')
    <section class="content pt-4">
        <div class="card">
            <div class="card-body">
                <h3 class="text-success"><i class="nav-icon fas fa-question-circle mr-1"></i> Bantuan</h3>
                <hr>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed bg-success fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                aria-controls="collapseOne">
                                1. Cara mengakses Menu
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body text-justify">
                                <ol>
                                    <li>
                                        Langkah pertama adalah mengarahkan kursor atau tangan ke bagian meu di samping kiri,
                                    </li>
                                    <li>
                                        Selanjutnya silahkan klik atau tekan menu yang ingin anda masuki,
                                    </li>
                                    <li>
                                        Menu yang anda kehendaki telah di tampilkan.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed bg-success fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                2. Cara Melakukan Diagnosa
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body text-justify">
                                <ol>
                                    <li>
                                        Langkah pertama adalah mengarahkan kursor atau tangan ke bagian menu diagnosa,
                                    </li>
                                    <li>
                                        Selanjutnya silahkan cari gejala yang dialami,
                                    </li>
                                    <li>
                                        Klik kotak yang ada disamping nama gejala tersebut,
                                    </li>
                                    <li>
                                        Selanjutnya jika terdapat gejala lain, anda dapat memilih kembali gejala dan mengisi
                                        seperti langkah 3,
                                    </li>
                                    <li>
                                        Jika sudah, tekan tombol <b>Submit Data</b> untuk melihat hasil.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
