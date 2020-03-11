@extends('../layouts/main')

<link rel="stylesheet"  href="{{asset('css\app.css')}}">
@section('content')


      <p class="author-article"> Auteur(e)  :  {{$user->name}} </p>
   
      <div class ="complete-article" >
        <li> {{$posts->post_content }}   </li>
     

       </div>
     
 


    
      
    




   
 



    
@endsection