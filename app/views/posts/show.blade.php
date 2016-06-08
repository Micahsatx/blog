@extends('layouts.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
</head>
<body>
    <div class="individualPost">
        <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class= "postsRow">
                <h1>{{ $post->title }}</h1>
            <!-- on the specific post it shows the who wrote the post -->
                <p>Written by: {{{ $post->user->user}}}</p>
                <p>{{ $post->content}}</p>
                <img class= "img-responsive" src="{{ $post->img }}">
                <a href="{{{ action('PostsController@index') }}}">Go back <br></a>

                @if(Auth::check())
                    @if($post->user_id == Auth::id())
                <a href="{{{ action('PostsController@edit', $post->id) }}}">Edit/Delete this entry</a>
                    @endif
                @endif
            </div>    
        </div>    
    </div>
</body>
</html>
@stop

