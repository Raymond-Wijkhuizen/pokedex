<?php

require 'Pokemon.php';
require 'attacks.php';

$latias =  new Pokemon('latias', 'Dragon/Psychic', '80', '80', 'Male', 'Psychic / Dragon Breath', 'Ice', 'Water');
$thunderbolt = new Attacks ('thunderbolt', 80);

print_r('<pre>'. $latias . '</pre>');
print_r('<pre>'. $thunderbolt . '</pre>');
?>