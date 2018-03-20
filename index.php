<?php

require 'Pokemon.php';
require 'attacks.php';
require 'pikachu.php';
require 'charmeleon.php';

$pikachu =  new pikachu("yoo");
$charmeleon = new charmeleon("seh");


$pikachu->printHp();
$charmeleon->printHp();

?>
<p>Pikachu valt Charmeleon aan met een Electric Ring attack</p>
<?php



?>
<p>Charmeleon valt Pikachu aan met een Flare attack</p>
<?php



?>