<?php
class Pikachu extends Pokemon {
    public $name;
    public $energyType = 'Lightning';
    public $hitpoints = '60';
    public $health = '60';
    public $attacks = [];
    public $weakness;
    public $resistance;
    public function __construct($name)
{
	$this->name = $name;
	$attacks = [new Attacks("Electric Ring", 50) , new Attacks("Pika Punch", 20)];
	$weakness = new Weakness("Fire", 1.5);
	$resistance = new Resistance("fighting", 20);
    parent::__construct($name, $this->energyType, $this->hitpoints, $this->health, $attacks, $weakness, $resistance);
}
}