@extends('dashboard.layouts.main')
@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <a href="/dashboard/categories/" class="btn btn-success"><span data-feather="arrow-left"></span>Kembali</a>
                <a href="/dashboard/posts/{{ $categories->slug }}/edit" class="btn btn-warning"><span
                        data-feather="edit"></span>Edit</a>
                {{-- <form action="/dashboard/posts/{{ $categories->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger " onclick="return confirm('Yakin mau dihapus?')">
                        <span data-feather="trash-2"></span>Hapus</button>
                </form> --}}
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-sm">Hapus
                </button>
                {{-- Modal START --}}
                <div class="modal fade" id="modal-sm">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Hapus Postingan</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Kategori akan terhapus permanent!</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                                <a class="btn btn-primary" href="{{ route('category_destroy-post', $categories->id) }}"
                                    role="button">Ya,
                                    Hapus!</a>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                {{-- Modal END --}}
                <h1 class="mt-3">Kategori: {{ $categories->name }}</h1>
                <h5 class="mt-3">Gambar:</h5>
                @if ($categories->images)
                    <div style="max-height: 350px; max-width:350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $categories->images) }}" alt="" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="/img/house.jpg? " alt="" class="img-fluid mt-3">
                @endif
            </div>
        </div>
    </div>
@endsection
