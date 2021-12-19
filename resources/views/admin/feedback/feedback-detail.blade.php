@section('optional')
    <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="../node_modules/chocolat/dist/css/chocolat.css">
@endsection

@extends('layouts.adminlayout')

@section('content')
    <div class="section-header">
        <h1>Tickets</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/home">Dashboard</a></div>
            <div class="breadcrumb-item">Feedback</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Feedback details from user</h2>
        <p class="section-lead">
            Some customers need your help.
        </p>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detail Feedback</h4>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-icon icon-left btn-lg btn-block mb-4 d-md-none" data-toggle-slide="#ticket-items">
                            <i class="fas fa-list"></i> All Tickets
                        </a>
                    <div class="tickets">
                      <div class="ticket-content">
                        <div class="ticket-header">
                          <div class="ticket-sender-picture img-shadow">
                            <img src="{{ asset('img/avatar/avatar-5.png') }}" alt="image">
                          </div>
                          <div class="ticket-detail">
                            <div class="ticket-title">
                              <h4>Technical Problem</h4>
                            </div>
                            <div class="ticket-info">
                              <div class="font-weight-600">{{ $fb->nama_sender }}</div>
                              <div class="bullet"></div>
                              <div class="text-primary font-weight-600">{{ $fb->created_at->format('d-m-Y') }}</div>
                            </div>
                          </div>
                        </div>
                        <div class="ticket-description">
                          <p>{{ $fb->pesan }}</p>
                          <div class="ticket-divider"></div>

                          <div class="ticket-form">
                            <form>
                              <div class="form-group">
                                <textarea class="summernote form-control" placeholder="Type a reply ..."></textarea>
                              </div>
                              <div class="form-group text-right">
                                <button class="btn btn-primary btn-lg">
                                  Reply
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    </div>
@endsection

@section('component')
    <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
@endsection
