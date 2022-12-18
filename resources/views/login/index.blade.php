@extends ('layouts.main')
@section('container')
    <section class=" bg-login">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container py-3 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">LOGIN</h2>
                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif


                                @if (session()->has('loginError'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('loginError') }}
                                    </div>
                                @endif
                                <form action="/login" method="post">
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3cg">Email</label>
                                        <input type="email" name="email" placeholder="nama@gmail.com" autofocus required
                                            value="{{ old('email') }}"
                                            class="form-control  @error('email')is-invalid @enderror" id="email" />
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" name="password" placeholder="Password" id="password"
                                            class="form-control " required />
                                    </div>

                                    <div class="d-flex justify-content-center mb-4">
                                        <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Login</button>
                                    </div>

                                </form>
                                <small class="d-block text-center mt-3">Belum Mendaftar? <a
                                        href="/register">Daftar!</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <h3 class="text-center mt-5">Login</h3>

    <div class="row justify-content-center my-5">
        <div class="col-lg-6">


            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif


            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                </div>
            @endif


            <main class="form-signin">

                <form action="/login" method="post">
                    @csrf
                    <!-- Email input -->
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <label for="email">Email Address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>

                        <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Belum Mendaftar? <a href="/register">Daftar!</a></small>
                <img src="/img/lg.png" class="img-fluid" alt="" >
            </main>
        </div>
    </div>
    </div> --}}
@endsection
