@extends('layouts.main')
@section('container')
    <div class="container mt-5">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-whitdark mb-3">
                            <div class="jk">
                                <h4 class=" text-center"><b>Profil</b></h4>
                            </div>

                        </div>

                        <div class="card-body">
                            <div class="row ">
                                <div class="col-sm-3 ">
                                    <h6 class="mb-0">Nama</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    Lana
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Username</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    lanaalamsyah
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    lanaalamsyah43@gmail.com
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info " href="/edit">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
