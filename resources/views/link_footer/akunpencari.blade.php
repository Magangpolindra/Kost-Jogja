@extends('layouts.main')
@section('container')
    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
        <div class="container" data-aos="fade-up">
            <div class="container text-decoration fw-bold mt-5">
                <h3 class="mb-2"> KATEGORI BANTUAN</h3>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-3 mb-3 mb-lg-0 mt-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#Masalah">
                                <h5 class="bi bi-motherboard-fill text fs-6 mt-1"> Masalah Pembayaran kost</h5>
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
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#sewa">
                                <h5 class="bi bi-house-fill text fs-6 mt-1"> Sewa kost</h5>
                            </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#cari">
                                <h5 class="bi bi-geo-alt-fill text fs-6 mt-1"> Pencarian kost
                                </h5>
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- Masalah Pembayaran kost --}}
                <div class="col-lg-9">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="Masalah">
                            <h3> Masalah Pembayaran kost</h3>

                            <div class="accordion col-lg-20" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-heading1One">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapse1One" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapse1One" style="color: rgb(0, 0, 0)";>
                                            Pembayaran Uang kost
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
                                                                    data-parent="#accordion" href="#collapse1A"
                                                                    aria-expanded="true" aria-controls="collapse1A"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara bayar tagihan kost?</p>
                                                                </a>
                                                            </div>
                                                            <div id="collapse1A" class="panel-collapse collapse in"
                                                                role="tabpanel" aria-labelledby="heading1A">
                                                                <div class="panel-body" style="font-weight:lighter;"
                                                                    style="font-weight:lighter;">
                                                                    <p>Tagihan sewa kost dapat Anda cek pada menu kost Saya.
                                                                        Berikut cara bayar tagihan kost:</p>
                                                                    <ol>
                                                                        <li>Login akun Pencari kost</li>

                                                                        <li>Klik foto profil, masuk ke menu kost Saya. Klik
                                                                            Tagihan</li>

                                                                        <li>Di filter Belum Dibayar, klik Bayar pada tagihan
                                                                            yang ingin dibayar.</li>

                                                                        <li>Pilih Metode Pembayaran</li>


                                                                        <li> Klik Bayar Sekarang dan selesaikan pembayaran
                                                                            sesuai dengan metode pembayaran yang telah
                                                                            dipilih
                                                                            Apabila pembayaran sukses, Anda akan menerima
                                                                            notifikasi bahwa tagihan Anda telah terbayar.
                                                                        </li>
                                                                    </ol>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1B">
                                                                <a role="button" data-toggle="collapse"
                                                                    data-parent="#accordion" href="#collapse1B"
                                                                    aria-expanded="true" aria-controls="collapse1B"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Apakah saya harus membayar uang sewa melalui
                                                                        kostJogja?</p>
                                                                </a>
                                                            </div>
                                                            <div id="collapse1B" class="panel-collapse collapse in"
                                                                role="tabpanel" aria-labelledby="heading1B">
                                                                <div class="panel-body" style="font-weight:lighter;"
                                                                    style="font-weight:lighter;">
                                                                    <p>Anda bisa melakukan pembayaran secara langsung ke
                                                                        pemilik kost, atau melalui sistem pembayaran
                                                                        kostJogja. Pembayaran melalui sistem kostJogja
                                                                        membantu Anda mendapatkan manfaat berikut:</p>
                                                                    <ul>
                                                                        <li>Bayar uang kost cashless atau non-tunai, dengan
                                                                            beragam metode pembayaran dan didukung keamanan
                                                                            transaksi dari kostJogja.</li>

                                                                        <li>Dapat promo-promo di kostJogja khusus untuk
                                                                            penyewa.</li>

                                                                        <li>Secara otomatis mendapatkan pengingat tagihan
                                                                            kost.</li>

                                                                        <li>Riwayat semua pembayaran tagihan sewa Anda
                                                                            tercatat rapi di halaman “kost Saya”.</li>

                                                                        <li>Pemilik kost langsung mendapat notifikasi
                                                                            mengenai pembayaran Anda, dan otomatis tercatat
                                                                            dalam laporan keuangannya.</li>


                                                                        <li> Klik Bayar Sekarang dan selesaikan pembayaran
                                                                            sesuai dengan metode pembayaran yang telah
                                                                            dipilih
                                                                            Apabila pembayaran sukses, Anda akan menerima
                                                                            notifikasi bahwa tagihan Anda telah terbayar.
                                                                        </li>
                                                                    </ul>

                                                                    <p>
                                                                        <strong>
                                                                            Apa itu “kost Saya”?
                                                                        </strong>
                                                                    </p>

                                                                    <p>
                                                                        kost Saya adalah halaman untuk aktivitas penyewa
                                                                        selama menyewa menggunakan kostJogja. Anda bisa
                                                                        menggunakan halaman ini setelah Anda melakukan
                                                                        booking di kostJogja atau ditambahkan sebagai
                                                                        penyewa oleh pemilik kost.
                                                                    </p>

                                                                    <p>
                                                                        Setelah melakukan check-in, ada empat menu utama
                                                                        yang bisa membantu Anda selama tinggal di kost:
                                                                    </p>

                                                                    <ul>
                                                                        <li><strong>Tagihan,</strong> untuk melihat dan
                                                                            membayar tagihan sewa. Semua bukti pembayaran
                                                                            sewa Anda juga tercatat di sini.</li>
                                                                        <li><strong>Kontrak,</strong> untuk melihat kontrak
                                                                            atau kesepakatan sewa antara Anda dan pemilik
                                                                            kost. Anda juga dapat mengajukan berhenti
                                                                            sewa/check-out di menu ini.</li>
                                                                        <li><strong>Chat pemilik,</strong> untuk memudahkan
                                                                            komunikasi dengan pemilik kost. Melalui fitur
                                                                            chat ini, kostJogja dapat membantu menjaga
                                                                            transaksi Anda dengan pemilik.</li>
                                                                        <li><strong>Bantuan,</strong> untuk membantu Anda
                                                                            mencari jalan keluar jika terjadi masalah selama
                                                                            tinggal di kost.</li>
                                                                    </ul>

                                                                    <p>
                                                                        Untuk bisa melihat selengkapnya, kunjungi halaman
                                                                        kost Saya.
                                                                    </p>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1C">
                                                                <a role="button" data-toggle="collapse"
                                                                    data-parent="#accordion" href="#collapse1C"
                                                                    aria-expanded="true" aria-controls="collapse1C"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana penagihan sewa kost Booking Langsung bagi
                                                                        penyewa?</p>
                                                                </a>
                                                            </div>
                                                            <div id="collapse1C" class="panel-collapse collapse in"
                                                                role="tabpanel" aria-labelledby="heading1C">
                                                                <div class="panel-body" style="font-weight:lighter;"
                                                                    style="font-weight:lighter;">

                                                                    <ul>
                                                                        <li><strong>Tanggal penagihan </strong>adalah
                                                                            tenggat waktu di mana Anda harus membayar
                                                                            tagihan sewa. Umumnya tanggal penagihan akan
                                                                            berulang mengikuti tanggal Anda check in/ mulai
                                                                            sewa.</li>

                                                                        <li><strong>Tagihan kost</strong> dapat dilihat
                                                                            melalui Detail Booking yang dapat diakses di
                                                                            halaman Profil. Di sini Anda dapat melihat
                                                                            seluruh riwayat tagihan sewa kost dan juga
                                                                            membayar tagihan berikutnya.</li>

                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1D">
                                                                <a role="button" data-toggle="collapse"
                                                                    data-parent="#accordion" href="#collapse1D"
                                                                    aria-expanded="true" aria-controls="collapse1D"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara melihat tagihan/invoice sewa kost
                                                                        saya?</p>
                                                                </a>
                                                            </div>
                                                            <div id="collapse1D" class="panel-collapse collapse in"
                                                                role="tabpanel" aria-labelledby="heading1D">
                                                                <div class="panel-body" style="font-weight:lighter;"
                                                                    style="font-weight:lighter;">
                                                                    <p>Tagihan/invoice sewa kost dapat Anda cek pada menu
                                                                        kost Saya. Berikut cara bayar tagihan kost:</p>
                                                                    <ol>
                                                                        <li>Login akun <strong>Pencari kost.</strong></li>

                                                                        <li>Di menu <strong>kost Saya,</strong> klik menu
                                                                            <strong>Tagihan.</strong>
                                                                        </li>

                                                                        <li>Pilih filter <strong>Belum Dibayar,</strong>
                                                                            untuk melihat tagihan yang belum dibayar atau
                                                                            filter <strong>Sudah Dibayar</strong> untuk
                                                                            tagihan yang sudah dibayar.</li>

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
                                    <h2 class="accordion-header" id="panelsStayOpen-heading1Four">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1Four"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapse1Four"
                                            style="color: rgb(0, 0, 0)";>
                                            Pengembalian Dana
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
                                                            <div class="panel-heading" role="tab" id="heading1AAAAA">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#collapse1AAAAA" aria-expanded="false"
                                                                    aria-controls="collapse1AAAAA"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Bagaimana cara mengajukan refund?</p>
                                                                </a>
                                                            </div>
                                                            <div id="collapse1AAAAA" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1AAAAA">
                                                                <div class="panel-body" style="font-weight:lighter;">

                                                                    <p>Anda perlu melakukan pembatalan sewa/pembatalan
                                                                        check-in terlebih dahulu (detail tata caranya dapat
                                                                        dilihat di link berikut). Setelah pembatalan
                                                                        berhasil, Anda bisa menghubungi CS kostJogja untuk
                                                                        pengembalian dana uang sewa (refund). Hubungi CS di
                                                                        link berikut.</p>

                                                                    <P>Refund dapat diajukan paling lambat 5 x 24 jam sejak
                                                                        Tanggal Mulai Ngekost yang dipilih pertama kali.
                                                                        Ketentuan refund ini tidak berlaku bagi properti
                                                                        kost, APIK, dan kost Pilihan yang tercantum di
                                                                        platform kostJogja.</P>

                                                                    <p>Ketentuan lebih lanjut mengenai ketentuan refund
                                                                        kost, APIK, dan kost Pilihan, dapat Anda lihat di
                                                                        link berikut.</p>

                                                                    <P>
                                                                        <strong>Kapan dana saya akan dikembalikan?</strong>
                                                                    </P>

                                                                    <p>Pengembalian dana untuk pembatalan sewa yang diajukan
                                                                        akan diproses H+1 setelah pengajuan pengembalian
                                                                        dana Anda disetujui (tidak termasuk akhir pekan,
                                                                        cuti bersama, dan hari libur umum).</p>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="heading1BBBBB">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#collapse1BBBBB" aria-expanded="false"
                                                                    aria-controls="collapse1BBBBB"
                                                                    style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                    <p>Kapan dana saya akan dikembalikan?</p>
                                                                </a>
                                                            </div>
                                                            <div id="collapse1BBBBB" class="panel-collapse collapse"
                                                                role="tabpanel" aria-labelledby="heading1BBBBB">
                                                                <div class="panel-body" style="font-weight:lighter;">

                                                                    <p>Pengembalian dana untuk pembatalan sewa yang diajukan
                                                                        akan diproses H+1 setelah pengajuan pengembalian
                                                                        dana Anda disetujui (tidak termasuk akhir pekan,
                                                                        cuti bersama, dan hari libur umum).</p>

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
                                    <h3> Fitur</h3>

                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-heading1Six">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapse1Six" aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapse1Six"
                                                    style="color: rgb(0, 0, 0)";>
                                                    Boking Langsung
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
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading1A6">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse1A6"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse1A6"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p> Apa itu Booking Langsung bagi penyewa?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse1A6" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading1A6">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Booking Langsung adalah fitur yang memudahkan
                                                                                Anda sebagai calon penyewa kost untuk
                                                                                mengajukan permintaan sewa. Berikut
                                                                                informasi lain terkait Booking Langsung:</p>
                                                                            <ul>
                                                                                <li>Calon penyewa kost dapat langsung
                                                                                    mengajukan sewa pada pemilik kost
                                                                                    maksimal 2 bulan sebelum tanggal mulai
                                                                                    ngekost.</li>
                                                                                <li>Selama pengajuan sewa berlangsung, calon
                                                                                    penyewa kost dan pemilik dapat chat
                                                                                    langsung untuk memastikan informasi
                                                                                    lebih lanjut tentang kost yang akan
                                                                                    disewa.</li>
                                                                                <li>Bila pemilik kost telah mengonfirmasi
                                                                                    pengajuan sewa, calon penyewa dapat
                                                                                    langsung membayar tagihan melalui
                                                                                    kostJogja sebagai tanda jadi.</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading1B6">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse1B6"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse1B6"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Apa keuntungan fitur Booking Langsung untuk
                                                                                penyewa?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse1B6" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading1B6">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <ul>
                                                                                <li>
                                                                                    <strong>Mudah dan cepat menemukan kost
                                                                                        yang cocok.</strong>
                                                                                    <p>Pencarian lebih mudah, filter, Foto
                                                                                        lengkap, Foto 360, dan Virtual tour.
                                                                                    </p>
                                                                                </li>
                                                                                <li>
                                                                                    <strong>Bisa langsung pesan tanpa takut
                                                                                        keduluan.</strong>
                                                                                    <p>Booking maks. 3 bulan sebelum tanggal
                                                                                        masuk/ check in.</p>
                                                                                </li>
                                                                                <li>
                                                                                    <strong>Transaksi non tunai yang
                                                                                        praktis.</strong>
                                                                                    <p>Bayar DP dan uang sewa secara non
                                                                                        tunai/ cashless lewat berbagai
                                                                                        metode yang ada di kostJogja.
                                                                                        Transaksi pembayaran praktis karena
                                                                                        ditransfer ke rekening pemilik kost.
                                                                                    </p>
                                                                                </li>
                                                                                <li>
                                                                                    <strong>Keamanan transaksi dari
                                                                                        kostJogja</strong>
                                                                                    <p>kostJogja menjaga keamanan transaksi
                                                                                        Anda, gunakan chat dan pembayaran di
                                                                                        platform kostJogja.</p>
                                                                                </li>
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
                                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo"
                                                    style="color: rgb(0, 0, 0)";>
                                                    Bayar kost Langsung
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="panelsStayOpen-headingTwo">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel-group" id="accordion" role="tablist"
                                                                aria-multiselectable="true">

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading1A2">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse1A2"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse1A2"
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p> Apa itu Bayar kost Langsung bagi penyewa?
                                                                            </p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse1A2" class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading1A2">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <P>Bayar kost Langsung adalah fitur terbaru
                                                                                kostJogja yang mempermudah Anda memesan kost
                                                                                yang diinginkan. Melalui fitur ini Anda
                                                                                dapat memesan dan membayar kost sekaligus
                                                                                dengan scan kode QR kost yang diberikan
                                                                                pemilik/ penjaga kost saat Anda survey kost.
                                                                            </P>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading1B2,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse1B2,."
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse1B2,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Apa keuntungan menggunakan Bayar kost
                                                                                Langsung bagi penyewa?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse1B2,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading1B2,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Dengan menggunakan Bayar kost Langsung,
                                                                                proses pemesanan kost yang Anda inginkan
                                                                                saat survey kost menjadi lebih mudah. Anda
                                                                                dapat dengan mudah memesan dan membayar kost
                                                                                dengan scan kode QR yang diberikan oleh
                                                                                pemilik/ penjaga kost dan dapat memesan kost
                                                                                jauh hari maksimal 3 bulan sebelum tanggal
                                                                                check-in. </p>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading1B3,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse1B3,."
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse1B3,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Di mana saja kost yang memberlakukan Bayar
                                                                                kost Langsung?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse1B3,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading1B3,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Anda dapat menemukan kost yang memberlakukan
                                                                                Bayar kost Langsung di mana saja selama kost
                                                                                sudah terdaftar Booking Langsung. Pastikan
                                                                                pemilik kost menggunakan aplikasi kostJogja
                                                                                versi terbaru dan mengaktifkan kode QR
                                                                                kostnya.</p>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading1B4,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse1B4,."
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse1B4,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana saya mengetahui kost yang ingin
                                                                                saya pesan bisa Bayar kost Langsung?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse1B4,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading1B4,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Anda dapat bertanya kepada pemilik/ penjaga
                                                                                kost ketika survey kost dan bertemu secara
                                                                                langsung.</p>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading1B5,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse1B5,."
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse1B5,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Mengapa saya tidak dapat menggunakan fitur
                                                                                Bayar kost Langsung pada kost yang saya
                                                                                ingin sewa?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse1B5,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading1B5,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Pastikan pemilik kost mengaktifkan kode QR
                                                                                kost saat Anda melakukan scan untuk
                                                                                menggunakan fitur Bayar kost Langsung.</p>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading1B6,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse1B6,."
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse1B6,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara memesan kost melalui Bayar
                                                                                kost Langsung?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse1B6,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading1B6,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Berikut cara memesan kost melalui Bayar kost
                                                                                Langsung:</p>

                                                                            <ol>
                                                                                <li>
                                                                                    <p>Scan kode QR</p>
                                                                                    <p>Jika Anda dan pemilik kost sudah
                                                                                        sepakat dengan kamar kost yang akan
                                                                                        disewa, scan kode QR yang diberikan
                                                                                        oleh pemilik/ penjaga kost pada saat
                                                                                        survey/ bertemu secara langsung.
                                                                                        Menu scan QR dapat ditemukan di
                                                                                        halaman utama aplikasi kostJogja.
                                                                                    </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>Pilih kost yang sesuai</p>
                                                                                    <p>Ada kemungkinan pemilik kost memiliki
                                                                                        beberapa kost lain yang akan tampil
                                                                                        saat Anda scan kode QR. Pastikan
                                                                                        Anda memilih kost yang sesuai pada
                                                                                        saat memesan kost.</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>Isi form kontrak sewa</p>
                                                                                    <p>Lengkapi informasi mengenai kontrak
                                                                                        kost yang ingin disewa. Pilih
                                                                                        hitungan sewa (misal, mingguan,
                                                                                        bulanan, 3 bulanan, 6 bulanan, atau
                                                                                        tahunan), tanggal mulai masuk kost,
                                                                                        dan nomor kamar. Kemudian, isi biaya
                                                                                        tambahan yang diberlakukan jika ada.
                                                                                        Pastikan Anda dipandu oleh
                                                                                        pemilik/penjaga kost saat mengisi
                                                                                        form kontrak sewa.</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>Isi data diri</p>
                                                                                    <p>Setelah isi form kontrak sewa,
                                                                                        lengkapi data diri seperti nama
                                                                                        lengkap, jenis kelamin, nomor HP,
                                                                                        dll.</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>Verifikasi dan Pembayaran</p>
                                                                                    <p>Langkah selanjutnya masukkan kode
                                                                                        verifikasi yang dikirimkan oleh
                                                                                        kostJogja ke nomor HP Anda, kemudian
                                                                                        lakukan pembayaran untuk kost yang
                                                                                        sudah Anda pesan. Pilih salah satu
                                                                                        dari berbagai metode pembayaran yang
                                                                                        tersedia di kostJogja.</p>
                                                                                </li>

                                                                            </ol>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading1B7,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse1B7,."
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse1B7,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Apa saja tips agar proses sewa melalui Bayar
                                                                                kost Langsung lancar?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse1B7,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading1B7,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Agar sewa kost melalui Bayar kost Langsung
                                                                                berjalan lancar, pastikan beberapa hal
                                                                                berikut:</p>

                                                                            <ul>
                                                                                <li>Anda memiliki akun kostJogja dan telah
                                                                                    login sebelum memesan kost melalui Bayar
                                                                                    kost Langsung.</li>
                                                                                <li>Izinkan akses kamera smartphone Anda
                                                                                    ketika akan menggunakan fitur scan kode
                                                                                    QR.</li>
                                                                                <li>Pastikan Anda didampingi oleh
                                                                                    pemilik/penjaga kost untuk memandu Anda
                                                                                    dalam pengisian form Bayar kost
                                                                                    Langsung.</li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading1B8,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse1B8,."
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse1B8,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana ketentuan pembayaran sewa kost
                                                                                melalui Bayar kost Langsung?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse1B8,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading1B8,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <ul>
                                                                                <li>Apabila Anda sudah selesai melakukan
                                                                                    pengajuan sewa dan verifikasi, segera
                                                                                    lakukan pembayaran sesuai tagihan dan
                                                                                    metode pembayaran yang telah dipilih
                                                                                    sebelum kedaluwarsa (1×24 jam).</li>
                                                                                <li>Bila pembayaran gagal, pengajuan sewa
                                                                                    akan dibatalkan. Anda bisa mengulangi
                                                                                    proses pengajuan sewa.</li>
                                                                                <li>Bila pembayaran berhasil, Anda akan
                                                                                    mendapatkan kontrak sewa. Kontrak Sewa
                                                                                    dapat dilihat di menu kost Saya.</li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading1B9,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse1B9,."
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse1B9,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana penagihan sewa kost?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse1B9,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading1B9,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Penagihan sewa kost akan otomatis Anda terima
                                                                                melalui SMS. Umumnya tanggal penagihan akan
                                                                                berulang mengikuti tanggal pada saat Anda
                                                                                check in kost/ mulai sewa.</p>
                                                                            <p>Tagihan sewa kost juga dapat dilihat melalui
                                                                                Detail Booking yang dapat diakses di halaman
                                                                                Profil. Anda dapat melihat seluruh riwayat
                                                                                tagihan sewa kost dan juga membayar tagihan
                                                                                berikutnya.</p>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading1B10,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse1B10,." aria-expanded="false"
                                                                            aria-controls="collapse1B10,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Metode pembayaran apa saja yang tersedia di
                                                                                Bayar kost Langsung?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse1B10,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading1B10,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Anda dapat melakukan pembayaran dengan
                                                                                menggunakan metode kartu kredit, Virtual
                                                                                Account Bank, E-Wallet (Gopay, OVO, DANA,
                                                                                dan LinkAja), atau Retail Outlet terdekat
                                                                                (Alfamart, Indomaret, Lawson, DAN+DAN
                                                                                Store).</p>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading1B11,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse1B11,." aria-expanded="false"
                                                                            aria-controls="collapse1B11,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Apakah saya dapat melakukan pembayaran secara
                                                                                tunai?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse1B11,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading1B11,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Anda tidak dapat melakukan pembayaran secara
                                                                                tunai. Hal ini akan menyebabkan tagihan Anda
                                                                                tidak terverifikasi melalui sistem kostJogja
                                                                                dan kontrak Anda tidak dapat dibuat.</p>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading1B12,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapse1B12,." aria-expanded="false"
                                                                            aria-controls="collapse1B12,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Mengapa saya tidak dapat memasukkan kode
                                                                                voucher saat melakukan pembayaran melalui
                                                                                Bayar kost Langsung?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse1B12,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading1B12,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Anda tidak dapat menggunakan kode voucher
                                                                                lain pada transaksi Bayar kost Langsung.
                                                                                Sebagai gantinya, Anda akan otomatis
                                                                                mendapatkan potongan harga khusus dengan
                                                                                melakukan pembayaran melalui Bayar kost
                                                                                Langsung.</p>

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
                                                            data-bs-target="#panelsStayOpen-collapse3One"
                                                            aria-expanded="true"
                                                            aria-controls="panelsStayOpen-collapse3One">
                                                            Pendaftaran
                                                        </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapse3One"
                                                        class="accordion-collapse collapse show"
                                                        aria-labelledby="panelsStayOpen-heading3One">
                                                        <div class="accordion-body">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab"
                                                                    id="heading3A,.">
                                                                    <a class="collapsed" role="button"
                                                                        data-toggle="collapse" data-parent="#accordion"
                                                                        href="#collapse3A,." aria-expanded="false"
                                                                        aria-controls="collapse3A,."
                                                                        style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                        <p>Bagaimana cara daftar akun pencari kost?</p>
                                                                    </a>
                                                                </div>
                                                                <div id="collapse3A,." class="panel-collapse collapse"
                                                                    role="tabpanel" aria-labelledby="heading3A,.">
                                                                    <div class="panel-body" style="font-weight:lighter;">

                                                                        <ol>
                                                                            <li>
                                                                                <p>Pada halaman utama kostJogja pilih menu
                                                                                    <strong>Masuk</strong>
                                                                                </p>
                                                                            </li>

                                                                            <li>
                                                                                <p>Pilih <strong>Pencari kost</strong></p>
                                                                            </li>

                                                                            <li>
                                                                                <p>Anda dapat mendaftar akun pencari kost
                                                                                    dengan menghubungkan akun media sosial
                                                                                    (Google/Facebook/Apple ID) Anda</p>
                                                                            </li>

                                                                            <li>
                                                                                <p>Untuk mendaftar dengan nomor HP, klik
                                                                                    Untuk mendaftar dengan nomor HP, klik
                                                                                    <strong>Daftar Sekarang</strong>
                                                                                </p>
                                                                            </li>

                                                                            <li>
                                                                                <p>Lengkapi form pendaftaran, lanjutkan
                                                                                    dengan klik <strong>Daftar</strong></p>
                                                                            </li>

                                                                            <li>
                                                                                <p>Selamat, Anda telah memiliki akun sebagai
                                                                                    pencari kost!</p>
                                                                            </li>

                                                                        </ol>

                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3B,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse3B,."
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3B,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Mengapa saya tidak bisa login sebagai penyewa
                                                                                dengan nomor HP?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse3B,." class="panel-collapse collapse"
                                                                        role="tabpanel" aria-labelledby="heading3B,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Login akun penyewa dengan nomor HP hanya
                                                                                dapat dilakukan bagi Anda yang sebelumnya
                                                                                mendaftar menggunakan nomor HP dan email di
                                                                                halaman http://127.0.0.1:8000/register.</p>
                                                                            <p>Apabila sebelumnya Anda mendaftar akun dengan
                                                                                menghubungkan akun media sosial (Google/
                                                                                Facebook/ Apple ID), maka Anda tidak dapat
                                                                                login menggunakan nomor HP. Silakan login
                                                                                dengan akun media sosial yang Anda hubungkan
                                                                                saat mendaftar.</p>
                                                                            <p>Namun jika Anda mendaftar dengan nomor HP dan
                                                                                memiliki kendala saat login, pastikan
                                                                                password dan nomor HP yang Anda masukkan
                                                                                sudah sesuai dan nomor hanya terdaftar dan
                                                                                terverifikasi pada satu akun (tidak
                                                                                terduplikasi di akun lain).</p>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="panelsStayOpen-heading3Two">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapse3Two"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapse3Two">
                                                                Pengaturan
                                                            </button>
                                                        </h2>
                                                        <div id="panelsStayOpen-collapse3Two"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="panelsStayOpen-heading3Two">
                                                            <div class="accordion-body">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3A2,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse3A2,."
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3A2,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara mengubah password akun
                                                                                penyewa?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse3A2,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading3A2,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Jika Anda mendaftar akun kostJogjadengan
                                                                                menghubungkan akun Facebook/ Google Anda,
                                                                                maka Anda tidak perlu membuat password. Anda
                                                                                bisa terus masuk menggunakan akun Facebook/
                                                                                Google, atau Anda dapat memilih untuk ubah
                                                                                password langsung di akun Facebook/ Google
                                                                                Anda.</p>
                                                                            <p>Apabila Anda mendaftar sebagai pemilik kost
                                                                                menggunakan nomor telepon, Anda dapat
                                                                                mengubah password dengan cara sebagai
                                                                                berikut:</p>

                                                                            <ol>
                                                                                <li>
                                                                                    <p>Login akun pencari kost, kemudian
                                                                                        pilih menu <strong>Setelan
                                                                                            Akun</strong> pada halaman utama
                                                                                        pemilik sebelah kiri.</p>
                                                                                </li>


                                                                                <li>
                                                                                    <p>Klik <strong>Ubah Password,</strong>
                                                                                        kemudian masukkan password lama dan
                                                                                        password baru Anda.</p>
                                                                                </li>


                                                                                <li>
                                                                                    <p>Simpan perubahan yang telah dilakukan
                                                                                        dengan klik Submit <strong>Password
                                                                                            Baru.</strong></p>
                                                                                </li>

                                                                            </ol>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3B2,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse3B2,."
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3B2,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Saya lupa password akun penyewa, apa yang
                                                                                harus saya lakukan?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse3B2,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading3B2,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Jika Anda lupa password akun pemilik kost
                                                                                Anda, ikuti langkah berikut:</p>

                                                                            <ol>

                                                                                <li>
                                                                                    <p>Pada halaman utama kostJogja klik
                                                                                        <strong>Masuk</strong>, kemudian
                                                                                        pilih login sebagai <strong>Pencari
                                                                                            kost</strong>
                                                                                    </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>Klik<strong>Lupa Password</strong>
                                                                                    </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>Masukkan nomor HP yang terdaftar dan
                                                                                        terverifikasi di akun Anda, kemudian
                                                                                        klik <strong>Pilih metode
                                                                                            verifikasi</strong></p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>Anda dapat memilih metode verifikasi
                                                                                        yang Anda inginkan</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>Masukkan kode verifikasi yang
                                                                                        dikirimkan oleh kostJogja melalui
                                                                                        SMS/ WA sesuai dengan metode yang
                                                                                        sebelumnya dipilih</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>Buat password baru untuk akun Anda,
                                                                                        kemudian <strong>Simpan</strong></p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>Password berhasil diubah. Apabila
                                                                                        ingin melakukan perubahan kembali,
                                                                                        Anda dapat ganti password melalui
                                                                                        menu <strong> Profil,</strong> klik
                                                                                        <strong>Informasi Pribadi,</strong>
                                                                                        kemudian pilih
                                                                                        <strong>Password.</strong>
                                                                                    </p>
                                                                                </li>

                                                                            </ol>

                                                                            <p>Langkah di atas hanya dapat dilakukan jika
                                                                                nomor HP Anda terdaftar dan telah
                                                                                terverifikasi pada satu akun.</p>
                                                                            <p>Jika sebelumnya Anda mendaftar sebagai
                                                                                pencari kost dengan menghubungkan akun media
                                                                                sosial (Google/ Facebook/ Apple ID), maka
                                                                                langkah Lupa Password di atas juga tidak
                                                                                dapat dilakukan, dikarenakan password yang
                                                                                digunakan adalah password dari akun media
                                                                                sosial. Reset password bisa dilakukan
                                                                                langsung dari akun media sosial Anda.</p>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3C2,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse3C2,."
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3C2,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara mengubah nomor telepon pada
                                                                                akun penyewa?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse3C2,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading3C2,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <ol>

                                                                                <li>
                                                                                    <p>Login akun pencari kost, kemudian
                                                                                        pilih menu <strong>Halaman
                                                                                            Profil.</strong></p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>Klik <strong>Verifikasi
                                                                                            Akun,</strong> kemudian klik
                                                                                        <strong>Ubah</strong> pada bagian
                                                                                        nomor telepon.
                                                                                    </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>Masukkan nomor telepon baru Anda,
                                                                                        lanjutkan dengan klik
                                                                                        <strong>Ubah.</strong>
                                                                                    </p>
                                                                                </li>

                                                                            </ol>

                                                                            <p>Verifikasi ulang dibutuhkan untuk keamanan
                                                                                akun dan memastikan perubahan tersebut
                                                                                dilakukan sepenuhnya oleh Anda sebagai
                                                                                pemilik akun. Apabila masih ada kendala,
                                                                                silakan hubungi CS kostJogja melalui
                                                                                WhatsApp 08983737383. Anda juga dapat kirim
                                                                                email ke kostjogja@gmail.com </p>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3D2,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse3D2,."
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3D2,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara mengubah email akun penyewa?
                                                                            </p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse3D2,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading3D2,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Jika Anda mendaftar akun kostJogja dengan
                                                                                menghubungkan akun Facebook/ Google Anda,
                                                                                maka Anda tidak dapat melakukan perubahan
                                                                                email melalui kostJogja. Anda dapat memilih
                                                                                untuk mendaftar akun kembali dengan akun
                                                                                Google baru atau ubah email langsung di akun
                                                                                Facebook Anda.</p>
                                                                            <p>Apabila Anda mendaftar sebagai pencari kost
                                                                                menggunakan nomor telepon, Anda dapat
                                                                                menambahkan/ mengubah email dengan cara
                                                                                sebagai berikut:</p>

                                                                            <ol>
                                                                                <li>
                                                                                    <p>Login akun pencari kost, kemudian
                                                                                        pilih menu <strong>Setelan
                                                                                            Akun</strong> pada halaman utama
                                                                                        pemilik sebelah kiri.</p>
                                                                                </li>
                                                                            </ol>

                                                                            <ol>
                                                                                <li>
                                                                                    <p>Klik <strong>Edit Email</strong>dan
                                                                                        masukkan email baru yang ingin Anda
                                                                                        tambahkan/ ubah.</p>
                                                                                </li>
                                                                            </ol>

                                                                            <ol>
                                                                                <li>
                                                                                    <p>Simpan perubahan yang telah dilakukan
                                                                                        dengan klik <strong>Submit Email
                                                                                            Baru.</strong></p>
                                                                                </li>
                                                                            </ol>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3E2,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse3E2,."
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3E2,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara mengubah data pada profil akun
                                                                                penyewa saya?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse3E2,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading3E2,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Anda dapat mengubah data pada profil akun
                                                                                penyewa Anda dengan cara sebagai berikut:
                                                                            </p>

                                                                            <ol>
                                                                                <li>
                                                                                    <p>Login akun pencari kost, kemudian
                                                                                        pilih menu <strong>Halaman
                                                                                            Profil</strong></p>
                                                                                </li>
                                                                            </ol>

                                                                            <ol>
                                                                                <li>
                                                                                    <p>Klik <strong>Edit Profil</strong>dan
                                                                                        masukkan data yang ingin Anda ubah.
                                                                                    </p>
                                                                                </li>
                                                                            </ol>

                                                                            <ol>
                                                                                <li>
                                                                                    <p>Simpan perubahan yang telah dilakukan
                                                                                        dengan klik <strong>Simpan</strong>
                                                                                    </p>
                                                                                </li>
                                                                            </ol>

                                                                            <p>Jika terdapat data profil yang tidak bisa
                                                                                diubah, pastikan kembali setiap data yang
                                                                                Anda masukkan sudah sesuai dengan format
                                                                                yang diminta. Apabila masih berkendala,
                                                                                silakan hubungi CS kostJogja WhatsApp
                                                                                08983737383 untuk pemilik kost. Anda juga
                                                                                dapat kirim email ke kostjogja@gmail.com</p>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3F2,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse3F2,."
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3F2,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana cara mengelola notifikasi akun
                                                                                penyewa yang dikirimkan untuk saya?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse3F2,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading3F2,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Saat ini penyewa hanya dapat mengelola
                                                                                notifikasi melalui aplikasi kostJogja.</p>

                                                                            <ol>
                                                                                <li>
                                                                                    <p>Login akun pencari kost, kemudian
                                                                                        pilih menu <strong>Profil</strong>
                                                                                    </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>Klik <strong>Pengaturan</strong>dan
                                                                                        aktifkan notifikasi yang ingin Anda
                                                                                        terima dan nonaktifkan jika tidak.
                                                                                    </p>
                                                                                </li>

                                                                            </ol>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3G2,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse3G2,."
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3G2,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Bagaimana jika notifikasi pada akun penyewa
                                                                                terlambat tampil?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse3G2,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading3G2,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Notifikasi terlambat/ tidak tampil dapat
                                                                                disebabkan pengaturan notifikasi pada akun
                                                                                penyewa Anda nonaktifkan. Pastikan Anda
                                                                                telah mengaktifkan notifikasi yang ingin
                                                                                ditampilkan.</p>
                                                                            <p>Apabila Anda sudah memastikan hal tersebut
                                                                                namun notifikasi masih terlambat/ tidak
                                                                                tampil, hal ini juga bisa disebabkan oleh
                                                                                pengaturan pada perangkat Anda, khususnya
                                                                                pada perangkat Android. Jika hal ini
                                                                                terjadi, kami sarankan Anda untuk mencoba
                                                                                beberapa hal berikut untuk mengatasinya:</p>

                                                                            <ol>
                                                                                <li>
                                                                                    <p>
                                                                                        <strong>Restart perangkat</strong>
                                                                                    <p>Langkah awal mengatasi hal ini adalah
                                                                                        dengan melakukan restart pada
                                                                                        perangkat Anda untuk refresh/ memuat
                                                                                        ulang sistem pada perangkat Anda.
                                                                                    </p>
                                                                                    </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>
                                                                                        <strong>Re-login akun
                                                                                            kostJogja</strong>
                                                                                    <p>Cara selanjutnya adalah dengan
                                                                                        mencoba logout akun pada aplikasi
                                                                                        kostJogja kemudian login kembali.
                                                                                    </p>
                                                                                    </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>
                                                                                        <strong>Re-install aplikasi
                                                                                            kostJogja</strong>
                                                                                    <p>Langkah awal mengatasi hal ini adalah
                                                                                        dengan melakukan restart pada
                                                                                        perangkat Anda untuk refresh/ memuat
                                                                                        ulang sistem pada perangkat Anda.
                                                                                    </p>
                                                                                    </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>
                                                                                        <strong>Aktifkan fungsi “Auto Start/
                                                                                            Mulai Otomatis”t</strong>
                                                                                    <p>Anda dapat melakukannya dengan masuk
                                                                                        ke Pengaturan/ Setting pada
                                                                                        perangkat, lalu pilih menu
                                                                                        Pengaturan Lainnya/ More Setting,
                                                                                        dan aktifkan tombol Mulai Otomatis/
                                                                                        Auto Start. Langkah ini dapat
                                                                                        berbeda pada setiap perangkat.</p>
                                                                                    <p>Dengan mengaktifkan fungsi ini,
                                                                                        aplikasi kostJogja akan secara
                                                                                        otomatis memulai setelah Anda
                                                                                        melakukan restart/ reboot perangkat
                                                                                        Anda.</p>
                                                                                    </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>
                                                                                        <strong>Cek mode “Do Not Disturb/
                                                                                            Jangan Ganggu”</strong>
                                                                                    <p>Notifikasi terlambat/ tidak tampil
                                                                                        juga dapat disebabkan oleh mode “Do
                                                                                        Not Disturb/ Jangan Ganggu” aktif
                                                                                        pada perangkat Anda. Atur ulang dan
                                                                                        non-aktifkan mode tersebut untuk
                                                                                        menghindari notifikasi terlambat/
                                                                                        tidak tampil.</p>
                                                                                    </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>
                                                                                        <strong>Cek fungsi notifikasi dan
                                                                                            background data</strong>
                                                                                    <p>Cek kembali pengaturan notifikasi
                                                                                        aplikasi kostJogja di perangkat Anda
                                                                                        dan pastikan Background Data
                                                                                        aplikasi kostJogja Anda aktif.</p>
                                                                                    </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>
                                                                                        <strong>Nonaktifkan fungsi
                                                                                            “Penghemat Daya”</strong>
                                                                                    <p>APenyebab lain notifikasi terlambat/
                                                                                        tidak tampil adalah fungsi
                                                                                        “Penghemat Daya” pada perangkat Anda
                                                                                        aktif. Atur ulang fungsi ini dan
                                                                                        non-aktifkan penghemat daya untuk
                                                                                        aplikasi kostJogja agar notifikasi
                                                                                        dapat tampil.</p>
                                                                                    </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p>
                                                                                        <strong>Cek fungsi “Data Saver” dan
                                                                                            pastikan dalam keadaan
                                                                                            nonaktif</strong>
                                                                                    <p>Fungsi “Data Saver” yang aktif
                                                                                        membatasi jumlah penggunaan data
                                                                                        pada aplikasi saat Anda tidak
                                                                                        menggunakan wi-fi. Namun hal ini
                                                                                        juga dapat menjadi penyebab
                                                                                        notifikasi terlambat/ tidak tampil.
                                                                                    </p>
                                                                                    </p>
                                                                                </li>
                                                                            </ol>

                                                                            <p>Jika Anda telah mencoba semua saran di atas
                                                                                dan notifikasi kostJogja masih terlambat/
                                                                                tidak tampil, silakan hubungi CS kostJogja
                                                                                melalui WhatsApp 08983737383 atau email ke
                                                                                kostjogja@gmail.com dengan melampirkan foto/
                                                                                video kendala yang Anda alami.</p>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                        id="heading3H2,.">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapse3H2,."
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3H2,."
                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                            <p>Saya mendapat notifikasi bahwa saya
                                                                                ditambahkan sebagai penyewa di kostJogja.
                                                                                Bagaimana saya menanggapinya?</p>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse3H2,."
                                                                        class="panel-collapse collapse" role="tabpanel"
                                                                        aria-labelledby="heading3H2,.">
                                                                        <div class="panel-body"
                                                                            style="font-weight:lighter;">

                                                                            <p>Anda ditambahkan sebagai penyewa karena Anda
                                                                                sudah menghuni suatu kost dan pemiliknya
                                                                                ingin memasukkan Anda ke dalam sistem
                                                                                pengelolaan kost di kostJogja. Anda bisa
                                                                                membuat akun di kostJogja setelah
                                                                                ditambahkan sebagai penyewa</p>
                                                                            <p>Di luar alasan itu, kami tidak menyarankan
                                                                                Anda untuk merespon notifikasi jika itu
                                                                                tidak bersumber dari kostJogja. Kami tidak
                                                                                pernah meminta password, kode pin, atau kode
                                                                                verifikasi. Jika Anda menemukan adanya
                                                                                penipuan yang mengatasnamakan kostJogja,
                                                                                segera laporkan kepada kami </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="panelsStayOpen-heading3C3">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapse3C3"
                                                                    aria-expanded="true"
                                                                    aria-controls="panelsStayOpen-collapse3C3"
                                                                    style="color: rgb(0, 0, 0)";>
                                                                    Verifikasi
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapse3C3"
                                                                class="accordion-collapse collapse show"
                                                                aria-labelledby="panelsStayOpen-heading3C3">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="panel-group" id="accordion"
                                                                                role="tablist"
                                                                                aria-multiselectable="true">

                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading"
                                                                                        role="tab" id="heading2A">
                                                                                        <a class="collapsed"
                                                                                            role="button"
                                                                                            data-toggle="collapse"
                                                                                            data-parent="#accordion"
                                                                                            href="#pencari3A3"
                                                                                            aria-expanded="false"
                                                                                            aria-controls="collapse2A"
                                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                            <p> Mengapa saya harus
                                                                                                verifikasi akun dan
                                                                                                identitas sebagai penyewa?
                                                                                            </p>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div id="pencari3A3"
                                                                                        class="panel-collapse collapse"
                                                                                        role="tabpanel"
                                                                                        aria-labelledby="heading2A">
                                                                                        <div class="panel-body"
                                                                                            style="font-weight:lighter;">

                                                                                            <p>Verifikasi akun dan identitas
                                                                                                dilakukan sebagai tindakan
                                                                                                pencegahan peretasan akun.
                                                                                                Selain itu verifikasi akun
                                                                                                dan identitas juga membantu
                                                                                                tim kostJogja dalam
                                                                                                memastikan keaslian
                                                                                                identitas Anda dan
                                                                                                memastikan kostJogja menjadi
                                                                                                platform yang aman tanpa
                                                                                                tindak penipuan, dan
                                                                                                sebagainya.</p>
                                                                                            <P>Sebagai pencari kost,
                                                                                                verifikasi akun dan
                                                                                                identitas diperlukan untuk
                                                                                                dapat mengajukan sewa
                                                                                                melalui Booking Langsung.
                                                                                            </P>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading"
                                                                                        role="tab" id="heading2A">
                                                                                        <a class="collapsed"
                                                                                            role="button"
                                                                                            data-toggle="collapse"
                                                                                            data-parent="#accordion"
                                                                                            href="#pencari3B3"
                                                                                            aria-expanded="false"
                                                                                            aria-controls="collapse2A"
                                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                            <p> Bagaimana cara verifikasi
                                                                                                akun dan identitas sebagai
                                                                                                penyewa?</p>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div id="pencari3B3"
                                                                                        class="panel-collapse collapse"
                                                                                        role="tabpanel"
                                                                                        aria-labelledby="heading2A">
                                                                                        <div class="panel-body"
                                                                                            style="font-weight:lighter;">
                                                                                            <p>Anda dapat melakukan
                                                                                                verifikasi akun sebagai
                                                                                                penyewa dengan cara sebagai
                                                                                                berikut:</p>
                                                                                            <ol>
                                                                                                <li>Login akun kostJogja,
                                                                                                    kemudian pilih menu
                                                                                                    <strong>Halaman
                                                                                                        Profil.</strong>
                                                                                                </li>
                                                                                                <li>Lanjutkan dengan klik
                                                                                                    <strong>Verifikasi
                                                                                                        Akun.</strong>
                                                                                                </li>
                                                                                                <li>Verifikasi email dan
                                                                                                    nomor telepon Anda
                                                                                                    dengan klik
                                                                                                    <strong>Verifikasi.</strong>
                                                                                                </li>
                                                                                                <li>Cek email dari kostJogja
                                                                                                    yang dikirimkan ke email
                                                                                                    Anda, kemudian klik
                                                                                                    <strong>Verifikasi
                                                                                                        Email.</strong>
                                                                                                </li>
                                                                                                <li>Cek SMS dari kostJogja
                                                                                                    yang dikirimkan ke nomor
                                                                                                    Anda, masukkan kode
                                                                                                    verifikasi yang
                                                                                                    diberikan.</li>
                                                                                            </ol>
                                                                                            <p>Selanjutnya verifikasi
                                                                                                identitas sebagai pencari
                                                                                                kost dapat Anda lakukan
                                                                                                dengan cara sebagai berikut:
                                                                                            </p>
                                                                                            <ol>
                                                                                                <li>Login akun kostJogja,
                                                                                                    kemudian pilih menu
                                                                                                    <strong>Halaman
                                                                                                        Profil.</strong>
                                                                                                </li>
                                                                                                <li>Lanjutkan dengan klik
                                                                                                    <strong>Verifikasi
                                                                                                        Akun.</strong>
                                                                                                </li>
                                                                                                <li>Pilih jenis identitas
                                                                                                    yang ingin digunakan
                                                                                                    untuk verifikasi.</li>
                                                                                                <li>Foto kartu identitas dan
                                                                                                    selfie dengan
                                                                                                    menggunakan identitas
                                                                                                    tersebut.</li>
                                                                                                <li>Aktifkan pada bagian
                                                                                                    menjamin data yang
                                                                                                    diberikan adalah benar,
                                                                                                    selanjutnya klik
                                                                                                    <strong>Simpan.</strong>
                                                                                                </li>
                                                                                            </ol>
                                                                                            <p>Jika alamat email dan nomor
                                                                                                telepon sudah sesuai, akun
                                                                                                Anda dapat langsung
                                                                                                terverifikasi. Selanjutnya
                                                                                                untuk verifikasi identitas
                                                                                                akan diproses maksimal 2×24
                                                                                                jam hari kerja.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading"
                                                                                        role="tab" id="heading2A">
                                                                                        <a class="collapsed"
                                                                                            role="button"
                                                                                            data-toggle="collapse"
                                                                                            data-parent="#accordion"
                                                                                            href="#pencari3C3"
                                                                                            aria-expanded="false"
                                                                                            aria-controls="collapse2A"
                                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                            <p> Apakah identitas yang saya
                                                                                                berikan saat proses
                                                                                                verifikasi sebagai penyewa
                                                                                                terjamin keamanannya?</p>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div id="pencari3C3"
                                                                                        class="panel-collapse collapse"
                                                                                        role="tabpanel"
                                                                                        aria-labelledby="heading2A">
                                                                                        <div class="panel-body"
                                                                                            style="font-weight:lighter;">
                                                                                            <p>Kami sangat menjaga privasi
                                                                                                Anda sebagai penyewa dan
                                                                                                pengguna kostJogja lainnya.
                                                                                                Informasi yang Anda berikan
                                                                                                selama proses verifikasi
                                                                                                akun dan identitas diatur
                                                                                                dalam Kebijakan Privasi
                                                                                                kami.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading"
                                                                                        role="tab" id="heading2A">
                                                                                        <a class="collapsed"
                                                                                            role="button"
                                                                                            data-toggle="collapse"
                                                                                            data-parent="#accordion"
                                                                                            href="#pencari3D3"
                                                                                            aria-expanded="false"
                                                                                            aria-controls="collapse2A"
                                                                                            style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                            <p>Mengapa saya tidak bisa
                                                                                                verifikasi akun penyewa?</p>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div id="pencari3D3"
                                                                                        class="panel-collapse collapse"
                                                                                        role="tabpanel"
                                                                                        aria-labelledby="heading2A">
                                                                                        <div class="panel-body"
                                                                                            style="font-weight:lighter;">
                                                                                            <p>Pastikan hal berikut agar
                                                                                                akun penyewa Anda dapat
                                                                                                diverifikasi:</p>
                                                                                            <ol>
                                                                                                <li>Alamat email dan nomor
                                                                                                    telepon yang digunakan
                                                                                                    sudah sesuai dan belum
                                                                                                    digunakan pada akun
                                                                                                    lain.</li>
                                                                                                <li>Email yang dikirim oleh
                                                                                                    kostJogja adalah email
                                                                                                    verifikasi terbaru dan
                                                                                                    link verifikasi belum
                                                                                                    kedaluwarsa.</li>
                                                                                                <li>Kode verifikasi yang
                                                                                                    dimasukkan sudah sesuai.
                                                                                                </li>
                                                                                            </ol>
                                                                                            <p>Jika masih berkendala,
                                                                                                silakan hubungi CS kostJogja
                                                                                                melalui WhatsApp
                                                                                                08983737383. Anda juga dapat
                                                                                                kirim email ke
                                                                                                kostjogja@gmail.com </p>
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
                                                            <h2 class="accordion-header" id="panelsStayOpen-heading3Four">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapse3Four"
                                                                    aria-expanded="false"
                                                                    aria-controls="panelsStayOpen-collapse3Four">
                                                                    Keamanan Akun dan Transaksi
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapse3Four"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="panelsStayOpen-heading3Four">
                                                                <div class="accordion-body">
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading3A4,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse3A4,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse3A4,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana agar transaksi pengajuan sewa
                                                                                    saya aman?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse3A4,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading3A4,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>kostJogja selalu berupaya untuk menjaga
                                                                                    keamanan dan kenyamanan Anda selama
                                                                                    bertransaksi dan berkomunikasi di
                                                                                    platform kostJogja (situs web dan
                                                                                    aplikasi). Berikut beberapa hal yang
                                                                                    bisa Anda lakukan agar transaksi Booking
                                                                                    Langsung Anda aman:</p>

                                                                                <ul>
                                                                                    <li>
                                                                                        <strong>Jaga informasi pribadi dan
                                                                                            verifikasi akun Anda</strong>
                                                                                        <p>Jangan pernah menginformasikan
                                                                                            data pribadi (nomor kontak,
                                                                                            email, atau password) maupun
                                                                                            kode verifikasi (OTP) kepada
                                                                                            siapapun dan lakukan verifikasi
                                                                                            akun Anda. Hal ini dilakukan
                                                                                            sebagai tindakan pencegahan
                                                                                            peretasan akun dan memastikan
                                                                                            keaslian identitas Anda sebagai
                                                                                            calon penyewa kost.</p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong>Lakukan proses transaksi
                                                                                            Booking Langsung hanya di
                                                                                            kostJogja</strong>
                                                                                        <p>Kami tidak dapat menjamin
                                                                                            keamanan transaksi di luar
                                                                                            sistem kostJogja. Karena itu,
                                                                                            berhati-hatilah dan hindari
                                                                                            berkomunikasi/ bertransaksi di
                                                                                            luar kostJogja. Pastikan juga
                                                                                            Anda tidak membuka link apapun
                                                                                            yang mencurigakan/
                                                                                            mengatasnamakan kostJogja.</p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong>Kenali nomor tagihan dan
                                                                                            transfer dana sesuai
                                                                                            nominalnya</strong>
                                                                                        <p>Bayarlah sesuai dengan nominal
                                                                                            yang tertera pada tagihan
                                                                                            Booking Langsung Anda. Hati-hati
                                                                                            jika ada pihak yang menghubungi
                                                                                            untuk meminta Anda mentransfer
                                                                                            biaya tambahan di luar tagihan
                                                                                            transaksi.</p>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="accordion-item
                                                                                    <h2 class="accordion-header"
                                                            id="panelsStayOpen-heading3Five">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapse3Five"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapse3Five">
                                                                Penutupan Akun Penyewa
                                                            </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapse3Five"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="panelsStayOpen-heading3Five">
                                                                <div class="accordion-body">
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading1B12,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse1B12,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse1B12,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Apakah saya bisa membuat akun penyewa di
                                                                                    kostJogja lagi setelah menutup akun?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse1B12,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading1B12,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Anda dapat melakukan registrasi ulang
                                                                                    dengan informasi pribadi yang pernah
                                                                                    didaftarkan sebelumnya setelah 2×24 jam
                                                                                    (dua kali dua puluh empat jam) sejak
                                                                                    Anda melakukan penghapusan akun.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading1B13,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse1B13,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse1B13,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Apa saja yang perlu diperhatikan sebelum
                                                                                    menutup akun penyewa?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse1B13,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading1B13,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Sebelum menutup akun kostJogja, pastikan
                                                                                    Anda telah menyelesaikan pembayaran atau
                                                                                    kewajiban terlebih dahulu. Untuk akun
                                                                                    penyewa, hal yang perlu diperhatikan
                                                                                    adalah: </p>

                                                                                <ol>
                                                                                    <li>Pastikan telah mengkonfirmasi nomor
                                                                                        HP, karena kode OTP untuk menghapus
                                                                                        akun akan dikirimkan hanya ke nomor
                                                                                        yang telah terdaftar. </li>
                                                                                    <li>Tidak ada Kontrak Sewa yang masih
                                                                                        aktif.</li>
                                                                                    <li>Tidak ada Pengajuan Sewa yang masih
                                                                                        aktif.</li>
                                                                                    <li>Tidak ada Pembayaran Sewa yang masih
                                                                                        tertunggak.</li>
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading1B14,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse1B14,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse1B14,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana cara menutup akun penyewa?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse1B14,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading1B14,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Untuk dapat menutup akun penyewa di
                                                                                    kostJogja, ada beberapa langkah mudah
                                                                                    yang dapat Anda lakukan: </p>

                                                                                <ol>
                                                                                    <li>Melalui aplikasi kostJogja, kunjungi
                                                                                        menu “Profil” dan pilih
                                                                                        “Pengaturan”. </li>
                                                                                    <li>Pilih “Hapus Akun”, dan pastikan
                                                                                        sebelumnya Anda telah menyelesaikan
                                                                                        pembayaran dan kewajiban lain. </li>
                                                                                    <li>Masukkan kode OTP yang dikirimkan ke
                                                                                        nomor HP yang terdaftar ketika Anda
                                                                                        membuat akun.</li>
                                                                                    <li>Masukkan alasan Anda ingin menghapus
                                                                                        akun.</li>
                                                                                    <li>Akun penyewa dan semua data Anda di
                                                                                        kostJogja telah terhapus.</li>
                                                                                </ol>
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



                                        {{-- Sewa kost --}}
                                        <div class="col-lg-15">
                                            <div class="tab-content">
                                                <div class="tab-pane" id="sewa">
                                                    <h3> Sewa kost</h3>

                                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseOne"
                                                                    aria-expanded="true"
                                                                    aria-controls="panelsStayOpen-collapseOne">
                                                                    Pengajuan Sewa
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapseOne"
                                                                class="accordion-collapse collapse show"
                                                                aria-labelledby="panelsStayOpen-headingOne">
                                                                <div class="accordion-body">
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading4D1,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse4D1,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse4D1,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Mengapa saya harus melakukan check-in?
                                                                                </p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse4D1,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading4D1,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Check-in diperlukan untuk memastikan
                                                                                    bahwa Anda secara resmi benar-benar
                                                                                    sudah memulai sewa di suatu kost.
                                                                                    Setelah Anda melakukan check-in, pemilik
                                                                                    kost baru dapat menerima uang sewa
                                                                                    pertama yang sudah Anda bayar, dan Anda
                                                                                    bisa mulai menikmati manfaat berikut:
                                                                                </p>

                                                                                <ul>
                                                                                    <li>Berkesempatan mendapat promo-promo
                                                                                        di kostJogja khusus untuk penyewa.
                                                                                    </li>
                                                                                    <li>Secara otomatis mendapatkan
                                                                                        pengingat tagihan kost.</li>
                                                                                    <li>Pembayaran cashless. Anda bisa
                                                                                        mencoba beragam metode pembayaran
                                                                                        dengan dukungan keamanan dari
                                                                                        kostJogja.</li>
                                                                                    <li>Tagihan pembayaran kost tercatat
                                                                                        rapi.</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading4D12,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse4D12,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse4D12,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana cara ajukan sewa di kostJogja?
                                                                                </p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse4D12,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading4D12,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Setelah pilih-pilih dan dapat kost yang
                                                                                    cocok, Anda bisa langsung melanjutkan
                                                                                    proses pengajuan sewa ke pemilik kost
                                                                                    dengan cara berikut: </p>

                                                                                <ol>
                                                                                    <li>
                                                                                        <strong>Klik “Ajukan Sewa” di iklan
                                                                                            kost</strong>
                                                                                        <p>Masuk ke iklan kost yang Anda
                                                                                            inginkan, lalu klik “Ajukan
                                                                                            Sewa”.</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <strong>Isi dan lengkapi data
                                                                                            penyewa</strong>
                                                                                        <p>Masukkan data Anda sesuai kartu
                                                                                            identitas, agar pemilik dapat
                                                                                            verifikasi saat menerima Anda di
                                                                                            kost.”.</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <strong>Tunggu verifikasi dari
                                                                                            pemilik kost</strong>
                                                                                        <p>Setelah Anda mengirim pengajuan
                                                                                            sewa, pemilik kost akan
                                                                                            memeriksanya. Pemilik kost akan
                                                                                            memberitahu apakah pengajuan
                                                                                            Anda diterima/ditolak dalam
                                                                                            waktu maksimal 3 x 24 jam
                                                                                            setelah pengajuan sewa.</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <strong>Lakukan pembayaran uang
                                                                                            sewa</strong>
                                                                                        <p>Jika pengajuan sewa Anda
                                                                                            disetujui, Anda perlu melakukan
                                                                                            pembayaran uang sewa pertama.
                                                                                            Beberapa kost menerapkan sistem
                                                                                            DP (uang muka) di pembayaran
                                                                                            pertama.</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <strong>Lakukan check-in saat masuk
                                                                                            kost</strong>
                                                                                        <p>Saat Anda mulai masuk/pindah ke
                                                                                            kost, jangan lupa lakukan
                                                                                            check-in di aplikasi/situs
                                                                                            kostJogja untuk memudahkan
                                                                                            pencatatan tagihan Anda selama
                                                                                            tinggal di kostan.</p>
                                                                                    </li>

                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading4D13,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse4D13,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse4D13,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana jika pemilik kost sudah
                                                                                    memberikan konfirmasi pengajuan sewa?
                                                                                </p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse4D13,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading4D13,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <ul>
                                                                                    <li>Apabila pemilik kost sudah
                                                                                        mengkonfirmasi pengajuan sewa Anda,
                                                                                        segera lakukan pembayaran tepat
                                                                                        sesuai tagihan sebelum kedaluwarsa
                                                                                        (1×24 jam setelah konfirmasi). </li>
                                                                                    <li>Bila pembayaran gagal, pengajuan
                                                                                        sewa akan dibatalkan. Anda bisa
                                                                                        mengulangi pengajuan sewa dari
                                                                                        halaman detail kost.</li>
                                                                                    <li>Bila pembayaran berhasil, Anda akan
                                                                                        mendapatkan kontrak sewa. Tunjukkan
                                                                                        kontrak sewa dan kartu identitas
                                                                                        asli Anda pada pemilik kost saat
                                                                                        masuk/ check in.</li>
                                                                                    <li>Kontrak Sewa dapat dilihat di menu
                                                                                        kost Saya.</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading4D14,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse4D14,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse4D14,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Apa saja tips agar proses booking lancar?
                                                                                </p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse4D14,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading4D14,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <ul>
                                                                                    <li>Tentukan tanggal masuk dan durasi
                                                                                        sewa, agar memudahkan pemilik kost
                                                                                        dalam memprioritaskan pengajuan sewa
                                                                                        dan mempersiapkan kamar untuk Anda.
                                                                                        Bila belum yakin berapa lama Anda
                                                                                        ingin menyewa, jangan khawatir.
                                                                                        Durasi sewa dapat diperpanjang
                                                                                        nanti.</li>
                                                                                    <li>Lengkapi data diri, agar pemilik
                                                                                        kost bisa mengenal Anda dan yakin
                                                                                        dengan keseriusan Anda. Pastikan
                                                                                        data sesuai dengan kartu identitas
                                                                                        resmi Anda. </li>
                                                                                    <li>Jangan lupa upload foto kartu
                                                                                        identitas resmi yang terlihat jelas,
                                                                                        tanpa terpotong. Tenang saja.
                                                                                        kostJogja hanya akan menampilkan
                                                                                        data pribadi pada pemilik kost di
                                                                                        mana Anda mengajukan sewa saja.
                                                                                        Gunanya agar pemilik kost dapat cek
                                                                                        keaslian data yang diberikan sebelum
                                                                                        memutuskan mengkonfirmasi pengajuan
                                                                                        sewa atau tidak. Mohon diingat,
                                                                                        konfirmasi pengajuan sewa adalah hak
                                                                                        prerogatif pemilik kost.</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading4D15,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse4D15,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse4D15,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana cara check-in di kost?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse4D15,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading4D15,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Check-in perlu dilakukan di tanggal mulai
                                                                                    masuk kost, yang sudah Anda tentukan
                                                                                    sebelumnya pada saat pengajuan sewa Saat
                                                                                    pertama kali masuk kost baru, Anda dapat
                                                                                    melakukan check-in dengan cara:</p>

                                                                                <ol>
                                                                                    <li>Login sebagai <strong>Pencari
                                                                                            kost</strong></li>
                                                                                    <li>Klik foto akun di pojok kanan atas,
                                                                                        lalu klik <strong>Profil</strong>
                                                                                    </li>
                                                                                    <li>Di menu <strong>kost Saya,</strong>
                                                                                        klik <strong>Check-in</strong> </li>
                                                                                    <li>Klik <strong>Selesai & ke kost
                                                                                            Saya</strong> untuk melihat
                                                                                        <strong>Tagihan</strong> dan
                                                                                        <strong>Kontrak Sewa</strong> Anda
                                                                                        selama tinggal di kostan
                                                                                    </li>
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading4D17,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse4D17,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse4D17,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana cara check-out di kost?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse4D17,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading4D17,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Check-out dilakukan saat Anda ingin
                                                                                    memberhentikan kontrak sewa di kost yang
                                                                                    Anda huni. Berikut cara untuk melakukan
                                                                                    check-out atau pemberhentian sewa:</p>

                                                                                <ol>
                                                                                    <li>Login akun <strong>Pencari
                                                                                            kost</strong> </li>
                                                                                    <li>Klik menu <strong>Profil</strong>
                                                                                    </li>
                                                                                    <li>Pada bagian <strong>kost
                                                                                            Saya,</strong> klik
                                                                                        <strong>Kontrak</strong>
                                                                                    </li>
                                                                                    <li>Klik <strong>Ajukan Berhenti
                                                                                            Sewa.</strong> Pastikan Anda
                                                                                        sudah membayar tagihan sewa kost
                                                                                        saat memberhentikan kontrak</li>
                                                                                    <li>Pilih alasan berhenti sewa dan pilih
                                                                                        tanggal kapan Anda ingin kontrak
                                                                                        sewa Anda berhenti.</li>
                                                                                    <li>Anda juga bisa menceritakan
                                                                                        pengalaman Anda selama ngekost
                                                                                        dengan mengisi review.
                                                                                        <p>Selanjut klik <strong>Kirim
                                                                                                Pengajuan</strong></p>
                                                                                    </li>
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading4D18,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse4D18,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse4D18,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana cara review kost yang saya
                                                                                    sewa?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse4D18,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading4D18,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Anda dapat memberikan review kost yang
                                                                                    sedang disewa dengan cara berikut:</p>

                                                                                <ol>
                                                                                    <li>Login akun pencari kost</li>
                                                                                    <li>Pilih menu <strong>kost
                                                                                            Saya</strong></li>
                                                                                    <li>Pilih bagian review kost</li>
                                                                                    <li>Berikan penilaian dan review kost
                                                                                        dengan detail</li>
                                                                                    <li>Klik <strong>Upload Foto</strong>
                                                                                        untuk menambahkan foto kost</li>
                                                                                    <li>Apabila Anda tidak ingin menampilkan
                                                                                        nama pada review kost, centang
                                                                                        bagian <strong>“Tampilkan review
                                                                                            tanpa nama”</strong></li>
                                                                                    <li>Klik <strong>Kirim</strong> untuk
                                                                                        mengirimkan review</li>
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseTwo"
                                                                    aria-expanded="false"
                                                                    aria-controls="panelsStayOpen-collapseTwo">
                                                                    Perubahan Sewa
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapseTwo"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="panelsStayOpen-headingTwo">
                                                                <div class="accordion-body">
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading4D2,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse4D2,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse4D2,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Apakah saya bisa mengubah kontrak sewa
                                                                                    saya?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse4D2,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading4D2,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Anda tidak dapat mengubah kontrak sewa.
                                                                                    Jika terdapat ketidaksesuaian isi
                                                                                    kontrak atau Anda ingin melakukan
                                                                                    penyesuaian terkait:</p>

                                                                                <ul>
                                                                                    <li>Hitungan sewa (bulanan, 3 bulan, 6
                                                                                        bulan, dsb.),</li>
                                                                                    <li>Durasi sewa dan tanggal berakhir
                                                                                        sewa,</li>
                                                                                    <li>Harga sewa + biaya lainnya,</li>
                                                                                    <li>Tanggal penagihan uang sewa,</li>
                                                                                </ul>

                                                                                <p>Anda dapat menghubungi pemilik secara
                                                                                    langsung atau melalui fitur chat
                                                                                    kostJogja. Jika pemilik kost sudah
                                                                                    menyetujuinya, pemilik kost akan
                                                                                    mengubah kontrak sewa Anda.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading4D21,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse4D21,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse4D21,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Kontrak saya akan segera berakhir, dan
                                                                                    saya ingin lanjut ngekost. Apa yang
                                                                                    harus saya lakukan?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse4D21,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading4D21,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Untuk melanjutkan kontrak sewa, Anda bisa
                                                                                    memberitahukannya kepada pemilik kost
                                                                                    terlebih dahulu, dan kemudian membayar
                                                                                    tagihan pembayaran berikutnya.</p>
                                                                                <p>Jika Anda menemukan tulisan berikut di
                                                                                    halaman kost Saya, maka Anda hanya perlu
                                                                                    membayar tagihan pembayaran berikutnya
                                                                                    untuk melajutkan kontrak sewa.</p>
                                                                                <p>Jika Anda ingin melanjutkan kontrak sewa
                                                                                    dengan perubahan di dalam kontrak sewa,
                                                                                    Anda bisa menghubungi pemilik kost </p>
                                                                                <p>Anda juga bisa menghentikan kontrak sewa
                                                                                    jika tidak ingin melanjutkan kontrak
                                                                                    sewa.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading4D22,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse4D22,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse4D22,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Saya ingin mengubah jadwal check-in
                                                                                    (reschedule), apa yang harus saya
                                                                                    lakukan?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse4D22,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading4D22,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Anda dapat reschedule jadwal check-in
                                                                                    dengan memperhatikan beberapa ketentuan
                                                                                    berikut:</p>

                                                                                <ul>
                                                                                    <li>Pengajuan reschedule pada
                                                                                        <strong>kostjogja</strong> dapat
                                                                                        dilakukan <strong>maksimal
                                                                                            H-1</strong> dari Tanggal Mulai
                                                                                        Ngekost yang sebelumnya diajukan.
                                                                                        Hubungi tim kostJogja sebagai
                                                                                        pengelola kost dan informasikan
                                                                                        pengajuan reschedule tersebut. Tim
                                                                                        kostJogja akan membantu proses
                                                                                        reschedule Anda sesuai dengan
                                                                                        ketentuan yang berlaku.
                                                                                    </li>
                                                                                    <li>Selanjutnya untuk kost di luar
                                                                                        kostjogja, pengajuan reschedule
                                                                                        dapat dilakukan dengan
                                                                                        <strong>menghubungi pemilik kost
                                                                                            terlebih dahulu.</strong> Jika
                                                                                        pemilik kost menyetujui pengajuan
                                                                                        Anda, informasikan persetujuan
                                                                                        tersebut ke CS kostJogja agar
                                                                                        pengajuan reschedule Anda dapat
                                                                                        diproses.
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading4D23,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse4D23,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse4D23,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana jika pengajuan reschedule saya
                                                                                    tidak disetujui?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse4D23,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading4D23,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Apabila pengajuan reschedule Anda ditolak
                                                                                    atau tidak ada konfirmasi dari pemilik,
                                                                                    maka tanggal check-in Anda sesuai dengan
                                                                                    tanggal check-in awal yang Anda pilih
                                                                                    sebelum permintaan reschedule.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading4D24,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse4D24,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse4D24,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana cara meminta relokasi?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse4D24,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading4D24,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Jika setelah proses pembatalan sewa
                                                                                    disetujui dan Anda memilih untuk
                                                                                    relokasi kost, Anda dapat menghubungi CS
                                                                                    kostJogja. Nantinya tim kostJogja akan
                                                                                    memberikan rekomendasi kost baru kepada
                                                                                    Anda dan membantu proses pengajuan
                                                                                    sewanya.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header"
                                                                id="panelsStayOpen-headingThree">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseThree"
                                                                    aria-expanded="false"
                                                                    aria-controls="panelsStayOpen-collapseThree">
                                                                    Pembatalan Sewa
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapseThree"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="panelsStayOpen-headingThree">
                                                                <div class="accordion-body">
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading4D3,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse4D3,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse4D3,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Apakah saya bisa membatalkan pengajuan
                                                                                    sewa saya?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse4D3,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading4D3,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Sebagai penyewa, Anda memiliki hak untuk
                                                                                    melakukan pembatalan. Ada pun segala
                                                                                    bentuk pembatalan yang tidak memenuhi
                                                                                    poin di bawah ini, maka biaya admin
                                                                                    (Rp9.000) tidak dapat dikembalikan:</p>

                                                                                <ul>
                                                                                    <li>Transaksi dilakukan melalui platform
                                                                                        kostJogja</li>
                                                                                    <li>Kamar tidak tersedia</li>
                                                                                    <li>Fasilitas kost tidak sesuai dengan
                                                                                        yang tertera</li>
                                                                                    <li>Pemilik kost melakukan pembatalan
                                                                                    </li>
                                                                                </ul>

                                                                                <p>Apabila Anda telah melakukan pembayaran
                                                                                    sewa dengan skema Down Payment (DP) dan
                                                                                    Settlement, maka mohon maaf DP tidak
                                                                                    dapat dikembalikan, karena bersifat
                                                                                    non-refundable.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading4D31,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse4D31,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse4D31,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana cara membatalkan pengajuan
                                                                                    sewa?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse4D31,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading4D31,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Apabila Anda belum membayar tagihan atas
                                                                                    pengajuan sewa, Anda dapat mengabaikan
                                                                                    tagihan tersebut hingga transaksi batal
                                                                                    otomatis.</p>
                                                                                <p>Jika Anda sudah membayar tagihan
                                                                                    tersebut, Anda dapat menghubungi CS
                                                                                    kostJogja untuk mengajukan pembatalan
                                                                                    pengajuan sewa. Persetujuan pengajuan
                                                                                    pengembalian dana akan mengacu pada
                                                                                    Syarat dan Ketentuan yang berlaku.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading4D32,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse4D32,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse4D32,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Kapan dana pembatalan sewa saya akan
                                                                                    dikembalikan?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse4D32,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading4D32,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Jika Anda melakukan pembatalan sewa, maka
                                                                                    pengembalian dana akan diproses H+1
                                                                                    setelah pengajuan pengembalian dana Anda
                                                                                    disetujui (tidak termasuk akhir pekan,
                                                                                    cuti bersama, dan hari libur umum).</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading4D33,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse4D33,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse4D33,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana cara membatalkan check-in?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse4D33,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading4D33,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Apabila Anda sudah check-in dan
                                                                                    memberikan konfirmasi, maka semua bentuk
                                                                                    pembatalan dan pengembalian dana
                                                                                    merupakan kesepakatan antara Anda
                                                                                    sebagai penyewa dan pemilik kost. Proses
                                                                                    pembatalan dapat melalui salah satu
                                                                                    antara dua cara berikut:</p>

                                                                                <ol>
                                                                                    <li>Meminta pemilik kost untuk
                                                                                        menghentikan kontrak sewa.</li>
                                                                                    <li>Menyampaikan pihak kostJogja melalui
                                                                                        CS kostJogja.</li>
                                                                                </ol>

                                                                                <p>Untuk proses pengembalian dana (refund),
                                                                                    Anda dapat menghubungi CS kostJogja</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading4D34,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse4D34,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse4D34,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Fasilitas kost tidak sesuai dengan
                                                                                    informasi yang ditampilkan di kostJogja,
                                                                                    apa yang perlu saya lakukan?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse4D34,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading4D34,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Apabila fasilitas kost tidak sesuai
                                                                                    dengan informasi yang ditampilkan, Anda
                                                                                    dapat mengajukan pengembalian dana atau
                                                                                    relokasi dengan menghubungi CS
                                                                                    kostJogja. Pada pengajuan tersebut Anda
                                                                                    diwajibkan mengumpulkan bukti
                                                                                    ketidaksesuaian fasilitas kost untuk
                                                                                    mempermudah proses pengecekan.</p>
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



                                        {{-- Pencarian kost --}}
                                        <div class="col-lg-15">
                                            <div class="tab-content">
                                                <div class="tab-pane" id="cari">
                                                    <h3>Pencarian kost</h3>

                                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseOne"
                                                                    aria-expanded="true"
                                                                    aria-controls="panelsStayOpen-collapseOne">
                                                                    Pencarian kost
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapseOne"
                                                                class="accordion-collapse collapse show"
                                                                aria-labelledby="panelsStayOpen-headingOne">
                                                                <div class="accordion-body">
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading5E1,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse5E1,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse5E1,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana cara cari kost di kostJogja?
                                                                                </p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse5E1,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading5E1,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Anda dapat dengan mudah mencari kost di
                                                                                    kostJogja. Pencarian bisa lebih tepat
                                                                                    dengan mencari kost berdasarkan area,
                                                                                    kota, kampus, atau bahkan stasiun dan
                                                                                    halte. Untuk mencari kost:</p>

                                                                                <ol>
                                                                                    <li>
                                                                                        <strong>Masukkan lokasi yang
                                                                                            dicari</strong>
                                                                                        <p>Saat mencari, Anda bisa gunakan
                                                                                            kata kunci lokasi, area, nama
                                                                                            kampus,nama stasiun, atau alamat
                                                                                            kost.</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <strong> Lihat dengan list atau
                                                                                            peta</strong>
                                                                                        <p>Anda bisa melihat hasil pencarian
                                                                                            dengan menggunakan list (daftar)
                                                                                            atau peta.</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <strong>Gunakan filter dan
                                                                                            sortir</strong>
                                                                                        <p>Untuk hasil pencarian yang lebih
                                                                                            spesifik sesuai kebutuhan, Anda
                                                                                            bisa filter (tipe kost, rentang
                                                                                            harga, fasilitas, dll.) dan/atau
                                                                                            sortir (berdasarkan harga atau
                                                                                            rekomendasi kami).</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <strong>Pilih kost, lalu ajukan
                                                                                            sewa</strong>
                                                                                        <p>Setelah pilih-pilih dan dapat
                                                                                            kost yang cocok, Anda dapat
                                                                                            memproses pengajuan sewa ke
                                                                                            pemilik kost dengan klik “Ajukan
                                                                                            Sewa”.</p>
                                                                                    </li>

                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading5E12,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse5E12,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse5E12,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana cara menghubungi pemilik kost?
                                                                                </p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse5E12,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading5E12,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Anda dapat menghubungi pemilik kost
                                                                                    melalui Chatroom kostJogja dengan cara
                                                                                    sebagai berikut:</p>

                                                                                <ol>
                                                                                    <li>Anda dapat menghubungi pemilik kost
                                                                                        melalui Chatroom kostJogja dengan
                                                                                        cara sebagai berikut:</li>
                                                                                    <li>Klik <strong>Tanya pemilik
                                                                                            kost</strong> yang terdapat pada
                                                                                        iklan kost untuk menghubungi pemilik
                                                                                    </li>
                                                                                    <li>Pilih pertanyaan yang ingin
                                                                                        ditanyakan, klik
                                                                                        <strong>Kirim</strong>
                                                                                    </li>
                                                                                    <li>Chatroom kostJogja akan
                                                                                        menghubungkan Anda dengan pemilik
                                                                                        kost</li>
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading5E13,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse5E13,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse5E13,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana cara mengetahui nomor telepon
                                                                                    pemilik kost?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse5E13,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading5E13,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Anda juga dapat mengetahui nomor telepon
                                                                                    pemilik kost melalui Chatroom kostJogja
                                                                                    dengan cara sebagai berikut:</p>

                                                                                <ol>
                                                                                    <li>Login akun pencari kost, kemudian
                                                                                        pilih kost yang ingin Anda tanyakan
                                                                                        nomor telepon pemiliknya</li>
                                                                                    <li>Klik <strong>Tanya pemilik
                                                                                            kost</strong> yang terdapat pada
                                                                                        iklan kost</li>
                                                                                    <li>Pilih pertanyaan “Cara menghubungi
                                                                                        pemilik?” kemudian klik
                                                                                        <strong>Kirim</strong>
                                                                                    </li>
                                                                                    <li>kostJogja akan membalas chat Anda
                                                                                        dan menginformasikan nomor telepon
                                                                                        pemilik kost yang dapat dihubungi
                                                                                    </li>
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading5E14,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse5E14,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse5E14,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana cara menggunakan filter
                                                                                    pencarian kost?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse5E14,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading5E14,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Filter pencarian yang tersedia akan
                                                                                    membantu Anda dalam mencari kost yang
                                                                                    sesuai kebutuhan Anda. Tentu untuk
                                                                                    mendapatkan hasil yang akurat Anda harus
                                                                                    mengawali pencarian menggunakan lokasi
                                                                                    lengkap yang diinginkan.</p>
                                                                                <strong>Deskripsi filter</strong>
                                                                                <p>kostJogja menyediakan beragam filter
                                                                                    untuk membantu Anda menemukan kost yang
                                                                                    dicari. Beberapa di antaranya bisa Anda
                                                                                    temukan dengan klik
                                                                                    <strong>Filter.</strong>
                                                                                </p>

                                                                                <ul>
                                                                                    <li>
                                                                                        <strong>Tipe kost</strong>
                                                                                        <p>Pilih tipe kost yang Anda cari
                                                                                            berdasarkan gender: kost khusus
                                                                                            putra, khusus putri, atau
                                                                                            campur.</p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong>Waktu bayar kost</strong>
                                                                                        <p>Pilih waktu bayar kost yang
                                                                                            diinginkan: mingguan, bulanan,
                                                                                            per 3 bulan, per 6 bulan, atau
                                                                                            tahunan.</p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong>Harga</strong>
                                                                                        <p>Masukkan rentang harga minimal
                                                                                            dan maksimal sewa kost.</p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong>Aturan kost</strong>
                                                                                        <p>Pilih peraturan kost yang sesuai
                                                                                            preferensi. Misalnya, bisa untuk
                                                                                            pasutri, akses 24 Jam, khusus
                                                                                            karyawan.</p>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong>Fasilitas</strong>
                                                                                        <p>Pilih layanan kost (fasilitas
                                                                                            bersama dan fasilitas kamar)
                                                                                            yang diinginkan. Misalnya AC,
                                                                                            WiFi, Parkir Motor.</p>
                                                                                    </li>
                                                                                </ul>

                                                                                <p>Kedepannya kami akan terus berusaha agar
                                                                                    Anda dengan mudah mendapatkan kost yang
                                                                                    sesuai dengan kebutuhan Anda di
                                                                                    kostJogja.</p>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseTwo"
                                                                    aria-expanded="false"
                                                                    aria-controls="panelsStayOpen-collapseTwo">
                                                                    Informasi dan Detail kost
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapseTwo"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="panelsStayOpen-headingTwo">
                                                                <div class="accordion-body">
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading5E2,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse5E2,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse5E2,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana mengetahui detail informasi
                                                                                    kost?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse5E2,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading5E2,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Anda dapat mengetahui detail informasi
                                                                                    kost dari iklan yang ditampilkan. Mulai
                                                                                    dari tipe kost, deskripsi, fasilitas dan
                                                                                    layanan kost, dsb. Jika Anda masih
                                                                                    memiliki pertanyaan, hubungi pemilik
                                                                                    kost melalui Chatroom kostJogja.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading5E21,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse5E21,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse5E21,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana cara memastikan update terakhir
                                                                                    kost?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse5E21,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading5E21,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Untuk memastikan update terakhir iklan
                                                                                    kost, Anda dapat memastikannya dengan
                                                                                    chat pemilik kost. Tanyakan apakah
                                                                                    informasi pada iklan sudah paling update
                                                                                    atau ada perubahan.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading5E22,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse5E22,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse5E22,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana cara melihat layanan dan
                                                                                    fasilitas kost yang tersedia?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse5E22,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading5E22,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Anda dapat mengetahui detail informasi
                                                                                    kost dari iklan yang ditampilkan. Cek
                                                                                    deskripsi dan fasilitas kost serta kamar
                                                                                    yang diinformasikan. Jika Anda masih
                                                                                    memiliki pertanyaan, hubungi pemilik
                                                                                    kost melalui Chatroom kostJogja.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading5E23,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse5E23,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse5E23,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana cara menyimpan kost yang saya
                                                                                    sukai?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse5E23,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading5E23,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Simpan kost yang disukai agar dapat Anda
                                                                                    lihat kembali di lain waktu dengan cara
                                                                                    berikut:</p>

                                                                                <ol>
                                                                                    <li>Login akun pencari kost, kemudian
                                                                                        pilih iklan kost yang ingin
                                                                                        disimpan.</li>
                                                                                    <li>Klik ikon hati yang berada di bawah
                                                                                        iklan.</li>
                                                                                    <li>Anda berhasil menyimpan iklan kost.
                                                                                        Cek kembali iklan yang Anda simpan
                                                                                        pada menu Histori tab
                                                                                        <strong>Favorit.</strong>
                                                                                    </li>
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading5E24,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse5E24,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse5E24,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana cara mendapatkan alamat kost
                                                                                    yang akan disewa?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse5E24,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading5E24,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Dapatkan alamat kost dengan klik Tanya
                                                                                    Alamat Lengkap pada peta lokasi kost
                                                                                    atau hubungi kost dengan cara sebagai
                                                                                    berikut:</p>

                                                                                <ol>
                                                                                    <li>Login akun pencari kost, kemudian
                                                                                        pilih kost yang ingin Anda tanyakan
                                                                                        alamatnya.</li>
                                                                                    <li>Klik ikon chat, kemudian pilih
                                                                                        pertanyaan “Alamat kost di mana?”,
                                                                                        lanjutkan dengan klik
                                                                                        <strong>Kirim</strong>
                                                                                    </li>
                                                                                    <li>kostJogja akan membalas chat Anda
                                                                                        dan menginformasikan alamat lengkap
                                                                                        kost.</li>
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading5E25,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse5E25,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse5E25,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Mengapa kost yang saya survei berbeda
                                                                                    dengan iklan?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse5E25,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading5E25,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Mohon maaf jika setelah melakukan survei
                                                                                    Anda menemukan bahwa kost berbeda dengan
                                                                                    iklan. Hal ini dapat terjadi karena
                                                                                    iklan kost tidak update. Pembaruan
                                                                                    informasi (update) dalam detail kost
                                                                                    tergantung pada keaktifan pemilik kost.
                                                                                </p>
                                                                                <p>Jika Anda ingin melaporkan iklan kost
                                                                                    yang tidak sesuai setelah Anda survei
                                                                                    (dalam segi harga, alamat, fasilitas,
                                                                                    foto, ketersediaan kamar, dll), silakan
                                                                                    ikuti langkah berikut:</p>

                                                                                <ol>
                                                                                    <li>Login akun pencari kost, kemudian
                                                                                        pilih iklan kost dengan data yang
                                                                                        kurang tepat.</li>
                                                                                    <li>Klik <strong>Laporkan</strong> dan
                                                                                        pilih data apa yang kurang tepat
                                                                                        dari iklan tersebut dan jelaskan
                                                                                        kepada kami lebih detail.</li>
                                                                                    <li>Lanjutkan dengan klik <strong>Kirim
                                                                                            Laporan.</strong></li>
                                                                                    <li>Tim kostJogja akan menindaklanjuti
                                                                                        laporan Anda.</li>
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading5E26,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse5E26,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse5E26,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Apa itu Harga Sewa dan Biaya Lainnya?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse5E26,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading5E26,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <ol>
                                                                                    <li><strong>Harga Sewa</strong> adalah
                                                                                        harga yang harus Anda bayarkan pada
                                                                                        pemilik kost secara rutin setiap
                                                                                        jangka waktu tertentu. Sewa dapat
                                                                                        dibayarkan per minggu, per bulan,
                                                                                        per 3 bulan, per 6 bulan, hingga per
                                                                                        tahun, tergantung ketentuan dari
                                                                                        pemilik.</li>
                                                                                    <li><strong>Deposit</strong> adalah uang
                                                                                        jaminan yang Anda berikan kepada
                                                                                        pemilik kost dan harus dibayarkan
                                                                                        sebelum memulai masa sewa. Uang
                                                                                        deposit akan dikembalikan kepada
                                                                                        penghuni kost saat sewa berakhir,
                                                                                        dan bisa saja hangus sesuai
                                                                                        kesepakatan awal antara penyewa dan
                                                                                        pemilik kost.</li>
                                                                                    <li><strong>Down Payment (DP)</strong>
                                                                                        atau Uang Muka adalah sebagian dari
                                                                                        harga sewa yang Anda bayarkan
                                                                                        terlebih dahulu sebagai tanda jadi
                                                                                        sewa. Sisa dari harga sewa setelah
                                                                                        DP dapat dibayarkan pada saat
                                                                                        check-in. Uang DP yang telah
                                                                                        dibayarkan tidak bisa dikembalikan.
                                                                                    </li>
                                                                                    <li><strong>Biaya Tambahan</strong>
                                                                                        adalah biaya selain harga sewa kost
                                                                                        yang akan masuk ke tagihan rutin
                                                                                        Anda. Ada atau tidaknya biaya ini
                                                                                        dalam tagihan Anda tergantung dari
                                                                                        kebijakan masing-masing pemilik, dan
                                                                                        biasanya mencakup layanan dan
                                                                                        fasilitas di rumah kost. Contoh:
                                                                                        biaya kebersihan, biaya cuci baju,
                                                                                        biaya parkir mobil, internet, dll
                                                                                    </li>
                                                                                    <li><strong>Denda</strong> adalah biaya
                                                                                        atas keterlambatan pembayaran sewa
                                                                                        dan akan langsung dibebankan dalam
                                                                                        tagihan yang harus Anda bayar. Ada
                                                                                        atau tidaknya denda, jumlah hari
                                                                                        keterlambatan yang dapat ditolerir,
                                                                                        dan jumlah denda sepenuhnya
                                                                                        tergantung dari kebijakan
                                                                                        masing-masing pemilik. </li>
                                                                                    <li><strong>Biaya Layanan</strong>
                                                                                        adalah biaya administrasi yang akan
                                                                                        dikenakan kepada Anda sebagai
                                                                                        penyewa agar kostJogja dapat terus
                                                                                        menyediakan layanan ini bagi Anda.
                                                                                        Besar biaya layanan yang dikenakan
                                                                                        adalah Rp9.000.</li>
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading5E27,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse5E27,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse5E27,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Bagaimana jika saya ingin survei kost
                                                                                    yang akan disewa?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse5E27,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading5E27,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Anda dapat melakukan survei terhadap kost
                                                                                    yang ingin Anda sewa dengan menghubungi
                                                                                    pemilik kost terlebih dahulu dan
                                                                                    menyampaikan permintaan untuk survei.
                                                                                    Kami menyarankan agar Anda selalu
                                                                                    berkomunikasi dengan pemilik kost
                                                                                    menggunakan Chatroom kostJogja agar
                                                                                    privasi Anda terlindungi dan sewa kost
                                                                                    dengan Booking Langsung agar pembayaran
                                                                                    kost dapat lebih mudah, cepat, dan aman.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading5E28,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse5E28,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse5E28,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Mengapa masih terdapat iklan kost yang
                                                                                    tidak update?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse5E28,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading5E28,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Mohon maaf jika Anda masih menemukan
                                                                                    iklan kost dengan data yang kurang
                                                                                    tepat. Pembaruan informasi (update)
                                                                                    dalam detail kost tergantung pada
                                                                                    keaktifan pemilik kost.</p>
                                                                                <p>Jika Anda ingin memastikan update
                                                                                    terakhir iklan kost, Anda dapat bertanya
                                                                                    langsung dengan pemilik kost.</p>
                                                                                <p>Apabila Anda menemukan kost yang kurang
                                                                                    update (dalam segi harga, alamat,
                                                                                    fasilitas, foto, ketersediaan kamar,
                                                                                    dll), Anda dapat melaporkannya. Berikut
                                                                                    langkahnya:</p>

                                                                                <ol>
                                                                                    <li>Login akun pencari kost, kemudian
                                                                                        pilih iklan kost dengan data yang
                                                                                        kurang tepat.</li>
                                                                                    <li>Klik <strong>Laporkan</strong> dan
                                                                                        pilih data apa yang kurang tepat
                                                                                        dari iklan tersebut dan jelaskan
                                                                                        kepada kami lebih detail.</li>
                                                                                    <li>Lanjutkan dengan klik <strong>Kirim
                                                                                            Laporan.</strong></li>
                                                                                    <li>Tim kostJogja akan menindaklanjuti
                                                                                        laporan Anda.</li>
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading5E29,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse5E29,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse5E29,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Apakah di kostJogja bisa membayar uang
                                                                                    muka (DP) untuk sewa kost?</p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse5E29,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading5E29,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Ya, Anda bisa membayar uang muka (DP)
                                                                                    untuk sewa kost yang menerapkan hal
                                                                                    tersebut. Informasinya bisa Anda lihat
                                                                                    di iklan kost yang bertuliskan:</p>

                                                                                <ul>
                                                                                    <li>“Wajib DP di pembayaran pertama”
                                                                                        untuk kost yang mewajibkan bayar DP
                                                                                        di pembayaran pertama.</li>
                                                                                    <li>“Bisa bayar DP dulu” untuk kost yang
                                                                                        bisa menggunakan DP atau langsung
                                                                                        pembayaran penuh di pembayaran
                                                                                        pertama.</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab"
                                                                            id="heading5E210,.">
                                                                            <a class="collapsed" role="button"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#collapse5E210,."
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse5E210,."
                                                                                style=" font-style:italic; font-size:12pt; color: rgb(0, 0, 0)";>
                                                                                <p>Apakah harga sewa yang ada pada iklan
                                                                                    sudah mencakup semua biaya pada kost?
                                                                                </p>
                                                                            </a>
                                                                        </div>
                                                                        <div id="collapse5E210,."
                                                                            class="panel-collapse collapse"
                                                                            role="tabpanel"
                                                                            aria-labelledby="heading5E210,.">
                                                                            <div class="panel-body"
                                                                                style="font-weight:lighter;">
                                                                                <p>Harga sewa pada iklan belum tentu
                                                                                    mencakup semua biaya pada kost,
                                                                                    dikarenakan beberapa kost menerapkan
                                                                                    biaya tambahan lain, seperti biaya
                                                                                    deposit, biaya air/ listrik, dll.</p>
                                                                                <p>Anda dapat mengecek estimasi pembayaran
                                                                                    pertama sewa kost dan pembayaran
                                                                                    selanjutnya, termasuk biaya tambahan
                                                                                    lainnya yang diterapkan oleh pemilik
                                                                                    kost dengan cara berikut:</p>

                                                                                <ol>
                                                                                    <li>Pilih iklan kost yang ingin Anda cek
                                                                                        estimasi pembayarannya, kemudian
                                                                                        tentukan tanggal masuk dan durasi
                                                                                        sewa kost</li>
                                                                                    <li>Anda bisa melihat detail estimasi
                                                                                        pembayaran pertama dan selanjutnya
                                                                                        dengan klik <strong>Total Pembayaran
                                                                                            Pertama</strong>. Setiap biaya
                                                                                        akan diinformasikan secara detail
                                                                                        pada halaman ini.</li>
                                                                                    <li>Jika Anda sudah cocok dengan kost
                                                                                        dan biayanya, klik <strong>Ajukan
                                                                                            Sewa</strong>untuk mengajukan
                                                                                        sewa.</li>
                                                                                </ol>
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


                                    </div>
                                </div>
                            </div>
                        </div>
    </section><!-- End Departments Section -->
@endsection
