

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
                                        <li><span class="bread-blod">Add Pizza</span>
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
                                    <h1>Add Pizza </h1>
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
                                                <h3>Add Pizza</h3>
                                                <form action="admin/food/add_pizza" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-group-inner">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" placeholder="Enter name" name="name" />
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">description</label>
                                                        <textarea type="text" class="ckeditor form-control" id="description"
                                                                  placeholder="Enter description" name="description"></textarea>
                                                        <script type="text/javascript" src="{{asset('/ckeditor/ckeditor.js')}}"></script>

                                                        <script>

                                                            CKEDITOR.replace( 'description', {
                                                                filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',

                                                            } );
                                                        </script>
                                                        @include('ckfinder::setup')


                                                    </div>
                                                    <div class="form-group-inner">
                                                        <label>Price</label>
                                                        <input type="text" class="form-control" placeholder="Enter price" name="price" />
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleProductsType1">Pizza Types</label>
                                                        <select class="form-control" id="recipeTypeId" name="recipeTypeId">
                                                            <option value="0">--Choose Types of pizza--</option>
                                                            @foreach($listRecipeTypes as $key => $recipeTypes)
                                                                <option value="{{ $recipeTypes->id }}">{{ $recipeTypes->types }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleProductsType1">Pizza ingredients 1</label>
                                                        <select class="form-control" id="recipeTypeId" name="recipeTypeId">
                                                            <option value="0">--Choose ingredients of pizza--</option>
                                                            @foreach($listRecipeTypes as $key => $recipeTypes)
                                                                <option value="{{ $recipeTypes->id }}">{{ $recipeTypes->ingredients }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="exampleProductsType1"> name of recipe 1</label>
                                                        <select class="form-control" id="recipeTypeId" name="recipeTypeId">
                                                            <option value="0">--Choose ingredients of pizza--</option>
                                                            @foreach($listRecipe as $key => $recipe)
                                                                <option value="{{ $recipe->id }}">{{ $recipe->nameOfRecipes }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="exampleProductsType1">Pizza ingredients 2</label>
                                                        <select class="form-control" id="recipeTypeId" name="recipeTypeId">
                                                            <option value="0">--Choose ingredients of pizza--</option>
                                                            @foreach($listRecipeTypes as $key => $recipeTypes)
                                                                <option value="{{ $recipeTypes->id }}">{{ $recipeTypes->ingredients }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleProductsType1"> name of recipe 2</label>
                                                        <select class="form-control" id="recipeTypeId" name="recipeTypeId">
                                                            <option value="0">--Choose ingredients of pizza--</option>
                                                            @foreach($listRecipe as $key => $recipe)
                                                                <option value="{{ $recipe->id }}">{{ $recipe->nameOfRecipes }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="exampleProductsType1">Pizza ingredients 3</label>
                                                        <select class="form-control" id="recipeTypeId" name="recipeTypeId">
                                                            <option value="0">--Choose ingredients of pizza--</option>
                                                            @foreach($listRecipeTypes as $key => $recipeTypes)
                                                                <option value="{{ $recipeTypes->id }}">{{ $recipeTypes->ingredients }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="exampleProductsType1"> name of recipe 3</label>
                                                        <select class="form-control" id="recipeTypeId" name="recipeTypeId">
                                                            <option value="0">--Choose ingredients of pizza--</option>
                                                            @foreach($listRecipe as $key => $recipe)
                                                                <option value="{{ $recipe->id }}">{{ $recipe->nameOfRecipes }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>




                                                    <div class="form-group">
                                                        <label for="exampleProductsType1">Pizza ingredients 4</label>
                                                        <select class="form-control" id="recipeTypeId" name="recipeTypeId">
                                                            <option value="0">--Choose ingredients of pizza--</option>
                                                            @foreach($listRecipeTypes as $key => $recipeTypes)
                                                                <option value="{{ $recipeTypes->id }}">{{ $recipeTypes->ingredients }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleProductsType1"> name of recipe 4</label>
                                                        <select class="form-control" id="recipeTypeId" name="recipeTypeId">
                                                            <option value="0">--Choose ingredients of pizza--</option>
                                                            @foreach($listRecipe as $key => $recipe)
                                                                <option value="{{ $recipe->id }}">{{ $recipe->nameOfRecipes }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>




                                                    <div class="form-group">
                                                        <label for="exampleProductsType1">Pizza ingredients 5</label>
                                                        <select class="form-control" id="recipeTypeId" name="recipeTypeId">
                                                            <option value="0">--Choose ingredients of pizza--</option>
                                                            @foreach($listRecipeTypes as $key => $recipeTypes)
                                                                <option value="{{ $recipeTypes->id }}">{{ $recipeTypes->ingredients }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleProductsType1"> name of recipe 5</label>
                                                        <select class="form-control" id="recipeTypeId" name="recipeTypeId">
                                                            <option value="0">--Choose ingredients of pizza--</option>
                                                            @foreach($listRecipe as $key => $recipe)
                                                                <option value="{{ $recipe->id }}">{{ $recipe->nameOfRecipes }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>



                                                    <div class="form-group-inner">
                                                        <label>Chef</label>
                                                        <input type="text" class="form-control" placeholder="Enter chef" name="chef" />
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <label>Time</label>
                                                        <input type="text" class="form-control" placeholder="Enter time" name="time" />
                                                    </div>




                                                    <div class="form-group-inner">
                                                        <label>Image</label>
                                                        <input type="file" class="form-control" placeholder="Enter image" name="image" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputStatus1">Status</label>
                                                        <select class="form-control" id="exampleInputStatus1" name="status">
                                                            <option value="0">Hết Hàng</option>
                                                            <option value="1">Còn Hàng</option>
                                                        </select>
                                                    </div>
                                                    @error('status')
                                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                                @enderror

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



<script type="text/javascript" src="{{asset('/ckfinder/ckfinder.js')}}"></script>


@endsection








