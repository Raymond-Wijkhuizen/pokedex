<?php

require 'Pokemon.php';
require 'attacks.php';
require 'Weakness.php';
require 'resistance.php';
require 'pikachu.php';
require 'charmeleon.php';

$pikachu =  new pikachu("wodjeeeeeeeeeeeeee");
$charmeleon = new charmeleon("charms");


$pikachu->printHp();
$charmeleon->printHp();
var_dump($pikachu);


?>
<!-- <p>Pikachu valt Charmeleon aan met een Electric Ring attack</p> -->
<br><br>
<?php
var_dump($charmeleon);
die();


?>
<p>Charmeleon valt Pikachu aan met een Flare attack</p>
<?php



?>