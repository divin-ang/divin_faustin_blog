@extends('../layouts/main')

@section('content')

<ul class="list_articles">

<div class="articles">

    @foreach ( $posts as $post )

    
        
     <li  class ="articles-liste"> <a  class ="articles-liste" href="{{ url('http://127.0.0.1:8000/'.$post->post_name) }} " title="cliquez pour lire l'article">{{$post->post_title}}</a></li>
     

        
      
    
    @endforeach
    </ul>
    </div>
    
@endsection