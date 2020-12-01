@extends('layouts.backend.app')

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
    @endpush

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
              <li class="breadcrumb-item active">Vendor </li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


  <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" style="width:100%">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact Person</th>
                    <th>Phone No.</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                 
                  <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact Person</th>
                    <th>Phone No.</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->

@endsection

@push('js')
    <!-- DataTables -->
    <script src="{{ asset ('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset ('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    {{-- <script src="assets/plugins/datatables/jquery.dataTables.js"></script>
    <script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script> --}}

    <script>
        $(function () {
        $("#example1").DataTable();  
            responsive:true,
            processing:true,
            pagingType: 'full_numbers',
            stateSave:false,
            scrollY:true,
            scrollX:true,
            ajax:"{{ url('vendor/datatable') }}",
            order:[0, 'desc'],
            columns: [
                {data:'name', name:'name'},
                {data:'address', name:'address'},
                {data:'cp', name:'cp'},
                {data:'phone', name:'phone'},
                {data:'active',
                    render:function(data){
                    if(data=='1'){
                        return '<span class="badge badge-success">Active</span>';
                    }
                        if(data=='2'){
                            return '<span class="badge badge-error">Inactive</span>';
                        }
                    },

            },
            {data:'action', name:'action', searchable: false, sortable:false}


            ]
        });
      </script>
    @endpush