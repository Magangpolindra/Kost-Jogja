@extends('dashboard.layouts.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header text-right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                        Tambahkan
                    </button>
                    <h3 class="card-title">Tabel Postingan</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 400px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Body</th>
                                <th>Area</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ Str::limit(strip_tags($post->body), 30) }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>
                                        <div class=" btn-group-sm">
                                            <a href="{{ route('dashboard.posts.show', $post->id) }}" class="btn btn-info"><i
                                                    class="fas fa-eye"></i></a>
                                            <a href="{{ route('dashboard.posts.edit', $post->id) }}" class="btn btn-dark"><i
                                                    class="fas fa-edit"></i></a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#modal-sm{{ $post->id }}"><i class="fas fa-trash"></i>
                                            </button>
                                            {{-- Modal START --}}
                                            <div class="modal fade" id="modal-sm{{ $post->id }}">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Hapus Postingan</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Postingan akan terhapus permanent!</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-danger"
                                                                data-dismiss="modal">Tidak</button>
                                                            <a class="btn btn-primary"
                                                                href="{{ route('dashboard.posts.destroy', $post->id) }}"
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
                    <h4 class="modal-title">Tambah Postingan Baru</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('dashboard.posts.store') }}" class="mb-5" id="quickForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title" class="form-label">Judul</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" required autofocus value="{{ old('title') }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                        id="slug" name="slug" required value="{{ old('slug') }}">
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="category" class="form-label">Kategori</label>
                                        <select class="form-control select2" name="category_id" style="width: 100%;">
                                            @foreach ($categories as $category)
                                                @if (old('category_id') == $category->id)
                                                    <option value="{{ $category->id }}" selected>{{ $category->name }}
                                                    </option>
                                                @else
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                        <label for="image" class="d-block">Upload Gambar</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image"
                                                    name="image" onchange="previewImage()">
                                                @error('image')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    @enderror
                                                    <label class="custom-file-label" for="image">Upload gambar</label>
                                                </div>
                                            </div>
                                        </div>
                                        <label for="summernote">Body</label>
                                        @error('body')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <textarea id="summernote" name="body">{{ old('body') }}
                                    </textarea>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Tutup</button>
                                        <button type="submit"
                                            class="btn btn-primary toastrDefaultSuccess">Tambahkan</button>
                                    </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
