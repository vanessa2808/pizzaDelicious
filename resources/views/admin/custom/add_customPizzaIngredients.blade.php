


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
                                <div class="col-lg-12">
                                    <div class="breadcome-heading">
                                        <form role="search" class="">
                                            <input type="text" placeholder="Search..." class="form-control">
                                            <a href=""><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Add CustomPizzaIngredients</span>
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
                    <div class="col-lg-12">
                        <div class="sparkline8-list basic-res-b-30 shadow-reset">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Add CustomPizzaIngredients </h1>
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
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                            <div class="basic-login-inner">
                                                <h3>Add CustomPizzaIngredients</h3>
                                                <form action="admin/custom/add_customPizza" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-group">
                                                        <label for="exampleProductsType1"> ingredient Types 1</label>
                                                        <select class="form-control" id="ingredientTypeId1" name="ingredientTypeId1">
                                                            <option value="0">--Choose ingredients type of pizza--</option>
                                                            @foreach($listIngredients as $key => $ingredients)
                                                                <option value="{{ $ingredients->id }}">{{ $ingredients->ingredientTypes->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ingredientId1"> ingredient 1</label>
                                                        <select class="form-control" id="ingredientId1" name="ingredientId1">
                                                            <option value="0">--Choose ingredients type of pizza--</option>
                                                            @foreach($listIngredients as $key => $ingredients)
                                                                <option value="{{ $ingredients->id }}">{{ $ingredients->ingredientName }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ingredientTypeId2"> ingredient Types 2</label>
                                                        <select class="form-control" id="ingredientTypeId2" name="ingredientTypeId2">
                                                            <option value="0">--Choose ingredients type of pizza--</option>
                                                            @foreach($listIngredients as $key => $ingredients)
                                                                <option value="{{ $ingredients->id }}">{{ $ingredients->ingredientTypes->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="ingredientId2"> ingredient 2</label>
                                                        <select class="form-control" id="ingredientId2" name="ingredientId2">
                                                            <option value="0">--Choose ingredients type of pizza--</option>
                                                            @foreach($listIngredients as $key => $ingredients)
                                                                <option value="{{ $ingredients->id }}">{{ $ingredients->ingredientName }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleProductsType1"> ingredient Types 3</label>
                                                        <select class="form-control" id="ingredientTypeId3" name="ingredientTypeId3">
                                                            <option value="0">--Choose ingredients type of pizza--</option>
                                                            @foreach($listIngredients as $key => $ingredients)
                                                                <option value="{{ $ingredients->id }}">{{ $ingredients->ingredientTypes->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="ingredientId3"> ingredient 3</label>
                                                        <select class="form-control" id="ingredientId3" name="ingredientId3">
                                                            <option value="0">--Choose ingredients type of pizza--</option>
                                                            @foreach($listIngredients as $key => $ingredients)
                                                                <option value="{{ $ingredients->id }}">{{ $ingredients->ingredientName }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ingredientTypeId4"> ingredient Types 4</label>
                                                        <select class="form-control" id="ingredientTypeId4" name="ingredientTypeId4">
                                                            <option value="0">--Choose ingredients type of pizza--</option>
                                                            @foreach($listIngredients as $key => $ingredients)
                                                                <option value="{{ $ingredients->id }}">{{ $ingredients->ingredientTypes->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="ingredientId4"> ingredient 4 </label>
                                                        <select class="form-control" id="ingredientId4" name="ingredientId4">
                                                            <option value="0">--Choose ingredients type of pizza--</option>
                                                            @foreach($listIngredients as $key => $ingredients)
                                                                <option value="{{ $ingredients->id }}">{{ $ingredients->ingredientName }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="login-btn-inner">
                                                        <div class="inline-remember-me">
                                                            <button class="btn btn-sm btn-primary pull-right login-submit-cs" type="submit">Add</button>

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



<script type="text/javascript" src="{{asset('/ckfinder/ckfinder.js')}}"></script>


@endsection








