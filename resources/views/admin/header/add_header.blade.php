@section('content')
    @extends('admin.layouts.master')
@section('title', 'admin')

<div class="wrapper-pro">

    <div class="content-inner-all">
        <div class="breadcome-area mg-b-30 small-dn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                        <div class="admin-logo logo-wrap-pro">
                            <a href="#"><img src="admin/img/logo/log.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="breadcome-heading">
                                        <form role="search" class="">
                                            <input type="text" placeholder="Search..." class="form-control">
                                            <a href=""><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="breadcome-menu">
                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Add Header</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="basic-form-area mg-b-15">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="sparkline8-list basic-res-b-30 shadow-reset">
                                        <div class="sparkline8-hd">
                                            <div class="main-sparkline8-hd">
                                                <h1>Add header </h1>
                                                <div class="sparkline8-outline-icon">
                                                    <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                    <span><i class="fa fa-wrench"></i></span>
                                                    <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sparkline8-graph">
                                            <div class="basic-login-form-ad">

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="basic-login-inner">
                                                            <h3>Add header home</h3>
                                                            <form action="admin/header/add_header" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group-inner">
                                                                    <label>Image1</label>
                                                                    <input type="file" class="form-control" placeholder="Enter image" name="image1" />
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <label>Title 1_1</label>
                                                                    <input type="text" class="form-control" placeholder="Enter title" name="title1_1" />
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <label>Title 1_2</label>
                                                                    <input type="text" class="form-control" placeholder="Enter title" name="title1_2" />
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <label>Title 1_3</label>
                                                                    <input type="text" class="form-control" placeholder="Enter title" name="title1_3" />
                                                                </div>

                                                                <div class="form-group-inner">
                                                                    <label>Image2</label>
                                                                    <input type="file" class="form-control" placeholder="Enter image" name="image2" />
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <label>Title 2_1</label>
                                                                    <input type="text" class="form-control" placeholder="Enter title" name="title2_1" />
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <label>Title 2_2</label>
                                                                    <input type="text" class="form-control" placeholder="Enter title" name="title2_2" />
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <label>Title 2_3</label>
                                                                    <input type="text" class="form-control" placeholder="Enter title" name="title2_3" />
                                                                </div>

                                                                <div class="form-group-inner">
                                                                    <label>Image3</label>
                                                                    <input type="file" class="form-control" placeholder="Enter image" name="image3" />
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <label>Title 3_1</label>
                                                                    <input type="text" class="form-control" placeholder="Enter title" name="title3_1" />
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <label>Title 3_2</label>
                                                                    <input type="text" class="form-control" placeholder="Enter title" name="title3_2" />
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <label>Title 3_3</label>
                                                                    <input type="text" class="form-control" placeholder="Enter title" name="title3_3" />
                                                                </div>
                                                                <div class="login-btn-inner">
                                                                    <div class="inline-remember-me">
                                                                        <button class="btn btn-sm btn-primary pull-right login-submit-cs" type="submit">Log In</button>
                                                                        <label>
                                                                            <input type="checkbox" class="i-checks"> Remember me </label>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



            </div>
        </div>
    </div>
</div>

@endsection



