@section('optional')

@endsection

@extends('layouts.adminlayout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>List of Feedback</h4>
                    <div class="card-header-action">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                 @endif
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped" id="sortable-table">
                            <thead>
                            <tr class="text-center align-middle">
                                <th class="text-center">No</th>
                                <th>Sender</th>
                                <th>Phone</th>
                                <th>Date</th>
                                {{-- <th>Status</th> --}}
                                <th>Action</th>
                            </tr>
                            </thead>
                            <?php $i = 1; ?>
                            @foreach ($feedback as $fb)
                            <tr>
                                <td class="text-center align-middle">{{ $i++; }}</td>
                                <td>{{ $fb->nama_sender }}</td>
                                <td>{{ $fb->phone_sender }}</td>
                                <td>{{ $fb->created_at->format('d-m-Y') }}</td>
                                <td><a href="{{ route('detail.feed', $fb->id) }}" class="btn btn-primary">Detail</a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('component')
    <script src="../node_modules/jquery-ui-dist/jquery-ui.min.js"></script>
    <script src="{{ asset('js/page/components-table.js') }}"></script>
@endsection
