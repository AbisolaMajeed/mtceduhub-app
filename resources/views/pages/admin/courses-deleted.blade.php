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
              <li class="breadcrumb-item active">Courses</li>
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
                      <h3>All Archived Courses</h3>


                      @if(Session::has('status'))
                          <br>
                          <div class="alert alert-success">
                              {{ Session::get('status') }}
                          </div>
                      @endif

                      
                      <span>This captures the lists only archived courses</span>
                      <hr>
                      <a style="float:right" href="{{ route('dashboard.courses') }}">View Courses</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="course" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>#</th>
                          <th>Course</th>
                          <th>Aliase</th>
                          <th>Category</th>
                          <th>Student enrolled</th>
                          <th>Course description title</th>
                          <th>Course content</th>
                          <th>Learning Objectives</th>
                          <th>Learning Outcomes</th>
                          <th>Cover</th>
                          <th>Rating</th>
                          <th>Created on</th>
                          <th>Updated on</th>
                          <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                          @if ($courses->count() > 0)
                            @foreach ($courses as $course)
                                <tr>
                                    <td>{{++$loop->index}}</td>
                                    <td><img src="{{$course->cover}}" style="width: 100px; height: 100px; object-fit:contain;"></td>
                                    <td>{{$course->title}}</td>
                                    <td>{{$course->aliase}}</td>
                                    <td>{{$course->category}}</td>
                                    <td>{{$course->stuedent_enrolled}}</td>
                                    <td>{{$course->course_description_title}}</td>
                                    <td>{{$course->course_content}}</td>
                                    <td>
                                        <ul>
                                            <li>{{$course->learning_objectives_1}}</li>
                                            <li>{{$course->learning_objectives_2}}</li>
                                            <li>{{$course->learning_objectives_3}}</li>
                                            <li>{{$course->learning_objectives_4}}</li>
                                            <li>{{$course->learning_objectives_5}}</li>
                                            <li>{{$course->learning_objectives_6}}</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>{{$course->learning_outcomes_1}}</li>
                                            <li>{{$course->learning_outcomes_2}}</li>
                                            <li>{{$course->learning_outcomes_3}}</li>
                                            <li>{{$course->learning_outcomes_4}}</li>
                                        </ul>
                                    </td>
                                    <td>{{$course->rating}}</td>
                                    <td>{{$course->created_at}}</td>
                                    <td>{{$course->updated_at}}</td>
                                    <td>
                                        <a href="{{ route('dashboard.restore-course', $course->id) }}" class="btn btn-danger">Restore</a>
                                    </td>
                                </tr>
                            @endforeach
                            @else
                              <tr>
                                <td colspan="14" align="center">No record found</td>
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