<?php
class Charmeleon extends Pokemon {
    public $name;
    public $energyType = 'Fire';
    public $hitpoints = '60';
    public $health = '60';
    public $attacks = [];
    public $weakness;
    public $resistance;
    public function __construct($name)
{
	$this->name = $name;
	$attacks = [new Attacks("Head Butt", 10) , new Attacks("Flare", 30)];
	$weakness = new Weakness("water", 2);
	$resistance = new Resistance("Lightning", 10);
    parent::__construct($name, $this->energyType, $this->hitpoints, $this->health, $attacks, $weakness, $resistance);
}
}