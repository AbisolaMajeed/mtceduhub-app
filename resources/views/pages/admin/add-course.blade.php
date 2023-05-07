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
                        <h3>Add new course</h3>
                        
                        @if(Session::has('status'))
                            <br>
                            <div class="alert alert-success">
                                {{ Session::get('status') }}
                            </div>
                        @endif

                        <hr>
                        <a style="float:right" href="{{ route('dashboard.courses') }}">View all Courses</a>
                        <a href="{{ route('dashboard.archived-courses') }}">View Archived Courses</a>
                      </div>

                      <div class="card card-info">
                        <!-- /.card-header -->
                        <form class="form-horizontal" action="{{ route('dashboard.save-add-course') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                          <div class="card-body">
                            <div class="form-group row">
                              <label for="title" class="col-sm-2 col-form-label">Title</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Project Management Professional">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="aliase" class="col-sm-2 col-form-label">Aliase</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="aliase" name="aliase" placeholder="PMP">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="category" class="col-sm-2 col-form-label">Category</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="category" name="category" placeholder="PMP">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="student_enrolled" class="col-sm-2 col-form-label">Student enrolled</label>
                              <div class="col-sm-10">
                                <input type="number" class="form-control" id="student_enrolled" name="student_enrolled" required>
                              </div>
                            </div>


                            <br>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-sm-12"><b> COURSE DETAIL </b></div>
                            </div>
                            <hr />

                            <div class="form-group row">
                              <label for="course_description_title" class="col-sm-2 col-form-label">Course Description Title</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="course_description_title" name="course_description_title">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="course_content" class="col-sm-2 col-form-label">Course Content</label>
                              <div class="col-sm-10">
                                <textarea name="course_content" id="course_content" rows="7" width="100%" class="form-control"></textarea>
                              </div>
                            </div>

                            
                            <br>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-sm-12"><b> LEARNING OBJECTIVES </b></div>
                            </div>
                            <hr />

                            <div class="row">
                                <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                    <label for="learning_objectives_1" class="col-sm-12 col-form-label">Learning Objective 1</label>
                                    <input type="text" class="form-control" id="learning_objectives_1" name="learning_objectives_1">
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="learning_objectives_2" class="col-sm-12 col-form-label">Learning Objective 2</label>
                                    <input type="text" class="form-control" id="learning_objectives_2" name="learning_objectives_2">
                                  </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                    <label for="learning_objectives_3" class="col-sm-12 col-form-label">Learning Objective 3</label>
                                    <input type="text" class="form-control" id="learning_objectives_3" name="learning_objectives_3">
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="learning_objectives_4" class="col-sm-12 col-form-label">Learning Objective 4</label>
                                    <input type="text" class="form-control" id="learning_objectives_4" name="learning_objectives_4">
                                  </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                    <label for="learning_objectives_5" class="col-sm-12 col-form-label">Learning Objective 5</label>
                                    <input type="text" class="form-control" id="learning_objectives_5" name="learning_objectives_5">
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="learning_objectives_6" class="col-sm-12 col-form-label">Learning Objective 6</label>
                                    <input type="text" class="form-control" id="learning_objectives_6" name="learning_objectives_6">
                                  </div>
                                </div>
                            </div>

                            <br>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-sm-12"><b> LEARNING OUTCOMES </b></div>
                            </div>
                            <hr />

                            <div class="row">
                                <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                    <label for="learning_outcomes_1" class="col-sm-12 col-form-label">Learning Outcome 1</label>
                                    <input type="text" class="form-control" id="learning_outcomes_1" name="learning_outcomes_1">
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="learning_outcomes_2" class="col-sm-12 col-form-label">Learning Outcome 2</label>
                                    <input type="text" class="form-control" id="learning_outcomes_2" name="learning_outcomes_2">
                                  </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                    <label for="learning_outcomes_3" class="col-sm-12 col-form-label">Learning Outcome 3</label>
                                    <input type="text" class="form-control" id="learning_outcomes_3" name="learning_outcomes_3">
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="learning_outcomes_4" class="col-sm-12 col-form-label">Learning Outcome 4</label>
                                    <input type="text" class="form-control" id="learning_outcomes_4" name="learning_outcomes_4">
                                  </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                    <label for="learning_outcomes_5" class="col-sm-12 col-form-label">Learning Outcome 5</label>
                                    <input type="text" class="form-control" id="learning_outcomes_5" name="learning_outcomes_5">
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="learning_outcome_6" class="col-sm-12 col-form-label">Learning Outcome 6</label>
                                    <input type="text" class="form-control" id="learning_outcome_6" name="learning_outcome_6">
                                  </div>
                                </div>
                            </div>


                            <br>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-sm-12"><b> OTHERS </b></div>
                            </div>
                            <hr />

                            <div class="form-group row">
                              <label for="rating" class="col-sm-2 col-form-label">Rating</label>
                              <div class="col-sm-10">
                                <input type="number" class="form-control" id="rating" name="rating" value="5" max="5">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="cover" class="col-sm-2 col-form-label">Cover</label>
                              <div class="col-sm-10">
                                <input type="file" class="form-control" id="cover" name="cover" required>
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