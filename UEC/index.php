<h1> Emoji Fighters Ultimate </h1>
<pre>
<?php
require_once "Fighter.php";
require_once "Fight.php";
//criando lutadores
$lutador = array();
$lutador[0] = new Fighter("Rafael", "Brasil", 24, 1.78,73,11,2,3);
$lutador[1] = new Fighter("Jasohn", "USA", 30, 1.98,80,5,5,5);
$lutador[2] = new Fighter("DeadCode", "Australia", 24, 1.80, 119, 11, 9, 10);

//marcando luta
$UEC01 = new Fight();
$UEC01->markFight($lutador[0],$lutador[1]);
$UEC01->startFight();

$lutador[0]->status();
$lutador[1]->status();


?>
</pre> 

