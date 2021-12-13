@extends('layouts.adminlayout')

@section('content')
    <div class="section-header">
            <h1>Posts</h1>
            <div class="section-header-button">
              <a href="/admin/add-lawyer" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Posts</a></div>
              <div class="breadcrumb-item">All Posts</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Posts</h2>
            <p class="section-lead">
              You can manage all posts, such as editing, deleting and more.
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">All <span class="badge badge-white">{{ $count }}</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Ekonomi <span class="badge badge-primary">{{ $eko }}</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Keluarga <span class="badge badge-primary">{{ $fam }}</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Pidana <span class="badge badge-primary">{{ $pidana }}</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Tata Negara <span class="badge badge-primary">{{ $tn }}</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Posts</h4>
                  </div>
                  <div class="card-body">
                    <div class="float-left">
                      <select class="form-control selectric">
                        <option>Action For Selected</option>
                        <option>Move to Draft</option>
                        <option>Move to Pending</option>
                        <option>Delete Pemanently</option>
                      </select>
                    </div>
                    <div class="float-right">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                      <table class="table table-striped http://127.0.0.1:8000/" style="border-spacing: 7px;">
                            <thead class="text-center align-middle">
                            <tr>
                                <th>No</th>
                                <th>Picture</th>
                                <th>Nama</th>
                                <th>Jenis Hukum</th>
                                <th>Tanggal Lahir</th>
                                <th>No HP</th>
                                <th>Alamat</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <?php $i = 1; ?>
                            @foreach ($lawyer as $lawyers)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td class="align-middle text-center">
                                        <img src="{{ asset('images/lawyer/'.$lawyers->picture) }}" alt="lawyer" height="100px" width="100px">
                                    </td>
                                    <td class="text-truncate">
                                        {{ $lawyers->nama_lawyer }}
                                        <div class="table-links">
                                            <a href="/admin/detail-lawyer">View</a>
                                            <div class="bullet"></div>
                                            <a href="/admin/edit-lawyer">Edit</a>
                                            <div class="bullet"></div>
                                            <a href="/admin/delete-lawyer" class="text-danger">Trash</a>
                                        </div>
                                    </td>
                                    <td class="text-nowrap">
                                        {{ $lawyers->jenis_hukum }}
                                    </td>
                                    <td class="text-nowrap">
                                        {{ $lawyers->date_birth }}
                                    </td>
                                    <td class="text-nowrap">
                                        {{ $lawyers->phone }}
                                    </td>
                                    <td>
                                        {{ $lawyers->address }}
                                    </td>
                                    <td>
                                        {{ $lawyers->email }}
                                    </td>
                                </tr>
                            @endforeach
                      </table>
                    </div>
                    <div class="float-right">
                      <nav>
                        <ul class="pagination">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">3</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection

@section('component')
    <!-- Page Specific JS File -->
    <script src={{ asset('js/script/page/features-posts.js') }}></script>
@endsection
