@extends('layouts.album')
@section('main')
<!DOCTYPE html>
<html>
    <head>
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




        <div id="main">
            <ul class="gallery clearfix">
                @foreach ($results as $result)
                <li><a href="uploads/{{$result->image}}" rel="prettyPhoto[gallery1]"><img src="uploads/{{ $result->image}}" width="160" height="160" alt="{{ $result->title}}" /></a></li>
                @endforeach
            </ul> 


            @if ($errors->any())
            <ul>
                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
            </ul>
            @endif
            @stop 