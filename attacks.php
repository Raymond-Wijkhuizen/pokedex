<?php

class Attacks {

	 public function __construct($attacks)
    {
        $this->attack = array("Electric Ring | 50", "Pika Punch | 20", "Headbutt | 10", "Flare | 30");

    }
    public function __toString() {
        return json_encode($this);
    }

}