


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V10</title>
    <meta charset="UTF-8">
    <base href="{{asset(' ')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="Adminlogin/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Adminlogin/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Adminlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Adminlogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Adminlogin/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Adminlogin/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Adminlogin/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Adminlogin/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Adminlogin/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Adminlogin/css/util.css">
    <link rel="stylesheet" type="text/css" href="Adminlogin/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90">
            <form action="{{ route('login') }}" class="contact-form" method="POST" enctype="multipart/form-data">
                @csrf

                <span class="login100-form-title p-b-51">
						Login
					</span>


                <div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
                    <input type="email"  placeholder="please enter user name" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    <span class="focus-input100"></span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>


                <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                    <span class="focus-input100"></span>
                    <input type="password"  placeholder="Password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-24">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div>
                        <a href="#" class="txt1">
                            Forgot?
                        </a>
                    </div>
                </div>

                <div class="container-login100-form-btn m-t-17">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="Adminlogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="Adminlogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="Adminlogin/vendor/bootstrap/js/popper.js"></script>
<script src="Adminlogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="Adminlogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="Adminlogin/vendor/daterangepicker/moment.min.js"></script>
<script src="Adminlogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="Adminlogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="Adminlogin/js/main.js"></script>

</body>
</html>
