<?php

class Charmeleon extends Pokemon {

    public $name = 'Noelemrahc';
    public $energyType = 'Fire';
    public $hitpoints = '60';
    public $health = '60';
    public $attacks = array("Headbutt", "Flare");
    public $weakness = 'water | 2';
    public $resistance = 'Lightning |10';

    public function __construct()
{
    parent::__construct($this->name, $this->energyType, $this->hitpoints, $this->health, $this->attacks, $this->weakness, $this->resistance);
}

}