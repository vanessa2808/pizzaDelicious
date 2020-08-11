@section('content')
    @extends('page.layouts.master')
    <section class="home-slider owl-carousel img" style="background-image: url(page/images/bg_1.jpg);">

        <div class="slider-item" style="background-image: url(page/images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Welcome to pizza World</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Menu</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our pizza world</h2>
                    <p>In here you can custom type of pizza that you want to</p>
                </div>
            </div>
        </div>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 heading-section ftco-animate text-center">
                        <h2 class="mb-4">Let's custom</h2>
                    </div>
                </div>
            </div>
            <div class="container-wrap">
                <section class="ftco-section contact-section">
                    <div class="container mt-5">
                        <div class="row block-9">
                            <div class="col-md-4 contact-info ftco-animate">
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h2 class="h4">Menu</h2>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <h3>Thit: </h3>

                                        <ul>
                                            <li> <p>Thit heo nuong</p></li>
                                            <li><p>Thit bo nuong</p></li>
                                            <li><p>Thit heo muoi</p></li>
                                            <li><p>Thit nguoi</p></li>


                                        </ul>
                                        <h3>Rau xa lach: </h3>

                                        <ul>
                                            <li> <p>100%</p></li>
                                            <li><p>70%</p></li>
                                            <li><p>20%</p></li>
                                            <li><p>0%</p></li>


                                        </ul>
                                        <h3>Nhan </h3>

                                        <ul>
                                            <li> <p>Ca chua</p></li>
                                            <li><p>Pho mai</p></li>
                                            <li><p>La thom</p></li>


                                        </ul>
                                        <h3>Hai san </h3>

                                        <ul>
                                            <li> <p>Ca </p></li>
                                            <li>Tom</li>
                                            <li>Muc</li>
                                            <li>sứa</li>




                                        </ul>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-6 ftco-animate">
                                <form action="/custom_pizza" class="contact-form" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleProductsType1">Pizza Types</label>
                                        <select class="form-control" id="recipeTypeId" name="recipeTypeId">
                                            <option value="0">--Choose Types of pizza--</option>
                                            @foreach($listIngredientTypes as $key => $ingredientTypes)
                                                <option value="{{ $ingredientTypes->id }}">{{ $ingredientTypes->types }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleProductsType1">Pizza ingredients 1</label>
                                        <select class="form-control" id="recipeTypeId" name="recipeTypeId">
                                            <option value="0">--Choose ingredients of pizza--</option>
                                            @foreach($listIngredientTypes as $key => $ingredientTypes)
                                                <option value="{{ $ingredientTypes->id }}">{{ $ingredientTypes->ingredients }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleProductsType1"> name of recipe 1</label>
                                        <select class="form-control" id="recipeTypeId" name="recipeId">
                                            <option value="0">--Choose ingredients of pizza--</option>
                                            @foreach($listIngredients as $key => $ingredients)
                                                <option value="{{ $ingredients->id }}">{{ $ingredients->nameOfRecipes }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleProductsType1">Pizza ingredients 2</label>
                                        <select class="form-control" id="recipeTypeId" name="recipeTypeId">
                                            <option value="0">--Choose ingredients of pizza--</option>
                                            @foreach($listIngredientTypes as $key => $ingredientTypes)
                                                <option value="{{ $ingredientTypes->id }}">{{ $ingredientTypes->ingredients }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleProductsType1"> name of recipe 2</label>
                                        <select class="form-control" id="recipeTypeId" name="recipeId">
                                            <option value="0">--Choose ingredients of pizza--</option>
                                            @foreach($listIngredients as $key => $ingredients)
                                                <option value="{{ $ingredients->id }}">{{ $ingredients->nameOfRecipes }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleProductsType1">Pizza ingredients 3</label>
                                        <select class="form-control" id="recipeTypeId" name="recipeTypeId">
                                            <option value="0">--Choose ingredients of pizza--</option>
                                            @foreach($listIngredientTypes as $key => $ingredientTypes)
                                                <option value="{{ $ingredientTypes->id }}">{{ $ingredientTypes->ingredients }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleProductsType1"> name of recipe 3</label>
                                        <select class="form-control" id="recipeTypeId" name="recipeId">
                                            <option value="0">--Choose ingredients of pizza--</option>
                                            @foreach($listIngredients as $key => $ingredients)
                                                <option value="{{ $ingredients->id }}">{{ $ingredients->nameOfRecipes }}</option>
                                            @endforeach
                                        </select>
                                    </div>




                                    <div class="form-group">
                                        <label for="exampleProductsType1">Pizza ingredients 4</label>
                                        <select class="form-control" id="recipeTypeId" name="recipeTypeId">
                                            <option value="0">--Choose ingredients of pizza--</option>
                                            @foreach($listIngredientTypes as $key => $ingredientTypes)
                                                <option value="{{ $ingredientTypes->id }}">{{ $ingredientTypes->ingredients }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleProductsType1"> name of recipe 4</label>
                                        <select class="form-control" id="recipeTypeId" name="recipeId">
                                            <option value="0">--Choose ingredients of pizza--</option>
                                            @foreach($listIngredients as $key => $ingredients)
                                                <option value="{{ $ingredients->id }}">{{ $ingredients->nameOfRecipes }}</option>
                                            @endforeach
                                        </select>
                                    </div>




                                    <div class="form-group">
                                        <label for="exampleProductsType1">Pizza ingredients 5</label>
                                        <select class="form-control" id="recipeTypeId" name="recipeTypeId">
                                            <option value="0">--Choose ingredients of pizza--</option>
                                            @foreach($listIngredientTypes as $key => $ingredientTypes)
                                                <option value="{{ $ingredientTypes->id }}">{{ $ingredientTypes->ingredients }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleProductsType1"> name of recipe 5</label>
                                        <select class="form-control" id="recipeTypeId" name="recipeId">
                                            <option value="0">--Choose ingredients of pizza--</option>
                                            @foreach($listIngredients as $key => $ingredients)
                                                <option value="{{ $ingredients->id }}">{{ $ingredients->nameOfRecipes }}</option>
                                            @endforeach
                                        </select>
                                    </div>



                                    <div class="form-group">
                                        <input type="submit" value="Send Custom" class="btn btn-primary py-3 px-5">
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </section>



            </div>

        </section>

        </div>
    </section>
@endsection
