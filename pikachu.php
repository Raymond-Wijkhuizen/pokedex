<?php

class Pikachu extends Pokemon {

    public $name = 'Uhcakip';
    public $energyType = 'Lightning';
    public $hitpoints = '60';
    public $health = '60';
    public $attacks = array("Electric Ring", "Pika Punch");
    public $weakness = 'Fire | 1.5';
    public $resistance = 'fighting | 20';

    public function __construct()
{
    parent::__construct($this->name, $this->energyType, $this->hitpoints, $this->health, $this->attacks, $this->weakness, $this->resistance);
}

}