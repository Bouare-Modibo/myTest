<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('tmp/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('tmp/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('tmp/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('tmp/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('tmp/images/logosysmini.jpeg') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo ">
                <img src="{{ asset('tmp/images/logo01.jpeg') }}" alt="logo" class="rounded mx-auto d-block">
              </div>
              <form class="pt-3" method="POST" action="{{ route('login') }}">
                
                  {{ csrf_field() }}

                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus class="form-control form-control-lg" placeholder="Your email">

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" name="password" class="form-control form-control-lg" placeholder="Your password" >

                      @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                      @endif

                  </div>
                  <div class="mt-2">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="#"><button type="submit" class="btn">SIGN IN</button></a>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="form-check-input">
                        Keep me signed in
                      </label>
                    </div>
                    <a href="" class="auth-link text-black">Forgot password?</a>
                  </div>
                  
                  <div class="text-center mt-4 font-weight-light">
                    Don't have an account? <a href="" class="text-primary">Create</a>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('tmp/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('tmp/js/off-canvas.js') }}"></script>
  <script src="{{ asset('tmp/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('tmp/js/template.js') }}"></script>
  <script src="{{ asset('tmp/js/settings.js') }}"></script>
  <script src="{{ asset('tmp/js/todolist.js') }}"></script>
  <!-- endinject -->
</body>

</html>
