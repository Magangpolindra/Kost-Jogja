@extends('layouts.main')

@section('container')
    <main>

        <div class="container">
            <div class="row">
                <div class="row g-5">
                    <div class="col-md-5 col-lg-4 order-md-last">
                        <div class="card  col-lg-16">
                            <div class="card-body">
                                <div class="row mt-3">
                                    <h3 class="card-title text-center">Rincian pembayaran
                                        <hr width="100%" color="#c0c0c0">
                                    </h3>
                                    <div class="col-6">
                                        <h5 class="card-title">Nama Kost</h5>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>Lestari</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="card-title">Nomor Kamar</h5>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>1</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="card-title">Tanggak Masuk</h5>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>23 November 2021</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="card-title">Tanggal Keluar</h5>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>23 Desember 2021</p>
                                    </div>
                                </div>
                                <hr width="100%" color="#c0c0c0">
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="card-title">Total Pesanan</h5>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>RP 800,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3">persyaratan</h4>
                        <form class="needs-validation" novalidate>
                            <div class="col-12">
                                <label for="address2" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="address2" placeholder="Nama">
                            </div>
                            <div class="col-12">
                                <label for="address2" class="form-label">Nomer Telepon</label>
                                <input type="text" class="form-control" id="address2" placeholder="nomor">
                            </div>
                            <div class="col-12">
                                <label for="address2" class="form-label">Alamat Asal</label>
                                <input type="text" class="form-control" id="address2" placeholder="Alamat">
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email.com">
                                <div class="invalid-feedback">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for="country" class="form-label">status</label>
                                <select type="country"class="form-select" id="country" placeholder="status">
                                    <option value="">status</option>
                                    <option value="Laki-Laki">Mahasiswa</option>
                                    <option value="Prempuan">Pelajar</option>
                                    <option value="Prempuan">Pekerja</option>
                                </select>


                            </div>
                            <div class="col-md-5">
                                <label for="jenis" class="form-label">Jenis Kelamin</label>
                                <select name="jenis"class="form-select" id="jenis" placeholder="jenis">
                                    <option value="">jenis kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Prempuan">Prempuan</option>
                                </select>

                            </div>
                            <div class="col-12">
                                <label for="address" class="form-label">Foto KTP</label>
                                <input type="file" class="form-control" id="foto" name="foto"
                                    placeholder="foto..." required>
                                <div class="invalid-feedback">

                                </div>
                            </div>


                            <hr class="my-4">


                            <a class="w-100 btn btn-primary btn-lg" style="background-color: rgb(2, 2, 2)"
                                href="/pemesanan/pemesanan">Konfirmasi Pemesanan</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </main>
@endsection
