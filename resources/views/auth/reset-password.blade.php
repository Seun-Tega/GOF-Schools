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
                            <h6 class="text-center">Reset your password</h6>
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <form class="pt-3"  method="POST" action="{{ route('password.store') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <div class="form-group">
                                       <label for="email">Email</label>
                                    <input type="email" class="form-control form-control-lg" name="email" id="email"
                                        :value="old('email', $request->email)" required autofocus
                                        autocomplete="username">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                       <label for="password">Passoword</label>
                                    <input type="password" class="form-control form-control-lg" type="password"
                                        name="password" id="password" required autocomplete="new-password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="form-group">
                                       <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" id="password_confirmation"
                                        class="form-control form-control-lg" type="password"
                                        name="password_confirmation" required autocomplete="new-password">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="mt-3">
                                    <button
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Reset Password</button>
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