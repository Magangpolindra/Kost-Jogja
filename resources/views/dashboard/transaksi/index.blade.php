@extends('dashboard.layouts.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header text-right">
                    <h3 class="card-title">Tabel Riwayat Transaksi</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 410px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kost</th>
                                <th>No Kamar</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Lana</td>
                                <td>Kost Indah</td>
                                <td>12</td>
                                <td>
                                    <span class="badge bg-success">Lunas</span>
                                </td>
                                <td>
                                    <div class=" btn-group-sm">
                                        <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#modal-sm"><i class="fas fa-trash"></i>
                                        </button>
                                        {{-- Modal START --}}
                                        <div class="modal fade" id="modal-sm">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Hapus Transaksi</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Transaksi akan terhapus
                                                            permanent!</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Tidak</button>
                                                        <a class="btn btn-primary" href="" role="button">Ya,
                                                            Hapus!</a>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        {{-- Modal END --}}
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
@endsection
