<?php

require 'Pokemon.php';
require 'attacks.php';
require 'pikachu.php';
require 'charmeleon.php';

$pikachu =  new pikachu();
$charmeleon =  new charmeleon();

$pikachu->printHp();
$charmeleon->printHp();
?>