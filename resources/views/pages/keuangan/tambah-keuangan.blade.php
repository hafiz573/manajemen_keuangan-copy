@extends('layout.app')


@section('title', 'Table')


@push('style')
    <!-- CSS Libraries -->
@endpush


@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Table</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#"></a></div>
                    <div class="breadcrumb-item"></div>
                </div>
            </div>


            <div class="section-body">
                <h2 class="section-title">Table</h2>


                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="{{ route('keuangan.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="pengeluaran">Pengeluaran</label>
                                            <input type="text" name="pengeluaran" id="pengeluaran" class="form-control" required>
                                        </div>


                                        <div class="form-group">
                                            <label for="tanggal_pengeluaran">Tanggal Pengeluaran</label>
                                            <input type="date" name="tanggal_pengeluaran" id="tanggal_pengeluaran" class="form-control" required>
                                        </div>


                                        <div class="form-group">
                                            <label for="pemasukan">Pemasukan</label>
                                            <input type="text" name="pemasukan" id="pemasukan" class="form-control" required>
                                        </div>


                                        <div class="form-group">
                                            <label for="tanggal_pemasukan">Tanggal Pemasukan</label>
                                            <input type="date" name="tanggal_pemasukan" id="tanggal_pemasukan" class="form-control" required>
                                        </div>


                                        <div class="form-group">
                                            <label for="jumlah_dana">Jumlah Dana</label>
                                            <input type="number" name="jumlah_dana" id="jumlah_dana" class="form-control" required>
                                        </div>


                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ route('keuangan.index') }}" class="btn btn-secondary">Kembali</a>
                                    </form>
                                </div>
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
