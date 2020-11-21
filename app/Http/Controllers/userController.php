<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;


class userController extends Controller
{
    function login(Request $req)
    {
    //  return $req->input();
    $user = User::where(['email'=>$req->email])->first();
    if(!$user || !Hash::check($req->password,$user->password))
    {
        return "username and password not matched";
    }
    else 
    {
        $req->session()->put('user',$user);
        return redirect('/');
    }
    }
    function register(Request $req)
    {
        $user= new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect("/login");


    // }
    // function getData($name = null)
    // {

    //      return $name?User::find($name):User::all();

 }


    
}
