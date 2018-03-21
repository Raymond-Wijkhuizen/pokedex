<?php

class Pokemon {

    public $name; 
    public $energyType;
    public $hitpoints;
    public $health;
    public $attacks;
    public $weakness;
    public $resistance;

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
    public function attack($target, $att)
    {
        foreach ($this->attacks as $attack) {
            if ($attack->name == $att) {
                $damage = $attack->damage;
                if ($this->energyType == $target->resistance->energyType) {
                    $damage = $damage - $target->resistance->worth;
                }
                if ($this->energyType == $target->weakness->energyType) {
                    $damage = $damage * $target->weakness->multiplier;
                }
                $newHealth = $target->health - $damage;
                $target->health = $newHealth;
            }
        }
    }

}