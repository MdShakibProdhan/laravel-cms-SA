{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<x-guest-layout>
    <!DOCTYPE html>
    <html class="h-100" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
        <link href="{{ asset('adminViewAssets/css/style.css') }}" rel="stylesheet">

    </head>

    <body class="h-100">

        <!--*******************
        Preloader start
    ********************-->
        <div id="preloader">
            <div class="loader">
                <a href="{{ url('/') }}"><img src="{{ asset('guistViewAssets/assets/img/logo.png') }}"
                        alt="" class="img-fluid"></a>
            </div>
        </div>
        <!--*******************
        Preloader end
    ********************-->



        <div class="login-form-bg h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100">
                    <div class="col-xl-12">
                        <div class="form-input-content">
                            <div class="card login-form mb-0">
                                <div class="card-body pt-5">
                                    <a class="text-center" href="#">
                                        <h4>LogIn</h4>
                                    </a>

                                    <form class="mt-5 mb-5 login-input" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" placeholder="Email" id="email"
                                                class="block mt-1 w-full form-control" name="email"
                                                :value="old('email')" required autofocus autocomplete="username">

                                        </div>
                                        <div class="form-group">
                                            <input type="password" placeholder="Password" id="password"
                                                class="block mt-1 w-full form-control" name="password" required
                                                autocomplete="current-password">
                                        </div>
                                        <button class="btn login-form__btn submit w-100">{{ __('Log in') }}</button>
                                    </form>
                                    <p class="mt-5 login-form__footer">Dont have account? <a
                                            href="{{ route('register') }}" class="text-primary">Sign Up</a> now</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!--**********************************
        Scripts
    ***********************************-->


        <script src="{{ asset('adminViewAssets/plugins/common/common.min.js') }}"></script>
        <script src="{{ asset('adminViewAssets/js/custom.min.js') }}"></script>
        <script src="{{ asset('adminViewAssets/js/settings.js') }}"></script>
        <script src="{{ asset('adminViewAssets/js/gleek.js') }}"></script>
        <script src="{{ asset('adminViewAssets/js/styleSwitcher.js') }}"></script>

    </body>

    </html>
</x-guest-layout>
