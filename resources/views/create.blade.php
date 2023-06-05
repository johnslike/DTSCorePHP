@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
                <h5 class="text-center">Your Documents</h5>
          </div><!-- /.col -->
          <div class="col-sm-4">
                <h5 class="text-center">Online Store Overview</h5>
          </div><!-- /.col -->
          <div class="col-sm-4">
                <h5 class="text-center">Online Store Overview</h5>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">

                <form action="/add/document" method="POST">
                    @csrf
                <div class="card-body">
                          <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                <span style="color:red">* </span><label>Document Title:</label>
                                    <textarea class="form-control" name="document_title" row="2" placeholder="Enter ..." required>
                                    </textarea>
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
                                    <input class="form-control" name="pages" row="2" placeholder="Enter ..." required>
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
            </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->


@endsection
