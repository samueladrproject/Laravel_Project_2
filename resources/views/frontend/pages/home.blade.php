@extends('frontend.index')
@section('content-wrapper')
    <section class="content pt-4">
        <!-- Default box -->
        <div class="card">
            <img src="{{ URL::to('assets/img/home.jpg') }}" class="card-img-top mb-3" alt="...">
            <div class="card-body text-center">
                <a class="btn btn-warning text-white mb-3" href="{{ URL::to('konsultasi') }}">
                    <i class="fas fa-search-plus"></i>
                    Mulai Konsultasi
                </a>
            </div>
        </div>
        <!-- /.card -->

    </section>
@endsection
