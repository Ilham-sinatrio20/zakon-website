@section('optional')
@endsection
@extends('layouts.adminlayout')

@section('content')
    <div class="section-header">
                        <h1>Profile</h1>
                        <div class="section-header-breadcrumb">
                             <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                            <div class="breadcrumb-item">Profile</div>
                        </div>
                    </div>
                    <div class="section-body">
                        <h2 class="section-title">Hi, {{ $lawyer->nama_lawyer }}</h2>
                        <p class="section-lead">
                            All things about yourself on this page.
                        </p>

                        <div class="row mt-sm-4">
                            <div class="col-12 col-md-12 col-lg-5">
                                <div class="card profile-widget">
                                    <div class="profile-widget-header">
                                        <img alt="image" src="{{ asset('images/lawyer/'.$lawyer->picture) }}" class="rounded-circle profile-widget-picture">
                                        <div class="profile-widget-items">
                                            <div class="profile-widget-item">
                                                <div class="profile-widget-item-label">Posts</div>
                                                <div class="profile-widget-item-value">187</div>
                                            </div>
                                            <div class="profile-widget-item">
                                                <div class="profile-widget-item-label">Followers</div>
                                                <div class="profile-widget-item-value">6,8K</div>
                                            </div>
                                            <div class="profile-widget-item">
                                                <div class="profile-widget-item-label">Following</div>
                                                <div class="profile-widget-item-value">2,1K</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-widget-description">
                                        <div class="profile-widget-name">{{ $lawyer->nama_lawyer }}
                                            <div class="text-muted d-inline font-weight-normal">
                                                <div class="slash"></div>Pengacara Hukum {{ $lawyer->jenis_hukum }}</div>
                                        </div>
                                        {{ $lawyer->deskripsi }}
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="font-weight-bold mb-2">Follow Ujang On</div>
                                        <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#" class="btn btn-social-icon btn-github mr-1">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        <a href="#" class="btn btn-social-icon btn-instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-7">
                                <div class="card">
                                    <form method="post" class="needs-validation" novalidate="">
                                        <div class="card-header">
                                            <h4>Detail Profile</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Nama Lengkap</label>
                                                    <input type="text" class="form-control" value="{{ $lawyer->nama_lawyer }}" readonly>
                                                </div>
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Tempat Lahir</label>
                                                    <input type="text" class="form-control" value="{{ $lawyer->place_birth }}" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-7 col-12">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" value="{{ $lawyer->email }}" readonly>
                                                </div>
                                                <div class="form-group col-md-5 col-12">
                                                    <label>Phone</label>
                                                    <input type="tel" class="form-control" value="{{ $lawyer->phone }}" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <label>Address</label>
                                                    <textarea readonly style="height: 100px" class="form-control summernote-simple">{{ $lawyer->address }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group mb-0 col-12">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                                                        <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>
                                                        <div class="text-muted form-text">
                                                            You will get new information about products, offers and promotions
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-primary">Print Profile</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection

@section('spesifik')

@endsection
