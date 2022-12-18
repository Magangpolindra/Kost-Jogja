@extends('dashboard.layouts.main')
@section('content')
    <!-- Default box -->
    <div class="card">

        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
                    <h2>{{ $post->category->name }}</h4>
                        <div class="row">
                            <div class="image">
                                <img src="{{ asset('storage/' . $post['image']) }}" class="col-12 mb-5 elevation-2"
                                    alt="{{ $post['image'] }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h4>{{ $post['title'] }}</h4>
                                <div class="post">
                                    <p>
                                        {!! $post['body'] !!}
                                    </p>
                                    <p>
                                        <a href="javascript:window.history.go(-1);" class="btn btn-info"><i
                                                class="fas fa-arrow-left"> Kembali</i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
