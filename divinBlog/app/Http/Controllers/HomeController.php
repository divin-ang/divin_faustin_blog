<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class HomeController extends Controller
{
    //
    function index()
    {
        $myposts = \App\Post::all(); 
        return view('welcome',array(
            'posts' => $myposts
        ));
    }

   
}
