@extends('admin.auth.master')

{{-- update title --}}
@section('title', 'login')

{{-- content section --}}
@section('content')

    <body class="light">
        <div class="wrapper vh-100">
            <div class="row align-items-center h-100">
                <form method="POST" action="{{ route('admin.login') }}" class="col-lg-3 col-md-4 col-10 mx-auto text-center">

                    @csrf

                    {{-- logo icon --}}
                    <a class="navbar-brand flex-fill mx-auto mt-2 text-center" href="./index.html">
                        <svg version="1.1" id="logo" class="navbar-brand-img brand-md"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 120 120" xml:space="preserve">
                            <g>
                                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                            </g>
                        </svg>
                    </a>

                    <h1 class="h6 mb-3">Sign in</h1>

                    {{-- email address --}}
                    <div class="form-group">
                        <label for="email" class="sr-only">{{ __('Email address') }}</label>
                        <input type="email" id="email" name="email" class="form-control form-control-lg"
                            placeholder="Email address" autofocus="true" value="{{ old('email') }}">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    {{-- password --}}
                    <div class="form-group">
                        <label for="password" class="sr-only">{{ __('Password') }}</label>
                        <input type="password" name="password" id="password" class="form-control form-control-lg"
                            placeholder="Password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    {{-- remember me --}}
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" name="remember" value="remember-me"> {{ __('Remember Me') }}
                        </label>
                    </div>

                    {{-- Login button --}}
                    <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Login') }}</button>
                    <p class="text-muted mb-3 mt-5">© 2020</p>
                </form>
            </div>
        </div>
    </body>
@endsection
