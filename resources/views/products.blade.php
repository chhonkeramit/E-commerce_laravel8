@extends('master')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');

    *{
        padding: 0;margin: 0;box-sizing: border-box;
    }
    .container{
        /*height: 100vh;*/
        width: 100%;
        background-image: url('/images/background.png');
        background-size: cover;
        position: relative;
        background-position: center; 
        zoom:1.44;
        margin-top: -16px;
    }
    .navbar{
        /*width: 100%;*/
        /*height: 15vh;*/
        /*margin: auto;*/
        display: flex;
        align-items: center;
        justify-content: space-around;
    }
    .logo{
        width: 160px;
        cursor: pointer;
    }
    .cart{
        width: 40px;
        cursor: pointer;
    }
    /*nav ul{
        display: flex;
        list-style: none;
        margin-top: 25px;
    }*/

    a{
    margin: 0px 20px;
    color: #555;
    text-decoration: none;
}

.content h1{
    font-size: 60px;
    font-weight: 100;
    margin-top: 24px;
    margin-bottom: 15px;
    color: #232d60;
    font-family: 'Lobster', cursive;
}
.content p{
    font-size: 20px;
    color: #6a7199;
}
.content{
    margin-left:10%;
    margin-top:10%;
}

.content .btn{
    display: inline-block;
    background: linear-gradient(45deg,#87adfe,#ff77cd);
    border-radius: 6px;
    padding: 10px 20px;
    box-sizing: border-box;
    text-decoration: none;
    color: #fff;
    /*box-shadow: 3px 8px 22px rgba(94,28,68,0.15);*/

}
.arrow-icons {
    margin-top:40px;
    display: flex; }

.arrow-icons img{
    width:40px;
    margin-right: 25px; }
.feature-img{
    height: 90%;
    position: absolute;
    right: 160px;
    bottom: 0px;
}

</style>

    
</head>

<body>

<div class="container">
    <div class="navbar">
        <img src="{{url('/images/logo.png')}}" class="logo">
        <!-- <nav>
            <ul>
                <li><a href="">home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Collection</a></li>
                <li><a href="">Category</a></li>
                <img style="margin-top: -10px;" src="{{url('/images/cart.png')}}" class="cart">
            </ul>
        </nav> -->
    </div>

    <div class="content">
        <a href="" class="btn">2020 Collections</a>
        <h1>You Should Always<br>Feel Preety</h1>
        <p>Clothes that are sure to heatg up your winter.</p>

        <div class="arrow-icons">
            <a href="#"><img src="{{url('/images/back-arrow.png')}}"></a>
            <a href="#"><img src="{{url('/images/next-arrow.png')}}"></a>
        </div>

    </div>

                <img src="{{url('/images/img.png')}}" class="feature-img">

</div>






    <div class="">
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            @foreach($products as $item)
            <div class="carousel-item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                    <img class="slider-img" src="{{$item['gallery']}}">
                <div class="carousel-caption text-right text-dark">
                    <h3 style="font-size: 50px">{{$item['name']}}</h3>
                    <p style="font-family: 'Lobster', cursive;font-size: 25px;">{{$item['description']}}</p>
                </div>
                </a>

            </div>
            @endforeach

        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

        <h1>Trending Products</h1>
       <div>
       <div class="trendingdiv badge-light">
            @foreach($products as $item)
            <div class="trending">
           <a href="detail/{{$item['id']}}">

                <img class="trending-img" src="{{$item['gallery']}}">
                <div class="">
                    <h3>{{$item['name']}}</h3>
                    
                </div>
            </a>
            </div>
            @endforeach
        </div> 
    </div>
    </div>

</body>

</html>


@endsection