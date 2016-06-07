
@extends('layouts.master')

@section('content')
<section class="create_form container">
    <h1>Create a new blog post!</h1>
    
    {{ Form::open(array('action' => 'PostsController@store')) }}
        <div class ="form-group">
            <!--the error message saying you must put in a title before you submit a new post  -->
            {{ $errors->first('title', '<span class="help-block">:message</span>') }}
            
            <!-- <label for="title">Title:</label> -->
            <!-- label for title bar -->
            {{ Form::label('title', 'Title:') }}
            
            <!-- input field for title -->
            {{ Form::text('title', Input::old('title'), array('class' => 'form-control other-class another', 'placeholder' => 'Blog Post Title')) }}       
        </div>        
        <div class="form-group">
            {{ Form::label('content', 'Post:') }}
            <!--the error message saying you must put in content before you submit a new post  -->
            {{ $errors->first('content', '<span class="help-block">:message</span>') }}
        </div>
        <div> 
            {{ Form::textarea('content', Input::old('content'), array('class' => 'form-control other-class another', 'placeholder' => 'Content', 'rows' => '20', 'cols' => '30')) }}
        </div>    
            <label for="img">Upload Image</label> 
            <input placeholder="image" id="img" name="img" type="file" class="" value="{{{ Input::old('img') }}}">
        <div>
            <input class="btn btn-block btn-primary" type="submit">
        </div>
    {{ Form::close() }}
</section>
@stop

@section('bottom-script')
<script>tinymce.init({ selector:'textarea' });</script>
@stop

        
  