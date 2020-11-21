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
    
</head>

<body>
    <div class="bg-light">
    <div id="demo" class="carousel slide" data-ride="carousel">

   
       <div class="container col-sm-4">
           
           <div class="trendingdiv">
            @foreach($products as $item)
            <div class="trending">
           <a href="detail/{{$item['id']}}">
            <h2 class="text-dark">Search Results</h2>
     <br>
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
    </div>

</body>

</html>




@endsection