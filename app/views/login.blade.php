@extends('layouts.user')
@section('main')
<p style="font-size: 18px;">{{ link_to_route('users.create', 'Sign Up') }}</p>
<br>
{{ Form::open(array('url'=>'login', 'style'=>'width:400px;')) }}
<h2 class="form-signin-heading">Please Login</h2>

{{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
{{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}

{{ Form::submit('Login', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}



@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop