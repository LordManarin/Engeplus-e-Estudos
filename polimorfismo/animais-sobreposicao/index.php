
<pre>
<?php
    require_once "mamal.php";
    require_once "reptile.php";
    require_once "fish.php";
    require_once "bird.php";
    require_once "kangoroo.php";
    require_once "turtle.php";
    require_once "dog.php";
    require_once "goldfish.php";
    require_once "snake.php";
    require_once "eagle.php";

    // criando animais
    $cachorro = new dog();
    $tartaruga = new turtle();
    $canguru = new kangoroo();
    // movendo
    $cachorro->move();
    $tartaruga->move();
    $canguru->move();
    // fazendo barulho
    $cachorro->makeNoise();
    $tartaruga->makeNoise();

?>
</pre>
