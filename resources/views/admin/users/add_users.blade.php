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
                                    <li><span class="bread-blod">Accordion</span>
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
                <div class="sparkline16-list shadow-reset mg-t-30">
                    <div class="sparkline16-hd">
                        <div class="main-sparkline16-hd">
                            <h1>Data picker</h1>
                            <div class="sparkline16-outline-icon">
                                <span class="sparkline16-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span><i class="fa fa-wrench"></i></span>
                                <span class="sparkline16-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline16-graph">
                        <div class="date-picker-inner">
                            <div class="form-group data-custon-pick" id="data_1">
                                <label>Simple data input format</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" class="form-control" value="10/04/2018">
                                </div>
                            </div>
                            <div class="form-group data-custon-pick" id="data_2">
                                <label>One Year view</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" class="form-control" value="08/09/2018">
                                </div>
                            </div>
                            <div class="form-group data-custon-pick" id="data_3">
                                <label>Decade view</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" class="form-control" value="10/11/2013">
                                </div>
                            </div>
                            <div class="form-group data-custon-pick" id="data_4">
                                <label>Month select</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" class="form-control" value="07/01/2018">
                                </div>
                            </div>
                            <div class="form-group data-custon-pick data-custom-mg" id="data_5">
                                <label>Range select</label>
                                <div class="input-daterange input-group" id="datepicker">
                                    <input type="text" class="form-control" name="start" value="05/14/2018" />
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="form-control" name="end" value="05/22/2018" />
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



