@extends('layouts.main')
@section('container')
    <div id="profillana">
        <!-- profil details area start -->
        <div class="profil-details pt--120 pb--60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-5">
                        <div class="tch-left-thumb">
                            <img src="{{ asset('img/profile/lana.JPG') }}" alt="image" style="width:350px;">
                        </div>
                    </div>
                    <div class="col-lg-8 mt-5">
                        <div class="profil-contenttchd-content pl-5 pb-5">
                            <h3>Lana Taufiq Alamsyah</h3>
                            <span>(Programmer Development)</span>
                            <ul class="list-inline mt-4 mb-4">
                                <li><a href="https://wa.me/+6289526396629"><i class="bi bi-whatsapp">
                                            089-526-396-629</i></a></li>
                                <li><a href="#!"><i class="bi bi-instagram">
                                            lanataufiq</i></a></li>
                                <li><a href="#!"><i class="bi bi-facebook">
                                            Lana Taufiq</i></a></li>
                            </ul>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": Lana Taufiq Alamsyah">
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Tempat,Tanggal Lahir</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": Indramayu, 10 April 2002">
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": Laki - Laki">
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Agama</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": ISLAM">
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Status</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": Mahasiswa">
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": Indramayu, ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- profil details area end -->
    </div>
@endsection
