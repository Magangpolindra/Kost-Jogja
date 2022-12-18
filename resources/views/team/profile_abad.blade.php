@extends('layouts.main')
@section('container')
    <div id="profilabad">
        <!-- profil details area start -->
        <div class="profil-details pt--120 pb--60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-5">
                        <div class="tch-left-thumb">
                            <img src="{{ asset('img/profile/abah.jfif') }}" alt="image" style="width:350px;">
                        </div>
                    </div>
                    <div class="col-lg-8 mt-5">
                        <div class="profil-contenttchd-content pl-5 pb-5">
                            <h3>Abad Syahidin</h3>
                            <span>(Programmer Development)</span>
                            <ul class="list-inline mt-4 mb-4">
                                <li><a href="https://wa.me/+6281931933015"><i class="bi bi-whatsapp">
                                            081-931-933-015</i></a>
                                </li>
                                <li><a href="https://www.instagram.com/abbad_syah/?hl=en"><i class="bi bi-instagram">
                                            Abad Syahidin</i></a></li>
                                <li><a href="https://www.facebook.com/aing.sahidin"><i class="bi bi-facebook">
                                            Aing.sahidin</i></a></li>
                            </ul>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": Abad Syahidin">
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Tempat,Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": Indramayu, 28 Maret 2001">
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": Laki - Laki">
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Agama</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": ISLAM">
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Status</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": Mahasiswa">
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": Indramayu, Rambatan Kulon gang macan desa ramtan kulon">
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=":                                                       Lohbener RT 014 RW 002 ">
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
