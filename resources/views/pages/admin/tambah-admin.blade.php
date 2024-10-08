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
                                    <form action="{{ route('admin.store') }}" method="POST">
                                        @csrf


                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" required>
                                        </div>


                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" required>
                                        </div>


                                        <div class="form-group">
                                            <label for="role">Role</label>
                                            <select name="role" id="role" class="form-control" required>
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" name="password" class="form-control" required>
                                        </div>


                                        <div>
                                            <label for="password_confirmation">Konfirmasi Password:</label>
                                            <input type="password" name="password_confirmation" class="form-control" required>
                                        </div>


                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ route('admin.index') }}" class="btn btn-secondary">Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsectionP


@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>


    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/components-table.js') }}"></script>
@endpush
