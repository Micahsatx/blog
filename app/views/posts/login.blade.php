@extends('layouts.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Login to Blog</h1>
      {{-- tripple {{{}}} strip tags so that code injection isnt as likely to occur.  one of several layers of protection to keep user from submitting malicious code through the form itself --}}
      <form method="post" action="{{{ action('HomeController@doLogin')}}}">
        {{-- the token is what helps protect against csrf attacks.. cross site request forgery.  bots / users submitting malicious information through the URL or without ever actually visiting the form.  this is a second layer of protection --}}
        {{ Form::token() }}
        <p><input type="text" name="email" value="" placeholder="Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>
</body>
</html>
@stop