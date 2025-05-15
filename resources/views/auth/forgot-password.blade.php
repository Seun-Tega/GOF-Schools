<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.head')

</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo text-center">
                                <img src="{{ asset('assets/image/image (6).png') }}" alt="logo">
                            </div>
                            <p>Forgot your password? No problem. Just let us know your email address and we will email
                                you a password reset link that will allow you to choose a new one.</p>
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <form class="pt-3" method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="email" name="email"
                                        :value="old('email')" required autofocus>

                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="mt-3">
                                    <button
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Email
                                        Password Reset Link</button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>

    </div>


    @include('admin.includes.scripts')
</body>

</html>