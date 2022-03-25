@extends('frontend.index')

@section('content-wrapper')
    <section class="content pt-4">
        <div class="card">
            <div class="card-body">
                <h3 class="text-success"><i class="nav-icon fas fa-book mr-1"></i> Informasi Penyakit</h3>
                <hr>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed bg-success fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                aria-controls="collapseOne">
                                PTSD Trauma Kompleks
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body text-justify">
                                <strong>Trauma Kompleks</strong> adalah peristiwa traumatis yang berulang-ulang selama
                                berbulan-bulan sampai bertahun-tahun, seperti pembullyan, kekerasan dalam rumah tangga,
                                kekerasan dalam keluarga, dan lain-lain.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed bg-success fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                PTSD Trauma Akut
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body text-justify">
                                <strong>Trauma Akut</strong> adalah peristiwa traumatis yang terjadi sekali, tetapi secara
                                masif, seperti bencana alam.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
