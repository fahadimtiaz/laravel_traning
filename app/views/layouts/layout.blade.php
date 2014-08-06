<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
     <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet"> 
    
      
        <style>
            table form { margin-bottom: 0; }
            form ul { margin-left: 0; list-style: none; }
            .error { color: red; font-style: italic; }
            body { padding-top: 20px; }
        </style>
    </head>

    <body>
<div class="navbar">
<div class="navbar-inner">
<div class="container">
 
<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>
 
<!-- Be sure to leave the brand out there if you want it shown -->
<a class="brand" href="#">Laravel Traning</a>
 
<!-- Everything you want hidden at 940px or less, place within here -->
<div class="nav-collapse collapse">
    <ul class="nav">
    <li class="">
    <a href="http://localhost/traning/public">Home</a>
    </li>
    <li class="">
    <a href="http://localhost/traning/public/users">Users</a>
    </li>
    <li class="">
    <a href="http://localhost/traning/public/album">Album</a>
    </li>
  <li class="">
    <a href="#">Pages</a>
    </li>
    <li class="">
    <a href="#">Contact Us</a>
    </li>
     <li class="">
    <a href="http://localhost/traning/public/logout">Log Out</a>
    </li>
    </ul>
<!-- .nav, .navbar-search, .navbar-form, etc -->
</div>
 
</div>
</div>
</div>
    </head>
  <body>
    
    <div class="content1">
      
        @yield("content")
     
    </div>
       
        <div class="span5 offset3">  @yield('col-md-4') </div>
             
            
    <div class=".col-md-8">  @yield('posts') </div>
         

    </body>

</html>
  </body>
</html>