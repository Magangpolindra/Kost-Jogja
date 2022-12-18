@extends('layouts.main')

@section('container')
    <div id="helppemilik">
        <div class="container fw-bold mt-3">
            <h2 class="mb-3">Paling Sering Dicari Oleh Pemilik Kost</h2>
        </div>

        {{-- Help --}}
        <div class="container mt-5">
            <div class="row mt-4">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-2">
                    <!-- Content -->
                    <h6 class="bi bi-person-fill text mb-3">
                        <i class=""></i>Akun
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Bagaimana cara daftar akun pemilik kost?</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="bi bi-universal-access text mb-4">
                        Management Kost
                    </h6>
                    <p>
                        <a href="#!" class="text-reset"> Bagaimana cara menerima permintaan booking? </a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="bi bi-person-fill text mb-4">
                        Akun
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Saya lupa password, Apa yang akan saya lakukan?</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="bi bi-tv-fill text mb-4">
                        Property Kost
                    </h6>
                    <p>
                        <a href="#!" class="text-reset"> Atur Properti Kost</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->
            </div>



            <div class="row mt-4">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="bi bi-wallet-fill text mb-4">
                        Masalah Pembayaran Pemilik
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Berapa lama uang sewa dari penyewa diteruskan oleh Mamikos ke
                            rekening saya?</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="bi bi-tv-fill text mb-4">
                        Property Kost
                    </h6>
                    <p>
                        <a href="#!" class="text-reset"> Atur Properti Lainnya</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="bi bi-universal-access text mb-3">
                        <i class=""></i>Fitur & Layanan Lainnya
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Menggunakan Via apa untuk proses pembayaran untuk melakukan
                            penyewaan kost?</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="bi bi-geo-alt-fill text mb-4">
                        Produk untuk Pemilik </h6>
                    <p>
                        <a href="#!" class="text-reset"> Booking Langsung </a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->
            </div>
        </div>
    </div>


    {{-- Kategori Bantuan / Help --}}
    <div class="container fw-bold mt-4">
        <h2>
            <a href="{{ route('pusat.akunpemilik') }}" class="text-reset mb-1">Kategori Bantuan</a>
        </h2>
    </div>

    <div class="container mt-3">
        <div class="row">
            <!-- Grid column -->
            <div class="col">
                <!-- Content -->
                <h5 class=" text-reset mb-4">
                    <a href="/akunpemilik/#management" class="text-reset mb-1 bi bi-motherboard-fill fs-5 mt-3"> Management
                        Kost</a>
                </h5>
                <p class="bi bi-dash text-reset">Atur Ketersediaan Kamar
                    </a> </p>
                <p class="bi bi-dash text-reset"> Atur Harga Sewa Kos</a> </p>
                <p class="bi bi-dash text-reset"> Atur Kebijakan Refund</a> </p>
                <p class="bi bi-dash text-reset"> Kelola Booking</a> </p>
                <p class="bi bi-dash text-reset"> Kontrak Sewa</a> </p>
                <p class="bi bi-dash text-reset"> Kelola Tagihan</a> </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col">
                <!-- Content -->
                <h5 class="text-reset mb-4">
                    <p> <a href="/akunpemilik/#fitur" class="text-reset mb-1 bi bi-universal-access fs-5 mt-3"> Fitur &
                            Layanan
                            Lainnya</a> </p>
                </h5>
                <p class="bi bi-dash text-reset">Pendaftaran</a> </p>
                <p class="bi bi-dash text-reset">Pengaturan</a> </p>
                <p class="bi bi-dash text-reset">Verifikasi</a> </p>
                <p class="bi bi-dash text-reset">Keamanan Akun dan Transaksi</a> </p>
                <p class="bi bi-dash text-reset">Penutupan Akun Penyewa</a> </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col">
                <!-- Content -->
                <h5 class=" text-reset mb-4">
                    <p> <a href="/akunpemilik/#akun" class="text-reset mb-1 bi bi-person-fill fs-5 mt-3"> Akun</a> </p>
                </h5>
                <p class="bi bi-dash text-reset">Pendaftaran</a> </p>
                <p class="bi bi-dash text-reset">Pengaturan</a> </p>
                <p class="bi bi-dash text-reset">Verifikasi</a> </p>
                <p class="bi bi-dash text-reset">Keamanan Akun dan Transaksi</a> </p>
                <p class="bi bi-dash text-reset">Penutupan Akun Penyewa</a> </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col">
                <!-- Content -->
                <h5 class="text-reset mb-4">
                    <p> <a href="/akunpemilik/#property" class="text-reset mb-1 bi bi-tv-fill fs-5 mt-3"> Property
                            Kost</a> </p>
                </h5>
                <p class="bi bi-dash text-reset">Atur Properti Kos</a> </p>
                <p class="bi bi-dash text-reset">Atur Properti Lainnya</a> </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col">
                <!-- Content -->
                <h5 class=" text-reset mb-4">
                    <p> <a href="/akunpemilik/#produk" class="text-reset mb-1 bi bi-geo-alt-fill fs-5 mt-3"> Produk untuk
                            Pemilik</a>
                    </p>
                </h5>
                <p class="bi bi-dash text-reset">Fitur Promosi</a> </p>
                <p class="bi bi-dash text-reset">Singgahsini</a> </p>
                <p class="bi bi-dash text-reset">Booking Langsung</a> </p>
            </div>
            <!-- Grid column -->
        </div>
    </div>
@endsection
