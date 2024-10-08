@extends('layout.app')


@section('title', 'Edit Simpanan')


@push('style')
    <!-- CSS Libraries -->
@endpush


@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Simpanan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#"></a></div>
                    <div class="breadcrumb-item"></div>
                </div>
            </div>


            <div class="section-body">
                <h2 class="section-title">Edit Data Simpanan</h2>


                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="{{ route('rekening.update', $rekening->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        {{-- <div class="form-group">
                                            <label for="nasabah_id">Nasabah</label>
                                            <select name="nasabah_id" id="nasabah_id" class="form-control" required>
                                                <option value="" disabled>Pilih Nasabah</option>
                                                @foreach ($rekening as $n)
                                                    <option value="{{ $n->id }}" {{ $rekening->nasabah_id == $n->id ? 'selected' : '' }}>
                                                        {{ $n->nama }}
                                                    </option> --}}
                                                {{-- @endforeach --}}
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="tanggal_pembukaan">Tanggal Pembukaan</label>
                                            <input type="date" name="tanggal_pembukaan" id="tanggal_pembukaan" class="form-control" value="{{ $rekening->tanggal_pembukaan }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_rekening">Jenis Rekening</label>
                                            <input type="text" name="jenis_rekening" id="jenis_rekening" class="form-control" value="{{ $rekening->jenis_rekening }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_teler">Nama Teler</label>
                                            <input type="text" name="nama_teler" id="nama_teler" class="form-control" value="{{ $rekening->nama_teler }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_cabang_rekening">Nama Cabang Rekening</label>
                                            <input type="text" name="nama_cabang_rekening" id="nama_cabang_rekening" class="form-control" value="{{ $rekening->nama_cabang_rekening }}" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="{{ route('rekening.index') }}" class="btn btn-secondary">Kembali</a>
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
