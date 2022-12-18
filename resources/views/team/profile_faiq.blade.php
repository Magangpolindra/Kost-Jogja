@extends('layouts.main')
@section('container')
    <div id="profilfaiq">
        <!-- profil details area start -->
        <div class="profil-details pt--120 pb--60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-5">
                        <div class="tch-left-thumb">
                            <img src="{{ asset('img/profile/faiq.jpeg') }}" alt="image" style="width:350px;">
                        </div>
                    </div>
                    <div class="col-lg-8 mt-5">
                        <div class="profil-contenttchd-content pl-5 pb-5">
                            <h3>Naufal Fa'iq Ramadhan</h3>
                            <span>(Programmer Development)</span>
                            <ul class="list-inline mt-4 mb-4">
                                <li><a href="https://wa.me/+6289529205456"><i class="bi bi-whatsapp">
                                            089-529-205-456</i></a></li>
                                <li><a href="https://www.instagram.com/naufal_faiqq?r=nametag"><i class="bi bi-instagram">
                                            naufal_faiqq</i></a></li>
                                <li><a href="https://www.facebook.com/naufal.f.ramadhan.547"><i class="bi bi-facebook">
                                            Naufal Fa'iq Ramadhan</i></a></li>
                            </ul>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": Naufal Fa'iq Ramadhan">
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Tempat,Tanggal Lahir</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": Indramayu, 04 Desember 2001">
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
                                        value=": Indramayu, Pabean Udik Jl. jambal 12 No.158 Rt.01 Rw.08">
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
