@section('content')
    @extends('page.layouts.master')

    <section class="home-slider owl-carousel img" style="background-image: url(page/images/bg_1.jpg);">

        <div class="slider-item" style="background-image: url(page/images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Register </h1>
                        <section class="ftco-section contact-section">

                            <div class="col-md-6 ftco-animate" style="border-radius: 10px; ">
                                <form action="{{route('register')}}" class="contact-form" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Full name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            </div>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                     </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                            </div>
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                     </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="date" placeholder="Enter date of birth" class="form-control @error('dateofbirth') is-invalid @enderror" name="dateofbirth" value="{{ old('dateofbirth') }}" required autocomplete="dateofbirth" autofocus>
                                            </div>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                     </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                                            </div>
                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                     </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            </div>
                                            @error('email')
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                                    @enderror

                                    <div class="form-group">
                                        <input type="password" placeholder="Retype password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>


                                    <div class="form-group">
                                        <input type="submit" value="Register" class="btn btn-primary py-3 px-5">
                                    </div>
                                </form>
                                </form>
                            </div>

                        </section>

                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
