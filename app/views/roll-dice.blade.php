<!DOCTYPE html>
<html lang="en">
<head>
    <title>Roll the Dice</title>
</head>
<body>
    <h1>Hello, Codeup!</h1>
    <p>You guessed the number: <?= $guess; ?> !</p>
    <p>The number rolled was: <?= $roll; ?> !</p>
    <p> <?= $message ?> </p>

    <a href="{{{ action('HomeController@showrollDice', 1) }}}">Guess the # 1?</a>
    <a href="{{{ action('HomeController@showrollDice', 2) }}}">Guess the # 2?</a>
    <a href="{{{ action('HomeController@showrollDice', 3) }}}">Guess the # 3?</a>
    <a href="{{{ action('HomeController@showrollDice', 4) }}}">Guess the # 4?</a>
    <a href="{{{ action('HomeController@showrollDice', 5) }}}">Guess the # 5?</a>
    <a href="{{{ action('HomeController@showrollDice', 6) }}}">Guess the # 6?</a>

</body>
</html>