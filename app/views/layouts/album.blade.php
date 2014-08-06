<!doctype html>
<html>
    <head>
           <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
        {{ HTML::script('js/jquery.prettyPhoto.js') }}
        {{ HTML::style('css/prettyPhoto.css'); }} 
        <style type="text/css" media="screen">
            * { margin: 0; padding: 0; }



            h1 { font-family: Georgia; font-style: italic; margin-bottom: 10px; }

            h2 {
                font-family: Georgia;
                font-style: italic;
                margin: 25px 0 5px 0;
            }

            p { font-size: 1.2em; }

            ul li { display: inline; }

            .wide {
                border-bottom: 1px #000 solid;
                width: 4000px;
            }

            .fleft { float: left; margin: 0 20px 0 0; }

            .cboth { clear: both; }

            #main {
                background: #fff;
                margin: 0 auto;
                padding: 30px;
                width: 1000px;
            }
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

        <div class="container" >

            @if (Session::has('message'))
            <div class="flash alert">
                <p>{{ Session::get('message') }}</p>
            </div>
            @endif

            @yield('main')
        </div>




        <div class="span5 offset3">  @yield('col-md-4') </div>


        <div class=".col-md-8">  @yield('posts') </div>









        <script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    $("area[rel^='prettyPhoto']").prettyPhoto();

    $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal', theme: 'light_square', slideshow: 9000, autoplay_slideshow: true});
    $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'fast', slideshow: 10000, hideflash: true});

    $("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
        custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
        changepicturecallback: function() {
            initialize();
        }
    });

    $("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
        custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
        changepicturecallback: function() {
            _bsap.exec();
        }
    });
});
        </script>

    </body>

</html>