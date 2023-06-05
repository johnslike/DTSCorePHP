@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
                <h5 class="text-center">Forwarded/Newly Added Document/s</h5>
          </div><!-- /.col -->
          <div class="col-sm-4">
                <h5 class="text-center">Active Document/s</h5>
          </div><!-- /.col -->
          <div class="col-sm-4">
                <h5 class="text-center">Your/Division Document/s</h5>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            @foreach ($documents as $document)
            <div class="card">

              <div class="card-body">
                <h5 class="card-title">{{ $document->document_type }}</h5>

                <p class="card-text">
                    {{ $document->document_name }}
                </p>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
            @endforeach
          </div>
          <div class="col-lg-4">
            {{-- @foreach ($documents as $document) --}}
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                    victor
                </p>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
            {{-- @endforeach --}}
          </div>
          <div class="col-lg-4">
            {{-- @foreach ($documents as $document) --}}
            <div class="card">

              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                    {{-- {{ $document->document_name }}. --}}
                </p>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
            {{-- @endforeach --}}
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <div class="modal fade" id="add_document">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Document</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ url('/add/document') }}" method="POST">
                @csrf

            <div class="card-body">
                      <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                            <span style="color:red">* </span><label>Document Title:</label>
                                <input class="form-control" name="document_name" placeholder="Enter ..." required>

                            </div>
                        </div>
                        <input type="hidden" class="form-control" name="creator_id" value="{{ Auth::user()->id }}" placeholder="Enter ..." required>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <span style="color:red">* </span><label>Document Type:</label>
                                    <select class="form-control" name="document_type" required>
                                        <option value="">--Select Type--</option>
                                        <option value="Voucher">Voucher</option>
                                        <option value="DTR">DTR</option>
                                    </select>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                            <span style="color:red">* </span><label>Pages:</label>
                                <input class="form-control" name="document_number" row="2" placeholder="Enter ..." required>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add Document</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


@endsection
