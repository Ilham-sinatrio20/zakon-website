@section('optional')
    <link rel="stylesheet" href="../node_modules/prismjs/themes/prism.css">
@endsection
@extends('layouts.adminlayout')

@section('content')
    <div class="section-header">
            <h1>List Lawyer</h1>
            <div class="section-header-button">
              <a href="/admin/add-lawyer" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="/home">Admin</a></div>
              <div class="breadcrumb-item">List Lawyer</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Lawyer</h2>
            <p class="section-lead">
              You can manage all posts, such as editing, deleting and more.
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <ul class="nav nav-pills" id="myTab3" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" id="home-tab3" aria-controls="home" href="#home1" aria-selected="true">All <span class="badge badge-primary">{{ $count }}</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="eko-tab3" data-toggle="tab"  href="#home2" aria-controls="ekonomi"  aria-selected="false">Ekonomi <span class="badge badge-primary">{{ $eko }}</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="fam-tab3" data-toggle="tab" href="#home3" aria-controls="keluarga" aria-selected="false">Keluarga <span class="badge badge-primary">{{ $fam }}</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="crime-tab3" data-toggle="tab" href="#home4" aria-controls="pidana" aria-selected="false">Pidana <span class="badge badge-primary">{{ $pidana }}</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="state-tab3" data-toggle="tab" href="#home5" aria-controls="tata negara" aria-selected="false">Tata Negara <span class="badge badge-primary">{{ $tn }}</span></a>
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
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
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
                <div class="tab-content" id="myTabContent2">
                    <div class="table-responsive tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab3">
                      <table class="table table-striped">
                            <thead class="text-center align-middle">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Picture</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Hukum</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Email</th>
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
                                        <div class="table-links d-flex justify-content-between">
                                            <form action="{{ route('admin.delete', $lawyers->id) }}" method="POST" enctype="multipart/form-data">
                                                <div class="bullet"></div>
                                                    <a href="{{ route('admin.detail', $lawyers->id) }}">Show Detail</a>
                                                <div class="bullet"></div>
                                                    <a href="{{ route('admin.edit', $lawyers->id) }}">Edit</a>
                                                <div class="bullet"></div>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-danger" style="border: none; font-style: normal;background: none;padding: 0;">
                                                    Trash
                                                </button>
                                            </form>
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
                    <div class="table-responsive tab-pane fade" id="home2" role="tabpanel" aria-labelledby="eko-tab3">
                      <table class="table table-striped">
                            <thead class="text-center align-middle">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Picture</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Hukum</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Email</th>
                            </tr>
                            </thead>
                            <?php $i = 1; ?>
                            @foreach ($ekonomi as $ekonom)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td class="align-middle text-center">
                                        <img src="{{ asset('images/lawyer/'.$ekonom->picture) }}" alt="lawyer" height="100px" width="100px">
                                    </td>
                                    <td class="text-truncate">
                                        {{ $ekonom->nama_lawyer }}
                                        <div class="table-links d-flex justify-content-between">
                                            <form action="{{ route('admin.delete', $ekonom->id) }}" method="POST" enctype="multipart/form-data">
                                                <div class="bullet"></div>
                                                    <a href="{{ route('admin.detail', $ekonom->id) }}">Show Detail</a>
                                                <div class="bullet"></div>
                                                    <a href="{{ route('admin.edit', $ekonom->id) }}">Edit</a>
                                                <div class="bullet"></div>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-danger" style="border: none; font-style: normal;background: none;padding: 0;">
                                                    Trash
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="text-nowrap">
                                        {{ $ekonom->jenis_hukum }}
                                    </td>
                                    <td class="text-nowrap">
                                        {{ $ekonom->date_birth }}
                                    </td>
                                    <td class="text-nowrap">
                                        {{ $ekonom->phone }}
                                    </td>
                                    <td>
                                        {{ $ekonom->address }}
                                    </td>
                                    <td>
                                        {{ $ekonom->email }}
                                    </td>
                                </tr>
                            @endforeach
                      </table>
                    </div>
                    <div class="table-responsive tab-pane fade" id="home3" role="tabpanel" aria-labelledby="fam-tab3">
                      <table class="table table-striped">
                            <thead class="text-center align-middle">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Picture</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Hukum</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Email</th>
                            </tr>
                            </thead>
                            <?php $i = 1; ?>
                            @foreach ($keluarga as $family)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td class="align-middle text-center">
                                        <img src="{{ asset('images/lawyer/'.$family->picture) }}" alt="lawyer" height="100px" width="100px">
                                    </td>
                                    <td class="text-truncate">
                                        {{ $family->nama_lawyer }}
                                        <div class="table-links d-flex justify-content-between">
                                            <form action="{{ route('admin.delete', $family->id) }}" method="POST" enctype="multipart/form-data">
                                                <div class="bullet"></div>
                                                    <a href="{{ route('admin.detail', $family->id) }}">Show Detail</a>
                                                <div class="bullet"></div>
                                                    <a href="{{ route('admin.edit', $family->id) }}">Edit</a>
                                                <div class="bullet"></div>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-danger" style="border: none; font-style: normal;background: none;padding: 0;">
                                                    Trash
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="text-nowrap">
                                        {{ $family->jenis_hukum }}
                                    </td>
                                    <td class="text-nowrap">
                                        {{ $family->date_birth }}
                                    </td>
                                    <td class="text-nowrap">
                                        {{ $family->phone }}
                                    </td>
                                    <td>
                                        {{ $family->address }}
                                    </td>
                                    <td>
                                        {{ $family->email }}
                                    </td>
                                </tr>
                            @endforeach
                      </table>
                    </div>
                    <div class="table-responsive tab-pane fade" id="home4" role="tabpanel" aria-labelledby="crime-tab3">
                      <table class="table table-striped">
                            <thead class="text-center align-middle">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Picture</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Hukum</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Email</th>
                            </tr>
                            </thead>
                            <?php $i = 1; ?>
                            @foreach ($crimes as $crime)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td class="align-middle text-center">
                                        <img src="{{ asset('images/lawyer/'.$crime->picture) }}" alt="lawyer" height="100px" width="100px">
                                    </td>
                                    <td class="text-truncate">
                                        {{ $crime->nama_lawyer }}
                                        <div class="table-links d-flex justify-content-between">
                                            <form action="{{ route('admin.delete', $crime->id) }}" method="POST" enctype="multipart/form-data">
                                                <div class="bullet"></div>
                                                    <a href="{{ route('admin.detail', $crime->id) }}">Show Detail</a>
                                                <div class="bullet"></div>
                                                    <a href="{{ route('admin.edit', $crime->id) }}">Edit</a>
                                                <div class="bullet"></div>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-danger" style="border: none; font-style: normal;background: none;padding: 0;">
                                                    Trash
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="text-nowrap">
                                        {{ $crime->jenis_hukum }}
                                    </td>
                                    <td class="text-nowrap">
                                        {{ $crime->date_birth }}
                                    </td>
                                    <td class="text-nowrap">
                                        {{ $crime->phone }}
                                    </td>
                                    <td>
                                        {{ $crime->address }}
                                    </td>
                                    <td>
                                        {{ $crime->email }}
                                    </td>
                                </tr>
                            @endforeach
                      </table>
                    </div>
                    <div class="table-responsive tab-pane fade" id="home5" role="tabpanel" aria-labelledby="state-tab3">
                      <table class="table table-striped">
                            <thead class="text-center align-middle">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Picture</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Hukum</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Email</th>
                            </tr>
                            </thead>
                            <?php $i = 1; ?>
                            @foreach ($tatanegara as $state)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td class="align-middle text-center">
                                        <img src="{{ asset('images/lawyer/'.$state->picture) }}" alt="lawyer" height="100px" width="100px">
                                    </td>
                                    <td class="text-truncate">
                                        {{ $state->nama_lawyer }}
                                        <div class="table-links d-flex justify-content-between">
                                            <form action="{{ route('admin.delete', $state->id) }}" method="POST" enctype="multipart/form-data" onsubmit="return confirm('Are you sure to delete data?')">
                                                <div class="bullet"></div>
                                                    <a href="{{ route('admin.detail', $state->id) }}">Show Detail</a>
                                                <div class="bullet"></div>
                                                    <a href="{{ route('admin.edit', $state->id) }}">Edit</a>
                                                <div class="bullet"></div>
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-danger" style="border: none; font-style: normal;background: none;padding: 0;">
                                                    Trash
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="text-nowrap">
                                        {{ $state->jenis_hukum }}
                                    </td>
                                    <td class="text-nowrap">
                                        {{ $state->date_birth }}
                                    </td>
                                    <td class="text-nowrap">
                                        {{ $state->phone }}
                                    </td>
                                    <td>
                                        {{ $state->address }}
                                    </td>
                                    <td>
                                        {{ $state->email }}
                                    </td>
                                </tr>
                            @endforeach
                      </table>
                    </div>
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
    <script src="../node_modules/prismjs/prism.js"></script>
    <script src={{ asset('js/bootstrap-modal.js') }}></script>
    <script src={{ asset('js/page/features-posts.js') }}></script>
@endsection
