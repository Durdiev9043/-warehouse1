{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Session Status -->--}}
{{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <!-- Email Address -->--}}
{{--            <div>--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <!-- Remember Me -->--}}
{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="inline-flex items-center">--}}
{{--                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-button class="ml-3">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</head>
<body>
<div class="auth">
    <div class="w-100 auth-full-page-content">
        <div class="div1 p-sm-5 p-4 w-100 div2">
            <div class="div1 w-100 mb-4 mb-md-5 text-center">
                <img src="https://themesdesign.in/dason-node/layouts/default/assets/images/logo-sm.svg" alt="" width="32px" height="32px">
                <h1>DASON</h1>
            </div>
            <div class="auth-content my-auto text-center w-100 pd">
                <h5 class="mb-0 h5">Register Account</h5>
                <p class="text-muted mt-2 pr">Get your free Dason account now.</p>
                <form class="needs-validation mt-4 pt-2" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-floating form-floating-custom mb-4">
                        <div class="inps form-floating form-floating-custom mb-4">
                            <input type="text" name="email" class="inp-form" placeholder="Email">
                            <div class="svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </div>
                        </div>
                        <!-- <label for="" class="label">Email</label> -->
                    </div>
                    <div class="form-floating form-floating-custom mb-4">
                        <div class="inps form-floating form-floating-custom mb-4">
                            <input type="password" name="password" class="inp-form" placeholder="Password">
                            <div class="svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>

                            </div>
                        </div>
                        <!-- <label for="" class="label">Email</label> -->
                    </div>
                    <p class="mb-4 pr pre pre1">
                        <input type="checkbox" class="form-check-input">
                        <span class="text text-muted mb-0">  Remember me</span>
                    </p>
                    <div class="mb-3"><button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
                    </div>
                    <div class="div5">
                        <span>- Sign in with -</span>
                        <div class="div6">
                            <div class="icon3">
                                <span class="iconify" data-icon="akar-icons:facebook-fill" style="color: white;" data-width="13" data-height="13"></span>
                            </div>
                            <div class="icon4">
                                <span class="iconify" data-icon="akar-icons:twitter-fill" style="color: white;" data-width="13" data-height="13"></span>
                            </div>
                            <div class="icon5">
                                <span class="iconify" data-icon="akar-icons:google-fill" style="color: white;" data-width="13" data-height="13"></span>
                            </div>
                        </div>
                    </div>
                    <p class="text text-muted mb-0">Don't have an account ?
                        &nbsp;<a href="register.html">Signup now</a></p>
                    <p class="text text-muted mb-0 text2">© 2022 Dason . Crafted with  ❤️ by Themesbrand</p>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xxl-9 col-lg-8 col-md-7 img">
        <div class="bag">
            <div class="anima">
                <div class="border0"></div>
                <div class="border1"></div>
                <div class="border2"></div>
                <div class="border3"></div>
                <div class="border4"></div>
                <div class="border6"></div>
                <div class="border8"></div>
            </div>
            <div class="icon">
                <span class="iconify" data-icon="ri:double-quotes-l" style="color: #028102;" data-width="40" data-height="41"></span>
                <h1>“Our task must be to free ourselves by widening our <br> circle of compassion to embrace all living creatures and the whole of quis consectetur nunc sit amet <br> semper justo. nature and its beauty.” <br><br><br><span>Ilse R. Eaton</span></h1>
                <span class="man">Web Designer</span>
                <div class="img1">
                    <img src="https://themesdesign.in/dason-node/layouts/default/assets/images/users/avatar-1.jpg" alt="" width="48" height="48">
                    <img src="https://themesdesign.in/dason-node/layouts/default/assets/images/users/avatar-2.jpg" alt="" width="48" height="48">
                    <img src="https://themesdesign.in/dason-node/layouts/default/assets/images/users/avatar-3.jpg" alt="" width="48" height="48">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>
