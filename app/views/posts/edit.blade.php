@extends('layouts.master')

@section('content')
<section class="create_form container">
    <h1>Post Editor</h1>
    {{-- when editing, the form "PUTS/POSTS" to the update method which in turn tells where that information is going.  In short this is telling the server where to "PUT" the submitted form.  Important to note that the postcontroller is called update but the page is /edit.  better naming of post controller function should have been considered --}}
    {{ Form::model($post, array('action' => array('PostsController@update',$post->id), 'method' => 'PUT')) }}
        <div class ="form-group">
            <!--the error message saying you must put in a title before you submit a new post.  -->
            {{ $errors->first('title', '<span class="help-block">:message</span>') }}            
            <!-- key & label for title bar -->
            {{ Form::label('title', 'Title:') }}
            <!-- input field for title -->
            {{ Form::text('title', null, array('class' => 'form-control other-class another', 'placeholder' => 'Blog Post Title')) }}       
        </div>        
        <div class="form-group">
            {{-- label for the body of the post.  the key is 'content' the label is Post: --}}
            {{ Form::label('content', 'Post:') }}
            <!--the error message saying you must put in content before you submit a new post  -->
            {{ $errors->first('content', '<span class="help-block">:message</span>') }}
        </div>
        <div> 
            {{-- grabs previously input content. This almost always happens by default.  If the user is "editing" a post then it just gets the old content.  notice it also sets the size of the text area.  otherwise it would be tiny and user could only see the last few words written   --}}
            {{ Form::textarea('content', Input::old('content'), array('class' => 'form-control other-class another', 'placeholder' => 'Content', 'rows' => '20', 'cols' => '30')) }}
        </div>    
            <label for="img">Upload Image</label>
            {{-- grabs old image.  important to note that an image is not required to post / edit / submit form --}}
            <input placeholder="image" id="img" name="img" type="file" class="" value="{{{ Input::old('img') }}}">
        <div>
            <input class="btn btn-block btn-primary" type="submit">

        </div>
    {{ Form::close() }}

    {{-- telling the server where the information is being sent to. in this case postscontroller@destroy  which is a method to delete that post.  Look below.  its important to note that there are 2 forms. the delete-post-btn form requires fields to be filled in.  the click listener for the delete button listens for the click on the delete button but then submits the second form.  the delete-posts-form which has no fields.  therefore submitting emtpy fields and running delete post id. essentially deleting it from the database. --}}
    {{ Form::model($post, array('action' => array('PostsController@destroy',$post->id), 'method' => 'DELETE')) }}
        <button id="delete-post-btn" class="btn btn-block btn-danger" type="submit">Delete Post</button>
    {{ Form::close() }}
    <!-- the hidden for for deleting a post using javascript. -->
    <!-- the click listener is on the submit button id delete-post-btn on the form above.  but the below form is what is submitted and deleted...only other portion of this code is in the javascript -->
    {{ Form::open([
        'action' => ['PostsController@destroy', $post->id],
        'id'     => 'delete-post-form',
        'method' => 'DELETE',
    ]) }}
    {{ Form::close() }}

</section>
@stop
@section('bottom-script')
{{-- ensure the javascript is visibe to this page for the delete fiasco --}}
<script type="text/javascript" src="/js/blog.js"></script>
{{-- script for the text markdown editor --}}
<script>tinymce.init({ selector:'textarea' });</script>
@stop

        
  