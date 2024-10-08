@extends('layout.app')


@section('title', 'Edit Data Admin')


@push('style')
    <!-- CSS Libraries -->
@endpush


@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Data Admin</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#"></a></div>
                    <div class="breadcrumb-item"></div>
                </div>
            </div>


            <div class="section-body">
                <h2 class="section-title">Edit Data</h2>


                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="{{ route('admin.update', $admin->id) }}" method="POST">
                                        @csrf
                                        @method('PUT') <!-- Method untuk update data -->


                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" value="{{ $admin->name }}" required>
                                        </div>


                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" value="{{ $admin->email }}" required>
                                        </div>


                                        <div class="form-group">
                                            <label for="role">Role</label>
                                            <select name="role" id="role" class="form-control" required>
                                                <option value="admin" {{ $admin->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                                <option value="user" {{ $admin->role == 'user' ? 'selected' : '' }}>User</option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="password">Password (Kosongkan jika tidak ingin mengubah)</label>
                                            <input type="password" id="password" name="password" class="form-control">
                                        </div>


                                        <div class="form-group">
                                            <label for="password_confirmation">Konfirmasi Password</label>
                                            <input type="password" name="password_confirmation" class="form-control">
                                        </div>


                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
@endsection


@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>


    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/components-table.js') }}"></script>
@endpush
