@extends ('layouts.main')
@section('container')
    <section class="h-100 bg-register">
        <div class="container py-3 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-10">
                    <div class="card  text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registrasi</p>

                                    <form action="/register" method="post">
                                        @csrf
                                        <div class="d-flex flex-row align-items-center mb-3">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4cd">Nama</label>
                                                <input type="text" name="name" placeholder="Nama" autofocus required
                                                    value="{{ old('name') }}"
                                                    class="form-control @error('name')is-invalid @enderror"
                                                    id="name" />
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-3">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4cd">Username</label>
                                                <input type="text" name="username" placeholder="Username" required
                                                    value="{{ old('username') }}"
                                                    class="form-control @error('username')is-invalid @enderror"
                                                    id="username" />
                                                @error('username')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-3">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example3c">Email</label>
                                                <input type="email" name="email" placeholder="nama@gmail.com" required
                                                    value="{{ old('email') }}"
                                                    class="form-control @error('email')is-invalid @enderror"
                                                    id="email" />
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-3">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4c">Password</label>
                                                <input type="password" name="password" placeholder="Password" required
                                                    class="form-control  @error('password')is-invalid @enderror"
                                                    id="password" />
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Daftar</button>
                                        </div>

                                    </form>
                                    <small class="d-block text-center img-fluid mt-3">Sudah Mendaftar? <a
                                            href="/login">Login!</a></small>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="/img/register.svg" class="img-fluid" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mt-5">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <form action="/register" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group"><label class="col-lg-3 control-label">Nama</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="name" placeholder="Name" autofocus required
                                            value="{{ old('name') }}"
                                            class="form-control @error('name')is-invalid @enderror" id="name">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Username</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="username" placeholder="Username" required
                                            value="{{ old('username') }}"
                                            class="form-control @error('username')is-invalid @enderror" id="username">
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Email</label>
                                    <div class="col-lg-12">
                                        <input type="email" name="email" placeholder="name@example.com" required
                                            value="{{ old('email') }}"
                                            class="form-control @error('email')is-invalid @enderror" id="email">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label"> Password</label>
                                    <div class="col-lg-12">
                                        <input type="password" name="password" id="date" value=""
                                            placeholder="Password" required
                                            class="form-control @error('password')is-invalid @enderror" id="password">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="/login" class="btn btn-danger" data-dismiss="modal">Back</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <h3 class="text-center">Register</h3>
    <div class="card mt-5">
        <div class="card-body">

            <div class="row justify-content-center mt-5">
                <div class="col-lg-6">

                    <main class="form-registration">
                        <form action="/register" method="post">
                            @csrf
                            <!-- Name input -->
                            <div class="form-floating">
                                <input type="text" name="name"
                                    class="form-control rounded-top @error('name')is-invalid @enderror" id="name"
                                    placeholder="Name" autofocus required value="{{ old('name') }}">
                                <label for="name">Name</label>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <!-- Username input -->
                            <div class="form-floating">
                                <input type="text" name="username"
                                    class="form-control @error('username')is-invalid @enderror" id="username"
                                    placeholder="Username" required value="{{ old('username') }}">
                                <label for="username">User Name</label>
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <!-- Email input -->
                            <div class="form-floating">
                                <input type="email" name="email"
                                    class="form-control @error('email')is-invalid @enderror" id="email"
                                    placeholder="name@example.com" required value="{{ old('email') }}">
                                <label for="email">Email Address</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Password input -->
                            <div class="form-floating">
                                <input type="password" name="password"
                                    class="form-control rounded-bottom @error('password')is-invalid @enderror"
                                    id="password" placeholder="Password" required>
                                <label for="password">Password</label>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Daftar</button>
                        </form>
                        <small class="d-block text-center mt-3">Sudah Mendaftar? <a href="/login">Login!</a></small>
                        <img src="/img/lg.png" class="img-fluid" alt="">
                    </main>

                </div>

            </div>

        </div>
    </div> --}}
@endsection
