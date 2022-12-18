@extends('layouts.main')

@section('container')
    <div id="helppencari">
        <div class="container fw-bold mt-3">
            <h2 class="mb-3">Paling Sering Dicari Oleh Pencari Kost</h2>
        </div>

        {{-- Help --}}
        <div class="container mt-5">
            <div class="row mt-4">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-2">
                    <!-- Content -->
                    <h5 class="bi bi-person-fill text mb-3">
                        <i class=""></i>Akun
                    </h5>
                    <p>
                        <a href="#!" class="text-reset"> Bagaimana cara daftar akun?</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h5 class="bi bi-house-fill text mb-4">
                        Sewa Kost
                    </h5>
                    <p>
                        <a href="#!" class="text-reset"> Bagaimana cara booking kostan? </a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h5 class="bi bi-person-fill text mb-4">
                        Akun
                    </h5>
                    <p>
                        <a href="#!" class="text-reset"> Saya lupa password, Apa yang akan saya lakukan?</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h5 class="bi bi-wallet-fill text mb-4">
                        Masalah Pembayaran
                    </h5>
                    <p>
                        <a href="#!" class="text-reset"> Berapa lama uang sewa dari penyewa diteruskan oleh Mamikos ke
                            rekening saya? </a>
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
                    <h5 class="bi bi-geo-alt-fill text mb-4">
                        Pencarian Kost
                    </h5>
                    <p>
                        <a href="#!" class="text-reset"> Informasi & Detail Kost?</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h5 class="bi bi-house-fill text mb-4">
                        Sewa Kost
                    </h5>
                    <p>
                        <a href="#!" class="text-reset"> Bagaimana cara membatalkan permintaan booking kost? </a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset fw-bold mb-1">Selengkapnya ></a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h5 class="bi bi-wallet-fill text mb-3">
                        <i class=""></i> Masalah Pembayaran
                    </h5>
                    <p>
                        <a href="#!" class="text-reset"> Menggunakan Via apa untuk proses pembayaran untuk melakukan
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
                    <h5 class="bi bi-universal-access text mb-4"> Fitur & Layanan Lainnya </h5>
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

    {{-- Kategori Bantuan / Help --}}
    <div class="container fw-bold mt-4">
        <h2>
            <a href="{{ route('pusat.akunpencari') }}" class="text-reset mb-1">Kategori Bantuan</a>
        </h2>
    </div>

    <div class="container mt-3">
        <div class="row">
            <!-- Grid column -->
            <div class="col">
                <!-- Content -->
                <h5 class=" fw-semibold mb-4">
                    <p class="bi bi-wallet-fill text fs-4 mt-3"> Masalah Pembayaran</p>
                </h5>
                <p> <a href="#!" class="bi bi-dash text-reset">Pembayaran Uang Kost</a> </p>
                <p> <a href="#!" class="bi bi-dash text-reset">Pengembalian Dana</a> </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col">
                <!-- Content -->
                <h5 class="text fw-semibold mb-4">
                    <p class="bi bi-universal-access fs-4 mt-3"> Fitur & Layanan Lainnya</p>
                </h5>
                <p> <a href="#!" class="bi bi-dash text-reset">Pendaftaran</a> </p>
                <p> <a href="#!" class="bi bi-dash text-reset">Pengaturan</a> </p>
                <p> <a href="#!" class="bi bi-dash text-reset">Verifikasi</a> </p>
                <p> <a href="#!" class="bi bi-dash text-reset">Keamanan Akun dan Transaksi</a> </p>
                <p> <a href="#!" class="bi bi-dash text-reset">Penutupan Akun Penyewa</a> </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col">
                <!-- Content -->
                <h5 class=" text fw-semibold mb-4">
                    <p class="bi bi-person-fill fs-4 mt-3"> Akun</p>
                </h5>
                <p> <a href="#!" class="bi bi-dash text-reset">Pendaftaran</a> </p>
                <p> <a href="#!" class="bi bi-dash text-reset">Pengaturan</a> </p>
                <p> <a href="#!" class="bi bi-dash text-reset">Verifikasi</a> </p>
                <p> <a href="#!" class="bi bi-dash text-reset">Keamanan Akun dan Transaksi</a> </p>
                <p> <a href="#!" class="bi bi-dash text-reset">Penutupan Akun Penyewa</a> </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col">
                <!-- Content -->
                <h5 class="text fw-semibold mb-4">
                    <p class="bi bi-house-fill fs-4 mt-3"> Sewa Kost</p>
                </h5>
                <p> <a href="#!" class="bi bi-dash text-reset">Pengajuan Sewa</a> </p>
                <p> <a href="#!" class="bi bi-dash text-reset">Perubahan Sewa</a> </p>
                <p> <a href="#!" class="bi bi-dash text-reset">Pembatalan Sewa</a> </p>
                <p> <a href="#!" class="bi bi-dash text-reset">Kontrak Sewa</a> </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col">
                <!-- Content -->
                <h5 class=" text fw-semibold mb-4">
                    <p class="bi bi-geo-alt-fill fs-4 mt-3"> Pencarian Kost</p>
                </h5>
                <p> <a href="#!" class="bi bi-dash text-reset">Pencarian Kost</a> </p>
                <p> <a href="#!" class="bi bi-dash text-reset">Survei Kost</a> </p>
                <p> <a href="#!" class="bi bi-dash text-reset">Informasi dan Detail Kost</a> </p>
                <p> <a href="#!" class="bi bi-dash text-reset">Pencarian Properti Lainnya</a> </p>
            </div>
            <!-- Grid column -->
        </div>
    </div>

    <hr class="border border-dark border-1 opacity-35">
@endsection
