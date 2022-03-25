@extends('frontend.index')
@section('content-wrapper')
    <section class="content pt-4">
        <!-- Default box -->
        <div class="card">
            <div class="card-body">
                <h3 class="text-success"><i class="fas fa-search-plus mr-1"></i> Konsultasi Penyakit</h3>
                <hr>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <div>
                        <p class="m-0 p-0 text-white">
                            Silahkan memilih gejala sesuai dengan kondisi anda. Jika sudah memilih gejala, tekan tombol
                            submit data yang ada dibawah untuk melihat hasil.
                        </p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <form action="{{ URL::to('/konsultasi') }}" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="nama_pasien" class="col-sm-2 col-form-label">Nama Pasien</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control @error('nama_pasien') is-invalid @enderror"
                                id="nama_pasien" name="nama_pasien" placeholder="Masukkan nama lengkap anda"
                                value="{{ old('nama_pasien') }}" autofocus>
                            @error('nama_pasien')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-3">
                            <select class="form-select @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin"
                                name="jenis_kelamin">
                                <option selected disabled>Pilih Jenis Kelamin anda</option>
                                @php
                                    $jeniskelamin = ['Laki-Laki', 'Perempuan'];
                                @endphp
                                @foreach ($jeniskelamin as $jenkel)
                                    @if (old('jenis_kelamin') == $jenkel)
                                        <option value="{{ $jenkel }}" selected>{{ $jenkel }}</option>
                                    @else
                                        <option value="{{ $jenkel }}">{{ $jenkel }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('jenis_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="usia" class="col-sm-2 col-form-label">Usia</label>
                        <div class="col-sm-1">
                            <input type="number" class="form-control @error('usia') is-invalid @enderror" id="usia"
                                name="usia" value="{{ old('usia') }}">
                            @error('usia')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-5">
                            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
                                rows="3">{{ old('alamat') }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_handphone" class="col-sm-2 col-form-label">No Handphone</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control @error('no_handphone') is-invalid @enderror"
                                id="no_handphone" name="no_handphone" value="{{ old('no_handphone') }}">
                            @error('no_handphone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    @error('pilihanGejala')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div>
                                <p class="m-0 p-0 text-white">
                                    {{ $message }}
                                </p>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                    <table class="table table-bordered table-noquery mb-3" style="border-bottom: 0;">
                        <thead class="bg-success">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Kode</th>
                                <th>Gejala</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($dataGejala as $gejala)
                                <tr>
                                    <td class="text-center">{{ $i }}</td>
                                    <td class="text-center">{{ $gejala['kode_gejala'] }}</td>
                                    <td>{{ $gejala['nama_gejala'] }}</td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input @error('pilihanGejala') is-invalid @enderror"
                                                type="checkbox" name="pilihanGejala[]"
                                                value="{{ $gejala['nama_gejala'] }}"
                                                @if (is_array(old('choiceRadio')) && in_array($gejala['nama_gejala'], old('choiceRadio'))) checked @endif>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-success me-md-2" type="submit">
                            <i class="fas fa-save mr-1"></i>
                            Submit Data
                        </button>
                        <button class="btn btn-secondary" type="reset">
                            <i class="fas fa-ban"></i>
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.card -->
    </section>
@endsection
