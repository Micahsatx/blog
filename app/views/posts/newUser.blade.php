@extends('layouts.master')

@section('content')
<section class="create_form container">
    <h1>Create a Login!</h1>
    
    {{ Form::open(array('action' => 'PostsController@newUser')) }}
        <div class ="form-group">
            <!--the error message saying you must put in a name before you submit a new post  -->
            {{ $errors->first('user', '<span class="help-block">:message</span>') }}
            <!-- label for title bar -->
            {{ Form::label('user', 'Name:') }}
            <!-- input field for name -->
            {{ Form::text('user', Input::old('user'), array('class' => 'form-control other-class another', 'placeholder' => 'Name:')) }} 
        </div>
        <div class ="form-group">
            <!--the error message saying you must put in a email before you submit a new post  -->
            {{ $errors->first('email', '<span class="help-block">:message</span>') }}
            <!-- label for title bar -->
            {{ Form::label('email', 'Email:') }}
            
            <!-- input field for username/email -->
            {{ Form::text('email', Input::old('email'), array('class' => 'form-control other-class another', 'placeholder' => 'Email:')) }}       
        </div>        
        <div class="form-group">
            {{ Form::label('password', 'Password:') }}
            <!--the error message saying you must put in content before you submit a new post  -->
            {{ $errors->first('password', '<span class="help-block">:message</span>') }}
            <!-- input field for password -->
            {{ Form::text('password', Input::old('password'), array('class' => 'form-control other-class another', 'placeholder' => 'Password:')) }}
        </div>
        <div>
            <input class="btn btn-block btn-primary" type="submit">
        </div>
    {{ Form::close() }}
</section>
@stop