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

            <h1>{{ $post->title }}</h1>
        <!-- on the specific post it shows the who wrote the post -->
            <p>Written by: {{{ $post->user->user}}}</p>
            <p>{{ $post->content}}</p>
            @if(Auth::check())
            <a href="{{{ action('PostsController@edit', $post->id) }}}">Edit this entry</a>
            @endif
        </div>    
    </div>
</body>
</html>
@stop

