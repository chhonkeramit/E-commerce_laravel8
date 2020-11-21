<?php 
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user'))
{
    $total = ProductController::cartItem();

}

?>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-between">
        <!-- Brand -->
     <a class="navbar-brand" href="/">Home</a>

        <a href="/myorders">My Order</a>
<form action="search" class="navbar-form">
    <input type="text" name="search" placeholder="search">
</form>

        <ul class="navbar-nav">
           
            <li class="nav-item">
                <a class="nav-link" href="/cartlist">Cart({{$total}})</a>
            </li>
        
        @if(Session::has('user'))
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{Session::get('user')['name']}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/logout">Logout</a>
        </div>
      </li>
      @else
      
      <a class="nav-link" href="login">Login</a>
      <a class="nav-link" href="register">Register</a>

      @endif

        </ul>

    </nav>
    <br>


