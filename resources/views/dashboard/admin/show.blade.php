@extends('dashboard.layouts.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header text-right">
                    <h3 class="card-title">Tabel Postingan Pengguna <strong>{{ $user->name }}</strong></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 410px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Body</th>
                                <th>Area</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($post as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ Str::limit(strip_tags($item->body), 30) }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>
                                        <div class=" btn-group-sm">
                                            <a href="{{ route('dashboard.posts.show', $item->id) }}" class="btn btn-info"><i
                                                    class="fas fa-eye"></i></a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#modal-sm{{ $item->id }}"><i class="fas fa-trash"></i>
                                            </button>
                                            {{-- Modal START --}}
                                            <div class="modal fade" id="modal-sm{{ $item->id }}">
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
                                                                href="{{ route('admin_destroy-post', $item->id) }}"
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
                                {{-- <h5>{{ $item->title }}</h5>
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="">
                                        <p>{!! $item->body !!}</p> --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
