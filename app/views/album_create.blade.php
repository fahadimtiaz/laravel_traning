@extends('layouts.user')
@section('main')
<h2 class="form-signin-heading">Create Album</h2>
<div class="wrap">
    <img id="uploadPreview" style="display:none;"/>
    {{ Form::open(array('action' => 'AlbumController@store','files'=>true,'style'=>'width:400px;')) }}
    <input id="uploadImage" type="file" accept="image/jpeg" name="image" />
    <input type="hidden" id="x" name="x" />
    <input type="hidden" id="y" name="y" />
    <input type="hidden" id="w" name="w" />
    <input type="hidden" id="h" name="h" />

    <br><br> 
    {{ Form::text('title', null, array('class'=>'input-block-level', 'placeholder'=>'Title')) }}
    {{ Form::text('tags', null,array('class'=>'input-block-level','id'=>'tags_1', 'placeholder'=>'tags')) }}
    {{ Form::submit('Post', array('class'=>'btn btn-large btn-primary btn-block'))}}
    {{ Form::close() }}
</div>
@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif
@stop 