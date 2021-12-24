@extends('layouts.adminlayout')

@section('content')
    <div class="section-header">
            <div class="section-header-back">
              <a href="/admin/list-lawyer" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Add New Lawyer</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Lawyer</a></div>
              <div class="breadcrumb-item">Add New Lawyer</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Add New Lawyer</h2>
            <p class="section-lead">
              On this page you can create a new lawyer and fill in all fields.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h4>Please fill this form to Add New Lawyer</h4>
                    </div>
                        <div class="card-body">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{ route('add.lawyer') }}" method="POST" id="myForm" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="nama_lawyer" id="nama_lawyer" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat Lahir</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="place_birth" id="place_birth" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="date" class="form-control" name="date_birth" id="date_birth" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor HP</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="tel" class="form-control" name="phone" id="phone" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Hukum</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" name="jenis_hukum" id="jenis_hukum" required>
                                    <option>Ekonomi</option>
                                    <option>Keluarga</option>
                                    <option>Pidana</option>
                                    <option>Tata Negara</option>
                                    </select>
                                </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="summernote-simple form-control" name="address" id="address" style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kewarganegaraan</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="negara" id="negara" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pendidikan Terakhir</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="last_edu" id="last_edu" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Website Pribadi</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="website" id="website" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto Pengacara</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="picture" id="picture" required>
                                            <img id="preview-image" width="250px">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pengalaman</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="summernote-simple form-control" name="pengalaman" id="pengalaman" style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Add Lawyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script type="text/javascript">
// Alert Confrimation
// Show Image
$(document).ready(function (e) {
    $('#picture').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#preview-image').attr('src', e.target.result);
        }
            reader.readAsDataURL(this.files[0]);
    });
});
</script>
@endsection

@section('component')
    <script src={{ asset('js/page/features-post-create.js') }}></script>
@endsection
