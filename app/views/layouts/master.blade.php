<!DOCTYPE html>
<html lang="en">
<head>
    {{-- stackover flow solution to  navbar collapse --}}
    {{-- found in bootstrap "issues" --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- script for text markdown editor found in create/edit post --}}
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    
    <!-- copy and pasted from twitter bootstrap getting started -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    <!-- ***logo icon*** -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    {{-- google fonts --}}
    <link href='https://fonts.googleapis.com/css?family=Biryani' rel='stylesheet' type='text/css'>
    
    {{-- my css --}}
    <link rel="stylesheet" href="/css/blog.css"> 
    {{-- icon for browser tab at the top --}}
    <link rel="icon" href="/favicon.ico"> 
    
    
   


    @yield('top-script')
    
    <title>MicahSATX</title>
</head>
<body>
    @include('layouts.navbar')
    {{-- location of alert messages for when user succesfully logins in --}}
    @if (Session::has('successMessage'))
        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    {{-- location of alert messages for when user fails login --}}

    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif
    {{-- location of content in page being viewed --}}
    @yield('content')

    
    <!-- j query library hosted by google...google it. copy.paste. -->
    {{-- dont forget jquery needs to be above javascript! --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <!-- javascript script from twitter bootstrap getting started.  copy / paste -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- location of footer information.. not used on this site --}}
    @yield('bottom-script')
</body>
</html>