@extends('dashboard.layouts.main')
@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- ./col -->
        <div class="col-md-4">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $posts }}</h3>
                    <p>Postingan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-images"></i>
                </div>
                <a href="{{ route('dashboard.posts.index') }}" class="small-box-footer"> Postingan</a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-md-4">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>44</h3>
                    <p>Pesanan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-clipboard"></i>
                </div>
                <a href="#" class="small-box-footer">Kelola Pesanan</a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-md-4">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $users }}</h3>
                    <p>Pengguna</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ route('admin_index-post') }}" class="small-box-footer">Total Pengguna</a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- /.row (main row) -->
@endsection
