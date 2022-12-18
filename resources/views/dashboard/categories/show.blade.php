@extends('dashboard.layouts.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header text-right">
                    <h3 class="card-title">Tabel Area {{ $categories->name }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 355px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pemilik</th>
                                <th>Judul</th>
                                <th>Body</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->author->name }}</td>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ Str::limit(strip_tags($data->body), 30) }}</td>
                                    <td>
                                        {{-- <a href="{{ route('category_show-post', $data->id) }}" class="badge bg-info"><span
                                                data-feather="eye"></span></a> --}}
                                        <a href="{{ route('dashboard.posts.show', $data->id) }}" class="btn btn-info"><i
                                                class="fas fa-eye"></i></a>
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
            <p>
                <a href="javascript:window.history.go(-1);" class="btn btn-info"><i class="fas fa-arrow-left">
                        Kembali</i></a>
            </p>
            <!-- /.card -->
        </div>
    </div>
@endsection
