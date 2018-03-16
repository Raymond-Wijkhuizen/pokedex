<?php

class Attacks {

	 public function __construct($name, $damage)
    {
        $this->name = $name;
        $this->damage = $damage;

    }
    public function __toString() {
        return json_encode($this);
    }

}