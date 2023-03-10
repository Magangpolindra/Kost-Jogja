@extends('layouts.main')

@section('container')
    <div id="categories">
        <div class="container mt-5">
            <h3 class="mb-5"> Area Kost Jogja</h3>
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-3">
                        <a href="/posts?category={{ $category->slug }}">
                            <div class="card bg-white p-0 text-white mb-4 border-0">
                                <img src="{{ $category->images ? asset('storage/' . $category->images) : asset('img/house.jpg') }}"
                                    class="card-img" alt="{{ $category->name }}">
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h2 class="card-title text-center flex-fill p-3 fs-5"
                                        style="background-color:rgba(0,0,0,0.6)">
                                        {{ $category->name }}
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
