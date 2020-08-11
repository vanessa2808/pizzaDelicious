@section('content')

    @extends('page.layouts.master1')

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




<body>

            <div class="container">
                <div class="card">
                    <div class="container-fliud">
                        <div class="wrapper row">
                            <div class="preview col-md-6">

                                <div class="preview-pic tab-content">
                                    <div class="tab-pane active" id="pic-1"><img src="{{asset($listPizza->image)}}" /></div>
                                    <div class="tab-pane" id="pic-2"><img src="{{asset($listPizza->image)}}" /></div>
                                    <div class="tab-pane" id="pic-3"><img src="{{asset($listPizza->image)}}" /></div>
                                    <div class="tab-pane" id="pic-4"><img src="{{asset($listPizza->image)}}" /></div>
                                    <div class="tab-pane" id="pic-5"><img src="{{asset($listPizza->image)}}" /></div>
                                </div>
                                <ul class="preview-thumbnail nav nav-tabs">
                                    <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{asset($listPizza->image)}}" /></a></li>
                                    <li><a data-target="#pic-2" data-toggle="tab"><img src="{{asset($listPizza->image)}}" /></a></li>
                                    <li><a data-target="#pic-3" data-toggle="tab"><img src="{{asset($listPizza->image)}}" /></a></li>
                                    <li><a data-target="#pic-4" data-toggle="tab"><img src="{{asset($listPizza->image)}}" /></a></li>
                                    <li><a data-target="#pic-5" data-toggle="tab"><img src="{{asset($listPizza->image)}}" /></a></li>
                                </ul>

                            </div>
                            <div class="details col-md-6">
                                <h3 class="product-title">{{$listPizza->name}}</h3>
                                <div class="rating">
                                    <div class="stars">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="review-no">41 reviews</span>
                                </div>
                                <p class="product-description">{{$listPizza->description}}</p>
                                <h4 class="price">current price: <span>$ {{$listPizza->price}}</span></h4>
                                <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                                <h5 class="sizes">Recipe:
                                    <span class="size" data-toggle="tooltip" title="small">{{$listPizza->recipe}}</span>

                                </h5>
                                <h5 class="colors">Status:
                                        @if ($listPizza->status == 1)
                                            <span>Con Hang</span>
                                        @elseif ($listPizza->status = 0)
                                            <span>Het Han</span>

                                        @endif

                                </h5>
                                <div class="action">
                                    <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                                    <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                                </div>

                            </div>

                        </div>
                        <div class="container pb-cmnt-container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="panel panel-info">
                                        <div class="panel-body">
                                            <textarea placeholder="Write your comment here!" class="pb-cmnt-textarea"></textarea>
                                            <form class="form-inline">
                                                <div class="btn-group">
                                                    <button class="btn" type="button"><span class="fa fa-picture-o fa-lg"></span></button>
                                                    <button class="btn" type="button"><span class="fa fa-video-camera fa-lg"></span></button>
                                                    <button class="btn" type="button"><span class="fa fa-microphone fa-lg"></span></button>
                                                    <button class="btn" type="button"><span class="fa fa-music fa-lg"></span></button>
                                                </div>
                                                <button class="btn btn-primary pull-right" type="button"><a href="/comment/{id}">Share</a></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <div class="card card-white post">
                                        <div class="post-heading">
                                            <div class="float-left image">
                                                <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                                            </div>
                                            <div class="float-left meta">
                                                <div class="title h5">
                                                    <a href="#"><b>Ryan Haywood</b></a>
                                                    made a post.
                                                </div>
                                                <h6 class="text-muted time">1 minute ago</h6>
                                            </div>
                                        </div>
                                        <div class="post-description">
                                            <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </body>


            </html>




        </div>

    </div>

</body>
@endsection
