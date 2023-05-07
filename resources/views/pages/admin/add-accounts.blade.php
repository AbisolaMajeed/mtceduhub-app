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
                <div class="col-md-6">

                    <div class="card-header">
                        <h3>Add new admin account</h3>
                      

                        @if(Session::has('status'))
                            <br>
                            <div class="alert alert-success">
                                {{ Session::get('status') }}
                            </div>
                        @endif



                        <hr>
                        <a style="float:right" href="{{ route('dashboard.accounts') }}">View all Admins</a>
                        <a href="{{ route('dashboard.archived-accounts') }}">View Archived Admins</a>
                      </div>

                      <div class="card card-info">
                        <!-- /.card-header -->
                        <form class="form-horizontal" action="{{ route('dashboard.save-add-accounts') }}" method="POST">
                            @csrf
                          <div class="card-body">
                            <div class="form-group row">
                              <label for="fullname" class="col-sm-2 col-form-label">Full name</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Ebenezer Babalola">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="category" class="col-sm-2 col-form-label">Category</label>
                              <div class="col-sm-10">
                                <select name="category" id="category" class="form-control" >
                                    <option value="admin">Admin</option>
                                    <option value="super-admin">Super Admin</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="email" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" id="email">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="phone_number" class="col-sm-2 col-form-label">Phone number</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone_number" id="phone_number">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="password" class="col-sm-2 col-form-label">Password</label>
                              <div class="col-sm-10">
                                <input type="password" class="form-control" name="password" id="password">
                              </div>
                            </div>
                          </div>
                          <!-- /.card-body -->
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                          <!-- /.card-footer -->
                        </form>
                      </div>

                </div>
            </div>
        </div>
    </section>
  </div>
  @endsection