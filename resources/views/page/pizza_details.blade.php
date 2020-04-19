@section('content')
    @extends('page.layouts.master')
    <section class="home-slider owl-carousel img" style="background-image: url(page/images/bg_1.jpg);">

        <div class="slider-item" style="background-image: url(page/images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">pizza details</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>pizza Detail</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
    <div class="recepie_details_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="recepies_thumb">
                        <img src="{{asset($pizza->image)}}" style=" width:500px"   alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="recepies_info">
                        <h3>{{$pizza->name}}</h3>
                          <p>{{$pizza->description}}</p>
                        <div class="resepies_details">
                            <ul>
                                <li><p><strong>Rating</strong> : <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </p></li>
                                <li><p><strong>Time</strong> : 30 Mins </p></li>
                                <li><p><strong>Category</strong> : Main Dish </p></li>
                                <li><p><strong>Tags</strong> :  Dinner, Main, Chicken, Dragon, Phoenix </p></li>
                            </ul>
                        </div>
                        <div class="links">
                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                            <a href="#"> <i class="fa fa-linkedin"></i> </a>

                        </div>
                        <p></p>
                        

                        </ul><a href="/checkout/id={{$pizza->id}}" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>

                    </div>
                </div>
            </div>



        </div>
    </div>
        
        </div>
    </section>
@endsection
