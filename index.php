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



?>
<p>Pikachu valt Charmeleon aan met een Electric Ring attack</p>
<br><br>
<?php
$pikachu->attack($charmeleon , "Electric Ring");
$charmeleon->printHp();

?>
<p>Charmeleon valt Pikachu aan met een Flare attack</p>
<?php
$charmeleon->attack($pikachu , "Flare");
$pikachu->printHp();


?>