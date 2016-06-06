@extends('layouts.master')

@section('content')

    <h1>All Posts</h1>
    <div>
    @foreach ($posts as $post)
        <div class="container">
            <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h3>
            <p><small>Posted on:
                {{ 
                    $post
                    ->created_at
                    ->setTimezone('America/Chicago')
                    ->format('l, F jS Y @ h:i:s A') 
                }}
            </small></p>    
        </div> 

    @endforeach  

        <div class="container">
        <!-- the bar at the bottom of blog.dev/posts that paginates/nextpage -->
            {{ $posts->links() }}
        <!-- you can put in info like page 2 of 41 -->
        <!-- look at pagination docs at the different options -->
        </div>
    </div>    
@stop      
    