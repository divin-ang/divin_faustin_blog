@extends('layouts/main')

@section('content')

   
   
    
    <div class="accueil_article">
    <h1 class="home_header">Articles récents  </h1>
    
    <ul  class= "home-articles">
    @foreach ( $posts as $post )

    
        
     <li class= "home-articles" > <a   href="{{ url('http://127.0.0.1:8000/'.$post->post_name) }}" >{{$post->post_title}}</a></li>
     
     
    
        
      
    
    @endforeach
</div>
    </ul>

@endsection