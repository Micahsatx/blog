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
      <form method="post" action="{{{ action('HomeController@doLogin')}}}">
        {{ Form::token() }}
        <p><input type="text" name="email" value="" placeholder="Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>
</body>
</html>
@stop