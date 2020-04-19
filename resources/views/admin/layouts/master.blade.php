<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <base href="{{asset(' ')}}">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My admin| @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="admin/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">

    <link rel="stylesheet" href="admin/css/summernote.css">

    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="admin/css/bootstrap.min.css">

    <link rel="stylesheet" href="admin/css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/animate.css">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="admin/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/normalize.css">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/c3.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="admin/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="admin/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="admin/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body class="materialdesign">
<div class="wrapper-pro">




    @include('admin.layouts.sidebar')
    @yield('content')

        @include('admin.layouts.header')


    @include('admin.layouts.footer')


</div>


<script src="admin/js/summernote.min.js"></script>
<script src="admin/js/summernote-active.js"></script>


<script src="admin/js/vendor/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="admin/js/bootstrap.min.js"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="admin/js/jquery.meanmenu.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="admin/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- sticky JS
    ============================================ -->
<script src="admin/js/jquery.sticky.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="admin/js/jquery.scrollUp.min.js"></script>
<!-- counterup JS
    ============================================ -->
<script src="admin/js/counterup/jquery.counterup.min.js"></script>
<script src="admin/js/counterup/waypoints.min.js"></script>
<script src="admin/js/counterup/counterup-active.js"></script>
<!-- peity JS

    ============================================ -->
<script src="admin/js/peity/jquery.peity.min.js"></script>
<script src="admin/js/peity/peity-active.js"></script>
<!-- sparkline JS
    ============================================ -->
<script src="admin/js/sparkline/jquery.sparkline.min.js"></script>
<script src="admin/js/sparkline/sparkline-active.js"></script>
<!-- flot JS
    ============================================ -->
<script src="admin/js/flot/Chart.min.js"></script>
<script src="admin/js/flot/flot-active.js"></script>
<!-- map JS
    ============================================ -->
<script src="admin/js/map/raphael.min.js"></script>
<script src="admin/js/map/jquery.mapael.js"></script>
<script src="admin/js/map/france_departments.js"></script>
<script src="admin/js/map/world_countries.js"></script>
<script src="admin/js/map/usa_states.js"></script>
<script src="admin/js/map/map-active.js"></script>
<!-- data table JS
    ============================================ -->
<script src="admin/js/data-table/bootstrap-table.js"></script>
<script src="admin/js/data-table/tableExport.js"></script>
<script src="admin/js/data-table/data-table-active.js"></script>
<script src="admin/js/data-table/bootstrap-table-editable.js"></script>
<script src="admin/js/data-table/bootstrap-editable.js"></script>
<script src="admin/js/data-table/bootstrap-table-resizable.js"></script>
<script src="admin/js/data-table/colResizable-1.5.source.js"></script>
<script src="admin/js/data-table/bootstrap-table-export.js"></script>

<!-- main JS
    ============================================ -->
<script src="admin/js/main.js"></script>
</body>

</html>
