@extends('layouts.main')
{{-- {{ $title }} --}}
@section('container')

    @if ($posts->count())
        {{-- <div class="card mb-3 mt-4">

            @if ($posts[0]->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                        class="img-fluid">
                </div>
            @else
                <img src="/img/house.jpg? {{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">
            @endif

            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                        By. <a href="/posts? author={{ $posts[0]->author->username }}" class="text-decoration-none">
                            {{ $posts[0]->author->name }}</a> in <a
                            href="/posts? category={{ $posts[0]->category->slug }}"class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}"class="text-decoration-none btn btn-primary ">Readmore</a>
            </div>
        </div> --}}
        <div id="posts">
            <div class="container mt-5">
                <h1 class=" text-end">Mau nyari kost?</h1>
                <h4 class="section-subheading font-weight-normal mb-4">Dapatkan infonya dan langsung sewa di KostJogja.</h4>
                <div class="row justify-content-start mb-5">
                    <div class="col-md-6">
                        <form action="/posts">
                            @if (request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            @if (request('author'))
                                <input type="hidden" name="author" value="{{ request('author') }}">
                            @endif
                            <div class="input-group mb-3">
                                <input type="text" class="form-control rounded-1" placeholder="Search.." name="search"
                                    value="{{ request('search') }}">
                                <button class="btn btn-dark rounded-1" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">

                    @foreach ($posts as $post)
                        <div class="col-md-4 mb-5">
                            <div class="card">
                                {{-- <div class="position-absolute px-3 py-2 text-white"
                                    style="background-color: rgba(0,0,0,0.7)">
                                    <a href="/posts? category={{ $post->category->slug }}"
                                        class="text-white text-decoration-none overlay">{{ $post->category->name }}</a>
                                </div> --}}

                                @if ($post->image)
                                    <div style="height: 250px; overflow:hidden;">
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                            class="img-fluid" style="background-size: contain">
                                    </div>
                                @else
                                    <img src="/img/house.jpg? {{ $post->category->name }}" class="card-img-top"
                                        alt="{{ $post->category->name }}">
                                @endif
                                <div class="card-body p-2">
                                    <div class="badge bg-dark bg-gradient rounded-pill  px-3 py-2 ">
                                        {{ $post->category->name }}
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a class="text-decoration-none link-dark stretched-link"
                                        href="{{ route('posts.show', $post->slug) }}"></a>
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    {{-- <p>
                                        <small class="text-muted">
                                            Pemilik Kost <a href="/posts?author={{ $post->author->username }}"
                                                class="text-decoration-none">
                                                {{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                                        </small>
                                    </p> --}}
                                    <p class="card-text">{{ Str::limit(strip_tags($post->excerpt), 35) }}</p>
                                    <a href="{{ route('posts.show', $post->slug) }}" class="btn btn-info">Detail <i
                                            class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <p class="text-center fs-4 mt-5">Tidak menemukan nama tempat/nama kost yang sesuai. </p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection
