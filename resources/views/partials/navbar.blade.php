{{-- TAMPILAN NAV --}}
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: black">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('img/navbar1.png') }} " alt="logo" style="width:140px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container mb-1">
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) == 'about' ? 'active' : '' }}" href="/about">Tentang
                        Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) == 'posts' ? 'active' : '' }}"
                        href="{{ route('posts.index') }}">Kost</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) == 'categories' ? 'active' : '' }}"
                        href="/categories">Area</a>
                </li>
            </ul>
            @auth
                <div class=" navbar-collapse  justify-content-end">
                    <ul class="navbar-nav ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Selamat datang, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="/profil"><i class="bi bi-person-square"></i> Profil</a>
                                </li>
                                @can('super_admin')
                                    <li>
                                        <a class="dropdown-item" href="/dashboard"><i class="bi bi-speedometer"></i>
                                            Dashboard</a>
                                    </li>
                                @endcan
                                @can('admin')
                                    <li>
                                        <a class="dropdown-item" href="/dashboard"><i class="bi bi-speedometer"></i>
                                            Dashboard</a>
                                    </li>
                                @endcan
                                <li>
                                    <a class="dropdown-divider"></a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/history"><i class="bi bi-journal-text"></i>
                                        Riwayat transaksi</a>
                                </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                            Keluar</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        {{-- @if (!auth()->check())
                            @if (!Request::is('login'))
                                <li class="nav-item">
                                    <a class="btn btn-outline-primary active"
                                        {{ request()->segment(1) == 'categories' ? 'active' : '' }} href="/login">Masuk</a>
                                </li>
                            @endif
                        @else
                            <a href="/login">Login</a>
                        @endif --}}



                        {{-- Login bisa --}}

                        @if (!auth()->check())
                            @if (!Request::is('login', 'register'))
                                <li class="nav-item list-unstyled">
                                    <a class="btn btn-primary" {{ request()->segment(1) == 'categories' ? 'active' : '' }}
                                        href="/login" data-bs-toggle="modal" data-bs-target="#masuk">Masuk</a>
                                </li>
                            @endif
                        @else
                            <a href="/login">Login</a>
                        @endif
                    </ul>
                </div>
            @endauth
        </div>
    </div>
</nav>
