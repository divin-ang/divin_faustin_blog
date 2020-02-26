<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class HomeController extends Controller
{
    //afficher les 3 acticles les plus recents dans la page d'accueil
    function index()
    {
        $myposts = \App\Post::orderBy('post_date', 'desc')->take(3)->get();; 
        return view('welcome',array(
            'posts' => $myposts
        ));
    }

   
}
