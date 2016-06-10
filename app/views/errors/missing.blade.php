<html>
<head>
    {{-- 404 page for when a user puts in a bad url related to micahjohnson.xyz   this takes you to the whackamole game i created --}}
    {{-- this is the entire whackamole codeset all in one page --}}
    <title>Error:404</title>

    <style type="text/css"></style>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- css page link -->
    <link rel="stylesheet" href="/whackamole/css/whackamole.css">
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- Page Title -->
<h1>Whoops this page wasnt found.  Play Whack-A-Mole instead</h1>
<h1 class="title">Mushrooms Heal & Flowers Kill</h1>

<!-- 3 top fields that show score / timer / high score -->
<div class="container-fluid topFields">
    <div class="row">
        <div class="score col-xs-3">
          <h3>Score: <span id="score">0</span></h2>
        </div>
        <div class="timer col-xs-3">
            <h3>Timer: <span id="timer">30</span></h3>
        </div>
        <div class="highScore col-xs-3">
            <h3>High Score: <span id="highScore">0</span></h3>
        </div>
    </div>
</div>
<!-- the 9 holes -->
<div class="container">    
    <div class="row topRow">
        <div class="rowBox boxClass1 col-sm-offset-1 col-sm-3">
            <button class="individualBox boxClass1" id="box1"></button>
            <img src="/whackamole/img/flower.png" class="flower">
            <img src="/whackamole/img/mario-tube.png" class="tube">
        </div>
        <div class="rowBox boxClass2 col-sm-3">
            <button class="individualBox boxClass2" id="box2"></button>
            <img src="/whackamole/img/flower.png" class="flower">
            <img src="/whackamole/img/mario-tube.png" class="tube">
        </div>
        <div class="rowBox boxClass3 col-sm-offset-0 col-sm-3">
            <button class="individualBox boxClass3" id="box3"></button>
            <img src="/whackamole/img/flower.png" class="flower">
            <img src="/whackamole/img/mario-tube.png" class="tube">
        </div>
    </div>
    <div class="row middleRow">
        <div class="rowBox boxClass4 col-sm-offset-1 col-sm-3">
            <button class="individualBox boxClass4" id="box4"></button>
            <img src="/whackamole/img/flower.png" class="flower">
            <img src="/whackamole/img/mario-tube.png" class="tube">
        </div>
        <div class="rowBox boxClass5 col-sm-3">
            <button class="individualBox boxClass5" id="box4"></button>
            <img src="/whackamole/img/flower.png" class="flower">
            <img src="/whackamole/img/mario-tube.png" class="tube">
        </div>
        <div class="rowBox boxClass6 col-sm-3">
            <button class="individualBox boxClass6" id="box6"></button>
            <img src="/whackamole/img/flower.png" class="flower">
            <img src="/whackamole/img/mario-tube.png" class="tube">
        </div>
    </div>
    <div class="row bottomRow">
        <div class="rowBox boxClass7 col-sm-offset-1 col-sm-3">
            <button class="individualBox boxClass7" id="box7"></button>
            <img src="/whackamole/img/flower.png" class="flower">
            <img src="/whackamole/img/mario-tube.png" class="tube">
        </div>
        <div class="rowBox boxClass8 col-sm-3">
            <button class="individualBox boxClass8" id="box8"></button>
            <img src="/whackamole/img/flower.png" class="flower">
            <img src="/whackamole/img/mario-tube.png" class="tube">
        </div>
        <div class="rowBox boxClass9 col-sm-3">
            <button class="individualBox boxClass9" id="box9"></button>
            <img src="/whackamole/img/flower.png" class="flower">
            <img src="/whackamole/img/mario-tube.png" class="tube">
        </div>
    </div>
</div>
<div class="gamePlayMode">
    <button class="start-button" id="idOfStartEasyMode"></button>
    <button class="start-button" id="idOfStartNormalMode"></button>
    <button class="start-button" id="idOfStartHardMode"></button>
</div>
{{-- sound for the tube when successfully whacking a flower --}}
<audio preload="auto" id="tubeSound">
    <source src="/whackamole/sounds/tube.mp3" type="audio/mpeg">
</audio>


<script>
    "use strict"
</script>
    <!-- jquery library link -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- jquery external page link -->
    <script src="/whackamole/js/whackamole.js"></script>
</body>
</html>

