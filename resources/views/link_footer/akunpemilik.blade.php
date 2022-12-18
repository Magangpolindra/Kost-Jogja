@extends('layouts.main')
@section('container')
    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
        <div class="container" data-aos="fade-up">
            <div class="container text-decoration fw-bold mt-3">
                <h2 class="mb-1"> KATEGORI BANTUAN</h2>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-3 mb-3 mb-lg-0 mt-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#management">
                                <h5 class="bi bi-motherboard-fill text fs-6 mt-1"> Management Kost</h5>
                            </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#fitur">
                                <h5 class="bi bi-universal-access text fs-6 mt-1"> Fitur & Layanan Lainnya</h5>
                            </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#akun">
                                <h5 class="bi bi-person-fill text fs-6 mt-1"> Akun</h5>
                            </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#property">
                                <h5 class="bi bi-tv-fill text fs-6 mt-1"> Property Kost</h5>
                            </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#produk">
                                <h5 class="bi bi-geo-alt-fill text fs-6 mt-1"> Produk untuk Pemilik
                                </h5>
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- Management Kost --}}
                <div class="col-lg-9">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="management">
                            <h3> Management Kost</h3>

                            <div class="accordion col-lg-20" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-heading1One">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapse1One" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapse1One" style="color: rgb(0, 0, 0)";>
                                            Atur Ketersediaan Kamar
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapse1One" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-heading1One">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-20">
                                                    <div class="panel-group" id="accordion" role="tablist"
                                                        aria-multiselectable="true">

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1A">
                                                                <a role="button" data-toggle="collapse"
                                                                    data-parent="#accordion" href="#pemilik1A"
                                                                    aria-expanded="true" aria-controls="collapse1A"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Apa itu ketersediaan kamar ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1A" class="panel-collapse collapse in"
                                                                role="tabpanel" aria-labelledby="heading1A">
                                                                <div class="panel-body" style="font-weight:lighter;"
                                                                    style="font-weight:lighter;">
                                                                    <p> Ketersediaan Kamar adalah fitur terbaru dari Kost
                                                                        Jogja
                                                                        yang dapat membantu Anda mengelola kamar yang
                                                                        tersedia pada properti Kost Anda. Melalui fitur ini,
                                                                        Anda dapat memilih kamar untuk penyewa sehingga pada
                                                                        saat tiba di Kost pertama kali. Penyewa pun dapat
                                                                        dengan mudah mengetahui kamar yang akan ditempati.
                                                                    </p>

                                                                    <p> itu, Anda juga dapat mengatur ketersediaan
                                                                        kamar yang ada sehingga dengan mudah mengetahui
                                                                        jumlah kamar yang Kostong dan sudah terisi.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1B">
                                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                                    data-parent="#accordion" href="#pemilik1B"
                                                                    aria-expanded="false" aria-controls="collapse1B"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Dimana saya bisa ubah dan atur ketersediaan kamar ?
                                                                    </p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1B" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1B">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <P>Anda dapat ubah dan atur informasi ketersediaan kamar
                                                                        dengan cara berikut:</P>
                                                                    <ol>
                                                                        <li>Login akun pemilik Kost</li>
                                                                        <li>Klik menu Properti Saya
                                                                            disebelah kiri kemudian klik Kost</li>
                                                                        <li>Pilih iklan Kost yang ingin
                                                                            diedit atau dihapus fotonya, kemudian klik Lihat
                                                                            Selengkapnya</li>
                                                                        <li>Klik Edit Data Kost</li>
                                                                        <li>Klik Edit pada
                                                                            Ketersediaan Kamar</li>
                                                                        <li>Pilih filter kamar yang
                                                                            ingin diubah informasi ketersediaannya</li>
                                                                        <li>Klik ikon edit pada kamar
                                                                            dan ubah informasi ketersediaan kamarnya.
                                                                            Lanjutkan
                                                                            dengan klik Update Kamar</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1C">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1C" aria-expanded="false"
                                                                    aria-controls="collapse1C"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara tambah atau ubah jumlah kamar ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1C" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1C">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Anda dapat tambah atau ubah jumlah kamar dengan cara
                                                                        berikut:</p>
                                                                    <ol>
                                                                        <li>Login akun pemilik Kost</li>
                                                                        <li>Klik menu Properti Saya
                                                                            disebelah kiri kemudian klik Kost</li>
                                                                        <li>Pilih iklan Kost yang ingin
                                                                            diedit atau dihapus fotonya, kemudian klik Lihat
                                                                            Selengkapnya</li>
                                                                        <li>Klik Edit Data Kost</li>
                                                                        <li>Klik Edit pada
                                                                            Ketersediaan Kamar</li>
                                                                        <li>Klik Update Ketersediaan Kamar</li>
                                                                        <li>Untuk tambah kamar klik Tambahkan Kamar</li>
                                                                        <li>Lengkapi informasi kamar yang ditambahkan
                                                                            kemudian klik Tambah Kamar</li>
                                                                        <li>Untuk menghapus kamar, klik ikon hapus</li>

                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1D">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1D" aria-expanded="false"
                                                                    aria-controls="collapse1D"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara menghapus kamar ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1D" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1D">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Berikut cara menghapus kamar melalui desktop:</p>
                                                                    <ol>
                                                                        <li>Pada halaman Update Kamar klik ikon Sampah untuk
                                                                            menghapus kamar</li>
                                                                        <li>Lanjutkan dengan klik Hapus untuk mengonfirmasi
                                                                        </li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1E">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1E" aria-expanded="false"
                                                                    aria-controls="collapse1E"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara memperbarui status ketersediaan kamar
                                                                        ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1E" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1E">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Berikut cara memperbarui status ketersediaan kamar
                                                                        melalui desktop:</p>
                                                                    <ol>
                                                                        <li>Pada halaman Update Kamar klik ikon pensil</li>
                                                                        <li>Centang pada bagian Sudah Berpenghuni jika kamar
                                                                            sudah terisi dan hapus centang jika kamar
                                                                            Kostong. Simpan perubahan dengan klik Update
                                                                            Kamar</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1F">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1F" aria-expanded="false"
                                                                    aria-controls="collapse1F"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)">
                                                                    <p>Bagaimana cara memilih kamar untuk penyewa ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1F" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1F">
                                                                <div class="panel-body" style="font-weight:lighter;">

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading1Fa">
                                                                            <p>Anda bisa memilih kamar untuk calon
                                                                                penyewa/ penyewa melalui beberapa cara:
                                                                            </p>
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#pemilik1Fa" aria-expanded="false"
                                                                                aria-controls="collapse1Fa"
                                                                                style=" font-style:bold; font-size: 12pt; color: rgb(0, 0, 0)";>

                                                                                <ul>
                                                                                    <li>Pada saat menerima Booking</li>
                                                                                </ul>
                                                                            </a>
                                                                        </div>
                                                                        <div id="pemilik1Fa"
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel" aria-labelledby="heading1Fa">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <ol>
                                                                                    <li>Pilih pengajuan sewa yang ingin Anda
                                                                                        terima dengan klik Terima</li>
                                                                                    <li>Tentukan nomor/ nama kamar untuk
                                                                                        penyewa
                                                                                        kemudian klik Terapkan
                                                                                    </li>
                                                                                    <li>Jika Anda tidak menemukan kamar
                                                                                        untuk
                                                                                        penyewa, Anda dapat menambah kamar
                                                                                        dengan klik “Tidak ada di daftar?
                                                                                        Tambah
                                                                                        di sini”</li>
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading1Fb">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#pemilik1Fb" aria-expanded="false"
                                                                                aria-controls="collapse1Fb"
                                                                                style=" font-style:bold; font-size: 12pt; color: rgb(0, 0, 0)";>
                                                                                <ul>
                                                                                    <li>Pada saat tambah data penyewa</li>
                                                                                </ul>
                                                                            </a>
                                                                        </div>
                                                                        <div id="pemilik1Fb"
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel" aria-labelledby="heading1Fb">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <ol>
                                                                                    <li>Pada halaman Tambah Penyewa, pilih
                                                                                        tab Biodata</li>
                                                                                    <li>Tentukan kamar untuk penyewa
                                                                                        kemudian klik Terapkan</li>
                                                                                    <li>Jika Anda tidak menemukan kamar
                                                                                        untuk penyewa, Anda dapat menambah
                                                                                        kamar dengan klik “Tidak ada di
                                                                                        daftar? Tambah di sini”</li>
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading1Fc">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#pemilik1Fc" aria-expanded="false"
                                                                                aria-controls="collapse1Fc"
                                                                                style=" font-style:bold; font-size: 12pt; color: rgb(0, 0, 0)";>
                                                                                <ul>
                                                                                    <li>Pada saat ubah data penyewa</li>
                                                                                </ul>
                                                                            </a>
                                                                        </div>
                                                                        <div id="pemilik1Fc"
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel" aria-labelledby="heading1Fc">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <ol>
                                                                                    <li>Pada halaman Edit Penyewa Kost pilih
                                                                                        tab Biodata</li>
                                                                                    <li>Tentukan kamar untuk penyewa
                                                                                        kemudian klik Terapkan</li>
                                                                                    <li>Jika Anda tidak menemukan kamar
                                                                                        untuk penyewa, Anda dapat menambah
                                                                                        kamar dengan klik “Tidak ada di
                                                                                        daftar? Tambah di sini”</li>
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1G">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1G" aria-expanded="false"
                                                                    aria-controls="collapse1G"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Mengapa saya tidak bisa mendapatkan kamar untuk
                                                                        penyewa ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="1G" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1G">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Jangan khawatir, jika Anda tidak bisa menemukan kamar
                                                                        untuk penyewa, Anda dapat menambah kamar langsung
                                                                        pada saat menerima Booking/ tambah dan ubah data
                                                                        penyewa dengan klik “Tidak ada di daftar? Tambah di
                                                                        sini”.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!--- END COL -->
                                            </div>
                                            <!--- END ROW -->
                                        </div>

                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-heading1Two">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1Two"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapse1Two"
                                            style="color: rgb(0, 0, 0)";>
                                            Atur Harga Sewa Kost
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapse1Two" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-heading1Two">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel-group" id="accordion" role="tablist"
                                                        aria-multiselectable="true">

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1A2">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1A2" aria-expanded="false"
                                                                    aria-controls="collapse1A2"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara ubah harga sewa Kost ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1A2" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1A2">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <ol>
                                                                        <p>Anda dapat ubah harga sewa Kost dengan cara
                                                                            berikut:</p>
                                                                        <li>Login akun pemilik Kost</li>
                                                                        <li>Klik menu Properti Saya di sebelah kiri kemudian
                                                                            klik Kost</li>
                                                                        <li>Pilih iklan Kost yang ingin diedit atau dihapus
                                                                            fotonya, kemudian klik Lihat Selengkapnya</li>
                                                                        <li>Klik Edit Data Kost</li>
                                                                        <li>Klik Edit pada Harga</li>
                                                                        <li>Pilih Update Harga Sewa dan masukkan harga sewa
                                                                            baru atau biaya lainnya (jika ada)</li>
                                                                        <li>Apabila sudah selesai, klik Update Harga untuk
                                                                            menyimpan perubahan</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1B2">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1B2" aria-expanded="false"
                                                                    aria-controls="collapse1B2"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara menambahkan biaya lain pada iklan
                                                                        Kost
                                                                        ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1B2" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1B2">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Jika Anda ingin menambahkan biaya lain pada iklan
                                                                        Kost
                                                                        Anda, ikuti langkah beriku</p>
                                                                    <ol>
                                                                        <li>Login akun pemilik Kost kemudian pilih menu
                                                                            Update Kamar
                                                                            & Harga. Anda dapat mengakses menu ini melalui
                                                                            dua cara:
                                                                            <ul>
                                                                                <li>Pada dashboard pemilik bagian Kamar klik
                                                                                    Lihat Kost Saya,
                                                                                    cari iklan Kost yang ingin Anda update
                                                                                    kemudian klik
                                                                                    Update Kamar & Harga.</li>
                                                                                <li>Atau pada halaman dashboard pemilik
                                                                                    bagian Kamar, klik
                                                                                    Update Kamar & Harga kemudian pilih
                                                                                    iklan Kost yang ingin
                                                                                    Anda update di sebelah kiri halaman.
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Aktifkan Biaya Tambahan Lain pada iklan yang
                                                                            telah dipilih, kemudian masukkan nama dan jumlah
                                                                            biaya.</li>
                                                                        <li>Klik Simpan untuk menyimpan perubahan yang
                                                                            dilakukan.</li>
                                                                        <li>Jika Anda ingin kembali menambahkan biaya
                                                                            tambahan lain, klik Tambah Biaya Lainnya.</li>
                                                                        <li>Jika sudah selesai menambahkan biaya tambahan
                                                                            lain, klik Update Harga.</li>
                                                                        <li>Biaya tambahan lain berhasil diterapkan pada
                                                                            iklan Kost dan calon penyewa dapat langsung
                                                                            melihatnya.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1C2">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1C2" aria-expanded="false"
                                                                    aria-controls="collapse1C2"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Saya ingin menerapkan denda bagi penyewa yang telat
                                                                        membayar Kost. Bagaimana caranya ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1C2" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1C2">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Jika Anda ingin menerapkan denda pada Kost Anda,
                                                                        ikuti
                                                                        langkah berikut:</p>
                                                                    <ol>
                                                                        <li>Login akun pemilik Kost kemudian pilih menu
                                                                            Update
                                                                            Kamar & Harga. Anda dapat mengakses menu ini
                                                                            melalui
                                                                            dua cara:
                                                                            <ul>
                                                                                <li>Pada dashboard pemilik bagian Kamar klik
                                                                                    Lihat Kost
                                                                                    Saya, cari iklan Kost yang ingin Anda
                                                                                    update kemudian
                                                                                    klik Update Kamar & Harga.</li>
                                                                                <li> Atau pada halaman dashboard pemilik
                                                                                    bagian Kamar,
                                                                                    klik Update Kamar & Harga kemudian pilih
                                                                                    iklan Kost
                                                                                    yang ingin Anda update di sebelah kiri
                                                                                    halaman.</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Aktifkan Biaya Denda, kemudian masukkan jumlah
                                                                            denda
                                                                            dan ketentuannya.</li>
                                                                        <li>Klik Simpan, kemudian klik Update Harga.</li>
                                                                        <li>Biaya denda berhasil diterapkan pada iklan Kost
                                                                            dan
                                                                            calon penyewa dapat langsung melihatnya.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1D2">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1D2" aria-expanded="false"
                                                                    aria-controls="collapse1D2"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Saya ingin menerapkan biaya deposit bagi calon
                                                                        penyewa, bagaimana caranya ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1D2" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1D2">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Anda dapat menerapkan biaya deposit pada Kost Anda
                                                                        dengan cara berikut:</p>
                                                                    <ol>
                                                                        <li>Login akun pemilik Kost kemudian pilih menu
                                                                            Update Kamar & Harga. Anda dapat mengakses menu
                                                                            ini melalui dua cara:
                                                                            <ul>
                                                                                <li>Pada dashboard pemilik bagian Kamar klik
                                                                                    Lihat Kost Saya,
                                                                                    cari iklan Kost yang ingin Anda update
                                                                                    kemudian klik
                                                                                    Update Kamar & Harga.</li>
                                                                                <li>Atau pada halaman dashboard pemilik
                                                                                    bagian Kamar, klik
                                                                                    Update Kamar & Harga kemudian pilih
                                                                                    iklan Kost yang ingin
                                                                                    Anda update di sebelah kiri halaman.
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Aktifkan Biaya Deposit, kemudian masukkan jumlah
                                                                            deposit.</li>
                                                                        <li>Klik Simpan, kemudian klik Update Harga.</li>
                                                                        <li>Biaya deposit berhasil diterapkan pada iklan
                                                                            Kost
                                                                            dan
                                                                            calon penyewa dapat langsung melihatnya.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1E2">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1E2" aria-expanded="false"
                                                                    aria-controls="collapse1E2"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara menerapkan uang muka/ DP bagi calon
                                                                        penyewa ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1E2" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1E2">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Anda dapat menerapkan uang muka/ DP pada Kost Anda
                                                                        dengan cara berikut:</p>
                                                                    <ol>
                                                                        <li>Login akun pemilik Kost. Pada halaman utama
                                                                            (Home),
                                                                            di menu klik Atur Harga, atau klik di sini.</li>
                                                                        <li>Pilih iklan Kost yang ingin Anda terapkan biaya
                                                                            uang
                                                                            muka (DP), kemudian aktifkan Biaya Uang Muka
                                                                            (DP).</li>
                                                                        <li>Pilih persentase DP (10% - 50% dari harga sewa)
                                                                            untuk menentukan jumlah DP.</li>
                                                                        <li>Anda bisa memilih apakah ingin mewajibkan biaya
                                                                            DP
                                                                            untuk seluruh calon penyewa.<ul>
                                                                                <li> Jika Ya, seluruh calon penyewa harus
                                                                                    membayar biaya
                                                                                    DP terlebih dahulu</li>
                                                                                <li>Jika Tidak, seluruh calon penyewa bisa
                                                                                    memilih untuk
                                                                                    membayar DP dulu atau langsung
                                                                                    pembayaran penuh.</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Lanjutkan dengan klik Simpan</li>
                                                                        <li>Cek kembali aturan DP, kemudian klik Update
                                                                            Harga.</li>
                                                                        <li>Biaya DP berhasil diterapkan pada iklan Kost dan
                                                                            calon penyewa dapat langsung melihatnya.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1F2">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1F2" aria-expanded="false"
                                                                    aria-controls="collapse1F2"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Apakah saya bisa mengubah atau menghapus biaya lain
                                                                        yang sebelumnya saya terapkan pada Kost ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1F2" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1F2">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Tentu saja. Anda bisa mengubah atau menghapus
                                                                        biaya-biaya lain yang sebelumnya Anda terapkan pada
                                                                        Kost. Berikut langkahnya:</p>
                                                                    <ol>
                                                                        <li>Login akun pemilik Kost kemudian pilih menu
                                                                            Update Kamar
                                                                            & Harga. Anda dapat mengakses menu ini melalui
                                                                            dua cara:
                                                                            <ul>
                                                                                <li>Pada dashboard pemilik bagian Kamar klik
                                                                                    Lihat Kost Saya,
                                                                                    cari iklan Kost yang ingin Anda update
                                                                                    kemudian klik
                                                                                    Update Kamar & Harga.</li>
                                                                                <li>Atau pada halaman dashboard pemilik
                                                                                    bagian Kamar, klik
                                                                                    Update Kamar & Harga kemudian pilih
                                                                                    iklan Kost yang ingin
                                                                                    Anda update di sebelah kiri halaman.
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Untuk mengubah detail biaya, klik Ubah.
                                                                            Lanjutkan dengan
                                                                            klik Simpan, kemudian klik Update Harga.</li>
                                                                        <li>Jika Anda ingin menghapus biaya, klik Hapus
                                                                            kemudian
                                                                            klik Ya, Hapus. Lanjutkan dengan klik Update
                                                                            Harga.</li>
                                                                        <li>Apabila Anda ingin menonaktifkan biaya, klik
                                                                            tombol
                                                                            berikut pada biaya kemudian klik Update Harga
                                                                            untuk
                                                                            menyimpan.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1G2">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1G2" aria-expanded="false"
                                                                    aria-controls="collapse1G2"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Sebagai pemilik, apa itu Harga Sewa dan Biaya Lainnya
                                                                        ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="1G2" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1G2">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <ul>
                                                                        <li><strong>Harga Sewa</strong> adalah harga yang
                                                                            harus dibayarkan oleh
                                                                            penyewa pada pemilik Kost secara rutin setiap
                                                                            jangka
                                                                            waktu tertentu. Sewa dapat dibayarkan per
                                                                            minggu, per
                                                                            bulan, per 3 bulan, per 6 bulan, hingga per
                                                                            tahun,
                                                                            tergantung ketentuan dari pemilik. </li>
                                                                        <li><strong>Deposit</strong> adalah uang jaminan
                                                                            yang diberikan oleh penyewa
                                                                            kepada pemilik Kost dan harus dibayarkan sebelum
                                                                            memulai
                                                                            masa sewa. Uang deposit akan dikembalikan kepada
                                                                            penyewa
                                                                            Kost saat sewa berakhir, dan bisa saja hangus
                                                                            sesuai
                                                                            kesepakatan awal antara penyewa dan pemilik
                                                                            Kost.
                                                                        </li>
                                                                        <li><strong>Down Payment (DP) atau Uang
                                                                                Muka</strong> adalah sebagian dari
                                                                            harga sewa yang dibayarkan terlebih dahulu oleh
                                                                            penyewa
                                                                            sebagai tanda jadi sewa. Sisa dari harga sewa
                                                                            setelah DP
                                                                            dapat dibayarkan pada saat penyewa check-in.
                                                                            Uang DP
                                                                            yang telah dibayarkan tidak bisa dikembalikan.
                                                                        </li>
                                                                        <li><strong>Tambahan</strong>Biaya adalah biaya
                                                                            selain harga sewa Kost yang
                                                                            akan masuk ke tagihan rutin. Ada atau tidaknya
                                                                            biaya ini
                                                                            dalam tagihan tergantung dari kebijakan
                                                                            masing-masing
                                                                            pemilik, dan biasanya mencakup layanan dan
                                                                            fasilitas di
                                                                            rumah Kost. Contoh: biaya kebersihan, biaya cuci
                                                                            baju,
                                                                            biaya parkir mobil, internet, dll. </li>
                                                                        <li><strong>Denda</strong> adalah biaya atas
                                                                            keterlambatan pembayaran sewa
                                                                            dan akan langsung dibebankan dalam tagihan yang
                                                                            harus
                                                                            Anda bayar. Ada atau tidaknya denda, jumlah hari
                                                                            keterlambatan yang dapat ditolerir, dan jumlah
                                                                            denda
                                                                            sepenuhnya tergantung dari kebijakan
                                                                            masing-masing
                                                                            pemilik. </li>
                                                                        <li><strong>Biaya Layanan</strong> adalah biaya
                                                                            administrasi yang dikenakan
                                                                            kepada penyewa agar Kost Jogja dapat terus
                                                                            menyediakan
                                                                            layanan ini bagi pengguna. </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!--- END COL -->
                                            </div>
                                            <!--- END ROW -->
                                        </div>

                                    </div>
                                </div>





                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-heading1Three">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1Three"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapse1Three"
                                            style="color: rgb(0, 0, 0)";>
                                            Atur Kebijakan Refund
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapse1Three" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-heading1Three">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel-group" id="accordion" role="tablist"
                                                        aria-multiselectable="true">

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1A3">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1A3" aria-expanded="false"
                                                                    aria-controls="collapse1A3"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Penyewa saya melakukan pembatalan sebelum check-in,
                                                                        apakah saya akan mendapatkan pembayaran ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1A3" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1A3">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <P>Apabila penyewa melakukan pembayaran melalui skema
                                                                        Down Payment (DP) dan Settlement, maka DP tidak akan
                                                                        dikembalikan ke penyewa dikarenakan DP bersifat
                                                                        tidak dapat dikembalikan (non-refundable). Untuk
                                                                        penyewa yang melakukan pembayaran dengan skema Full
                                                                        Payment, maka dana akan dikembalikan ke penyewa.</P>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1B3">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1B3" aria-expanded="false"
                                                                    aria-controls="collapse1B3"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Penyewa sudah check-in di Kost saya, namun mengajukan
                                                                        pembatalan. Apa yang harus saya lakukan ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1B3" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1B3">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Pembatalan dan pengembalian dana setelah penyewa
                                                                        melakukan check-in merupakan kesepakatan antara Anda
                                                                        sebagai pemilik Kost dengan penyewa. Namun, pihak
                                                                        Kost Jogja dapat membantu untuk prosesnya.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1C3">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1C3" aria-expanded="false"
                                                                    aria-controls="collapse1C3"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara mengubah tanggal masuk calon penyewa ?
                                                                    </p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1C3" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1C3">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Perubahan jadwal check-in (reschedule) merupakan
                                                                        kesepakatan antara Anda sebagai pemilik Kost dengan
                                                                        penyewa. Namun, pihak Kost Jogja dapat membantu
                                                                        prosesnya. Penyewa dapat menghubungi tim CS Kost
                                                                        Jogja
                                                                        maksimal H-1 sebelum tanggal check-in.</p>
                                                                    <P>Selanjutnya kami akan menghubungi Anda sebagai
                                                                        pemilik Kost untuk melakukan konfirmasi ulang dan
                                                                        membantu prosesnya apabila Anda menyetujui perubahan
                                                                        jadwal check-in tersebut.</P>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!--- END COL -->
                                            </div>
                                            <!--- END ROW -->
                                        </div>

                                    </div>
                                </div>





                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-heading1Four">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1Four"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapse1Four"
                                            style="color: rgb(0, 0, 0)";>
                                            Kelola Boking
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapse1Four" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-heading1Four">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel-group" id="accordion" role="tablist"
                                                        aria-multiselectable="true">

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1A4">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1A4" aria-expanded="false"
                                                                    aria-controls="collapse1A4"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara mengingatkan calon penyewa untuk
                                                                        membayar booking ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1A4" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1A4">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <ol>
                                                                        <p>Setelah Anda menyetujui pengajuan sewa seperti
                                                                            langkah-langkah ini, Anda bisa ingatkan calon
                                                                            penyewa untuk melakukan pembayaran sewa pertama,
                                                                            dengan cara sbb:</p>
                                                                        <li>Login sebagai Pemilik Kost di Kost Jogja.com.
                                                                        </li>
                                                                        <li>Klik menu Manajemen Kost di samping layar.</li>
                                                                        <li>Di bagian Manajemen Kost, klik Pengajuan Booking
                                                                        </li>
                                                                        <li>Pilih filter Tunggu Pembayaran.</li>
                                                                        <li>Pilih calon penyewa yang ingin Anda ingatkan,
                                                                            lalu Chat
                                                                            Calon Penyewa.</li>
                                                                        <li> Di langkah ini, Anda sudah masuk ke halaman
                                                                            percakapan
                                                                            (chatroom) dan bisa mengingatkan calon penyewa
                                                                            dengan
                                                                            mengirim chat.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1B4">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1B4" aria-expanded="false"
                                                                    aria-controls="collapse1B4"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara mengatur booking yang masuk ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1B4" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1B4">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Agar Anda lebih mudah dalam menyeleksi dan memilih
                                                                        penyewa yang akan menghuni Kost, Anda dapat mengatur
                                                                        dan menyesuaikan booking/pengajuan sewa mana saja
                                                                        yang ingin Anda terima. Berikut adalah cara untuk
                                                                        melakukan atur booking/pengajuan sewa:</p>
                                                                    <ol>
                                                                        <li>Login sebagai Pemilik Kost di Kost Jogja.com.
                                                                        </li>
                                                                        <li>Masuk ke halaman Atur Booking. Anda bisa masuk
                                                                            melalui
                                                                            dua cara:
                                                                            <ul>
                                                                                <li>Di halaman Home, arahkan ke bagian
                                                                                    Waktunya Mengelola
                                                                                    Kost, lalu klik Atur Booking.</li>
                                                                                <li>Di halaman Home, klik Manajemen Kost di
                                                                                    menu samping,
                                                                                    klik Pengajuan Booking, dan klik
                                                                                    Pengaturan.</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Pilih nama Kost.</li>
                                                                        <li> Lakukan pengaturan untuk booking/pengajuan sewa
                                                                            yang
                                                                            masuk sesuai preferensi Anda. Anda bisa
                                                                            mengatur:<ul>
                                                                                <li>Durasi sewa minimal. Tentukan berapa
                                                                                    durasi sewa minimal
                                                                                    yang bisa dipilih pencari Kost, untuk
                                                                                    setiap hitungan
                                                                                    sewa (bulanan, tahunan, dst.). Hitungan
                                                                                    sewa yang muncul
                                                                                    sesuai dengan yang Anda update di
                                                                                    halaman “Update
                                                                                    Harga”.</li>
                                                                                <li>Waktu mulai masuk Kost. Tentukan kapan
                                                                                    penyewa bisa mulai
                                                                                    masuk/check-in di Kost Anda dengan klik
                                                                                    “Ubah waktu”.
                                                                                    Anda bisa mengatur kapan waktu check-in
                                                                                    terdekat dan
                                                                                    terjauh yang bisa dipilih calon penyewa
                                                                                    ketika pengajuan
                                                                                    sewa.</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Klik Simpan untuk menyimpan pengaturan Anda,
                                                                            agar info
                                                                            tentang peraturan booking/pengajuan sewa yang
                                                                            Anda buat
                                                                            dapat tertampil di iklan Kost.</li>
                                                                        <li>Setelah Anda mengatur waktu mulai masuk Kost,
                                                                            berikut
                                                                            adalah contoh tampilan di iklan Kost yang akan
                                                                            dilihat
                                                                            oleh pencari Kost:</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1C4">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1C4" aria-expanded="false"
                                                                    aria-controls="collapse1C4"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara menerima permintaan booking ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1C4" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1C4">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Setiap ada calon penghuni Kost yang mengajukan
                                                                        booking, Anda akan mendapatkan notifikasi di ponsel
                                                                        Anda.</p>

                                                                    <p> halaman list permintaan booking, terdapat timer
                                                                        atau petunjuk batas waktu bagi Anda untuk melakukan
                                                                        konfirmasi terhadap permintaan booking yang belum
                                                                        Anda terima.</p>

                                                                    <p>Ada beberapa batasan waktu yang menyesuaikan jarak
                                                                        tanggal calon penyewa melakukan permintaan booking
                                                                        hingga tanggal check-in, yaitu:</p>
                                                                    <ol>
                                                                        <li>Tanggal check-in sama dengan tanggal permintaan
                                                                            booking calon penyewa = 06 jam. </li>
                                                                        <li>Tanggal check-in adalah besok atau kurang dari
                                                                            sama dengan 10 hari dari tanggal permintaan
                                                                            booking = 24 jam. </li>
                                                                        <li> Tanggal check-in lebih dari 10 hari dari
                                                                            tanggal permintaan booking = 96 jam. </li>
                                                                    </ol>
                                                                    <p>Berikut langkah langkah yang dapat Anda lakukan untuk
                                                                        menerima permintaan booking:</p>
                                                                    <ol>
                                                                        <li>Login sebagai pemilik Kost pada website Kost
                                                                            Jogja.com
                                                                        </li>
                                                                        <li>Klik Manajemen Kost di menu kiri, lalu klik
                                                                            Pengajuan Booking</li>
                                                                        <li>Klik Butuh Konfirmasi</li>
                                                                        <li>Pilih nama Kost yang ingin Anda respon pengajuan
                                                                            booking-nya</li>
                                                                        <li>Di bagian calon penyewa, klik Terima untuk
                                                                            menerima atau Tolak untuk menolak</li>
                                                                        <li>Masukkan nomor kamar untuk calon penyewa Kost
                                                                        </li>
                                                                        <li>Lengkapi seluruh detail pembayaran yang
                                                                            diperlukan, lalu klik Simpan</li>
                                                                        <li>Konfirmasi dari Anda sebagai pemilik Kost akan
                                                                            diteruskan kepada calon penyewa</li>
                                                                    </ol>
                                                                    <p>Setelah Anda mengonfirmasi booking calon penghuni,
                                                                        maka calon penghuni akan diberi batas waktu
                                                                        pembayaran 1×24 jam dari saat Anda menerima Booking.
                                                                    </p>
                                                                    <p>Ayo segera terima permintaan booking calon penyewa
                                                                        Kost Anda di sini.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1D4">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1D4" aria-expanded="false"
                                                                    aria-controls="collapse1D4"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara menolak Booking ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1D4" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1D4">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <ul>
                                                                        <li> Di setiap pengajuan sewa, Anda dapat klik
                                                                            “Konfirm” untuk menerima calon penyewa, dan
                                                                            “Tolak” untuk menolak. </li>
                                                                        <li> Silakan klik “Tolak” untuk menolak booking/
                                                                            pengajuan sewa. </li>
                                                                        <li> Silakan beri alasan penolakan sewa, sebagai
                                                                            feedback agar kami dapat menghubungkan pemilik
                                                                            dan pencari Kost dengan lebih baik lagi.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1E4">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1E4" aria-expanded="false"
                                                                    aria-controls="collapse1E4"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara menghubungi calon penyewa ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1E4" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1E4">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Anda dapat menghubungi calon penyewa dengan merespon
                                                                        chat yang dikirimkan melalui Chatroom KostJogja:
                                                                    </p>
                                                                    <ol>
                                                                        <li> Login akun pemilik Kost, kemudian pilih menu
                                                                            Chat pada halaman utama pemilik.</li>
                                                                        <li> Pilih chat dari calon penyewa yang ingin Anda
                                                                            respon dan kirimkan pesan Anda.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1F4">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1F4" aria-expanded="false"
                                                                    aria-controls="collapse1F4"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara mengetahui nomor telepon calon penyewa
                                                                        ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1F4" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1F4">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>KostJogja berusaha menjadi platform yang aman dan
                                                                        terpercaya bagi penggunanya. Untuk melindungi
                                                                        privasi pengguna KostJogja, kami tidak menampilkan
                                                                        nomor telepon calon penyewa Kost.</p>
                                                                    <p>Anda tetap dapat menghubungi calon penyewa dengan
                                                                        merespon chat yang dikirimkan melalui Chatroom
                                                                        KostJogja. Kami juga menyarankan agar Anda selalu
                                                                        berkomunikasi dengan calon penyewa menggunakan
                                                                        Chatroom KostJogja agar privasi Anda terlindungi.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!--- END COL -->
                                            </div>
                                            <!--- END ROW -->
                                        </div>

                                    </div>
                                </div>




                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-heading1Five">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1Five"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapse1Five"
                                            style="color: rgb(0, 0, 0)";>
                                            Kontrak Sewa
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapse1Five" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-heading1Five">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel-group" id="accordion" role="tablist"
                                                        aria-multiselectable="true">

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1A5">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1A5" aria-expanded="false"
                                                                    aria-controls="collapse1A5"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Apa itu kontrak sewa ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1A5" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1A5">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <P>Sistem KostJogja akan otomatis membuatkan kontrak
                                                                        sewa
                                                                        untuk Anda dan penyewa Kost baru berisi perjanjian
                                                                        sewa, tanggal masuk dan durasi sewa. Anda dapat
                                                                        menambahkan peraturan Kost di kontrak sewa ini.</P>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1B5">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1B5" aria-expanded="false"
                                                                    aria-controls="collapse1B5"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Apakah penyewa saya harus memiliki akun di KostJogja
                                                                        ?
                                                                    </p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1B5" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1B5">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Untuk keamanan transaksi dan pencatatan keuangan
                                                                        secara otomatis, disarankan agar setiap penyewa di
                                                                        Kost Anda sudah melakukan dua aktivitas berikut:
                                                                    </p>
                                                                    <ol>
                                                                        <li>Memiliki akun KostJogja </li>
                                                                        <li>Menghubungkan akunnya dengan sistem pembayaran
                                                                            dan kontrak di KostJogja.</li>
                                                                    </ol>
                                                                    <P>Untuk tahu apakah penyewa sudah terhubung ke sistem
                                                                        KostJogja, Anda bisa lihat ke daftar/list penyewa.
                                                                        Penyewa yang belum terhubung akan tertampil seperti
                                                                        ini:</P>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1C5">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1C5" aria-expanded="false"
                                                                    aria-controls="collapse1C5"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara melihat penyewa-penyewa di Kost saya ?
                                                                    </p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1C5" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1C5">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Anda bisa melihat informasi seputar penyewa Anda
                                                                        dengan cara sebagai berikut: </p>
                                                                    <ol>
                                                                        <li>Login sebagai Pemilik Kost pada aplikasi Kost
                                                                            Jogja versi terbaru.</li>
                                                                        <li>Klik menu Kelola di bagian bawah layar. </li>
                                                                        <li>Di bagian Manajemen Kost, klik Penyewa. </li>
                                                                        <li>Anda sudah bisa melihat nama-nama penyewa Anda.
                                                                            Pilih nama Kost yang ingin Anda lihat nama-nama
                                                                            penyewanya. </li>
                                                                        <li>
                                                                            Agar lebih mudah dalam melihat daftar penyewa,
                                                                            Anda bisa memfilternya berdasarkan status sewa
                                                                            penyewa. Filternya antara lain:
                                                                            <ul>
                                                                                <li>Kontrak aktif, menandakan penyewa yang
                                                                                    kontrak sewanya masih aktif.</li>
                                                                                <li>Akan masuk, menandakan penyewa yang
                                                                                    sudah membayar pengajuan sewa tapi belum
                                                                                    check-in.</li>
                                                                                <li>Menghentikan kontrak sewa, menandakan
                                                                                    penyewa yang mengajukan berhenti sewa.
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1D5">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1D5" aria-expanded="false"
                                                                    aria-controls="collapse1D5"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara menghentikan sewa ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1D5" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1D5">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Apabila karena satu dan lain hal Anda ingin
                                                                        menghentikan sewa sebelum kontraknya berakhir, Anda
                                                                        dapat melakukannya di halaman dashboard pemilik Kost
                                                                        > Kelola Tagihan > Detail Penyewa, di bagian
                                                                        terbawah Anda dapat klik “Akhiri Kontrak Sewa”. </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1E5">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1E5" aria-expanded="false"
                                                                    aria-controls="collapse1E5"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara menambahkan penyewa secara manual ?
                                                                    </p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1E5" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1E5">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <ul>
                                                                        <li>Anda dapat menyertakan penyewa yang tinggal di
                                                                            Kost Anda tapi belum terdaftar di KostJogja,
                                                                            untuk
                                                                            ikut dikelola dengan mudah dalam halaman Kelola
                                                                            Tagihan dan Booking di KostJogja. </li>
                                                                        <li>Dengan terdaftar di Kelola Tagihan dan Booking,
                                                                            Penyewa dapat ikut mendapatkan reminder/
                                                                            notifikasi untuk membayar uang sewa. Mereka
                                                                            dapat memilih untuk membayar langsung langsung
                                                                            pada Anda, atau melalui metode pembayaran yang
                                                                            ada di Aplikasi. Pendapatan dari pembayaran sewa
                                                                            mereka juga akan disertakan dalam laporan
                                                                            keuangan Anda di KostJogja. </li>
                                                                        <li>Anda dapat menambah penyewa secara manual
                                                                            melalui halaman dashboard pemilik > Tambah Data
                                                                            Penyewa Kost. Silakan isi biodata dan atur
                                                                            kontrak sesuai dengan Kost yang dihuni untuk
                                                                            mendaftarkan penyewa secara manual. </li>
                                                                        <li>Dengan terdaftar di Kelola Tagihan dan Booking,
                                                                            Penyewa dapat ikut mendapatkan reminder/
                                                                            notifikasi untuk membayar uang sewa. Mereka
                                                                            dapat memilih untuk membayar langsung langsung
                                                                            pada Anda, atau melalui metode pembayaran yang
                                                                            ada di Aplikasi. Pendapatan dari pembayaran sewa
                                                                            mereka juga akan disertakan dalam laporan
                                                                            keuangan Anda di KostJogja. </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1F5">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1F5" aria-expanded="false"
                                                                    aria-controls="collapse1F5"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Apa itu Tambah Kontrak Penyewa ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1F5" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1F5">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Tambah Kontrak Penyewa adalah fitur yang memungkinkan
                                                                        Anda sebagai pemilik Kost menambahkan penyewa yang
                                                                        tinggal di Kost Anda namun belum terdaftar di
                                                                        KostJogja. Dengan menambahkan penyewa tersebut,
                                                                        Anda
                                                                        akan semakin mudah mengelola setiap penyewa yang
                                                                        tinggal di Kost Anda melalui Manajamen Kost. </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1G5">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1G5" aria-expanded="false"
                                                                    aria-controls="collapse1G5"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara mengubah atau menambah informasi
                                                                        tentang penyewa Kost saya ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="1G5" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1G5">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <ol>
                                                                        <li>Klik foto akun Anda di pojok kanan atas halaman
                                                                            KostJogja.com, lalu pilih “Halaman Pemilik”
                                                                        </li>
                                                                        <li>Klik “Booking & Tagihan” </li>
                                                                        <li>Pilih bagian “Kelola Tagihan”, lalu cari nama
                                                                            penyewa yang ingin diubah informasinya. </li>
                                                                        <li>Klik tanda (titik tiga), pilih “Biodata”. </li>
                                                                        <li>Ubah atau tambah informasi yang Anda inginkan.
                                                                            Lalu, klik “Simpan”. </li>
                                                                        <li>Anda berhasil mengubah informasi penyewa.</li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1H5">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1H5" aria-expanded="false"
                                                                    aria-controls="collapse1H5"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara menerima data kontrak yang sudah diisi
                                                                        oleh penyewa ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1H5" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1H5">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Anda dapat menerima data kontrak dari formulir yang
                                                                        sebelumnya diisi oleh penyewa melalui aplikasi atau
                                                                        desktop dengan cara berikut: </p>
                                                                    <ol>
                                                                        <li>Anda akan secara otomatis mendapatkan notifikasi
                                                                            jika penyewa sudah mengisi formulir. </li>
                                                                        <li>Klik notifikasi tersebut, atau pada halaman
                                                                            utama KostJogja klik ikon notifikasi, kemudian
                                                                            klik notifikasi konfirmasi data penyewa. </li>
                                                                        <li>Anda juga dapat melihat info data kontrak yang
                                                                            sudah diisi oleh penyewa di halaman utama
                                                                            KostJogja bagian Kontrak Penyewa dengan klik
                                                                            Penyewa Mengajukan Kontrak. </li>
                                                                        <li>Anda dapat langsung klik Terima untuk menerima
                                                                            kontrak yang diajukan. Atau klik Lihat Data
                                                                            Penyewa untuk melihat data yang diisi oleh
                                                                            penyewa terlebih dahulu. </li>
                                                                        <li>Klik Terima jika formulir yang diisi sudah
                                                                            sesuai untuk menerima kontrak. </li>
                                                                        <li>Apabila pada formulir yang diisi penyewa tidak
                                                                            menginformasikan nomor kamar, Anda akan diminta
                                                                            untuk mengisi nomor kamar terlebih dahulu. Klik
                                                                            Simpan agar ketersediaan kamar berhasil Anda
                                                                            update. </li>
                                                                        <li>Apabila penyewa mengajukan perubahan harga sewa,
                                                                            Anda dapat menolak pengajuan tersebut dan
                                                                            menyesuaikan harga sewa sesuai dengan harga pada
                                                                            iklan Kost. Kemudian klik Lanjut. </li>
                                                                        <li>Anda berhasil menerima pengajuan kontrak dari
                                                                            penyewa. </li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1I5">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1I5" aria-expanded="false"
                                                                    aria-controls="collapse1I5"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Apakah saya bisa mengubah hitungan sewa dari kontrak
                                                                        penyewa?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1I5" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1I5">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Mohon maaf, saat ini Anda belum dapat mengubah
                                                                        hitungan sewa (mingguan/ bulanan/ tahunan) dari
                                                                        kontrak penyewa. Jika penyewa ingin melanjutkan
                                                                        kontrak sewa dan mengubah hitungan sewa, kami
                                                                        menyarankan agar penyewa mengajukan booking ulang
                                                                        pada Kost Anda dengan hitungan sewa yang diinginkan.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <!--- END COL -->
                                            </div>
                                            <!--- END ROW -->
                                        </div>

                                    </div>
                                </div>




                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-heading1Six">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1Six"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapse1Six"
                                            style="color: rgb(0, 0, 0)";>
                                            Kelola Tagihan
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapse1Six" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-heading1Six">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel-group" id="accordion" role="tablist"
                                                        aria-multiselectable="true">

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1A6">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1A6" aria-expanded="false"
                                                                    aria-controls="collapse1A6"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana agar penyewa saya dikirim tagihan secara
                                                                        otomatis ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1A6" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1A6">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Penyewa bisa dikirim tagihan secara otomatis jika
                                                                        penyewa sudah punya kontrak sewa yang tercatat di
                                                                        KostJogja. Agar penyewa mempunyai kontrak sewa,
                                                                        Anda
                                                                        bisa melalui salah satu dari dua cara berikut:</p>
                                                                    <ul>
                                                                        <li>Jika penyewa melakukan booking atau mengajukan
                                                                            sewa di KostJogja, kontrak sewa secara otomatis
                                                                            akan tercatat dan tagihan, dan Anda bisa
                                                                            langsung cek di halaman Penyewa. </li>
                                                                        <li>Jika penyewa tidak melakukan booking atau
                                                                            mengajukan sewa di KostJogja, Anda perlu
                                                                            menambah
                                                                            atau melakukan input data penyewa terlebih dulu
                                                                            ke KostJogja. </li>
                                                                    </ul>
                                                                    <p><strong>
                                                                            <h6>Bagaimana cara menambah/input data dan
                                                                                kontrak penyewa di Kost Jogja ?</h6>
                                                                        </strong></p>
                                                                    <p>Pilih salah satu dari dua cara berikut, dan klik
                                                                        link-nya untuk mengetahui tutorial lengkapnya:</p>
                                                                    <ol>
                                                                        <li>Minta penyewa untuk mengisi data dan kontrak
                                                                        </li>
                                                                        <li>Tambahkan data dan kontrak penyewa secara manual
                                                                        </li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1B6">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1B6" aria-expanded="false"
                                                                    aria-controls="collapse1B6"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana penagihan sewa Kost Booking Langsung ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1B6" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1B6">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <ul>
                                                                        <li>Tanggal penagihan adalah tenggat waktu di mana
                                                                            penyewa harus membayar tagihan sewa. Umumnya
                                                                            tanggal penagihan akan berulang mengikuti
                                                                            tanggal check in/ mulai sewa. </li>
                                                                        <li>Tagihan Kost pada penyewa dapat dilihat melalui
                                                                            Kelola Tagihan yang dapat diakses di halaman
                                                                            dashboard. </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1C6">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1C6" aria-expanded="false"
                                                                    aria-controls="collapse1C6"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara melihat tagihan penyewa Kost saya ?
                                                                    </p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1C6" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1C6">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p> Anda dapat melihat setiap tagihan dari penyewa Kost
                                                                        melalui cara berikut:</p>
                                                                    <ol>
                                                                        <li>Login akun pemilik Kost </li>
                                                                        <li>
                                                                            Pada dashboard pemilik bagian Tagihan Penyewa
                                                                            sistem akan menampilkan tagihan dari penyewa
                                                                            Anda dengan beberapa status, diantaranya:
                                                                            <ul>
                                                                                <li>
                                                                                    <strong>Belum Bayar</strong>
                                                                                    Status ini menampilkan semua tagihan
                                                                                    yang belum dibayarkan oleh penyewa pada
                                                                                    kontrak yang aktif (kecuali pembayaran
                                                                                    pertama untuk Booking Kost).
                                                                                </li>
                                                                                <li>
                                                                                    <strong>Di KostJogja</strong> Status
                                                                                    ini
                                                                                    menampilkan semua tagihan yang sudah
                                                                                    dibayarkan oleh penyewa melalui
                                                                                    KostJogja
                                                                                    dan akan diteruskan ke rekening Anda.
                                                                                </li>
                                                                                <li>
                                                                                    <strong>Ditransfer</strong>
                                                                                    Status ini menampilkan semua tagihan
                                                                                    yang sudah diterima oleh pemilik Kost.
                                                                                    Baik yang sudah dibayarkan melalui
                                                                                    KostJogja dan ditransfer ke rekening
                                                                                    pemilik serta yang dibayarkan langsung
                                                                                    ke pemilik Kost dan ditandai “Bayar di
                                                                                    Luar Aplikasi”.
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Selanjutnya klik Lihat Tagihan Penyewa untuk
                                                                            melihat daftar tagihan sewa dari semua penyewa
                                                                            Anda. </li>
                                                                        <li>Daftar tagihan penyewa akan tampil pada halaman
                                                                            ini. Anda juga dapat melakukan filter untuk
                                                                            memudahkan pencarian tagihan yang lebih spesifik
                                                                            pada setiap properti Anda. </li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1D6">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#pemilik1D6" aria-expanded="false"
                                                                    aria-controls="collapse1D6"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara mengingatkan penyewa yang belum
                                                                        membayar tagihan Kost ?</p>
                                                                </a>
                                                            </div>
                                                            <div id="pemilik1D6" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1D6">
                                                                <div class="panel-body" style="font-weight:lighter;">
                                                                    <p>Pada fitur Kelola Tagihan Penyewa, Anda dapat
                                                                        menggunakan fitur Ingatkan Penyewa untuk mengirimkan
                                                                        notifikasi pengingat tagihan kepada penyewa Anda.
                                                                    </p>
                                                                    <p>Ada beberapa cara yang dapat Anda lakukan untuk
                                                                        mengingatkan penyewa membayar tagihan Kost,
                                                                        diantaranya:</p>
                                                                    <ol>
                                                                        <li>Pada halaman Kelola Tagihan Penyewa Anda dapat
                                                                            memilih tab Belum Bayar, kemudian klik Ingatkan
                                                                            pada penyewa yang ingin Anda ingatkan. </li>
                                                                        <li>Lanjutkan dengan klik Ya, Ingatkan untuk
                                                                            mengirim notifikasi ke penyewa. </li>
                                                                        <li>Anda juga dapat mengingatkan penyewa melalui
                                                                            detail tagihan. Pilih detail tagihan penyewa,
                                                                            kemudian klik Ingatkan Penyewa untuk Bayar.
                                                                        </li>
                                                                        <li>Lanjutkan dengan klik Ya, Ingatkan untuk
                                                                            mengirim notifikasi ke penyewa. </li>
                                                                        <li>Jika penyewa membayar uang Kost secara langsung,
                                                                            Anda dapat centang ‘Bayar di Luar Aplikasi’.
                                                                        </li>
                                                                    </ol>
                                                                    <p>Sebagai informasi, Anda hanya dapat mengingatkan
                                                                        penyewa satu kali untuk setiap penyewa dalam satu
                                                                        hari. Jadi, jika Anda sudah mengirimkan notifikasi
                                                                        pengingat tagihan kepada penyewa, Anda baru bisa
                                                                        mengingatkan kembali keesokan harinya.</p>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <!--- END COL -->
                                            </div>
                                            <!--- END ROW -->
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>



                        {{-- Fitur & Layanan Lainnya --}}
                        <div class="col-lg-15">
                            <div class="tab-content">
                                <div class="tab-pane" id="fitur">
                                    <h3> Fitur & Layanan Lainnya</h3>

                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-heading2One">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapse2One" aria-expanded="true"
                                                    aria-controls="panelsStayOpen-collapse2One"
                                                    style="color: rgb(0, 0, 0)";>
                                                    Statistik Iklan
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapse2One" class="accordion-collapse collapse show"
                                                aria-labelledby="panelsStayOpen-heading2One">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel-group" id="accordion" role="tablist"
                                                                aria-multiselectable="true">

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading2A">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik2A"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse2A"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Apa itu Statistik Iklan dan bagaimana cara
                                                                                pakainya ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik2A" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading2A">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Statistik Iklan adalah menu di dalam MamiAds
                                                                                di mana Anda dapat mengecek riwayat
                                                                                pemakaian saldo iklan dan data yang
                                                                                diperoleh oleh iklan dalam periode yang bisa
                                                                                Anda tentukan sendiri. Data yang bisa
                                                                                dilihat adalah:</p>
                                                                            <ol>
                                                                                <li>Total Klik: Jumlah kunjungan atau klik
                                                                                    yang diterima iklan Anda.</li>
                                                                                <li>Saldo Terpakai: Jumlah Saldo MamiAds
                                                                                    yang telah dipakai oleh iklan Anda.
                                                                                </li>
                                                                                <li>Total Favorit: Jumlah pengguna yang
                                                                                    menyukai iklan Anda. </li>
                                                                                <li>Biaya Iklan/Klik: Harga satu kali
                                                                                    kunjungan/klik iklan Anda.</li>
                                                                            </ol>
                                                                            <p>Berikut cara melihat Statistik Iklan:</p>
                                                                            <ol>
                                                                                <li>Login akun pemilik, kemudian di halaman
                                                                                    utama pada menu MamiAds, klik Statistik
                                                                                    Iklan</li>
                                                                                <li>Anda dapat melihat akumulasi data
                                                                                    statistik dari semua iklan Anda di sini
                                                                                </li>
                                                                                <li>Untuk melihat statistik dari
                                                                                    masing-masing iklan, pilih properti Anda
                                                                                </li>
                                                                                <li>Anda dapat melihat statistik berdasarkan
                                                                                    waktu dengan klik periode yang tersedia
                                                                                </li>
                                                                                <li>Anda dapat melihat data klik, saldo
                                                                                    terpakai, favorit dan biaya iklan dengan
                                                                                    geser ke kiri</li>
                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!--- END COL -->
                                                    </div>
                                                    <!--- END ROW -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-heading2Two">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapse2Two" aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapse2Two"
                                                    style="color: rgb(0, 0, 0)";>
                                                    Bayar Kost Langsung
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapse2Two" class="accordion-collapse collapse"
                                                aria-labelledby="panelsStayOpen-heading2Two">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel-group" id="accordion" role="tablist"
                                                                aria-multiselectable="true">

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading2A2">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik2A2"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse2A2"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Apa itu Bayar Kost Langsung bagi pemilik ?
                                                                            </p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik2A2" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading2A2">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Bayar Kost Langsung adalah fitur terbaru
                                                                                KostJogja yang mempermudah calon penyewa
                                                                                memesan Kost Anda. Melalui fitur ini calon
                                                                                penyewa dapat memesan dan membayar Kost
                                                                                sekaligus dengan scan kode QR Kost Anda.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading2B2">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik2B2"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse2B2"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Apa keuntungan menggunakan Bayar Kost
                                                                                Langsung
                                                                                untuk pemilik Kost ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik2B2" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading2B2">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Dengan menggunakan Bayar Kost Langsung,
                                                                                proses
                                                                                pemesanan dan pembayaran menjadi lebih
                                                                                mudah. Anda hanya perlu menunjukkan kode QR
                                                                                kepada calon penyewa yang datang survey ke
                                                                                Kost Anda. Prosesnya menjadi lebih mudah dan
                                                                                kamar Kost lebih cepat tersewa.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading2C2">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik2C2"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse2C2"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Apa syarat dan ketentuan untuk mendapatkan
                                                                                Bayar Kost Langsung ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik2C2" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading2C2">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Bayar Kost Langsung bisa Anda dapatkan jika
                                                                                Kost Anda sudah terdaftar Booking Langsung.
                                                                                Pastikan juga Anda menggunakan aplikasi
                                                                                KostJogja versi terbaru dan mengaktifkan
                                                                                kode
                                                                                QR Anda. </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading2D2">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik2D2"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse2D2"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Apa saja tips yang perlu saya ketahui untuk
                                                                                menggunakan fitur ini ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik2D2" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading2D2">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <ul>
                                                                                <li>Pastikan Anda telah setuju untuk
                                                                                    menerima calon penyewa untuk menyewa
                                                                                    Kost
                                                                                    Anda sebelum menunjukkan kode QR Anda.
                                                                                </li>
                                                                                <li>Jangan lupa untuk update ketersediaan
                                                                                    kamar, harga dan informasi lain Kost
                                                                                    Anda. Ketersediaan kamar yang tidak
                                                                                    sesuai mungkin akan menyebabkan calon
                                                                                    penyewa mengalami kendala saat proses
                                                                                    pemesanan Kost. </li>
                                                                                <li>Dampingi serta pandu calon penyewa dalam
                                                                                    pengisian kontrak sewa untuk antisipasi
                                                                                    terjadinya kesalahan pada tagihan sewa
                                                                                    Kost. </li>
                                                                                <li>Jika Anda tidak sedang berada di Kost,
                                                                                    Anda dapat membagikan kode QR dan
                                                                                    memberikan tanggung jawab untuk memandu
                                                                                    calon penyewa kepada penjaga Kost Anda.
                                                                                </li>
                                                                                <li>Anda dapat mengatur ulang (reset) kode
                                                                                    QR yang Anda miliki kapan saja, maksimal
                                                                                    1 hari 1 kali, sehingga Kode QR
                                                                                    sebelumnya tidak dapat digunakan lagi.
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading2E2">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik2E2"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse2E2"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara mengaktifkan fitur Bayar Kost
                                                                                Langsung ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik2E2" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading2E2">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Berikut langkah-langkah untuk mengaktifkan
                                                                                fitur Bayar Kost Langsung: </p>
                                                                            <ol>
                                                                                <li>Pastikan Kost Anda sudah terdaftar
                                                                                    Booking Langsung di KostJogja.
                                                                                    Informasi
                                                                                    lebih lanjut terkait Booking Langsung
                                                                                    dapat Anda cek KostJogja.com </li>
                                                                                <li>Setiap Kost yang terdaftar Booking
                                                                                    Langsung secara otomatis mendapatkan
                                                                                    kode QR yang dapat dilihat pada halaman
                                                                                    profil Anda. </li>
                                                                                <li>Pastikan Anda menggunakan aplikasi
                                                                                    KostJogja versi terbaru untuk dapat
                                                                                    mengakses fitur ini. </li>
                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading2F2">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik2F2"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse2F2"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Mengapa Kode QR saya tidak dapat
                                                                                discan/digunakan ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik2F2" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading2F2">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Jika calon penyewa tidak dapat melakukan scan
                                                                                kode QR Anda, ada kemungkinan Anda telah
                                                                                mengatur ulang kode QR Anda sebelumnya.
                                                                                Pengaturan ulang kode QR menyebabkan kode
                                                                                yang sebelumnya otomatis tergantikan. </p>
                                                                            <p>Namun jika Anda sudah memastikan calon
                                                                                penyewa melakukan scan kode QR yang tepat
                                                                                dan tetap tidak dapat digunakan, Anda dapat
                                                                                menghubungi tim CS KostJogja untuk
                                                                                dilakukan
                                                                                pengecekan lebih lanjut.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <!--- END COL -->
                                                    </div>
                                                    <!--- END ROW -->
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>



                        {{-- Akun --}}
                        <div class="col-lg-15">
                            <div class="tab-content">
                                <div class="tab-pane" id="akun">
                                    <h3> Akun</h3>

                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-heading3One">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapse3One" aria-expanded="true"
                                                    aria-controls="panelsStayOpen-collapse3One">
                                                    Pendaftaran Akun
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapse3One"
                                                class="accordion-collapse collapse show"
                                                aria-labelledby="panelsStayOpen-heading3One">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel-group" id="accordion" role="tablist"
                                                                aria-multiselectable="true">

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3A">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik3A"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3A"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara daftar akun pemilik Kost ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik3A" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading3A">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Berikut cara mendaftar akun pemilik Kost di
                                                                                KostJogja:</p>
                                                                            <ol>
                                                                                <li>Pada halaman utama KostJogja pilih menu
                                                                                    <strong>Masuk</strong>
                                                                                </li>
                                                                                <li>Pilih <strong>Pemilik Kost</strong>
                                                                                </li>
                                                                                <li>Klik <strong>Daftar Sekarang</strong>
                                                                                </li>
                                                                                <li>Lengkapi form pendaftaran, lanjutkan
                                                                                    dengan klik <strong>Daftar</strong>
                                                                                </li>
                                                                                <li>Selamat, Anda telah memiliki akun
                                                                                    sebagai pemilik Kost!</li>
                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <!--- END COL -->
                                                    </div>
                                                    <!--- END ROW -->
                                                </div>
                                            </div>
                                        </div>


                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-heading3Two">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapse3Two" aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapse3Two">
                                                    Pengaturan
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapse3Two" class="accordion-collapse collapse"
                                                aria-labelledby="panelsStayOpen-heading3Two">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel-group" id="accordion" role="tablist"
                                                                aria-multiselectable="true">

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3A2">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik3A2"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3A2"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara mengubah password akun
                                                                                pemilik?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik3A2" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading3A2">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Apabila Anda mendaftar sebagai pemilik Kost
                                                                                menggunakan nomor telepon, Anda dapat
                                                                                mengubah password dengan cara sebagai
                                                                                berikut:</p>
                                                                            <ol>
                                                                                <li>Login akun pemilik Kost, kemudian pilih
                                                                                    menu <strong>Setelan Akun</strong> pada
                                                                                    halaman utama pemilik sebelah kiri.</li>
                                                                                <li>Klik <strong>Ubah Password</strong>,
                                                                                    kemudian masukkan password lama dan
                                                                                    password baru Anda.</li>
                                                                                <li>Simpan perubahan yang telah dilakukan
                                                                                    dengan klik <strong>Submit Password
                                                                                        Baru.</strong></li>
                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3B2">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik3B2"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3B2"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Saya lupa password akun pemilik, apa yang
                                                                                harus saya lakukan ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik3B2" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading3B2">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Jika Anda lupa password akun pemilik Kost
                                                                                Anda, ikuti langkah berikut melalui aplikasi
                                                                                KostJogja: </p>
                                                                            <ol>
                                                                                <li>Pada halaman utama KostJogja klik
                                                                                    <strong>Masuk</strong>,
                                                                                    kemudian pilih login sebagai
                                                                                    <strong>Pemilik Kost</strong>
                                                                                </li>
                                                                                <li>Klik <strong>Lupa Password</strong>
                                                                                </li>
                                                                                <li>Masukkan nomor HP yang terdaftar dan
                                                                                    terverifikasi di akun Anda, kemudian
                                                                                    klik <strong>Pilih metode
                                                                                        verifikasi</strong> </li>
                                                                                <li>Anda dapat memilih metode verifikasi
                                                                                    yang Anda inginkan</li>
                                                                                <li>Masukkan kode verifikasi yang dikirimkan
                                                                                    oleh KostJogja melalui SMS/ WA sesuai
                                                                                    dengan metode yang sebelumnya dipilih
                                                                                </li>
                                                                                <li> Buat password baru untuk akun Anda,
                                                                                    kemudian klik <strong>Simpan</strong>
                                                                                </li>
                                                                                <li>Password berhasil diubah. Apabila ingin
                                                                                    melakukan perubahan kembali, Anda dapat
                                                                                    ganti password melalui menu
                                                                                    <strong>Profil</strong>, klik
                                                                                    <strong>Informasi Pribadi</strong>,
                                                                                    kemudian pilih
                                                                                    <strong>Password.</strong>
                                                                                </li>
                                                                                <p>Langkah di atas hanya dapat dilakukan
                                                                                    jika nomor HP Anda terdaftar dan telah
                                                                                    terverifikasi pada satu akun. Apabila
                                                                                    nomor HP Anda terduplikasi pada akun
                                                                                    Anda yang lain, silakan ikuti panduan
                                                                                    berikut ini.</p>
                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3C2">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik3C2"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3C2"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara mengubah nomor telepon pada
                                                                                akun pemilik ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik3C2" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading3C2">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Berikut langkah untuk ubah nomor telepon pada
                                                                                akun pemilik Anda:</p>
                                                                            <ol>
                                                                                <li>Login akun pemilik Kost, kemudian pilih
                                                                                    menu <strong>Profile.</strong> </li>
                                                                                <li>Klik kolom <strong>No telepon</strong>,
                                                                                    pilih metode
                                                                                    pengiriman kode verifikasi yang Anda
                                                                                    inginkan melalui email atau nomor
                                                                                    telepon lama. </li>
                                                                                <li>Klik <strong>Kode Verifikasi</strong>
                                                                                    dan masukkan kode
                                                                                    verifikasi yang telah dikirimkan oleh
                                                                                    KostJogja. </li>
                                                                                <li>Lanjutkan dengan klik
                                                                                    <strong>Verifikasi.</strong>
                                                                                </li>
                                                                            </ol>
                                                                            <p>Verifikasi ulang dibutuhkan untuk keamanan
                                                                                akun dan memastikan perubahan tersebut
                                                                                dilakukan sepenuhnya oleh Anda sebagai
                                                                                pemilik akun. Apabila masih ada kendala,
                                                                                silakan hubungi CS KostJogja melalui
                                                                                WhatsApp
                                                                                089-837-373-83 Anda juga dapat kirim email
                                                                                ke Kostjogja@gmail.com </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3D2">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik3D2"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3D2"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara mengubah email akun pemilik ?
                                                                            </p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik3D2" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading3D2">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Anda dapat menambahkan/ mengubah email pada
                                                                                akun pemilik dengan cara sebagai berikut:
                                                                            </p>
                                                                            <ol>
                                                                                <li>Login akun pemilik Kost, kemudian pilih
                                                                                    menu <strong>Setelan Akun</strong> pada
                                                                                    halaman utama pemilik sebelah kiri.
                                                                                </li>
                                                                                <li>Klik <strong>Edit Email </strong>dan
                                                                                    masukkan email baru yang ingin Anda
                                                                                    tambahkan/ ubah. </li>
                                                                                <li>Simpan perubahan yang telah dilakukan
                                                                                    dengan klik <strong>Submit Email
                                                                                        Baru.</strong></li>
                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3E2">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik3E2"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3E2"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara mengubah data pada profil akun
                                                                                pemilik saya ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik3E2" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading3E2">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Anda dapat mengubah data pada profil akun
                                                                                pemilik Anda dengan cara sebagai berikut:
                                                                            </p>
                                                                            <ol>
                                                                                i>Login akun pemilik Kost, kemudian pilih
                                                                                menu <strong>Halaman Profil</strong>.
                                                                                </li>
                                                                                <li>Klik <strong>Edit Profil</strong> dan
                                                                                    masukkan data yang ingin Anda ubah.
                                                                                </li>
                                                                                <li>Simpan perubahan yang telah dilakukan
                                                                                    dengan klik <strong>Simpan</strong>.
                                                                                </li>
                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3F2">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik3F2"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3F2"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara mengelola notifikasi akun
                                                                                pemilik yang dikirimkan untuk saya ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik3F2" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading3F2">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Anda dapat mengelola notifikasi akun pemilik
                                                                                melalui aplikasi dan website dengan cara
                                                                                sebagai berikut:</p>
                                                                            <ol>
                                                                                <li>Login akun pemilik Kost, kemudian pilih
                                                                                    menu<strong>Setelan Akun</strong>pada
                                                                                    halaman utama pemilik sebelah kiri.
                                                                                    <strong>Profil</strong>.
                                                                                </li>
                                                                                <li>Centang notifikasi yang ingin Anda
                                                                                    terima dan hilangkan centang untuk
                                                                                    menonaktifkan notifikasi.</li>
                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3G2">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik3G2"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3G2"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana jika notifikasi pada akun pemilik
                                                                                terlambat tampil ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik3G2" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading3G2">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Notifikasi terlambat/ tidak tampil dapat
                                                                                disebabkan pengaturan notifikasi pada akun
                                                                                pemilik Anda nonaktifkan. Pastikan Anda
                                                                                telah mengaktifkan notifikasi yang ingin
                                                                                ditampilkan. Cek caranya di sini.</p>
                                                                            <p>Apabila Anda sudah memastikan hal tersebut
                                                                                namun notifikasi masih terlambat/ tidak
                                                                                tampil, hal ini juga bisa disebabkan oleh
                                                                                pengaturan pada perangkat Anda, khususnya
                                                                                pada perangkat Android. Jika hal ini
                                                                                terjadi, kami sarankan Anda untuk mencoba
                                                                                beberapa hal berikut untuk mengatasinya:</p>
                                                                            <ol>
                                                                                <li>
                                                                                    <h6>Restart perangkat</h6>
                                                                                    <P>Langkah awal mengatasi hal ini adalah
                                                                                        dengan melakukan restart pada
                                                                                        perangkat Anda untuk refresh/ memuat
                                                                                        ulang sistem pada perangkat Anda.
                                                                                    </P>
                                                                                </li>
                                                                                <li>
                                                                                    <h6>Re-login akun KostJogja</h6>
                                                                                    <p>Cara selanjutnya adalah dengan
                                                                                        mencoba logout akun pada aplikasi
                                                                                        KostJogja kemudian login kembali.
                                                                                    </p>
                                                                                </li>
                                                                                <li>
                                                                                    <h6>Re-install aplikasi KostJogja</h6>
                                                                                    <p>Anda juga dapat mencoba untuk
                                                                                        melakukan uninstall kemudian install
                                                                                        kembali aplikasi KostJogja pada
                                                                                        perangkat Anda. Pastikan aplikasi
                                                                                        yang Anda install merupakan versi
                                                                                        paling terbaru.</p>
                                                                                </li>
                                                                                <li>
                                                                                    <h6>Aktifkan fungsi “Auto Start/ Mulai
                                                                                        Otomatis”</h6>
                                                                                    <p>Anda dapat melakukannya dengan masuk
                                                                                        ke Pengaturan/ Setting pada
                                                                                        perangkat, lalu pilih menu
                                                                                        Pengaturan Lainnya/ More Setting,
                                                                                        dan aktifkan tombol Mulai Otomatis/
                                                                                        Auto Start. Langkah ini dapat
                                                                                        berbeda pada setiap perangkat.
                                                                                        Dengan mengaktifkan fungsi ini,
                                                                                        aplikasi KostJogja akan secara
                                                                                        otomatis memulai setelah Anda
                                                                                        melakukan restart/ reboot perangkat
                                                                                        Anda.</p>
                                                                                </li>
                                                                                <li>
                                                                                    <h6>Cek mode “Do Not Disturb/ Jangan
                                                                                        Ganggu”</h6>
                                                                                    <p>Notifikasi terlambat/ tidak tampil
                                                                                        juga dapat disebabkan oleh mode “Do
                                                                                        Not Disturb/ Jangan Ganggu” aktif
                                                                                        pada perangkat Anda. Atur ulang dan
                                                                                        non-aktifkan mode tersebut untuk
                                                                                        menghindari notifikasi terlambat/
                                                                                        tidak tampil.</p>
                                                                                </li>
                                                                                <li>
                                                                                    <h6>Cek fungsi notifikasi dan background
                                                                                        data</h6>
                                                                                    <p>Cek kembali pengaturan notifikasi
                                                                                        aplikasi KostJogja di perangkat
                                                                                        Anda
                                                                                        dan pastikan Background Data
                                                                                        aplikasi KostJogja Anda aktif.</p>
                                                                                </li>
                                                                                <li>
                                                                                    <h6>Nonaktifkan fungsi “Penghemat Daya”
                                                                                    </h6>
                                                                                    <p>Penyebab lain notifikasi terlambat/
                                                                                        tidak tampil adalah fungsi
                                                                                        “Penghemat Daya” pada perangkat Anda
                                                                                        aktif. Atur ulang fungsi ini dan
                                                                                        non-aktifkan penghemat daya untuk
                                                                                        aplikasi KostJogja agar notifikasi
                                                                                        dapat tampil.</p>
                                                                                </li>
                                                                                <li>
                                                                                    <h6>Cek fungsi “Data Saver” dan pastikan
                                                                                        dalam keadaan nonaktif</h6>
                                                                                    <P>Fungsi “Data Saver” yang aktif
                                                                                        membatasi jumlah penggunaan data
                                                                                        pada aplikasi saat Anda tidak
                                                                                        menggunakan wi-fi. Namun hal ini
                                                                                        juga dapat menjadi penyebab
                                                                                        notifikasi terlambat/ tidak tampil.
                                                                                    </P>
                                                                                </li>
                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <!--- END COL -->
                                                    </div>
                                                    <!--- END ROW -->
                                                </div>
                                            </div>
                                        </div>


                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapseThree">
                                                    Verifikasi
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="panelsStayOpen-headingThree">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel-group" id="accordion" role="tablist"
                                                                aria-multiselectable="true">

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3A3">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik3A3"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3A3"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Mengapa saya harus verifikasi akun dan
                                                                                identitas sebagai pemilik ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik3A3" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading3A3">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Verifikasi akun dan identitas dilakukan
                                                                                sebagai tindakan pencegahan peretasan akun.
                                                                                Selain itu verifikasi akun dan identitas
                                                                                juga membantu tim KostJogja dalam
                                                                                memastikan
                                                                                keaslian identitas Anda dan memastikan
                                                                                KostJogja menjadi platform yang aman tanpa
                                                                                tindak penipuan, dan sebagainya.</p>
                                                                            <p>Sebagai pemilik Kost, verifikasi akun dan
                                                                                identitas akan memengaruhi tayang atau
                                                                                tidaknya iklan Kost Anda.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3B3">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik3B3"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3B3"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara verifikasi identitas sebagai
                                                                                pemilik ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik3B3" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading3B3">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Anda dapat melakukan verifikasi akun sebagai
                                                                                pemilik Kost melalui aplikasi dengan cara
                                                                                sebagai berikut: </p>
                                                                            <ol>
                                                                                <li>Login akun pemilik Kost, kemudian pilih
                                                                                    menu <strong>Profile</strong>di bagian
                                                                                    bawah </li>
                                                                                <li>Klik <strong>Informasi Pribadi</strong>
                                                                                </li>
                                                                                <li>Pada bagian Kartu Identitas,
                                                                                    <strong>klik Tambahkan</strong>
                                                                                </li>
                                                                                <li>Foto kartu identitas dan selfie dengan
                                                                                    menggunakan identitas tersebut </li>
                                                                                <li>Jika tidak memiliki KTP, Anda dapat
                                                                                    menggunakan kartu identitas lainnya
                                                                                    dengan klik Pilih kartu identitas,
                                                                                    <strong>pilih kartu identitas</strong>
                                                                                    yang akan dimasukkan kemudian klik
                                                                                    <strong>Simpan</strong>
                                                                                </li>
                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3C3">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik3C3"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3C3"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Apakah identitas yang saya berikan saat
                                                                                proses verifikasi sebagai pemilik terjamin
                                                                                keamanannya?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik3C3" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading3C3">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Kami sangat menjaga privasi Anda sebagai
                                                                                pemilik dan pengguna KostJogja lainnya.
                                                                                Informasi yang Anda berikan selama proses
                                                                                verifikasi akun dan identitas diatur dalam
                                                                                Kebijakan Privasi kami. </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3D3">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik3D3"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3D3"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Mengapa saya tidak bisa verifikasi akun
                                                                                pemilik?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik3D3" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading3D3">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Pastikan hal berikut agar akun pemilik Kost
                                                                                Anda dapat diverifikasi: </p>
                                                                            <ol>
                                                                                <li>Alamat email dan nomor telepon yang
                                                                                    digunakan sudah sesuai dan belum
                                                                                    digunakan pada akun lain. </li>
                                                                                <li>Email yang dikirim oleh KostJogja
                                                                                    adalah
                                                                                    email verifikasi terbaru dan link
                                                                                    verifikasi belum kedaluwarsa. </li>
                                                                                <li>Kode verifikasi yang dimasukkan sudah
                                                                                    sesuai. </li>
                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                {{-- <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3E3">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik3E3"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3E3"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik3E3"
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading3E3">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p> </p>
                                                                            <ol>
                                                                                <li> </li>
                                                                                <li> </li>
                                                                                <li> </li>
                                                                                <li> </li>
                                                                                <li> </li>
                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                </div> --}}

                                                            </div>
                                                        </div>
                                                        <!--- END COL -->
                                                    </div>
                                                    <!--- END ROW -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>



                        {{-- Property Kost --}}
                        <div class="col-lg-15">
                            <div class="tab-content">
                                <div class="tab-pane" id="property">
                                    <h3> Property Kost</h3>

                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-heading4One">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapse4One" aria-expanded="true"
                                                    aria-controls="panelsStayOpen-collapse4One">
                                                    Property Kost
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapse4One"
                                                class="accordion-collapse collapse show"
                                                aria-labelledby="panelsStayOpen-heading4One">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel-group" id="accordion" role="tablist"
                                                                aria-multiselectable="true">

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading4A">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik4A"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse4A"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana iklan yang direkomendasikan oleh
                                                                                Kost Jogja ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik4A" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading4A">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Berikut beberapa hal yang kami rekomendasikan
                                                                                ketika membuat iklan Kost: </p>
                                                                            <ul>
                                                                                <li>Tulis informasi Kost dengan lengkap dan
                                                                                    sesuai dengan keadaan Kost Anda. </li>
                                                                                <li>Masukkan foto Kost yang menarik dan
                                                                                    dalam
                                                                                    posisi landscape, tanpa editan, serta
                                                                                    jelas agar calon penyewa lebih mudah
                                                                                    mendapatkan gambaran keadaan Kost Anda.
                                                                                </li>
                                                                                <li>Pastikan setiap data yang dimasukkan
                                                                                    lengkap dan sesuai format untuk
                                                                                    mempercepat proses verifikasi iklan.
                                                                                </li>
                                                                                <li>Update iklan Kost Anda secara berkala
                                                                                    untuk menghindari terjadi perbedaan
                                                                                    antara iklan dan Kost Anda.</li>
                                                                            </ul>
                                                                            <p>Anda juga dapat mengaktifkan beberapa fitur
                                                                                di KostJogja seperti Booking Langsung,
                                                                                Premium, atau fitur dan layanan lainnya agar
                                                                                pencari Kost lebih tertarik, percaya, dan
                                                                                mudah menemukan iklan Anda.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading4B">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik4B"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse4B"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Apa tips foto Kost agar menarik dan mudah
                                                                                diverifikasi admin ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik4B" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading4B">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Dalam mencari Kost idaman mereka, para
                                                                                pencari
                                                                                Kost akan lebih tertarik untuk menghubungi
                                                                                Kost yang memiliki banyak foto menarik, dan
                                                                                mudah dilihat. Di sisi lain, pada saat Anda
                                                                                mendaftarkan Kost, tim admin KostJogja
                                                                                harus
                                                                                melakukan verifikasi agar data Kost dan
                                                                                fotonya benar, dapat dipertanggung-jawabkan,
                                                                                dan mudah dilihat di KostJogja. </p>
                                                                            <p>Agar foto Kost gampang langsung diverifikasi
                                                                                oleh admin, pastikan foto yang akan Anda
                                                                                upload telah memenuhi syarat-syarat berikut
                                                                                ini, yaitu: </p>
                                                                            <ol>
                                                                                <li>Diupload sesuai dengan sectionnya </li>
                                                                                <li>Foto semua fasilitas yang terdaftar
                                                                                </li>
                                                                                <li>Pastikan foto tidak terbalik </li>
                                                                                <li>Tidak ada teks dan logo selain
                                                                                    KostJogja
                                                                                </li>
                                                                                <li>Tidak boleh ada frame dan berbentuk
                                                                                    kolase </li>
                                                                                <li>Tidak boleh berbentuk screenshot </li>
                                                                                <li>Resolusi baik, terang, dan jelas </li>
                                                                                <li>Tidak ada orang </li>
                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading4C">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik4C"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse4C"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara mendaftarkan data Kost baru ?
                                                                            </p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik4C" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading4C">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Untuk mendaftarkan Kost, Anda akan diminta
                                                                                mengisi informasi Kost dengan lengkap pada
                                                                                menu Tambah Data Kost. Ada pun informasi
                                                                                Kost
                                                                                tersebut diantaranya adalah: </p>
                                                                            <ol>
                                                                                <li>Data Kost </li>
                                                                                <li>Alamat Kost </li>
                                                                                <li>Foto Kost </li>
                                                                                <li>Foto Kamar </li>
                                                                                <li>Fasilitas </li>
                                                                                <li>Ketersedian Kamar </li>
                                                                                <li>Harga </li>
                                                                            </ol>
                                                                            <p> Menu Tambah Data Kost dapat diakses dengan
                                                                                cara berikut:</p>
                                                                            <ol>
                                                                                <li>Login akun pemilik Kost</li>
                                                                                <li>Klik menu <strong>Properti Saya</strong>
                                                                                    di sebelah kiri kemudian klik
                                                                                    <strong>Kost</strong>
                                                                                </li>
                                                                                <li>Pilih <strong>Tambahkan Data
                                                                                        Iklan</strong>, kemudian klik
                                                                                    <strong>Tambah Iklan Baru</strong>
                                                                                </li>
                                                                                <li>Pada pop-up “Saya ingin menambahkan
                                                                                    data: (pilih salah satu)”, pilih
                                                                                    <strong>Kost</strong>, kemudian klik
                                                                                    <strong>Tambahkan Data</strong>
                                                                                </li>
                                                                                <li>Pada halaman Tambah Data Kost pilih
                                                                                    <strong>Tambah Kost Baru</strong>
                                                                                </li>
                                                                            </ol>
                                                                            <div class="panel-heading" role="tab"
                                                                                id="heading4Ca">
                                                                                <a class="collapsed" role="button"
                                                                                    data-toggle="collapse"
                                                                                    data-parent="#accordion"
                                                                                    href="#pemilik4Ca"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapse4Ca"
                                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                    <h5>Data Kost
                                                                                    </h5>
                                                                                </a>
                                                                            </div>
                                                                            <div id="pemilik4Ca"
                                                                                class="panel-collapse collapse"
                                                                                role="tabpanel"
                                                                                aria-labelledby="heading4Ca">
                                                                                <div class="panel-body"
                                                                                    style="font-weight:lighter;">
                                                                                    <ol>
                                                                                        <li>Isi data Kost Anda dengan
                                                                                            lengkap
                                                                                            dengan klik
                                                                                            <strong>Mulai</strong>
                                                                                        </li>
                                                                                        <li>Tulis nama Kost Anda (tanpa
                                                                                            menuliskan nama kecamatan/ kota)
                                                                                        </li>
                                                                                        <li>Jika Kost Anda memiliki lebih
                                                                                            dari 1 tipe kamar centang pada
                                                                                            box, kemudian tulis nama tipe
                                                                                            kamar</li>
                                                                                        <li>Pilih jenis Kost (Putra/ Putri/
                                                                                            Campur) dan tuliskan deskripsi
                                                                                            Kost</li>
                                                                                        <li>Tentukan aturan Kost Anda dengan
                                                                                            memilih aturan yang sesuai. Anda
                                                                                            juga dapat upload foto aturan
                                                                                            Kost dengan klik <strong>Upload
                                                                                                Peraturan</strong></li>
                                                                                        <li>Pilih tahun bangunan/ renovasi
                                                                                            terakhir Kost Anda</li>
                                                                                        <li>Masukkan data pengelola Kost
                                                                                            jika
                                                                                            ada. Anda juga dapat menambahkan
                                                                                            catatan lain terkait Kost. Klik
                                                                                            <strong>Lanjutkan</strong> untuk
                                                                                            menyimpan
                                                                                        </li>
                                                                                    </ol>
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel-heading" role="tab"
                                                                                id="heading4Cb">
                                                                                <a class="collapsed" role="button"
                                                                                    data-toggle="collapse"
                                                                                    data-parent="#accordion"
                                                                                    href="#pemilik4Cb"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapse4Cb"
                                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                    <h5>Alamat Kost
                                                                                    </h5>
                                                                                </a>
                                                                            </div>
                                                                            <div id="pemilik4Cb"
                                                                                class="panel-collapse collapse"
                                                                                role="tabpanel"
                                                                                aria-labelledby="heading4Cb">
                                                                                <div class="panel-body"
                                                                                    style="font-weight:lighter;">
                                                                                    <ol>
                                                                                        <li>Klik <strong>Lanjutkan</strong>
                                                                                            pada bagian Alamat Kost </li>
                                                                                        <li>Klik <strong>Buka Peta</strong>
                                                                                            dan sesuaikan pin pada titik
                                                                                            lokasi Kost Anda untuk mencari
                                                                                            alamat Kost sesuai peta.
                                                                                            Lengkapi
                                                                                            dengan nomor rumah RT/ RW jika
                                                                                            belum ada </li>
                                                                                        <li>Alamat Kost akan terisi secara
                                                                                            otomatis sesuai dengan titik
                                                                                            yang Anda tentukan sebelumnya.
                                                                                        </li>
                                                                                        <li>Anda juga dapat menambahkan
                                                                                            catatan alamat seperti patokan
                                                                                            lokasi Kost. Klik
                                                                                            <strong>Lanjutkan</strong> untuk
                                                                                            menyimpan
                                                                                        </li>
                                                                                    </ol>
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel-heading" role="tab"
                                                                                id="heading4Cc">
                                                                                <a class="collapsed" role="button"
                                                                                    data-toggle="collapse"
                                                                                    data-parent="#accordion"
                                                                                    href="#pemilik4Cc"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapse4Cc"
                                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                    <h5>Foto Kost
                                                                                    </h5>
                                                                                </a>
                                                                            </div>
                                                                            <div id="pemilik4Cc"
                                                                                class="panel-collapse collapse"
                                                                                role="tabpanel"
                                                                                aria-labelledby="heading4Cc">
                                                                                <div class="panel-body"
                                                                                    style="font-weight:lighter;">
                                                                                    <ol>
                                                                                        <li>Klik <strong>Lanjutkan</strong>
                                                                                            pada bagian Foto Kost </li>
                                                                                        <li>Anda akan diminta untuk upload
                                                                                            foto Kost tampak depan, tampilan
                                                                                            dalam Kost, dan tampak dari
                                                                                            jalan
                                                                                            (luar Kost) </li>
                                                                                        <li>Upload foto dengan klik
                                                                                            <strong>Tambah Foto</strong>.
                                                                                            Pastikan foto yang Anda upload
                                                                                            jelas dan sesuai format. Klik
                                                                                            Lanjutkan untuk menyimpan
                                                                                        </li>
                                                                                    </ol>
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel-heading" role="tab"
                                                                                id="heading4Cd">
                                                                                <a class="collapsed" role="button"
                                                                                    data-toggle="collapse"
                                                                                    data-parent="#accordion"
                                                                                    href="#pemilik4Cd"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapse4Cd"
                                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                    <h5>Foto Kamar
                                                                                    </h5>
                                                                                </a>
                                                                            </div>
                                                                            <div id="pemilik4Cd"
                                                                                class="panel-collapse collapse"
                                                                                role="tabpanel"
                                                                                aria-labelledby="heading4Cd">
                                                                                <div class="panel-body"
                                                                                    style="font-weight:lighter;">
                                                                                    <ol>
                                                                                        <li>Klik <strong>Lanjutkan</strong>
                                                                                            pada bagian Foto Kamar </li>
                                                                                        <li>Anda akan diminta untuk upload
                                                                                            foto kamar tampak depan,
                                                                                            tampilan dalam kamar, dan foto
                                                                                            kamar mandi </li>
                                                                                        <li>Upload foto dengan klik
                                                                                            <strong>Tambah Foto</strong>.
                                                                                            Pastikan foto yang Anda upload
                                                                                            jelas dan sesuai format. Klik
                                                                                            Lanjutkan untuk menyimpan
                                                                                        </li>
                                                                                    </ol>
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel-heading" role="tab"
                                                                                id="heading4Ce">
                                                                                <a class="collapsed" role="button"
                                                                                    data-toggle="collapse"
                                                                                    data-parent="#accordion"
                                                                                    href="#pemilik4Ce"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapse4Ce"
                                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                    <h5>Fasilitas
                                                                                    </h5>
                                                                                </a>
                                                                            </div>
                                                                            <div id="pemilik4Ce"
                                                                                class="panel-collapse collapse"
                                                                                role="tabpanel"
                                                                                aria-labelledby="heading4Ce">
                                                                                <div class="panel-body"
                                                                                    style="font-weight:lighter;">
                                                                                    <ol>
                                                                                        <li>Klik Lanjutkan pada bagian
                                                                                            Fasilitas</li>
                                                                                        <li>Pilih fasilitas yang tersedia
                                                                                            pada Kost Anda. Mulai dari
                                                                                            fasilitas umum, kamar, dan kamar
                                                                                            mandi. Klik
                                                                                            <strong>Lanjutkan</strong> untuk
                                                                                            menyimpan
                                                                                        </li>
                                                                                    </ol>
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel-heading" role="tab"
                                                                                id="heading4Cf">
                                                                                <a class="collapsed" role="button"
                                                                                    data-toggle="collapse"
                                                                                    data-parent="#accordion"
                                                                                    href="#pemilik4Cf"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapse4Cf"
                                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                    <h5>Ketersediaan Kamar
                                                                                    </h5>
                                                                                </a>
                                                                            </div>
                                                                            <div id="pemilik4Cf"
                                                                                class="panel-collapse collapse"
                                                                                role="tabpanel"
                                                                                aria-labelledby="heading4Cf">
                                                                                <div class="panel-body"
                                                                                    style="font-weight:lighter;">
                                                                                    <ol>
                                                                                        <li>Klik <strong>Lanjutkan</strong>
                                                                                            pada bagian Ketersediaan Kamar
                                                                                        </li>
                                                                                        <li>Pilih ukuran kamar yang sesuai
                                                                                            pada Kost Anda dan total jumlah
                                                                                            kamar </li>
                                                                                        <li>Isi data kamar yang tersedia
                                                                                            kemudian klik <strong>Atur
                                                                                                Ketersediaan Kamar</strong>
                                                                                            untuk memasukkan keterangan
                                                                                            nomor/ nama dan lantai kamar.
                                                                                            <strong>Centang</strong> pilihan
                                                                                            'Sudah Berpenghuni' untuk kamar
                                                                                            yang sudah diisi oleh penyewa
                                                                                        </li>
                                                                                        <li>Klik <strong>Lanjutkan</strong>
                                                                                            untuk menyimpan </li>
                                                                                    </ol>
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel-heading" role="tab"
                                                                                id="heading4Cg">
                                                                                <a class="collapsed" role="button"
                                                                                    data-toggle="collapse"
                                                                                    data-parent="#accordion"
                                                                                    href="#pemilik4Cg"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapse4Cg"
                                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                    <h5>Harga
                                                                                    </h5>
                                                                                </a>
                                                                            </div>
                                                                            <div id="pemilik4Cg"
                                                                                class="panel-collapse collapse"
                                                                                role="tabpanel"
                                                                                aria-labelledby="heading4Cg">
                                                                                <div class="panel-body"
                                                                                    style="font-weight:lighter;">
                                                                                    <ol>
                                                                                        <li>Klik <strong>Lanjutkan</strong>
                                                                                            pada bagian Harga</li>
                                                                                        <li>Masukkan harga sewa per bulan
                                                                                            untuk Kost</li>
                                                                                        <li><strong>Centang</strong> pada
                                                                                            box jika ingin menerapkan
                                                                                            minimum durasi sewa</li>
                                                                                        <li>Masukkan harga sewa selain dari
                                                                                            harga per bulan</li>
                                                                                        <li>Masukkan biaya tambahan jika
                                                                                            ada,
                                                                                            klik <strong>Tambah biaya
                                                                                                lain</strong> untuk
                                                                                            menambahkan biaya</li>
                                                                                        <li>Anda juga dapat menerapkan
                                                                                            deposit
                                                                                            dan/ atau uang muka (DP) serta
                                                                                            denda
                                                                                            bagi penyewa Kost.</li>
                                                                                        <li>Klik <strong>Lanjutkan</strong>
                                                                                            untuk menyimpan</li>
                                                                                    </ol>
                                                                                </div>
                                                                            </div>
                                                                            <p>Setelah selesai mengisi semua informasi
                                                                                mengenai Kost, centang S&K dan Kebijakan
                                                                                Privasi, kemudian klik
                                                                                <strong>Lanjutkan</strong> untuk menyimpan
                                                                                data Kost.
                                                                            </p>
                                                                            <p>Selanjutnya data Kost Anda akan diverifikasi
                                                                                oleh tim KostJogja maksimal 1×24 jam (hari
                                                                                kerja). Anda dapat melihat status verifikasi
                                                                                pada <strong>Properti Saya > Kost</strong>.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading4D">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik4D"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse4D"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara ubah jenis Kost ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik4D" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading4D">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Anda dapat ubah jenis Kost atau gender yang
                                                                                bisa menyewa Kost dengan cara berikut: </p>
                                                                            <ol>
                                                                                Pilih jenis Kost yang sesuai
                                                                                (Putra/Putri/Campur)
                                                                                Apabila sudah selesai, klik Edit Selesai
                                                                                untuk menyimpan perubahan
                                                                                <li>Login akun pemilik Kost </li>
                                                                                <li>Klik menu <strong>Properti Saya</strong>
                                                                                    di sebelah kiri kemudian klik
                                                                                    <strong>Kost </strong>
                                                                                </li>
                                                                                <li>Pilih iklan Kost yang ingin diedit atau
                                                                                    dihapus fotonya, kemudian klik
                                                                                    <strong>Lihat Selengkapnya</strong>
                                                                                </li>
                                                                                <li>Klik <strong>Edit Data Kost</strong>
                                                                                </li>
                                                                                <li>Klik <strong>Edit</strong> pada
                                                                                    <strong>Data Kost</strong>
                                                                                </li>
                                                                            </ol>
                                                                            <p>Perubahan jenis Kost akan diverifikasi oleh
                                                                                tim KostJogja maksimal 1×24 jam (hari
                                                                                kerja).
                                                                                Anda dapat melihat status verifikasi pada
                                                                                halaman <strong>Properti Saya >
                                                                                    Kost</strong>.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading4E">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik4E"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse4E"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara melakukan update Kost ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik4E" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading4E">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Agar proses pengajuan sewa selalu lancar,
                                                                                KostJogja sangat menyarankan Anda sebagai
                                                                                pemilik Kost untuk update informasi Kost
                                                                                secara berkala. </p>
                                                                            <p>Informasi yang perlu selalu dicek agar tetap
                                                                                akurat biasanya adalah: ketersediaan kamar,
                                                                                harga, bertambah/berkurangnya fasilitas, dan
                                                                                foto kamar. Bila ada perubahan informasi
                                                                                tersebut, silakan update informasi Kost.</p>
                                                                            <p>Anda dapat melakukan update Kost melalui dua
                                                                                cara:</p>
                                                                            <ol>
                                                                                <li>Melalui menu <strong>Edit Data
                                                                                        Kost</strong></li>
                                                                                <li>Melalui menu <strong>Update Semua
                                                                                        Kost</strong> (hanya dapat dilakukan
                                                                                    melalui Desktop)</li>
                                                                            </ol>
                                                                            <p>Jika Anda update melalui menu Edit Data Kost,
                                                                                maka data Kost yang Anda update akan
                                                                                diverifikasi terlebih dahulu oleh tim
                                                                                KostJogja. Berikut langkahnya:</p>
                                                                            <ol>
                                                                                <li>Login akun pemilik Kost </li>
                                                                                <li>Klik menu <strong>Properti Saya</strong>
                                                                                    di sebelah kiri kemudian klik
                                                                                    <strong>Kost</strong>
                                                                                </li>
                                                                                <li>Pilih iklan Kost yang ingin Anda update,
                                                                                    kemudian klik <strong>Lihat Selengkapnya
                                                                                    </strong></li>
                                                                                <li>Klik <strong>Edit Data Kost</strong>
                                                                                </li>
                                                                                <li>Update data Kost sesuai yang Anda
                                                                                    inginkan. Apabila sudah selesai, klik
                                                                                    <strong>Edit Selesai</strong> untuk
                                                                                    menyimpan perubahan
                                                                                </li>
                                                                                <li>Update Kost Anda akan diverifikasi oleh
                                                                                    tim KostJogja maksimal 1×24 jam (hari
                                                                                    kerja). </li>
                                                                            </ol>
                                                                            <p>Bila tidak ada perubahan informasi,
                                                                                KostJogja
                                                                                tetap menyarankan Anda untuk update Kost
                                                                                sekaligus melalui menu Update Semua Kost
                                                                                yang
                                                                                dapat diakses melalui Desktop.</p>
                                                                            <p>Melalui menu ini, data Kost akan tetap update
                                                                                dan tidak melalui proses verifikasi oleh tim
                                                                                KostJogja. Berikut langkahnya:</p>
                                                                            <ol>
                                                                                <li>Login akun pemilik Kost</li>
                                                                                <li>Klik menu <strong>Properti Saya</strong>
                                                                                    di sebelah kiri kemudian klik
                                                                                    <strong>Kost</strong>
                                                                                </li>
                                                                                <li>Selanjutnya klik <strong>Update Semua
                                                                                        Kost</strong></li>
                                                                                <li>Semua iklan Kost Anda otomatis akan
                                                                                    ter-update</li>
                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading4F">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik4F"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse4F"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara ubah nama Kost ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik4F" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading4F">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Jika Anda ingin mengubah nama Kost, silakan
                                                                                hubungi CS KostJogja untuk dibantu proses
                                                                                perubahannya. </p>
                                                                            <p>Kirim format berikut untuk mempermudah proses
                                                                                perubahan nama Kost: </p>
                                                                            <ul>
                                                                                <li>Kost_Nama Kost_ Kecamatan_Kota </li>
                                                                                <li>Jika ada tipe: Kost_Nama
                                                                                    Kost_Tipe_Kecamatan_Kota </li>
                                                                            </ul>
                                                                            <p>Cek halaman berikut untuk mengubungi CS
                                                                                KostJogja: http://127.0.0.1:8000/home </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading4G">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik4G"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse4G"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara tambah atau ubah nomor HP
                                                                                pengelola Kost ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik4G" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading4G">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Anda dapat tambah atau ubah nomor HP
                                                                                pengelola Kost dengan cara berikut: </p>
                                                                            <ol>
                                                                                <li>Login akun pemilik Kost </li>
                                                                                <li>Klik menu Properti Saya di sebelah kiri
                                                                                    kemudian
                                                                                    klik Kost </li>
                                                                                <li>Pilih iklan Kost yang ingin diedit atau
                                                                                    dihapus
                                                                                    fotonya, kemudian klik Lihat
                                                                                    Selengkapnya </li>
                                                                                <li>Klik Edit Data Kost </li>
                                                                                <li>Klik Edit pada Data Kost </li>
                                                                                <li>Centang check-box “Anda ingin tambahkan
                                                                                    data
                                                                                    pengelola?”, kemudian masukkan nama dan
                                                                                    nomor HP
                                                                                    pengelola </li>
                                                                                <li>Apabila sudah selesai, klik Edit Selesai
                                                                                    untuk
                                                                                    menyimpan perubahan </li>
                                                                            </ol>
                                                                            <p>Perubahan nomor HP pengelola akan
                                                                                diverifikasi oleh tim KostJogja maksimal
                                                                                1×24
                                                                                jam (hari kerja). Anda dapat melihat status
                                                                                verifikasi pada halaman <strong>Properti
                                                                                    Saya > Kost</strong>.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading4H">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik4H"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse4H"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara ubah alamat Kost ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik4H" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading4H">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Anda dapat ubah alamat Kost dengan cara
                                                                                berikut: </p>
                                                                            <ol>
                                                                                <li>Login akun pemilik Kost </li>
                                                                                <li>Klik menu <strong>Properti Saya</strong>
                                                                                    di sebelah kiri
                                                                                    kemudian klik <strong>Kost</strong>
                                                                                </li>
                                                                                <li> Pilih iklan Kost yang ingin diedit atau
                                                                                    dihapus fotonya, kemudian klik
                                                                                    <strong>Lihat Selengkapnya</strong>
                                                                                </li>
                                                                                <li>Klik <strong>Edit Data Kost</strong>
                                                                                </li>
                                                                                <li>Klik <strong>Edit</strong> pada
                                                                                    <strong>Alamat Kost</strong>
                                                                                </li>
                                                                                <li>Lengkapi informasi alamat Kost sesuai
                                                                                    dengan
                                                                                    perubahan yang ingin dilakukan </li>
                                                                                <li>Apabila sudah selesai, klik <strong>Edit
                                                                                        Selesai</strong>
                                                                                    untuk menyimpan perubahan </li>
                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading4I">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik4I"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse4I"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara ubah atau hapus foto pada
                                                                                iklan Kost ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik4I" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading4I">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Anda dapat ubah dan hapus foto pada iklan
                                                                                Kost
                                                                                dengan cara berikut: </p>
                                                                            <ol>
                                                                                <li>Login akun pemilik Kost </li>
                                                                                <li>Klik menu <strong>Properti Saya</strong>
                                                                                    di sebelah kiri
                                                                                    kemudian klik <strong>Kost</strong>
                                                                                </li>
                                                                                <li>Pilih iklan Kost yang ingin diedit atau
                                                                                    dihapus fotonya, kemudian klik
                                                                                    <strong>Lihat Selengkapnya</strong>
                                                                                </li>
                                                                                <li>Klik <strong>Edit Data Kost</strong>
                                                                                </li>
                                                                                <li>Klik <strong>Edit</strong> pada
                                                                                    <strong>Foto Kost</strong> untuk foto
                                                                                    properti
                                                                                    Kost atau pada <strong>Foto
                                                                                        Kamar</strong> untuk spesifik foto
                                                                                    dalam kamar Kost
                                                                                </li>
                                                                                <li>Untuk tambah foto klik <strong>Tambah
                                                                                        Foto</strong> </li>
                                                                                <li>Untuk edit foto klik <strong>Ubah
                                                                                        Foto</strong> </li>
                                                                                <li>Untuk hapus foto klik <strong>Hapus
                                                                                        Foto</strong> </li>
                                                                                <li>Untuk memindahkan foto Kost ke section
                                                                                    lain,
                                                                                    klik <strong>Pindahkan Foto</strong>
                                                                                </li>
                                                                                <li>Apabila sudah selesai, klik <strong>Edit
                                                                                        Selesai</strong>
                                                                                    untuk menyimpan perubahan </li>
                                                                            </ol>
                                                                            <p>Perubahan foto pada iklan Kost akan
                                                                                diverifikasi oleh tim KostJogja maksimal
                                                                                1×24
                                                                                jam (hari kerja). Anda dapat melihat status
                                                                                verifikasi pada halaman <strong>Properti
                                                                                    Saya > Kost</strong>.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading4J">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik4J"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse4J"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara ubah fasilitas pada iklan
                                                                                Kost
                                                                                ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik4J" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading4J">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Anda dapat ubah fasilitas pada iklan Kost
                                                                                dengan cara berikut: </p>
                                                                            <ol>
                                                                                <li>Login akun pemilik Kost </li>
                                                                                <li>Klik menu <strong>Properti Saya</strong>
                                                                                    di sebelah kiri
                                                                                    kemudian klik <strong>Kost</strong>
                                                                                </li>
                                                                                <li>Pilih iklan Kost yang ingin diedit atau
                                                                                    dihapus fotonya, kemudian klik
                                                                                    <strong>Lihat Selengkapnya</strong>
                                                                                </li>
                                                                                <li>Klik Edit Data Kost </li>
                                                                                <li>Klik Edit pada Fasilitas </li>
                                                                                <li>Lengkapi informasi fasilitas Kost sesuai
                                                                                    dengan perubahan yang ingin dilakukan
                                                                                </li>
                                                                                <li>Apabila sudah selesai, klik Edit Selesai
                                                                                    untuk menyimpan perubahan </li>
                                                                            </ol>
                                                                            <p>Perubahan foto pada iklan Kost akan
                                                                                diverifikasi oleh tim KostJogja maksimal
                                                                                1×24
                                                                                jam (hari kerja). Anda dapat melihat status
                                                                                verifikasi pada halaman <strong>Properti
                                                                                    Saya > Kost</strong>.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading4K">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#pemilik4K"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse4K"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara menambahkan tipe kamar baru
                                                                                pada Kost ?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="pemilik4K" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading4K">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">
                                                                            <p>Anda dapat menambahkan tipe kamar baru pada
                                                                                Kost dengan cara berikut:</p>
                                                                            <ol>
                                                                                <li>Login akun pemilik Kost </li>
                                                                                <li>Klik menu <strong>Properti Saya</strong>
                                                                                    di sebelah kiri
                                                                                    kemudian klik <strong>Kost</strong>
                                                                                </li>
                                                                                <li>Pilih <strong>Tambahkan Data
                                                                                        Iklan</strong>, kemudian
                                                                                    klik <strong>Tambah Iklan Baru</strong>
                                                                                </li>
                                                                                <li>Pada pop-up “Saya ingin menambahkan
                                                                                    data:
                                                                                    (pilih salah satu)”, pilih
                                                                                    <strong>Kost</strong>,
                                                                                    kemudian klik <strong>Tambahkan
                                                                                        Data</strong>
                                                                                </li>
                                                                                <li>Pada halaman Tambah Data Kost bagian
                                                                                    “Tambah
                                                                                    tipe kamar lain dari Kost dibawah ini”
                                                                                    pilih
                                                                                    Kost yang ingin Anda tambah tipenya
                                                                                </li>
                                                                                <li>Pilih <strong>Kost</strong> jika Anda
                                                                                    ingin tambah tipe
                                                                                    kamar
                                                                                    dengan menyalin data iklan Kost yang
                                                                                    sudah
                                                                                    ada, atau pilih <strong>Buat
                                                                                        Baru</strong> untuk tambah
                                                                                    tipe
                                                                                    kamar dengan membuat data baru. Klik
                                                                                    <strong>Lanjutkan</strong>
                                                                                </li>
                                                                                <li> Lengkapi informasi tipe kamar. Pada
                                                                                    bagian
                                                                                    “Ini Kamar Tipe Apa?” masukkan nama tipe
                                                                                    kamar (contoh: Tipe A atau VVIP atau
                                                                                    Executive) </li>
                                                                                <li>Apabila semua informasi sudah terisi,
                                                                                    centang S&K Umum dan Kebijakan Privasi
                                                                                    kemudian klik <strong>Lanjutkan</strong>
                                                                                    untuk menyimpan
                                                                                </li>
                                                                                <p>Perubahan foto pada iklan Kost akan
                                                                                    diverifikasi oleh tim KostJogja
                                                                                    maksimal
                                                                                    1×24
                                                                                    jam (hari kerja). Anda dapat melihat
                                                                                    status
                                                                                    verifikasi pada halaman <strong>Properti
                                                                                        Saya > Kost</strong>.
                                                                                </p>
                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab"
                                                                    id="heading4L">
                                                                    <a class="collapsed" role="button"
                                                                        data-toggle="collapse" data-parent="#accordion"
                                                                        href="#pemilik4L" aria-expanded="false"
                                                                        aria-controls="collapse4L"
                                                                        style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                        <p>Mengapa iklan Kost saya ditolak ? </p>
                                                                    </a>
                                                                </div>
                                                                <div id="pemilik4L" class="panel-collapse collapse"
                                                                    role="tabpanel" aria-labelledby="heading4L">
                                                                    <div class="panel-body"
                                                                        style="font-weight:lighter;">
                                                                        <p>Anda dapat cek alasan iklan ditolak dengan cara
                                                                            sebagai berikut: </p>
                                                                        <ol>
                                                                            <li>Login akun pemilik Kost </li>
                                                                            <li>Klik menu <strong>Properti Saya</strong> di
                                                                                sebelah kiri kemudian klik
                                                                                <strong>Kost</strong>
                                                                            </li>
                                                                            <li>Iklan Kost yang ditolak akan tampil dengan
                                                                                informasi alasan iklan ditolak. Perbaiki
                                                                                atau lengkapi data iklan Kost Anda untuk
                                                                                menghindari verifikasi iklan kembali
                                                                                ditolak. </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab"
                                                                    id="heading4M">
                                                                    <a class="collapsed" role="button"
                                                                        data-toggle="collapse" data-parent="#accordion"
                                                                        href="#pemilik4M" aria-expanded="false"
                                                                        aria-controls="collapse4M"
                                                                        style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                        <p>Bagaimana cara hapus iklan Kost ?</p>
                                                                    </a>
                                                                </div>
                                                                <div id="pemilik4M" class="panel-collapse collapse"
                                                                    role="tabpanel" aria-labelledby="heading4M">
                                                                    <div class="panel-body"
                                                                        style="font-weight:lighter;">
                                                                        <p>Anda dapat hapus iklan Kost dengan cara berikut:
                                                                        </p>
                                                                        <ol>
                                                                            <li>Login akun pemilik Kost </li>
                                                                            <li>Klik menu <strong>Properti Saya</strong> di
                                                                                sebelah kiri kemudian klik
                                                                                <strong>Kost</strong>
                                                                            </li>
                                                                            <li>Pilih iklan Kost yang ingin dihapus,
                                                                                kemudian
                                                                                klik <strong>Lihat Selengkapnya</strong>
                                                                            </li>
                                                                            <li>Pastikan MamiAds pada iklan non-aktif,
                                                                                kemudian klik <strong>Hapus Kost</strong>
                                                                            </li>
                                                                            <li>Klik <strong>Hapus</strong> untuk konfirmasi
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!--- END COL -->
                                                </div>
                                                <!--- END ROW -->
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>



                    {{-- Produk Untuk Pemilik --}}
                    <div class="col-lg-15">
                        <div class="tab-content">
                            <div class="tab-pane" id="produk">
                                <h3>Produk Untuk Pemilik</h3>

                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-heading5One">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapse5One" aria-expanded="true"
                                                aria-controls="panelsStayOpen-collapse5One">
                                                Booking Langsung
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapse5One" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-heading5One">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel-group" id="accordion" role="tablist"
                                                            aria-multiselectable="true">

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab"
                                                                    id="heading5A">
                                                                    <a class="collapsed" role="button"
                                                                        data-toggle="collapse" data-parent="#accordion"
                                                                        href="#pemilik5A" aria-expanded="false"
                                                                        aria-controls="collapse5A"
                                                                        style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                        <p>Apa itu Booking Langsung bagi pemilik Kost ?</p>
                                                                    </a>
                                                                </div>
                                                                <div id="pemilik5A" class="panel-collapse collapse"
                                                                    role="tabpanel" aria-labelledby="heading5A">
                                                                    <div class="panel-body"
                                                                        style="font-weight:lighter;">
                                                                        <p>Booking Langsung adalah fitur untuk memudahkan
                                                                            pemilik Kost mengelola Kost-Kostan, terutama
                                                                            dalam
                                                                            menerima/menolak pengajuan sewa dari calon
                                                                            penyewa, secara digital.</p>
                                                                        <ol>
                                                                            <P>
                                                                            <H5>Cara Booking Langsung bantu pengelolaan Kost
                                                                                Anda:
                                                                            </H5>
                                                                            </P>
                                                                            <li>
                                                                                <H6>Kost bisa disewa via online</H6>
                                                                                <P>Calon penyewa bisa mengajukan sewa dengan
                                                                                    mudah, tanpa perlu ketemuan.</P>
                                                                            </li>
                                                                            <li>
                                                                                <H6>Pilih calon penyewa sesuai kebutuhan
                                                                                    bisnis</H6>
                                                                                <P>Setiap pemilik Kost pasti punya kriteria
                                                                                    calon
                                                                                    penyewa yang cocok dengan kebutuhan
                                                                                    bisnisnya. Anda yang tentukan, sistem
                                                                                    kami secara otomatis mengaturnya</P>
                                                                            </li>
                                                                            <li>
                                                                                <h6>Terima/tolak pengajuan sewa</h6>
                                                                                <p>Cocok dengan calon penyewa? Klik
                                                                                    “Terima”.
                                                                                    Jika tidak cocok, klik “Tolak”.</p>
                                                                            </li>
                                                                            <li>
                                                                                <h6>Transaksi dan pencairan uang aman</h6>
                                                                                <p>Terima uang sewa tanpa perlu tatap muka
                                                                                    dengan penyewa. Uang masuk ke rekening
                                                                                    Anda H+1 setelah penyewa check-in di
                                                                                    Kost.</p>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab"
                                                                    id="heading5B">
                                                                    <a class="collapsed" role="button"
                                                                        data-toggle="collapse" data-parent="#accordion"
                                                                        href="#pemilik5B" aria-expanded="false"
                                                                        aria-controls="collapse5B"
                                                                        style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                        <p>Apa keuntungan Booking Langsung untuk pemilik
                                                                            Kost ?</p>
                                                                    </a>
                                                                </div>
                                                                <div id="pemilik5B" class="panel-collapse collapse"
                                                                    role="tabpanel" aria-labelledby="heading5B">
                                                                    <div class="panel-body"
                                                                        style="font-weight:lighter;">
                                                                        <ul>
                                                                            <li>
                                                                                <h6>Penagihan Sewa Otomatis</h6>
                                                                                <p>Setiap penyewa langsung diingatkan oleh
                                                                                    sistem KostJogja setiap mendekati
                                                                                    tenggat
                                                                                    waktu. Anda tidak perlu repot-repot
                                                                                    menagih sendiri.</p>
                                                                            </li>
                                                                            <li>
                                                                                <h6>Laporan Keuangan Kost</h6>
                                                                                <p>Pemasukan Kost langsung tercatat dalam
                                                                                    laporan keuangan yang dapat diakses
                                                                                    kapan saja.</p>
                                                                            </li>
                                                                            <li>
                                                                                <h6>Kelola Kost Lebih Mudah</h6>
                                                                                <p>Mengurus kontrak sewa dan bisnis Kost
                                                                                    langsung jadi lebih simpel, memudahkan
                                                                                    hidup Anda.</p>
                                                                            </li>
                                                                            <li>
                                                                                <h6>Terima Booking Lebih Fleksibel</h6>
                                                                                <p>Terima atau tolak pengajuan sewa dari
                                                                                    para pencari Kost langsung dari platform
                                                                                    KostJogja, kapan saja dan di mana saja.
                                                                                </p>
                                                                            </li>
                                                                            <li>
                                                                                <h6>Metode Pembayaran Beragam</h6>
                                                                                <p>Penyewa dapat langsung membayar sewa
                                                                                    dengan bermacam metode pembayaran, yang
                                                                                    diterima di rekening Anda.</p>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab"
                                                                    id="heading5C">
                                                                    <a class="collapsed" role="button"
                                                                        data-toggle="collapse" data-parent="#accordion"
                                                                        href="#pemilik5C" aria-expanded="false"
                                                                        aria-controls="collapse5C"
                                                                        style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                        <p>Bagaimana cara mengaktifkan Booking Langsung ?
                                                                        </p>
                                                                    </a>
                                                                </div>
                                                                <div id="pemilik5C" class="panel-collapse collapse"
                                                                    role="tabpanel" aria-labelledby="heading5C">
                                                                    <div class="panel-body"
                                                                        style="font-weight:lighter;">
                                                                        <ul>
                                                                            <li>Setelah terdaftar sebagai pemilik Kost di
                                                                                KostJogja, silakan klik Daftar Booking
                                                                                Langsung yang ada di dashboard pemilik.
                                                                            </li>
                                                                            <li>Atau, Anda juga bisa memilih Kost yang ingin
                                                                                dilengkapi fitur Booking, lalu klik tombol
                                                                                “Aktifkan Booking”. </li>
                                                                            <li>Anda akan diminta untuk lengkapi data diri
                                                                                dan data rekening untuk pengiriman
                                                                                pendapatan sewa. </li>
                                                                            <li>Selesai! Permintaan pengaktifan telah
                                                                                dikirimkan ke admin. Anda akan mendapat
                                                                                notifikasi bila fitur Booking Langsung telah
                                                                                aktif. </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab"
                                                                    id="heading5D">
                                                                    <a class="collapsed" role="button"
                                                                        data-toggle="collapse" data-parent="#accordion"
                                                                        href="#pemilik5D" aria-expanded="false"
                                                                        aria-controls="collapse5D"
                                                                        style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                        <p>Bagaimana jika pendaftaran sukses & fitur aktif ?
                                                                        </p>
                                                                    </a>
                                                                </div>
                                                                <div id="pemilik5D" class="panel-collapse collapse"
                                                                    role="tabpanel" aria-labelledby="heading5D">
                                                                    <div class="panel-body"
                                                                        style="font-weight:lighter;">
                                                                        <ul>
                                                                            <li>Jika pendaftaran Booking Langsung sukses,
                                                                                Anda akan mendapatkan notifikasi dari
                                                                                KostJogja. </li>
                                                                            <li>Silakan kunjungi halaman dashboard pemilik
                                                                                untuk mulai menggunakan fasilitas kelola
                                                                                tagihan dan booking. </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab"
                                                                    id="heading5E">
                                                                    <a class="collapsed" role="button"
                                                                        data-toggle="collapse" data-parent="#accordion"
                                                                        href="#pemilik5E" aria-expanded="false"
                                                                        aria-controls="collapse5E"
                                                                        style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                        <p>Bagaimana jika pendaftaran gagal ?</p>
                                                                    </a>
                                                                </div>
                                                                <div id="pemilik5E" class="panel-collapse collapse"
                                                                    role="tabpanel" aria-labelledby="heading5E">
                                                                    <div class="panel-body"
                                                                        style="font-weight:lighter;">
                                                                        <p>Jika pendaftaran Booking Langsung gagal,
                                                                            kemungkinan besar disebabkan oleh hal-hal
                                                                            berikut: </p>
                                                                        <ol>
                                                                            <li>Akun sebagai pemilik Kost belum Anda
                                                                                verifikasi. </li>
                                                                            <li>Data dan foto pada iklan Kost Anda kurang
                                                                                memenuhi standar. </li>
                                                                            <li>Nomor rekening yang Anda masukkan tidak
                                                                                dapat divalidasi. </li>
                                                                        </ol>
                                                                        <p>Silakan ulang kembali proses pendaftaran dengan
                                                                            memastikan data yang Anda masukkan sudah valid.
                                                                            Apabila Anda membutuhkan bantuan lebih lanjut
                                                                            silakan hubungi CS KostJogja melalui aplikasi
                                                                            Kost Jogja Anda.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab"
                                                                    id="heading5F">
                                                                    <a class="collapsed" role="button"
                                                                        data-toggle="collapse" data-parent="#accordion"
                                                                        href="#pemilik5F" aria-expanded="false"
                                                                        aria-controls="collapse5F"
                                                                        style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                        <p>Bisakah saya membatalkan pengajuan sewa dan
                                                                            kontrak sewa bila saya kurang berkenan dengan
                                                                            penyewa?</p>
                                                                    </a>
                                                                </div>
                                                                <div id="pemilik5F" class="panel-collapse collapse"
                                                                    role="tabpanel" aria-labelledby="heading5F">
                                                                    <div class="panel-body"
                                                                        style="font-weight:lighter;">
                                                                        <p>Di setiap pengajuan sewa (booking) dari pencari
                                                                            Kost, Anda memiliki hak penuh untuk menerima
                                                                            ataupun menolak. Anda juga disarankan untuk
                                                                            meninjau terlebih dahulu profil calon penyewa
                                                                            yang tersedia di sana. </p>
                                                                        <p>Apabila di kemudian hari Anda berubah pikiran
                                                                            karena kurang berkenan, Anda juga dapat
                                                                            mengakhiri kontrak sewa dari dashboard aplikasi
                                                                            Kost Jogja.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab"
                                                                    id="heading5G">
                                                                    <a class="collapsed" role="button"
                                                                        data-toggle="collapse" data-parent="#accordion"
                                                                        href="#pemilik5G" aria-expanded="false"
                                                                        aria-controls="collapse5G"
                                                                        style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                        <p>Apakah lewat Booking Langsung, pendapatan dari
                                                                            sewa Kost bisa langsung saya dapatkan dengan
                                                                            mudah ?</p>
                                                                    </a>
                                                                </div>
                                                                <div id="pemilik5G" class="panel-collapse collapse"
                                                                    role="tabpanel" aria-labelledby="heading5G">
                                                                    <div class="panel-body"
                                                                        style="font-weight:lighter;">
                                                                        <p>Anda akan menerima pendapatan/uang sewa Kost Anda
                                                                            di rekening Anda, pada saat penyewa telah
                                                                            melakukan check-in di KostJogja. Info lebih
                                                                            lengkap bisa Anda cek di sini. </p>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <!--- END COL -->
                                                </div>
                                                <!--- END ROW -->
                                            </div>
                                        </div>
                                    </div>



                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-heading5Two">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5Two"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapse5Two">
                                                Fitur Promosi
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapse5Two" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-heading5Two">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel-group" id="accordion" role="tablist"
                                                            aria-multiselectable="true">

                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab"
                                                                    id="heading5A2">
                                                                    <a class="collapsed" role="button"
                                                                        data-toggle="collapse" data-parent="#accordion"
                                                                        href="#pemilik5A2" aria-expanded="false"
                                                                        aria-controls="collapse5A2"
                                                                        style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                        <p>Apa itu Fitur Promosi ?</p>
                                                                    </a>
                                                                </div>
                                                                <div id="pemilik5A2" class="panel-collapse collapse"
                                                                    role="tabpanel" aria-labelledby="heading5A2">
                                                                    <div class="panel-body"
                                                                        style="font-weight:lighter;">
                                                                        <p>Fitur Promosi adalah kumpulan produk atau fitur
                                                                            KostJogja yang dapat digunakan untuk keperluan
                                                                            promosi pemilik properti Kost dan apartemen.
                                                                        </p>
                                                                        <p>Di dalam Fitur Promosi, terdapat fitur-fitur
                                                                            berikut:</p>
                                                                        <ol>
                                                                            <li>Cek Properti Sekitar </li>
                                                                            <li>Promo Iklan </li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <!--- END COL -->
                                                </div>
                                                <!--- END ROW -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section><!-- End Departments Section -->
@endsection
