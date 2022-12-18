@extends('layouts.main')
@section('container')
    <div class="card-header" style="background-color: white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                            <p>Pemilik <a href="/posts? author={{ $post->author->username }}"
                                    class="text-decoration-none text-reset">{{ $post->author->name }},</a>
                                Area
                                <a
                                    href="/posts? category={{ $post->category->slug }}"class="text-decoration-none text-reset">{{ $post->category->name }}
                            </p></a>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">

                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                            class="img-fluid">
                                    @else
                                        <img src="/img/house.jpg? {{ $post->category->name }}" class="card-img-top"
                                            alt="{{ $post->category->name }}">
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <tbody>
                                        <tr>
                                            <p> Rp 1.200.000/bulan </p>
                                        </tr>
                                        <table class="table">
                                            <tr>
                                                <td>Kategori</td>
                                                <td>: Laki-Laki</td>
                                            </tr>
                                            <tr>
                                                <td>Ukuran</td>
                                                <td>: 4 x 3</td>
                                            </tr>
                                            <tr>
                                                <td>Tersedia</td>
                                                <td>: 10 Kamar</td>
                                            </tr>
                                        </table>
                                        {!! $post->body !!}
                                        </tr>
                                    </tbody>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="row g-5">
                    <div class="col-md-5 col-lg-4 order-md-last">
                        <div class="card  col-lg-16">
                            <div class="card-body">
                                <h3 class="card-title">Rp2.640.000
                                    <small class="">/ bulan</small>
                                </h3>
                                <form>
                                    <div class="row my-3">
                                        <div class=" col">
                                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                                <option value="">Perbulan</option>
                                                <option value="">Per 2 Bulan</option>
                                                <option value="">Per 3 Bulan</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <input type="date" name="kalender" id="kalender">
                                        </div>
                                    </div>
                                </form>
                                {{-- <div class=" text-left mb-3">
                                    <input type="date" name="kalender" id="kalender">
                                </div> --}}
                                <div class="d-flex justify-content-center ">
                                    <a class="w-100 btn btn-lg btn-primary mt-2"
                                        href="{{ route('pemesanan') }}">AjukanSewa</a>
                                </div>
                            </div>
                        </div>
                        {{-- <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div >

                                    <h4 class="mb-3">Pilih Kamar</h4>

                                    <div class="my-3">
                                        <div class="form-check">
                                            <input id="credit" name="paymentMethod" type="radio"
                                                class="form-check-input" checked required>
                                            <label class="form-check-label" for="credit">1</label>
                                        </div>
                                        <div class="form-check">
                                            <input id="debit" name="paymentMethod" type="radio"
                                                class="form-check-input" required>
                                            <label class="form-check-label" for="debit">2</label>
                                        </div>
                                        <div class="form-check">
                                            <input id="debit" name="paymentMethod" type="radio"
                                                class="form-check-input" required>
                                            <label class="form-check-label" for="debit">3</label>
                                        </div>
                                    </div>


                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Tipe Kosan</h6>
                                </div>
                                <span class="text-muted">Tipe A</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Harga Kosan</h6>
                                    <small class="text-muted">pertahun x 01</small>
                                </div>
                                <span class="text-muted">Rp 3.000.000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <select type="country"class="form-select" id="country" placeholder="status">
                                    <option value="">status</option>
                                    <option value="Laki-Laki">Perbulan Rp 300.000</option>
                                    <option value="Prempuan">Pertahun Rp 3.000.000</option>

                                </select>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <input type="date" name="kalender" id="kalender">
                            </li>

                        </ul> --}}
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <div class="my-3 p-3 bg-body rounded shadow-sm col-lg-12">
                            <h3>Peraturan khusus tipe kamar ini</h3>
                            <div class="d-flex ml-2 text-black-50 pt-3">
                                <i class="fa fa-home" aria-hidden="true"></i>

                                <div class="pb-1  ml-2 mb-0 small lh-sm w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Tamu menginap dikenakan biaya</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex ml-1 text-black-50 pt-3">
                                <i class="fa fa-hotel" aria-hidden="true"></i>

                                <div class="pb-1  ml-2 mb-0 small lh-sm w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Tipe ini bisa diisi maks. 2 orang/ kamar</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex ml-1 text-black-50 pt-3">
                                <i class="fa fa-child" aria-hidden="true"></i>

                                <div class="pb-2  ml-3 mb-0 small lh-sm w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Tidak boleh bawa anak</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-3 p-3 bg-body rounded shadow-sm col-lg-12">
                            <h3>Spesifikasi tipe kamar</h3>
                            <div class="d-flex ml-1 text-black-50 pt-3">
                                <i class="fa fa-cube" aria-hidden="true"></i>

                                <div class="pb-1  ml-2 mb-0 small lh-sm w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">5.3 x 39 meter</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex ml-1 text-black-50 pt-3">
                                <i class="fa fa-flash" aria-hidden="true"></i>

                                <div class="pb-2  ml-3 mb-0 small lh-sm w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Tidak termasuk listrik</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-3 p-3 bg-body rounded shadow-sm col-lg-12">
                            <h3>Fasilitas Kost</h3>
                            <div class="d-flex ml-1 text-black-50 pt-3">
                                <i class="fa fa-bath" aria-hidden="true"></i>

                                <div class="pb-1  ml-2 mb-0 small lh-sm w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Kamar mandi di dalam</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex ml-1 text-black-50 pt-3">
                                <i class="fa fa-television" aria-hidden="true"></i>

                                <div class="pb-1  ml-2 mb-0 small lh-sm w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Televisi</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex ml-1 text-black-50 pt-3">
                                <i class="fa fa-wifi" aria-hidden="true"></i>

                                <div class="pb-1  ml-2 mb-0 small lh-sm w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Wifi</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex ml-1 text-black-50 pt-3">
                                <i class="fa fa-motorcycle" aria-hidden="true"></i>

                                <div class="pb-1  ml-2 mb-0 small lh-sm w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Parkir motor</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex ml-1 text-black-50 pt-3">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>

                                <div class="pb-1  ml-3 mb-0 small lh-sm w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Dapur bersama</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-12">
                    <h3>Lokasi</h3>
                </div>
                <div id="map"></div>
            </div>
        </div>
    </div>
@endsection
