<?php

class Resistance {
	public $energyType; 
    public $worth;

	 public function __construct($energyType, $worth)
    {
        $this->energyType = $energyType;
        $this->worth = $worth;

    }
    public function __toString() {
        return json_encode($this);
    }

}