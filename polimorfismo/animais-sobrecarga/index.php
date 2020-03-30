<?php
require_once 'animals.php';
require_once 'mamal.php';
require_once 'wolf.php';
require_once 'dog.php';

$cachorro= new dog();
$cachorro->reactIdade(9,12);
$cachorro->reactIdade(8,7);
$cachorro->reactIdade(4,5);
$cachorro->reactFrase("Comida!");
$cachorro->reactFrase("Vai apanhar!");
$cachorro->reactDono(true);
$cachorro->reactDono(false);
$cachorro->reactHora(10);
$cachorro->reactHora(23);


?>