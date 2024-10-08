@extends('layout.user-app')


@section('title', 'Tambah Nasabah')


@push('style')
    <!-- CSS Libraries -->
@endpush


@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Nasabah</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('nasabahuser.index') }}">Nasabah</a></div>
                    <div class="breadcrumb-item">Tambah Nasabah</div>
                </div>
            </div>


            <div class="section-body">
                <h2 class="section-title">Form Tambah Nasabah</h2>
                <p class="section-lead">
                    Silakan isi form di bawah ini untuk menambahkan data nasabah baru.
                </p>


                <div class="row">
                    <div class="col-12 col-md-8 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Nasabah</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('nasabahuser.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" required>
                                        @error('nama')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="email">Alamat Email</label>
                                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="nomor_hp">Nomor HP</label>
                                        <input type="tel" name="nomor_hp" id="nomor_hp" class="form-control" value="{{ old('nomor_hp') }}" required>
                                        @error('nomor_hp')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea name="alamat" id="alamat" class="form-control" rows="3" required>{{ old('alamat') }}</textarea>
                                        @error('alamat')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="rekening_nasabah">Rekening Nasabah</label>
                                        <input type="text" name="rekening_nasabah" id="rekening_nasabah" class="form-control" value="{{ old('rekening_nasabah') }}" required>
                                        @error('rekening_nasabah')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ route('nasabahuser.index') }}" class="btn btn-secondary">Kembali</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@push('scripts')
    <!-- JS Libraries -->
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>


    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/components-table.js') }}"></script>
@endpush
