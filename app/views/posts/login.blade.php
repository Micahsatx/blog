@extends('layouts.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
</head>
<body>
    <h1>title: {{{ $post->title }}}</h1>
    <p>{{{ $post->content}}}</p>
    <a href="{{{ action('PostsController@edit', $post->id) }}}">Edit this entry</a>
</body>
</html>
@stop