@extends('layouts.app')
@section('content')
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
      {{-- <div class="min-h-screen bg-gray-100"> --}}

          <!-- Page Heading -->
          {{-- <header class="bg-white shadow">
              <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                  {{ $header ?? '' }}
              </div>
          </header>

      </div> --}}

  @include('layouts.navigation')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Dashboard</li>
              <li class="breadcrumb-item active">Accounts</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    @include('partials.counters')


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                      <h3>All admins</h3>
                      <span>This captures the list administrator-privileged users</span>


                      @if(Session::has('status'))
                          <br>
                          <div class="alert alert-success">
                              {{ Session::get('status') }}
                          </div>
                      @endif

                      <hr>
                      <a style="float:right" href="{{ route('dashboard.archived-accounts') }}">View Archived Admins</a>
                      <a href="{{ route('dashboard.add-accounts') }}">Add new Admin</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Full name</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Applied on</th>
                            <th>Updated on</th>
                            <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            @if (count($admins) > 0)
                              @foreach ($admins as $admin)
                                  <tr>
                                      <td>{{++$loop->index}}</td>
                                      <td>{{$admin->fullname}}</td>
                                      <td>{{$admin->email}}</td>
                                      <td>{{$admin->phone_number}}</td>
                                      <td>{{$admin->category}}</td>
                                      <td><span class="badge @if($admin->status == 0) badge-info @else badge-success @endif">{{($admin->status == false) ? 'INACTIVE' : 'ACTIVE'}}</span></td>
                                      <td>{{$admin->created_at}}</td>
                                      <td>{{$admin->updated_at}}</td>
                                      <td>
                                        <a href="{{ route('dashboard.archive-account', $admin->id) }}" class="btn btn-danger">Archive</a>
                                      </td>
                                  </tr>
                              @endforeach
                            @else
                              <tr>
                                <td colspan="9" align="center">No record found</td>
                              </tr>
                            @endif
                          </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
            </div>
        </div>
    </section>
  </div>
  @endsection