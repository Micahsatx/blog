@extends('layouts.master')

@section('content')

    <h1 class="title">Blog Home</h1>
    @foreach ($posts as $post)
    <div class="">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 hidden-sm hidden-xs">
            <div class="card-post">
                <div class= "largePostsRow">
                    <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{ $post->title }}</a></h3>
                    
                    <p>{{ $post->content }}</p>
                    <img class= "img-responsive" src="{{ $post->img }}">
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
    <div class="">
        <div class="hidden-xl hidden-lg hidden-md col-sm-12 col-xs-12">
            <div class="card-post">
                <div class= "smallPostsRow">
                    <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{ $post->title }}</a></h3>
                    
                    <p>{{ $post->content }}</p>
                    <img class= "img-responsive" src="{{ $post->img }}">
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


    