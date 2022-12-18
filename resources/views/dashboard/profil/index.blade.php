@extends('dashboard.layouts.main')
@section('content')
    <div class="card card-secondary card-outline">
        <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{ asset('dash/dist/img/magang1.png') }}"
                    alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">Nama</h3>

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Username</b>
                </li>
                <li class="list-group-item">
                    <b>Email</b>
                </li>
            </ul>

            <a href="/dashboard/profil/edit" class="btn btn-secondary btn-block"><b>Edit Profil</b></a>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
