<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
   public function show($post_name) {
      //  $post = \App\Post::where('post_name',$post_name); //get first post with post_nam == $post_name
        $user_name=\App\User::where('id',$post['user_id']);
      
        return view('sigle',array( //Pass the post to the view
            'posts' => $post,
            'user'=>$user_name
            
            
        ));
     }
     
   
    
}
