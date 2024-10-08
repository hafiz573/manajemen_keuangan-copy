@extends('layout.app')


@section('title', 'Form Pinjaman')


@push('style')
    <!-- CSS Libraries -->
@endpush


@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Pinjaman</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#"></a></div>
                    <div class="breadcrumb-item"></div>
                </div>
            </div>


            <div class="section-body">
                <h2 class="section-title">Pengajuan Pinjaman</h2>


                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="{{ route('pinjaman.store') }}" method="POST">
                                        @csrf
                                             <div class="form-group">
                                                <label for="nasabah_id">Nasabah</label>
                                                <select name="nasabah_id" id="nasabah_id" class="form-control" required>
                                                    <option value="" disabled selected>Pilih Nasabah</option>
                                                    @foreach ($nasabah as $n)
                                                        <option value="{{ $n->id }}">{{ $n->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        <div class="form-group">
                                            <label for="jumlah_pinjaman">Jumlah Pinjaman</label>
                                            <input type="number" name="jumlah_pinjaman" id="jumlah_pinjaman" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_cicilan">Jumlah Cicilan</label>
                                            <input type="number" name="jumlah_cicilan" id="jumlah_cicilan" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="rentang_waktu_pinjaman">Rentang Waktu Pinjaman (bulan)</label>
                                            <input type="number" name="rentang_waktu_pinjaman" id="rentang_waktu_pinjaman" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="bunga_pinjaman">Bunga Pinjaman (%)</label>
                                            <input type="number" name="bunga_pinjaman" id="bunga_pinjaman" class="form-control" step="0.01" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_pinjaman">Tanggal Pinjaman</label>
                                            <input type="date" name="tanggal_pinjaman" id="tanggal_pinjaman" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_pembayaran_cicilan">Tanggal Pembayaran Cicilan</label>
                                            <input type="date" name="tanggal_pembayaran_cicilan" id="tanggal_pembayaran_cicilan" class="form-control" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ route('pinjaman.index') }}" class="btn btn-secondary">Kembali</a>
                                    </form>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </div>
@endsection


@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>


    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/components-table.js') }}"></script>
@endpush
