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
              <li class="breadcrumb-item active">Archived Blogs</li>
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
                      <h3>All Archived Blogs</h3>
                      <span>This captures the list archived blogs published</span>


                      @if(Session::has('status'))
                          <br>
                          <div class="alert alert-success">
                              {{ Session::get('status') }}
                          </div>
                      @endif

                      <hr>
                      <a style="float:right" href="{{ route('dashboard.blogs') }}">View Blogs</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Quote</th>
                            <th>Category</th>
                            <th>Created on</th>
                            <th>Updated on</th>
                            <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            @if (count($blogs) > 0)
                              @foreach ($blogs as $blog)
                                  <tr>
                                      <td>{{++$loop->index}}</td>
                                      <td>{{$blog->title}}</td>
                                      <td>
                                        {{$blog->content_1}}
                                        <br/>
                                        <br/>
                                        {{$blog->content_2}}
                                        <br/>
                                        <br/>
                                        {{$blog->content_3}}
                                        <br/>
                                        <br/>
                                        {{$blog->content_4}}
                                      </td>
                                      <td>
                                        <i>{{$blog->quote}}</i>
                                        <br/>-{{$blog->cite}}
                                      </td>
                                      <td>{{$blog->category}}</td>
                                      <td>{{$blog->created_at}}</td>
                                      <td>{{$blog->updated_at}}</td>
                                      <td>
                                        <a href="{{ route('dashboard.restore-blog', $blog->id) }}" class="btn btn-danger">Restore</a>
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