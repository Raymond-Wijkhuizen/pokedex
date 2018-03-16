<?php

class Pokemon {

	 public function __construct($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $health;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }
    public function __toString() {
        return json_encode($this);
    }
    public function printHp()
    {
        echo '<h2>' .$this->name .' '. $this->health . 'HP'. '</h2>';
    }

}