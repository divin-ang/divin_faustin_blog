@extends('../layouts/main')

<link rel="stylesheet"  href="{{asset('css\app.css')}}">
@section('content')


   
      <div class ="complete-article" >

      
      <p class="author-article"> Auteur(e)  :  {{$user->name}} </p>
     <li> {{$posts->post_content }}   </li>

       </div>
     
 


    
      
    




   
 



    
@endsection