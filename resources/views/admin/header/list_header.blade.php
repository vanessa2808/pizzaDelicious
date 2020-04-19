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
                                        <li><span class="bread-blod">add_header</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <div class="static-table-area mg-b-15">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sparkline8-list shadow-reset">
                                        <div class="sparkline8-hd">
                                            <div class="main-sparkline8-hd">
                                                <h1>List Header Home</h1>
                                                <div class="sparkline8-outline-icon">
                                                    <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                    <span><i class="fa fa-wrench"></i></span>
                                                    <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sparkline8-graph">
                                            <div class="static-table-list">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Image1</th>
                                                        <th>title 1_1</th>
                                                        <th>title 1_2</th>
                                                        <th>title 1_3</th>
                                                        <th>Image2</th>
                                                        <th>title 2_1</th>
                                                        <th>title 2_2</th>
                                                        <th>title 2_3</th>
                                                        <th>Image3</th>
                                                        <th>title 3_1</th>
                                                        <th>title 3_2</th>
                                                        <th>title 3_3</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($listHeader as $key => $header)
                                                        <tr>
                                                            <td>{{$key +1}}</td>
                                                            <td> <img src="{{ asset($header->image1)}}" style="width: auto; height: auto;max-width: 50px;max-height: 50px"></td>
                                                            <td>{{$header->title1_1}}</td>

                                                            <td>{{$header->title1_2}}</td>

                                                            <td>{{$header->title1_3}}</td>
                                                            <td> <img src="{{ asset($header->image2)}}" style="width: auto; height: auto;max-width: 50px;max-height: 50px"></td>
                                                            <td>{{$header->title2_1}}</td>

                                                            <td>{{$header->title2_2}}</td>

                                                            <td>{{$header->title2_3}}</td>
                                                            <td> <img src="{{ asset($header->image3)}}" style="width: auto; height: auto;max-width: 50px;max-height: 50px"></td>
                                                            <td>{{$header->title3_1}}</td>

                                                            <td>{{$header->title3_2}}</td>

                                                            <td>{{$header->title3_3}}</td>
                                                            <td>
                                                                <a href="{{route('admin.header.edit_header',['id'=>$header->id])}}" class="btn btn-primary rounded-circle ml-3"><i class="fas fa-pen text-white">Edit</i>
                                                                </a>
                                                                <a href="{{route('admin.header.deleHeader',['id'=>$header->id])}}" class="btn btn-danger rounded-circle ml-3"><i class="fas fa-trash-alt text-white">delete</i>
                                                                </a>

                                                            </td>


                                                        </tr>
                                                    @endforeach

                                                    </tbody>
                                                </table>
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



