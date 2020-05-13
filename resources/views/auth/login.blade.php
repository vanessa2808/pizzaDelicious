
@section('content')
    @extends('page.layouts.master')

    <section class="home-slider owl-carousel img" style="background-image: url(page/images/bg_1.jpg);">

        <div class="slider-item" style="background-image: url(page/images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Login </h1>
                        <section class="ftco-section contact-section">

                                        <form action="{{ route('login') }}" class="contact-form" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <input type="email"  placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror
                                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>



                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                                                @enderror
                                            </div>




                                            <div class="form-group">
                                                <input type="submit" value="login" class="btn btn-primary py-3 px-5">
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
                        </section>
                    </div>

                </div>
            </div>
        </div>
    </section>



@endsection
