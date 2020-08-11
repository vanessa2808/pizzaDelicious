
@section('content')
    @extends('page.layouts.master')
    <section class="home-slider owl-carousel img" style="background-image: url(page/images/bg_1.jpg);">

        <div class="slider-item" style="background-image: url(page/images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">View personal Information</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Services</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <div class="col-md-1"></div>
    <div class="col-md-6 ftco-animate">
                    <h2 class="mb-4">View personal information</h2>
                    <form style="color: #0a0a0a" action="#" class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name" value="{{Auth::user()->name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email" value="{{Auth::user()->email}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="dateofbirth" value="{{Auth::user()->dateofbirth}}">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="address">{{Auth::user()->address}}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Edit" class="btn btn-primary py-3 px-5">
                            <input style="background-color: red " type="submit" value="Cancel" class="btn btn-primary py-3 px-5">

                        </div>
                    </form>
        </div>
            </div>
        </div>
    </section>


@endsection
