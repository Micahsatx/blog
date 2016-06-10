@extends('layouts.master')

@section('content')

    <h1 align="left" class="title">Blog Home</h1>
    @foreach ($posts as $post)
    <div class="">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
            <div class="card-post">
                <div class= "largePostsRow">
                    {{-- title is also a link to the id of the post and routed to the "show" post controller method --}}
                    <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{ $post->title }}</a></h3>
                    
                    {{-- content/body of the post --}}
                    <p>{{ $post->content }}</p>
                    {{-- img-responsive if important.  otherwise in mobile / resized window the image will not scale properly --}}
                    <img class= "img-responsive" src="{{ $post->img }}">
                    <p><small>Posted on:
                        {{-- documentation on the time format can be found in laravel docs.. this is highly customizable --}}
                        {{ 

                            $post
                            ->created_at
                            ->setTimezone('America/Chicago')
                            ->format('l, F jS Y @ h:i:s A') 
                        }}
                    </small></p>
                    <!-- shows the author of this particular post -->
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
        <!-- look at pagination docs at the different options -->
        {{-- you can change the look.  highly customizable --}}
    </div>
@stop  


    