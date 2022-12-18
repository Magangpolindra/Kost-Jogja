@extends('layouts.main')

@section('container')
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
        <div class="container mt-4 mb-4">
            <div class="card mb-3">
                <div class="card-header bg-whitdark">
                    <div class="jk">
                        <h4><i class="bi bi-file-text"> </i><b> Riwayat transaksi</b></h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mt-3">
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
    </section>
@endsection
