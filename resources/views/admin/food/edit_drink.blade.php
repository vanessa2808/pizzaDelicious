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
                                        <li><span class="bread-blod">edit food</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sparkline12-list shadow-reset mg-t-30">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Edit food</h1>
                                    <div class="sparkline12-outline-icon">
                                        <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                        <span><i class="fa fa-wrench"></i></span>
                                        <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="basic-login-form-ad">

                                    <div class="row">
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                            <div class="basic-login-inner">
                                                <h3>Edit food</h3>
                                                <form action="{{route('admin.food.edit_pizza',['id'=>$idPizza->id])}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group-inner">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{$idPizza->name}}"/>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="row">

                                                            <label for="exampleInputEmail1">description</label>
                                                            <textarea type="text"  class="ckeditor form-control" id="description"
                                                                      placeholder="Enter description" name="description" ></textarea>
                                                            <div value = "{{$idPizza->description}}"></div>
                                                            <script type="text/javascript" src="{{asset('/ckeditor/ckeditor.js')}}"></script>

                                                            <script>

                                                                CKEDITOR.replace( 'description', {
                                                                    filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',

                                                                } );
                                                            </script>
                                                            @include('ckfinder::setup')
                                                        </div>

                                                    </div>
                                                    <div class="form-group-inner">
                                                        <label>price</label>
                                                        <input type="text" class="form-control" placeholder="Enter name" name="price" value="{{$idPizza->price}}"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">recipe</label>
                                                        <textarea type="text" data-value="{{$idPizza->recipe}}" class="ckeditor form-control" id="recipe"
                                                                  placeholder="Enter description" name="recipe"></textarea>
                                                        <script type="text/javascript" src="{{asset('/ckeditor/ckeditor.js')}}"></script>

                                                        <script>

                                                            CKEDITOR.replace( 'description', {
                                                                filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',

                                                            } );
                                                        </script>
                                                        @include('ckfinder::setup')


                                                    </div>

                                                    <div class="form-group-inner">
                                                        <label>chef</label>
                                                        <input type="text" class="form-control" placeholder="Enter chef" name="chef" value="{{$idPizza->chef}}"/>
                                                    </div>



                                                    <div class="form-group-inner">
                                                        <label>time</label>
                                                        <input type="text" class="form-control" placeholder="Enter time" name="time" value="{{$idPizza->time}}"/>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <label>Image</label>
                                                        <input type="file" class="form-control" placeholder="Enter image" value="{{$idPizza->image}}" name="image" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputStatus1">Status</label>
                                                        <select  value="{{$idPizza->status}}" class="form-control" id="exampleInputStatus1" name="status">
                                                            <option value="0">Hết Hàng</option>
                                                            <option value="1">Còn Hàng</option>
                                                        </select>
                                                    </div>
                                                    @error('status')
                                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                                    @enderror







                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3"></div>
                                                                <div class="col-lg-9">
                                                                    <div class="login-horizental cancel-wp pull-left">
                                                                        <button class="btn btn-white" type="submit">Cancel</button>
                                                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Update </button>
                                                                    </div>
                                                                </div>
                                                            </div>
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



