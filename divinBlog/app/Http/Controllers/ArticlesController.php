<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    function article()
    {
      



        $myposts = \App\Post::all(); 
        return view('articles',array(
            'posts' => $myposts
        ));
    }
    
    public function show($post_name) {
        $post = \App\Post::where('post_name',$post_name)->first(); //get first post with post_nam == $post_name
        $user_name=\App\User::where('id',$post['user_id']);
      
        return view('sigle',array( //Pass the post to the view
            'posts' => $post,
            'user'=>$user_name
            
            
        ));
     }
     }
     
    

