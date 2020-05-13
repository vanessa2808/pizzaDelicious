<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pizza Delicious</title>
    <meta charset="utf-8">
    <base href="{{asset(' ')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="page/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="page/css/animate.css">

    <link rel="stylesheet" href="page/css/owl.carousel.min.css">
    <link rel="stylesheet" href="page/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="page/css/magnific-popup.css">

    <link rel="stylesheet" href="page/css/aos.css">

    <link rel="stylesheet" href="page/css/ionicons.min.css">

    <link rel="stylesheet" href="page/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="page/css/jquery.timepicker.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <link rel="stylesheet" href="page/css/flaticon.css">
    <link rel="stylesheet" href="page/css/icomoon.css">
    <link rel="stylesheet" href="page/css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <style type="text/css">
        body {
            font-family: 'open sans';
            overflow-x: hidden; }

        img {
            max-width: 100%; }

        .preview {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column; }
        @media screen and (max-width: 996px) {
            .preview {
                margin-bottom: 20px; } }

        .preview-pic {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1; }

        .preview-thumbnail.nav-tabs {
            border: none;
            margin-top: 15px; }
        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%; }
        .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            display: block; }
        .preview-thumbnail.nav-tabs li a {
            padding: 0;
            margin: 0; }
        .preview-thumbnail.nav-tabs li:last-of-type {
            margin-right: 0; }

        .tab-content {
            overflow: hidden; }
        .tab-content img {
            width: 100%;
            -webkit-animation-name: opacity;
            animation-name: opacity;
            -webkit-animation-duration: .3s;
            animation-duration: .3s; }

        .card {
            margin-top: 50px;
            background: #eee;
            padding: 3em;
            line-height: 1.5em; }

        @media screen and (min-width: 997px) {
            .wrapper {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex; } }

        .details {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column; }

        .colors {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1; }

        .product-title, .price, .sizes, .colors {
            text-transform: UPPERCASE;
            font-weight: bold; }

        .checked, .price span {
            color: #ff9f1a; }

        .product-title, .rating, .product-description, .price, .vote, .sizes {
            margin-bottom: 15px; }

        .product-title {
            margin-top: 0; }

        .size {
            margin-right: 10px; }
        .size:first-of-type {
            margin-left: 40px; }

        .color {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            height: 2em;
            width: 2em;
            border-radius: 2px; }
        .color:first-of-type {
            margin-left: 20px; }

        .add-to-cart, .like {
            background: #ff9f1a;
            padding: 1.2em 1.5em;
            border: none;
            text-transform: UPPERCASE;
            font-weight: bold;
            color: #fff;
            -webkit-transition: background .3s ease;
            transition: background .3s ease; }
        .add-to-cart:hover, .like:hover {
            background: #b36800;
            color: #fff; }

        .not-available {
            text-align: center;
            line-height: 2em; }
        .not-available:before {
            font-family: fontawesome;
            content: "\f00d";
            color: #fff; }

        .orange {
            background: #ff9f1a; }

        .green {
            background: #85ad00; }

        .blue {
            background: #0076ad; }

        .tooltip-inner {
            padding: 1.3em; }

        @-webkit-keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3); }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1); } }

        @keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3); }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1); } }
        .card-white  .card-heading {
            color: #333;
            background-color: #fff;
            border-color: #ddd;
            border: 1px solid #dddddd;
        }
        .card-white  .card-footer {
            background-color: #fff;
            border-color: #ddd;
        }
        .card-white .h5 {
            font-size:14px;
        //font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        }
        .card-white .time {
            font-size:12px;
        //font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        }
        .post .post-heading {
            height: 95px;
            padding: 20px 15px;
        }
        .post .post-heading .avatar {
            width: 60px;
            height: 60px;
            display: block;
            margin-right: 15px;
        }
        .post .post-heading .meta .title {
            margin-bottom: 0;
        }
        .post .post-heading .meta .title a {
            color: black;
        }
        .post .post-heading .meta .title a:hover {
            color: #aaaaaa;
        }
        .post .post-heading .meta .time {
            margin-top: 8px;
            color: #999;
        }
        .post .post-image .image {
            width: 100%;
            height: auto;
        }
        .post .post-description {
            padding: 15px;
        }
        .post .post-description p {
            font-size: 14px;
        }
        .post .post-description .stats {
            margin-top: 20px;
        }
        .post .post-description .stats .stat-item {
            display: inline-block;
            margin-right: 15px;
        }
        .post .post-description .stats .stat-item .icon {
            margin-right: 8px;
        }
        .post .post-footer {
            border-top: 1px solid #ddd;
            padding: 15px;
        }
        .post .post-footer .input-group-addon a {
            color: #454545;
        }
        .post .post-footer .comments-list {
            padding: 0;
            margin-top: 20px;
            list-style-type: none;
        }
        .post .post-footer .comments-list .comment {
            display: block;
            width: 100%;
            margin: 20px 0;
        }
        .post .post-footer .comments-list .comment .avatar {
            width: 35px;
            height: 35px;
        }
        .post .post-footer .comments-list .comment .comment-heading {
            display: block;
            width: 100%;
        }
        .post .post-footer .comments-list .comment .comment-heading .user {
            font-size: 14px;
            font-weight: bold;
            display: inline;
            margin-top: 0;
            margin-right: 10px;
        }
        .post .post-footer .comments-list .comment .comment-heading .time {
            font-size: 12px;
            color: #aaa;
            margin-top: 0;
            display: inline;
        }
        .post .post-footer .comments-list .comment .comment-body {
            margin-left: 50px;
        }
        .post .post-footer .comments-list .comment > .comments-list {
            margin-left: 50px;
        }

    </style>
    <style>
        .pb-cmnt-container {
            font-family: Lato;
            margin-top: 100px;
        }

        .pb-cmnt-textarea {
            resize: none;
            padding: 20px;
            height: 130px;
            width: 100%;
            border: 1px solid #F2F2F2;
        }

    </style>
    <style>
        body {
            margin-top: 20px;
        }
    </style>

</head>

<body>

@include('page.layouts.header')
@yield('content')
@include('page.layouts.footer')



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="page/js/jquery.min.js"></script>
<script src="page/js/jquery-migrate-3.0.1.min.js"></script>
<script src="page/js/popper.min.js"></script>
<script src="page/js/bootstrap.min.js"></script>
<script src="page/js/jquery.easing.1.3.js"></script>
<script src="page/js/jquery.waypoints.min.js"></script>
<script src="page/js/jquery.stellar.min.js"></script>
<script src="page/js/owl.carousel.min.js"></script>
<script src="page/js/jquery.magnific-popup.min.js"></script>
<script src="page/js/aos.js"></script>
<script src="page/js/jquery.animateNumber.min.js"></script>
<script src="page/js/bootstrap-datepicker.js"></script>
<script src="page/js/jquery.timepicker.min.js"></script>
<script src="page/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="page/js/google-map.js"></script>
<script src="page/js/main.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="checkout/dist/jquery/jquery.min.js"></script>
<script src="checkout/dist/popper/popper.min.js" integrity=""></script>
<script src="checkout/dist/bootstrap/js/bootstrap.min.js"></script>
<script src="checkout/js/main.min.js"></script>

</body>
</html>
