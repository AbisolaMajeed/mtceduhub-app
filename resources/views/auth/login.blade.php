@extends('layouts.app')
@section('content')
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="/dashboard"><b>MTXCEDUHUB</b>Admin</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
  
        <form action="{{ route('login') }}" method="post">
          @csrf
          
          @error('email')
              <p class="text-danger" style="text-align: left;">{{ $errors->first('email') }}</p>
          @enderror
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
  
          @error('email')
              <p class="text-danger" style="text-align: left;">{{ $errors->first('password') }}</p>
          @enderror
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" name="remember" id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
        {{-- <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="register.html" class="text-center">Register a new membership</a>
        </p> --}}
      </div>
      <center><a href="{{ route('/') }}">Go back to website</a></center>
      <br>
      <!-- /.login-card-body -->
    </div>
  </div>
@endsection