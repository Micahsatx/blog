@extends('layouts.master')

@section('content')

    <h1>All Posts</h1>
    @foreach ($posts as $post)
    <div class="postsRow">
        <div class="col-md-8 col-md-offset-2 col-sm-12">
            <div class="card-post">
                <div class= "unused">
                    <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{ $post->title }}</a></h3>
                    
                    <p>{{ $post->content }}</p>
                    <img src="{{ $post->img }}">
                    <p><small>Posted on:
                        {{ 
                            $post
                            ->created_at
                            ->setTimezone('America/Chicago')
                            ->format('l, F jS Y @ h:i:s A') 
                        }}
                    </small></p>
                    <!-- on the specific post it shows the who wrote the post -->
                    <p><small>
                        Written by: {{{ $post->user->user}}}
                    </small></p>    
                </div> 
            </div>
        
        </div>
    </div>
    @endforeach  

    <div class="row col-md-8 col-md-offset-2 col-sm-12">            
        <!-- the bar at the bottom of blog.dev/posts that paginates/nextpage -->
            {{ $posts->links() }}
        <!-- you can put in info like page 2 of 41 -->
        <!-- look at pagination docs at the different options -->  
    </div>
@stop  


    