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


    <link rel="shortcut icon" href="checkout/img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="">
    <!--Font Awesome-->
    <link rel="stylesheet" href="checkout/dist/font-awesome/css/font-awesome.min.css" />
    <!-- CustomPizza CSS -->
    <link rel="stylesheet" type="text/css" href="checkout/css/main.min.css">



</head>

<body>

@include('page.layouts.header')
@yield('content')



<!-- loader -->

<script src="checkout/dist/jquery/jquery.min.js"></script>
<script src="checkout/dist/popper/popper.min.js" integrity=""></script>
<script src="checkout/dist/bootstrap/js/bootstrap.min.js"></script>
<script src="checkout/js/main.min.js"></script>
</body>
</html>
