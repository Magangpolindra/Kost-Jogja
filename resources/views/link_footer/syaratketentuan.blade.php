@extends('layouts.main')
@section('container')
    <div id="syaratketentuan">
        <div class="container text-uppercase fw-bold mt-4">
            <h2 class="mb-3"> Syarat & Ketentuan</h2>
        </div>

        <div class="container text fw-bold mt-4">
            <div class="row container mt-4">
                <div class="container col-lg-5 col-md-5 align-items-stretch card">
                    <a class="text-decoration-none link-dark stretched-link" href="{{ route('syarat.pemilik') }}"></a>
                    <img src="{{ asset('img/footer/pemilik1.jfif') }}" class="s-is-cached lazyloaded" alt="pemilik kost">
                    <div class="card-body">
                        <p class="card-text"> Syarat & Ketentuan Layanan Pemilik</p>
                    </div>
                </div>

                <div class="container col-lg-5 col-md-5 align-items-stretch card">
                    <a class="text-decoration-none link-dark stretched-link" href="{{ route('syarat.pencari') }}"></a>
                    <img src="{{ asset('img/footer/pencari2.jfif') }}" class="s-is-cached lazyloaded" alt="pencari kost">
                    <div class="card-body">
                        <p class="card-text"> Syarat & Ketentuan Sewa diKostjogja</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
