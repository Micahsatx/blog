<!DOCTYPE html>
<html>
<head>
    <title>Whack-A-Mole</title>

    <style type="text/css"></style>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- trying to compile this into laravel -->
@yield('top-script')

</head>
<body>
<!--getting the content from the whackamole.blade.php  -->
 @yield('content')



@yield('bottom-script')
<script>
    "use strict"
</script>
    <!-- jquery library link -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- jquery external page link -->
    <script src="/js/whackamole.js"></script>
@stop

</body>
</html>