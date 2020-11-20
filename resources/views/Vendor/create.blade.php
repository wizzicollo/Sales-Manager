@extends('layouts.backend.app')

@section('content')

  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Vendor</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Master </li>
              <li class="breadcrumb-item active">Create Vendor </li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Create Vendor</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    @csrf
                  <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-4">
                      <label for="name" class="col-sm-4 col-form-label">Name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name"  placeholder="Name">
                      </div>
                    </div>
                    <div class="col-md-4">
                        <label for="Address" class="col-sm-4 col-form-label">Address</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                        </div>
                      </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-4 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="contactPerson" class="col-sm-4 col-form-label">Contact Person</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="contactPerson" name="contactPerson" placeholder="Contact Person">
                    </div>
                  </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck2">
                          <label class="form-check-label" for="exampleCheck2">Remember me</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Sign in</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
