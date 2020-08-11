@section('content')
    @extends('admin.layouts.master')
@section('title', 'admin')

<div class="wrapper-pro">

    <div class="content-inner-all">

<div class="income-order-visit-user-area">
    <h1>View statistic </h1>
    <h1 style="text-align: center; color: darkred; font-weight: bold; padding-top: 30px">View statistic </h1>


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                    <div class="income-title">
                        <div class="main-income-head">
                            <h2>Income</h2>
                            <div class="main-income-phara">
                                <p>Monthly</p>
                            </div>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span>$</span><span class="counter">60888200</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline1"></span>
                            </div>
                        </div>
                        <div class="income-range">
                            <p>Total income</p>
                            <span class="income-percentange"><span class="counter">98</span>% <i class="fa fa-bolt"></i>
                                        </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="income-dashone-total orders-monthly shadow-reset nt-mg-b-30">
                    <div class="income-title">
                        <div class="main-income-head">
                            <h2>Orders</h2>
                            <div class="main-income-phara order-cl">
                                <p>Annual</p>
                            </div>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter">72320</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline6"></span>
                            </div>
                        </div>
                        <div class="income-range order-cl">
                            <p>New Orders</p>
                            <span class="income-percentange"><span class="counter">66</span>% <i class="fa fa-level-up"></i>
                                        </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="income-dashone-total visitor-monthly shadow-reset nt-mg-b-30">
                    <div class="income-title">
                        <div class="main-income-head">
                            <h2>customers</h2>
                            <div class="main-income-phara visitor-cl">
                                <p>Today</p>
                            </div>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter">88820</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline2"></span>
                            </div>
                        </div>
                        <div class="income-range visitor-cl">
                            <p>New Visitor</p>
                            <span class="income-percentange"><span class="counter">55</span>% <i class="fa fa-level-up"></i>
                                        </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="income-dashone-total user-monthly shadow-reset nt-mg-b-30">
                    <div class="income-title">
                        <div class="main-income-head">
                            <h2>Ingredients</h2>
                            <div class="main-income-phara low-value-cl">
                                <p>Low Value</p>
                            </div>
                        </div>
                    </div>
                    <div class="income-dashone-pro">
                        <div class="income-rate-total">
                            <div class="price-adminpro-rate">
                                <h3><span class="counter">88200</span></h3>
                            </div>
                            <div class="price-graph">
                                <span id="sparkline5"></span>
                            </div>
                        </div>
                        <div class="income-range low-value-cl">
                            <p>In first month</p>
                            <span class="income-percentange"><span class="counter">33</span>% <i class="fa fa-level-down"></i>
                                        </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- income order visit user End -->
<div class="dashtwo-order-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="analytics-adminpro-wrap ant-res-b-30 shadow-reset">
                    <div class="skill-content-3 95-server-down analytics-adminpro">
                        <div class="skill">
                            <div class="progress">
                                <div class="lead-content">
                                    <h3><span class="counter">95</span>%</h3>
                                    <p>Server down 4:32 pm</p>
                                </div>
                                <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 95%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>95%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="analytics-adminpro-wrap ant-res-b-30 shadow-reset">
                    <div class="skill-content-3 85-server-down analytics-adminpro analytics-adminpro4">
                        <div class="skill">
                            <div class="progress">
                                <div class="lead-content">
                                    <h3>85%</h3>
                                    <p>Server down 8:32 pm</p>
                                </div>
                                <div class="progress-bar wow fadeInLeft" data-progress="85%" style="width: 85%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>85%</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="analytics-adminpro-wrap ant-res-b-30 ant-res-b-nt-30 shadow-reset">
                    <div class="skill-content-3 80-server-down analytics-adminpro analytics-adminpro3">
                        <div class="skill">
                            <div class="progress progress-bt">
                                <div class="lead-content">
                                    <h3>80%</h3>
                                    <p>Server down 10:32 pm</p>
                                </div>
                                <div class="progress-bar wow fadeInLeft" data-progress="80%" style="width: 80%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>80%</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="analytics-adminpro-wrap shadow-reset">
                    <div class="skill-content-3 90-server-down analytics-adminpro analytics-adminpro2">
                        <div class="skill">
                            <div class="progress progress-bt">
                                <div class="lead-content">
                                    <h3>93%</h3>
                                    <p>Server down 10:32 pm</p>
                                </div>
                                <div class="progress-bar wow fadeInLeft" data-progress="93%" style="width: 93%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>93%</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="analytics-sparkle-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line ant-res-b-30 shadow-reset">
                    <div class="analytics-content">
                        <h5>Visits in last 24h</h5>
                        <h2 class="counter">498009</h2>
                        <div id="sparkline22"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line ant-res-b-30 shadow-reset">
                    <div class="analytics-content">
                        <h5>Visits week</h5>
                        <h2 class="counter">8855000</h2>
                        <div id="sparkline23"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line ant-res-b-30 ant-res-b-nt-30 shadow-reset">
                    <div class="analytics-content">
                        <h5>Last month</h5>
                        <h2 class="counter">99580900</h2>
                        <div id="sparkline24"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line shadow-reset">
                    <div class="analytics-content">
                        <h5>Avarage time</h5>
                        <h2>00:06:40</h2>
                        <div id="sparkline25"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="analysis-rounded-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="analytics-rounded ant-res-b-30 shadow-reset">
                    <div class="analytics-rounded-content">
                        <h5>Percentage distribution</h5>
                        <h2><span class="counter">60</span>/20</h2>
                        <div class="text-center">
                            <div id="sparkline51"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="analytics-rounded ant-res-b-30 shadow-reset">
                    <div class="analytics-rounded-content">
                        <h5>Percentage division</h5>
                        <h2><span class="counter">150</span>/<span class="counter">54</span></h2>
                        <div class="text-center">
                            <div id="sparkline52"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="analytics-rounded ant-res-b-30 ant-res-b2-30 shadow-reset">
                    <div class="analytics-rounded-content">
                        <h5>Percentage Counting</h5>
                        <h2>5685/211</h2>
                        <div class="text-center">
                            <div id="sparkline53"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="analytics-rounded shadow-reset">
                    <div class="analytics-rounded-content">
                        <h5>Percentage Sequence</h5>
                        <h2>2400/32</h2>
                        <div class="text-center">
                            <div id="sparkline54"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="analysis-progrebar-area mg-t-30 materialdesign-alert">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="analysis-progrebar ant-res-b-30 ant-res-b-nt-30 shadow-reset">
                    <div class="analysis-progrebar-content">
                        <h5>Usage</h5>
                        <h2><span class="counter">90</span>%</h2>
                        <div class="progress progress-mini">
                            <div style="width: 68%;" class="progress-bar 90-progress-bar"></div>
                        </div>
                        <div class="m-t-sm small">
                            <p>Server down since 1:32 pm.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="analysis-progrebar ant-res-b-30 shadow-reset">
                    <div class="analysis-progrebar-content">
                        <h5>Memory</h5>
                        <h2><span class="counter">70</span>%</h2>
                        <div class="progress progress-mini">
                            <div style="width: 78%;" class="progress-bar"></div>
                        </div>
                        <div class="m-t-sm small">
                            <p>Server down since 12:32 pm.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="analysis-progrebar ant-res-b-30 ant-res-b-nt-30 shadow-reset">
                    <div class="analysis-progrebar-content">
                        <h5>Data</h5>
                        <h2><span class="counter">50</span>%</h2>
                        <div class="progress progress-mini">
                            <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                        </div>
                        <div class="m-t-sm small">
                            <p>Server down since 8:32 pm.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="analysis-progrebar shadow-reset">
                    <div class="analysis-progrebar-content">
                        <h5>Space</h5>
                        <h2><span class="counter">40</span>%</h2>
                        <div class="progress progress-mini">
                            <div style="width: 28%;" class="progress-bar progress-bar-danger"></div>
                        </div>
                        <div class="m-t-sm small">
                            <p>Server down since 5:32 pm.</p>
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
