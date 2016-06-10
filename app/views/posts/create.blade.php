{{-- this file is getting put into the master layout.  @sections target where the content is being placed --}}
@extends('layouts.master')

@section('content')
<section class="create_form container">
    <h1>Create a new blog post!</h1>
    <div class= "postsRow">
        {{-- open a form filled with an array of information from the store post controller (the posts!) --}}
        {{ Form::open(array('action' => 'PostsController@store', 'files'=> true)) }}
            <div class ="form-group">
                <!--the error message saying you must put in a title before you submit a new post  -->
                {{ $errors->first('title', '<span class="help-block">:message</span>') }}
                
                <!-- label for title bar.  'title' is the name of the key from the array and 'Title:' is what is actually seen by the user -->
                {{ Form::label('title', 'Title:') }}
                
                <!-- input field for title -->
                {{-- if the user fails to successfully create a post it redirects them back to the same form and autofills in the information that put in.. --}}
                {{ Form::text('title', Input::old('title'), array('class' => 'form-control other-class another', 'placeholder' => 'Blog Post Title')) }}       
            </div>        
            <div class="form-group">
                {{-- name of the key in the array for the posts body is 'content'.  'Posts: is what the user sees as the fields label' --}}
                {{ Form::label('content', 'Post:') }}
                <!--the error message saying you must put in content before you submit a new post  -->
                {{ $errors->first('content', '<span class="help-block">:message</span>') }}
            </div>
            <div> 
                {{-- when failing to create a post it redirects user back to the same form and auto fills in the information they previously typed.  dont forget this is called 'content' and not 'body' --}}
                {{ Form::textarea('content', Input::old('content'), array('class' => 'form-control other-class another', 'placeholder' => 'Content', 'rows' => '20', 'cols' => '30')) }}
            </div> 
                {{-- image upload section of form --}}
                <label for="img">Upload Image</label>
                {{-- again grabbing the same image if the user failed to fill in a field.  NOTE: image is not required to create a post --}}
                <input placeholder="image" id="img" name="img" type="file" class="" value="{{{ Input::old('img') }}}">
            <div>
                <input class="btn btn-block btn-primary" type="submit">
            </div>
        {{ Form::close() }}
    </div>    
</section>
@stop

@section('bottom-script')
{{-- IMPORTANT script that is creates the text markdown editor --}}
<script>tinymce.init({ selector:'textarea' });</script>
@stop

        
  