@extends('layouts.main')

@section('container')
    <div id="pusat_bantuan">
        <div class="container text fw-bold mt-4">
            <h1 class="mb-3"> Hai, Ada Yang Bisa Di Bantu?</h1>

            <div class="row justify-content-start mb-1">
                <div class="col-md-7">
                    <form action="/pusat_bantuan">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif
                        <div class="input-group mb-3">
                            <input type="text" class="form-control rounded-1" placeholder="Cari kosan.." name="search"
                                value="{{ request('search') }}">
                            <button class="btn text-white rounded-1" type="submit"
                                style="background-color: rgb(2, 2, 2)">Cari</button>
                        </div>
                    </form>
                </div>
            </div>


            <h4>bisa telusuri kategori informasi sesuai tipe akun berikut di bawah ini: </h4>


            {{-- <div data-v-61949991="" class="bg-c-grid bg-c-grid--vtop bg-c-grid--left ">
                <div data-v-61949991="" class="bg-c-grid__item bg-is-col-6">
                    <div data-v-7254071a="" data-v-61949991="" variant="shadow" size="sm" clickable=""
                        class="mh-category-banner-card">
                        <div data-v-7254071a="" class="mh-category-banner-card__image"><img data-v-7254071a=""
                                data-src="img/pencari1.jpg" alt="Penyewa Kos" class=" ls-is-cached lazyloaded"
                                src="img/pencari1.jpg"></div>
                        <div data-v-7254071a="" class="mh-category-banner-card__title">
                            <h3 data-v-7254071a="" class="bg-c-text bg-c-text--title-2 ">
                                Penyewa Kos
                            </h3>
                        </div>
                    </div>
                </div>
                <div data-v-61949991="" class="bg-c-grid__item bg-is-col-6">
                    <div data-v-7254071a="" data-v-61949991="" variant="shadow" size="sm" clickable=""
                        class="mh-category-banner-card">
                        <div data-v-7254071a="" class="mh-category-banner-card__image"><img data-v-7254071a=""
                                data-src="/img/pemilik.jfif" alt="Pemilik Kos" class=" ls-is-cached lazyloaded"
                                src="/img/pemilik.jfif"></div>
                        <div data-v-7254071a="" class="mh-category-banner-card__title">
                            <h3 data-v-7254071a="" class="bg-c-text bg-c-text--title-2 ">
                                Pemilik Kos
                            </h3>
                        </div>
                    </div>
                </div> --}}

            <div class="row container mt-4">
                <div class="container col-lg-5 col-md-5 align-items-stretch card">
                    <a class="text-decoration-none link-dark stretched-link" href="{{ route('pusat.pemilik') }}"></a>
                    <img src="{{ asset('img/footer/pemilik1.jfif') }}" class="s-is-cached lazyloaded" alt="pemilik kost">
                    <div class="card-body">
                        <p class="card-text">Tentang Pemilik Kost</p>
                    </div>
                </div>

                <div class="container col-lg-5 col-md-5 align-items-stretch card">
                    <a class="text-decoration-none link-dark stretched-link" href="{{ route('pusat.pencari') }}"></a>
                    <img src="{{ asset('img/footer/pencari2.jfif') }}" class="s-is-cached lazyloaded" alt="pencari kost">
                    <div class="card-body">
                        <p class="card-text">Tentang Pencari Kost</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="help mt-4 mb-4">
        <div class="container fw-bold mt-5   ">
            <h1 class="mb-3"> Paling Sering DiCari</h1>
        </div>

        {{-- Help --}}
        <div class="container mt-5">
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-3">
                    <!-- Content -->
                    <h6 class="bi bi-person-fill text-uppercase mb-3">
                        <i class=""></i>Akun
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Bagaimana cara daftar akun pemilik kost ?</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-3">
                    <!-- Links -->
                    <h6 class="bi bi-motherboard-fill text-uppercase mb-3">
                        Management Kost
                    </h6>
                    <p>
                        <a href="#!" class="text-reset"> Bagaimana cara menerima permintaan booking ? </a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="bi bi-universal-access text-uppercase mb-4">
                        Akun
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Saya lupa password, Apa yang akan saya lakukan ?</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="bi bi-universal-access text-uppercase mb-4">
                        Atur Property Kost
                    </h6>
                    <p>
                        <a href="#!" class="text-reset"> Atur Properti Lainnya</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->
            </div>

            <div class="row mt-7">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-7">
                    <!-- Links -->
                    <h6 class="bi bi-universal-access text-uppercase mb-4">
                        Masalah Pembayaran Pemilik
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Berapa lama uang sewa dari penyewa diteruskan oleh
                            Mamikos
                            ke
                            rekening saya ?</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="bi bi-universal-access text-uppercase mb-4">
                        Atur Property Kost
                    </h6>
                    <p>
                        <a href="#!" class="text-reset"> Atur Properti Kost
                        </a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="bi bi-universal-access text-uppercase mb-3">
                        <i class=""></i>Fitur & Layanan Lainnya
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Menggunakan Via apa untuk proses pembayaran untuk
                            melakukan
                            penyewaan kost ?</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="bi bi-universal-access text-uppercase mb-4">
                        Membuat Fitur Preview </h6>
                    <p>
                        <a href="#!" class="text-reset"> Informasi dan Detail Kost </a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->
            </div>
        </div>
    </div>
@endsection
