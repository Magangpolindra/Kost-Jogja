@extends('dashboard.layouts.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header text-right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                        Tambahkan
                    </button>
                    <h3 class="card-title">Tabel Pengguna</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 400px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->is_admin == 1)
                                            <span class="badge bg-primary">Super Admin</span>
                                        @elseif($user->is_admin == 2)
                                            <span class="badge bg-success">Admin</span>
                                        @elseif($user->is_admin == 0)
                                            <span class="badge bg-secondary">User</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class=" btn-group-sm">
                                            <a href="{{ route('admin_show-post', $user->id) }}" class="btn btn-info"><i
                                                    class="fas fa-eye"></i></a>
                                            <a href="{{ route('admin_edit-post', $user->id) }}" class="btn btn-dark"><i
                                                    class="fas fa-edit"></i></a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#modal-sm{{ $user->id }}"><i class="fas fa-trash"></i>
                                            </button>
                                            {{-- Modal START --}}
                                            <div class="modal fade" id="modal-sm{{ $user->id }}">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Hapus Pengguna</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Pengguna akan terhapus permanent!</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-danger"
                                                                data-dismiss="modal">Tidak</button>
                                                            <a class="btn btn-primary"
                                                                href="{{ route('admin_destroy-user', $user->id) }}"
                                                                role="button">Ya,
                                                                Hapus!</a>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            {{-- Modal END --}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Pengguna Baru</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="quickForm" action="{{ route('admin_store-post') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="category" class="form-label">Role</label>
                                <select class="form-control select2" style="width: 100%;" name="is_admin">
                                    <option value="1">Super Admin</option>
                                    <option value="2">Admin</option>
                                    <option value="0">User</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection
