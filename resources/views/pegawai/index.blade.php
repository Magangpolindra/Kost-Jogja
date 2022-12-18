@extends('layouts.main')

@section('container')
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">Data Pegawai

                        <a href="{{ route('pegawai.create') }}" class="btn btn-success btn-sm btn-flat pull-right"> Tambah</a>

                    </div>

                    <div class="card-body">

                        <table id="tbl_list" class="table table-striped table-bordered" cellspacing="0" width="100%">

                            <thead>

                                <tr>

                                    <th>ID</th>

                                    <th>Nama</th>

                                    <th>Tanggal Lahir</th>

                                    <th>Aksi</th>

                                </tr>

                            </thead>

                            <tbody>

                                @foreach ($pegawai as $row)
                                    <tr>

                                        <td>{{ $row->id }}</td>

                                        <td>{{ $row->nama }}</td>

                                        <td>{{ $row->tgl_lahir }}</td>

                                        <td>
                                            <form action="{{ route('pegawai.destroy', $row->id) }}" method="POST">

                                                <a href="{{ route('pegawai.edit', $row->id) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>

                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>

                                                @csrf

                                                @method('DELETE')

                                            </form>

                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
