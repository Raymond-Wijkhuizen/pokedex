<?php

require 'Pokemon.php';
require 'attacks.php';
require 'pikachu.php';
require 'charmeleon.php';

$latias =  new Pokemon('latias', 'Dragon/Psychic', '80', '80', 'Male', 'Psychic / Dragon Breath', 'Ice', 'Water');
$pikachu =  new pikachu();
$charmeleon =  new charmeleon();

print_r('<pre>'. $pikachu . '</pre>');
print_r('<pre>'. $charmeleon . '</pre>');
?>