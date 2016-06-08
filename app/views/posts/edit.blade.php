@extends('layouts.master')

@section('content')
<section class="create_form container">
    <h1>Post Editor</h1>
    
    {{ Form::model($post, array('action' => array('PostsController@update',$post->id), 'method' => 'PUT')) }}
        <div class ="form-group">
            <!--the error message saying you must put in a title before you submit a new post  -->
            {{ $errors->first('title', '<span class="help-block">:message</span>') }}            
            <!-- label for title bar -->
            {{ Form::label('title', 'Title:') }}
            <!-- input field for title -->
            {{ Form::text('title', null, array('class' => 'form-control other-class another', 'placeholder' => 'Blog Post Title')) }}       
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
    {{ Form::model($post, array('action' => array('PostsController@destroy',$post->id), 'method' => 'DELETE')) }}
        <button id="delete-post-btn" class="btn btn-block btn-danger" type="submit">Delete Post</button>
    {{ Form::close() }}
    <!-- the hidden for for deleting a post using javascript. -->
    <!-- the click listener is on the submit button id delete-post-btn.. -->
    {{ Form::open([
        'action' => ['PostsController@destroy', $post->id],
        'id'     => 'delete-post-form',
        'method' => 'DELETE',
    ]) }}
    {{ Form::close() }}

</section>
@stop
@section('bottom-script')
<script type="text/javascript" src="/js/blog.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
@stop

        
  