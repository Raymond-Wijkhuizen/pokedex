<?php
class Pikachu extends Pokemon {
    public $name;
    public $energyType = 'Lightning';
    public $hitpoints = '60';
    public $health = '60';
    public $attacks = [];
    public $weakness = 'Fire | 1.5';
    public $resistance = 'fighting | 20';
    public function __construct($name)
{
	$this->name = $name;
	$attacks = [new Attacks("Elektric Ring", 50) , new Attacks("Pika Punch", 20)];
    parent::__construct($name, $this->energyType, $this->hitpoints, $this->health, $attacks, $this->weakness, $this->resistance);
}
}