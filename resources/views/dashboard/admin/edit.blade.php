@extends('dashboard.layouts.main')
@section('content')
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Edit Pengguna</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin_update-post', $admin->id) }}" class="mb-5">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" required autofocus value="{{ old('title', $admin->name) }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control  @error('username') is-invalid @enderror" id="username"
                        name="username"value="{{ old('username', $admin->username) }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email"
                        name="email"value="{{ old('email', $admin->email) }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        name="password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category" class="form-label">Role</label>
                    <select class="form-control select2" style="width: 100%;" name="is_admin">
                        @if ($admin->is_admin === 0)
                            <option value="0" selected>User Biasa</option>
                        @elseif($admin->is_admin === 2)
                            <option value="2" selected>Admin</option>
                        @elseif($admin->is_admin === 1)
                            <option value="1" selected>Super Admin</option>
                        @endif
                        <option value="0">User Biasa</option>
                        <option value="2">Admin</option>
                        <option value="1">Super Admin</option>
                    </select>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-body">
                <a href="javascript:window.history.go(-1)" class="btn btn-danger">Batal</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
