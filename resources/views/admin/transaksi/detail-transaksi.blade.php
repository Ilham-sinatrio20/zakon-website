@extends('layouts.adminlayout')
@section('optional')
    <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="../node_modules/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="../node_modules/codemirror/theme/duotone-dark.css">
    <link rel="stylesheet" href="../node_modules/selectric/public/selectric.css">
@endsection

@section('content')
    <div class="section-header">
        <h1>Editor</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/home">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('admin.transaction-all') }}">Transaction</a></div>
            <div class="breadcrumb-item">Detail</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Transaction Detail</h2>
        <p class="section-lead">You can update transaction from user</p>
         <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.transaksi', $trans->id_transaksi) }}" id="myForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Klien</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" id="nama_klien" name="nama_klien" value="{{ $trans->nama_klien }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email Klien</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" id="email_klien" name="email_klien" value="{{ $trans->email_klien }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone Klien</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="tel" class="form-control" id="phone" name="phone" value="{{ $trans->phone }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Lawyer</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" id="nama_lawyer" readonly name="nama_lawyer" value="{{ $trans->nama_lawyer }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Meet</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="date" class="form-control" readonly id="tgl_meet" name="tgl_meet" value="{{ $trans->tgl_meet }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="summernote-simple form-control" name="keterangan" id="keterangan" style="height: 100px">{{ $trans->keterangan }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                            <div class="col-sm-12 col-md-7">
                                <select class="form-control selectric" name="status" id="status">
                                    <option>{{ $trans->status }}</option>
                                    <option>Proses</option>
                                    <option>Verifikasi</option>
                                    <option>Gagal</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('spesifik')
    <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="../node_modules/codemirror/lib/codemirror.js"></script>
    <script src="../node_modules/codemirror/mode/javascript/javascript.js"></script>
    <script src="../node_modules/selectric/public/jquery.selectric.min.js"></script>
@endsection
