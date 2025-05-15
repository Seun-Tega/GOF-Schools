<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.includes.head')

</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="{{ asset('assets/image/image (6).png') }}" alt="logo">
              </div>
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6>

              <x-auth-session-status class="mb-4" :status="session('status')" />

              <form class="pt-3" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-user text-primary"></i>
                      </span>
                    </div>
                    <input class="form-control form-control-lg border-left-0" type="email" name="email"
                      :value="old('email')" id="email" placeholder="Username" required autofocus
                      autocomplete="username">

                  </div>
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-lock text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="password"
                      type="password" name="password" required autocomplete="current-password">
                  </div>

                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                      Keep me signed in
                    </label>
                  </div>
                  @if (Route::has('password.request'))

                  <a href="{{ route('password.request') }}" class="auth-link text-black">Forgot password?</a>
                  @endif

                </div>
                <div class="my-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                    href="">LOGIN</button>
                </div>


              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018 All
              rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>


  @include('admin.includes.scripts')
</body>

</html>