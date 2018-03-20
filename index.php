<?php

require 'Pokemon.php';
require 'attacks.php';
require 'pikachu.php';
require 'charmeleon.php';

$pikachu =  new pikachu();
$charmeleon = new charmeleon();
$attacks = new attacks($attacks);

$pikachu->printHp();
$charmeleon->printHp();

?>
<p>Pikachu valt Charmeleon aan met een Electric Ring attack</p>
<?php
$damage = explode('|', $attacks->attack[0]);
$resistance = explode('|', $charmeleon->resistance);
$weakness = explode('|', $charmeleon->weakness);
if ($resistance[0] == 'Lightning ') {
	$damage = $damage[1] - $resistance[1];
}
if ($weakness[0] == 'water') {
	$damage = $damage * $weakness[1];
}
$charmeleon->health = $damage;
$charmeleon->printHp();
?>
<p>Charmeleon valt Pikachu aan met een Flare attack</p>
<?php
$damage = explode('|', $attacks->attack[3]);
$resistance = explode('|', $pikachu->resistance);
$weakness = explode('|', $pikachu->weakness);
if ($resistance[0] == 'fighting ') {
	$damage = $damage[1] - $resistance[1];
}
if ($weakness[0] == 'fire') {
	$damage = $damage * $weakness[1];
}
$pikachu->health = $damage;
$pikachu->printHp();
?>