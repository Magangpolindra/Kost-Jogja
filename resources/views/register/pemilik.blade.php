@extends ('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">Data Pegawai</div>
                    <div class="card-body">
                        <form name="frm_add" id="frm_add" class="form-horizontal" action="" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="form-group"><label class="col-lg-3 control-label">Nama</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="nama" placeholder="Nama Lengkap" value=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Username</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="nama" placeholder="Nama Lengkap" value=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label">Email</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="nama" placeholder="Nama Lengkap" value=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-3 control-label"> Password</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="tgl_lahir" id="date" value=""
                                            placeholder="Tanggal Lahir" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="" class="btn btn-danger" data-dismiss="modal">Back</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
