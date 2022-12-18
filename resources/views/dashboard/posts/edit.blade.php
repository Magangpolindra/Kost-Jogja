@extends('dashboard.layouts.main')
@section('content')
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Edit Postingan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('dashboard.posts.update', $post->slug) }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" required autofocus
                        value="{{ old('title', $post->title) }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" required
                            value="{{ old('slug', $post->slug) }}">
                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category" class="form-label">Kategori</label>
                            <select class="form-control select2" name="category_id" style="width: 100%;">
                                @foreach ($categories as $value)
                                    @if ($post->category_id == $value->id)
                                        <option selected value="{{ $value->id }}">{{ $value->name }}</option>
                                    @else
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" class="img-preview col-2 d-block">
                            @else
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                            @endif
                            <label for="images">Upload Gambar</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="images" name="image"
                                        onchange="previewImage()">
                                    <input type="hidden" name="oldImage" id="oldImage" value="{{ $post->images }}">
                                    <label class="custom-file-label" for="image">Upload gambar</label>
                                    @error('image')
                                        < class="invalid-feedback">
                                            {{ $message }}
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <label for="summernote">Body</label>
                        @error('body')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <textarea id="summernote" name="body">{{ old('body', $post->body) }}</textarea>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="javascript:window.history.go(-1)" class="btn btn-danger">Batal</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
        </form>
    </div>
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
    <script>
        function previewImage() {
            const image = document.querySelector('#images');
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
