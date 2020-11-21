<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommerce project</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    img.slider-img {
        height: 400px !important;
    }

    .trending {
        float: left;


    }

    img.trending-img {
        height: 100px;

    }

    .trendingdiv {
        margin: 40px;
        justify-content: space-between;
        display: flex;
    }

    .row {
        margin-right: -748px!important;
    }
</style>

<body>
    @include('header')
    @yield('content')
    @include('footer')

</body>

</html>