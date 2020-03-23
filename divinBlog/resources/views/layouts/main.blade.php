<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Foundation | Welcome</title>
  
  <!-- <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css"> -->
  <link rel="stylesheet"  href="{{asset('css\app.css')}}">
  

</head>

<body>

  <div class="top-bar">
    <div class="top-bar-left">
      <ul class="menu">
        <li class="menu-text">Blog</li>
        <li> <div class="menu-topic"><a href="http://127.0.0.1:8000/">Accueil</a></div></li>
       
        <li> <div class="menu-topic" ><a href="http://127.0.0.1:8000/articles" title="voir la liste complète des articles">Articles</a> </div></li>
        <li> <div class="menu-topic"><a href="http://127.0.0.1:8000/contact" title="envoyer un message">Contact</a></div></li>
        
      </ul>
    </div>
  </div>

  <div class="callout large primary">
    <div class="row_column_text_center">
      <h1 >Bienvenue sur  le  Blog</h1>
      <h2 class="subheader"></h2>
    </div>
  </div>

  <div class="row medium-8 large-7 columns">
 @yield('content')
  </div>

  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
  <script>
    $(document).foundation();
  </script>

</body>

</html>