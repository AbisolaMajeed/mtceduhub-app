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
              <li class="breadcrumb-item active">Applicants</li>
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
                      <h3>All applicants</h3>

                      @if(Session::has('status'))
                          <br>
                          <div class="alert alert-success">
                              {{ Session::get('status') }}
                          </div>
                      @endif

                      
                      <span>This captures the list visitors who have registered at one point or the other</span>
                      <hr>
                      <a style="float:right" href="{{ route('dashboard.archived-applicants') }}">View Archived Applicants</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="applicant" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>#</th>
                          <th>Full name</th>
                          <th>Email</th>
                          <th>Phone number</th>
                          <th>Status</th>
                          <th>Applied on</th>
                          <th>Updated on</th>
                          <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                          @if ($applicants->count() > 0)
                            @foreach ($applicants as $applicant)
                                <tr>
                                    <td>{{++$loop->index}}</td>
                                    <td>{{$applicant->fullname}}</td>
                                    <td>{{$applicant->email}}</td>
                                    <td>{{$applicant->phone_number}}</td>
                                    <td><span class="badge @if($applicant->stage == 'LEAD') badge-info @else badge-success @endif">{{$applicant->stage ?? 'LEAD'}}</span></td>
                                    <td>{{$applicant->created_at}}</td>
                                    <td>{{$applicant->updated_at}}</td>
                                    <td>
                                      @if ($applicant->stage == "LEAD")
                                        <a href="{{ route('dashboard.move-applicant-to-training', $applicant->id) }}" class="btn btn-success">Move To Training</a>
                                      @else
                                        <a href="{{ route('dashboard.move-applicant-to-lead', $applicant->id) }}" class="btn btn-primary">Move To Lead</a>
                                      @endif
                                        <a href="{{ route('dashboard.archive-applicant', $applicant->id) }}" class="btn btn-danger">Archive</a>
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