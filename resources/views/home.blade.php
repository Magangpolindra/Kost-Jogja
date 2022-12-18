@extends('layouts.main')

@section('container')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            {{-- <h1>Selamat Datang Di <img src="{{ asset('img/bg.png') }} " alt="logo" style="width:250px;"></h1> --}}
            {{-- <h3>KosJogja
                Aplikasi Anak Kos Yogyakarta. 🏡 Cari & pesan kamar kost impianmu di KostJogja pakai Booking Langsung 📱
                Cari akomodasi berkualitas, harga terjangkau dengan Singgahsini yang dapat disewa secara harian maupun
                bulanan</h3> --}}
            <h1 class=" text-end">Mau nyari kost?</h1>
            <h4 class="section-subheading font-weight-normal mb-4">Dapatkan infonya dan langsung sewa di KostJogja.</h4>
            <div class="row justify-content-start mb-5">
                <div class="col-md-5">
                    <form action="/posts">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif
                        <div class="input-group mb-3">
                            <input type="text" class="form-control rounded-1" placeholder="Cari kosan.." name="search"
                                value="{{ request('search') }}">
                            <button class="btn text-white rounded-1" type="submit"
                                style="background-color: rgb(2, 2, 2)">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- <div class="d-flex">

                @if (!auth()->check())
                    @if (!Request::is('login'))
                        <a href="/login" class="btn btn-outline-primary active" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Masuk</a>
                    @endif
                @endif
            </div> --}}
        </div>
    </section><!-- End Hero -->
    {{-- <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="card-title h4 my-4 ">Masuk Ke KostJogja</p>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </div>
                <div class="card-body">
                    <div class="modal-body">
                        <p><a class="dropdown-item " href="/login">
                                <img src="{{ asset('img/pck.svg') }}" alt="" style="width:70px;">
                                Pencari Kost
                            </a></p>
                        <hr class="dropdown-divider">
                    </div>
                    <div class="modal-body">
                        <p><a class="dropdown-item " href="/login/pemilik">
                                <img src="{{ asset('img/pmk.svg') }}" alt="" style="width:70px;">
                                Pemilik Kost
                            </a></p>
                        <hr class="dropdown-divider">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">From our blog</h2>
                        <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($posts as $item)
                    <div class="col-md-4 mb-5">
                        <div class="card">
                            {{-- <div class="position-absolute px-3 py-2 text-white"
                                style="background-color: rgba(0,0,0,0.7)">
                                <a href="/posts? category={{ $post->category->slug }}"
                                    class="text-white text-decoration-none overlay">{{ $post->category->name }}</a>
                            </div> --}}

                            @if ($item->image)
                                <div style="height: 250px; overflow:hidden;">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->category->name }}"
                                        class="img-fluid" style="background-size: contain">
                                </div>
                            @else
                                <img src="/img/house.jpg? {{ $item->category->name }}" class="card-img-top"
                                    alt="{{ $item->category->name }}">
                            @endif
                            <div class="card-body p-2">
                                <div class="badge bg-dark bg-gradient rounded-pill  px-3 py-2 ">
                                    {{ $item->category->name }}
                                </div>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none link-dark stretched-link"
                                    href="{{ route('posts.show', $item->slug) }}"></a>
                                <h5 class="card-title">{{ $item->title }}</h5>
                                {{-- <p>
                                    <small class="text-muted">
                                        Pemilik Kost <a href="/posts?author={{ $post->author->username }}"
                                            class="text-decoration-none">
                                            {{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p> --}}
                                <p class="card-text">{{ Str::limit(strip_tags($item->excerpt), 35) }}</p>
                                <a href="{{ route('posts.show', $item->slug) }}" class="btn btn-info">Detail <i
                                        class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row gx-5">
                @foreach ($posts as $item)
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ asset('storage/' . $item->image) }}" alt="..."
                                style="height: 230px" />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2 px-3 py-2 ">
                                    {{ $item->category->name }}
                                </div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">{{ $item->title }}</h5>
                                </a>
                                <p class="card-text">{{ Str::limit(strip_tags($item->excerpt), 70) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}
        </div>
    </section>
    <!-- ======= Team Section ======= -->
    {{-- <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">

                <h1>Development</h1>
                <h3><span>Team</span></h3>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <a class="text-decoration-none link-dark stretched-link"
                                href="{{ route('show.profileTeam', 'profile-faiq') }}"></a>
                            <img src="{{ asset('img/profile/nono1.png') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="https://wa.me/+6289529205456"><i class="bi bi-whatsapp"></i></a>
                                <a href="https://www.facebook.com/naufal.f.ramadhan.547"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/naufal_faiqq?r=nametag"><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Naufal Fa'iq Ramadhan</h4>
                            <span>Programmer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <a class="text-decoration-none link-dark stretched-link"
                                href="{{ route('show.profileTeam', 'profile-lana') }}"></a>
                            <img src="{{ asset('img/profile/lana 1.png') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-whatsapp"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Lana Taufiq Alamsyah</h4>
                            <span>Programmer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <a class="text-decoration-none link-dark stretched-link"
                                href="{{ route('show.profileTeam', 'profile-yudha') }}"></a>
                            <img src="{{ asset('img/profile/yudha2.png') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="https://wa.me/+6282116214889"><i class="bi bi-whatsapp"></i></a>
                                <a href="https://www.facebook.com/yudha.airlangga.737"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/airlangga_8787/?hl=en"><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Yudha Airlangga</h4>
                            <span>Programmer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div class="member-img">
                            <a class="text-decoration-none link-dark stretched-link"
                                href="{{ route('show.profileTeam', 'profile-abad') }}"></a>
                            <img src="{{ asset('img/profile/abad1.png') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="https://wa.me/+6281931933015"><i class="bi bi-whatsapp"></i></a>
                                <a href="https://www.facebook.com/aing.sahidin"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/abbad_syah/?hl=en"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Abad Syahidin</h4>
                            <span>Programmer</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section> --}}
    <!-- End Team Section -->
@endsection
