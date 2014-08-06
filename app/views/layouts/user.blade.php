<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet"> 

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
        {{ HTML::script('js/jquery.prettyPhoto.js') }}
        {{ HTML::style('css/prettyPhoto.css'); }} 
        

        <!---album_create_blade.php--->
        <script type="text/javascript" src="http://xoxco.com/projects/code/tagsinput/jquery.tagsinput.js"></script> 
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  
        {{ HTML::script('js/jquery.imgareaselect.pack.js') }}
        {{ HTML::script('js/script.js') }}
        {{ HTML::style('css/imgareaselect-animated.css'); }} 


        <!--<link rel="stylesheet" type="text/css" href="http://xoxco.com/projects/code/tagsinput/jquery.tagsinput.css" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <script type="text/javascript" src="http://xoxco.com/projects/code/tagsinput/jquery.tagsinput.js"></script>
        <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js'></script>-->


        <!-----end album_create_blade.php-->
        <style type="text/css" media="screen">
            table form { margin-bottom: 0; }
            form ul { margin-left: 0; list-style: none; }
            .error { color: red; font-style: italic; }
            body { padding-top: 20px; }
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
            img#uploadPreview{
                border: 0;
                border-radius: 3px;
                -webkit-box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, .27);
                box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, .27);
                margin-bottom: 30px;
                overflow: hidden;
            }
            input[type="submit"]{
                border-radius: 10px;
                background-color: #61B3DE;
                border: 0;
                color: white;
                font-weight: bold;
                font-style: italic;
                padding: 6px 15px 5px;
                cursor: pointer;
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





   
        
        
        
        <!--tags-->
        <script type="text/javascript">

    function onAddTag(tag) {
        alert("Added a tag: " + tag);
    }
    function onRemoveTag(tag) {
        alert("Removed a tag: " + tag);
    }

    function onChangeTag(input, tag) {
        alert("Changed a tag: " + tag);
    }

    $(function() {

        $('#tags_1').tagsInput({width: 'auto'});
        $('#tags_2').tagsInput({
            width: 'auto',
            onChange: function(elem, elem_tags)
            {
                var languages = ['php', 'ruby', 'javascript'];
                $('.tag', elem_tags).each(function()
                {
                    if ($(this).text().search(new RegExp('\\b(' + languages.join('|') + ')\\b')) >= 0)
                        $(this).css('background-color', 'yellow');
                });
            }
        });
        $('#tags_3').tagsInput({
            width: 'auto',
            //autocomplete_url:'test/fake_plaintext_endpoint.html' //jquery.autocomplete (not jquery ui)
            autocomplete_url: 'test/fake_json_endpoint.html' // jquery ui autocomplete requires a json endpoint
        });


// Uncomment this line to see the callback functions in action
//			$('input.tags').tagsInput({onAddTag:onAddTag,onRemoveTag:onRemoveTag,onChange: onChangeTag});		

// Uncomment this line to see an input with no interface for adding new tags.
//			$('input.tags').tagsInput({interactive:false});
    });

</script>

    </body>

</html>