@extends('layouts.main')
@section('container')
    <section class="hero hero-bg d-flex justify-content-center h-100 align-items-center">
        <div id="about">
            <div class="container">
                <div class="row align-items-center text-center mb-5">
                    <div class="col-md-6 mb-5">
                        <h2 class="display-4 text-white">
                            Aplikasi Pencari Kost di Yogyakarta
                        </h2>
                        <p class="mb-5 text-white">
                            KostJogja merupakan salah satu aplikasi pencari kos di Yogyakarta. Didirikan pada 23 Juli 2022,
                            KostJogja terus berkembang dan berusaha menjadi penghubung bagi pemilik kos dan pencari kos.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('/img/hp1.png') }}" class="img-fluid" alt="" width="230px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0"
                        src="{{ asset('/img/home3.png') }}"alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="mb-3 display-4 text-center">Penghubung Pemilik dan Pencari Kos</h2>
                    <p class=" text-center"> KostJogja telah menghubungkan lebih dari 110 ribu pemilik kos dengan 6-8 juta
                        pencari kos setiap bulannya, untuk memberikan akomodasi yang lebih baik. Inovasi yang kami lakukan
                        bertujuan untuk memberikan kenyamanan dan kemudahan bagi penyewa dan pemilik kos.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0"
                        src="{{ asset('/img/hp6.png') }}" alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="mb-3 display-4 text-center">Informasi Data Kos</h2>
                    <p class=" text-center">KostJogja memanfaatkan teknologi dengan mengelola dan menyajikan daftar kos
                        dengan
                        penjelasan fasilitas secara terperinci dan dilengkapi dengan foto serta detail dari setiap kos.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
