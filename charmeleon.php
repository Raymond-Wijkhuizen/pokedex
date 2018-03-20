<?php

class Charmeleon extends Pokemon {

    public $name;
    public $energyType = 'Fire';
    public $hitpoints = '60';
    public $health = '60';
    public $attacks = [];
    public $weakness = 'water | 2';
    public $resistance = 'Lightning |10';

    public function __construct($name)
{
	$this->name = $name;
	$attacks = [new Attacks("Headbutt", 10) , new Attacks("flare", 30)];
    parent::__construct($this->name, $this->energyType, $this->hitpoints, $this->health, $attacks, $this->weakness, $this->resistance);
}

}