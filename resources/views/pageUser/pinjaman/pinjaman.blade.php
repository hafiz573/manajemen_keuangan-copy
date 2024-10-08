@extends('layout.user-app')


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
                {{-- <p class="section-lead">Example of some Bootstrap table components.</p> --}}


                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                {{-- <h4>Simple Table</h4> --}}
                                <a href="{{ route('pinjamanuser.create') }}" class="btn btn-primary">Tambah Pinjaman</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table-bordered table-md table">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Jumlah Pinjaman</th>
                                            <th>Jumlah Cicilan</th>
                                            <th>Tanggal Pinjaman</th>
                                            <th>Lama Pinjaman</th>
                                            <th>Tanggal Pembayaran</th>
                                            <th>Bunga Pinjaman</th>
                                            <th>Edit</th>
                                            {{-- <th>Hapus</th> --}}
                                        </tr>
                                        @foreach ($pinjaman as $pinjam)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pinjam->nasabah->nama }}</td>
                                            <td>{{ $pinjam->jumlah_pinjaman }}</td>
                                            <td>{{ $pinjam->jumlah_cicilan}}</td>
                                            <td>{{ $pinjam->tanggal_pinjaman}}</td>
                                            <td>{{ $pinjam->rentang_waktu_pinjaman}}</td>
                                            <td>{{ $pinjam->tanggal_pembayaran_cicilan}}</td>
                                            <td><div class="badge badge-success">{{ $pinjam->bunga_pinjaman }}%</div></td>
                                            <td><a href="{{ route('pinjamanuser.edit', $pinjam->id) }}" class="btn btn-success">Edit</a></td>
                                            {{-- <td>
                                                <form action="{{ route('pinjaman.destroy', $pinjam->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td> --}}
                                        </tr>
                                        @endforeach


                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link"
                                                href="#"
                                                tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link"
                                                href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link"
                                                href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="#"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
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
