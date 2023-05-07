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
                        <h3>Add new blog</h3>
                      

                        @if(Session::has('status'))
                            <br>
                            <div class="alert alert-success">
                                {{ Session::get('status') }}
                            </div>
                        @endif



                        <hr>
                        <a style="float:right" href="{{ route('dashboard.blogs') }}">View all blogs</a>
                        <a href="{{ route('dashboard.archived-blogs') }}">View archived blogs</a>
                      </div>

                      <div class="card card-info">
                        <!-- /.card-header -->
                        <form class="form-horizontal" action="{{ route('dashboard.save-add-blogs') }}" method="POST">
                            @csrf
                          <div class="card-body">
                            <div class="form-group row">
                              <label for="title" class="col-sm-2 col-form-label">Title</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Project Management Ethics">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="category" class="col-sm-2 col-form-label">Category</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="category" id="category">
                              </div>
                            </div>

                            <br>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-sm-12"><b> CONTENT </b></div>
                            </div>
                            <hr />

                            <div class="form-group row">
                              <label for="content_1" class="col-sm-2 col-form-label">Paragraph 1</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" id="content_1" rows="4" name="content_1" required></textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                                <label for="content_2" class="col-sm-2 col-form-label">Paragraph 2</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" id="content_2" rows="4" name="content_2"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="content_3" class="col-sm-2 col-form-label">Paragraph 3</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" id="content_3" rows="4" name="content_3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="content_4" class="col-sm-2 col-form-label">Paragraph 4</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" id="content_4" rows="4" name="content_4"></textarea>
                                </div>
                            </div>

                            <br>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-sm-12"><b> Quotation </b></div>
                            </div>
                            <hr />

                            <div class="form-group row">
                              <label for="quote" class="col-sm-2 col-form-label">Quotation</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" id="quote" rows="4" name="quote" required></textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                                <label for="cite" class="col-sm-2 col-form-label">Citation</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="cite" rows="4" name="cite">
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