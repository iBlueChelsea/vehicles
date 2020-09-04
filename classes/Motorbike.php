<?php

require_once "Vehicle.php";

class Motorbike extends Vehicle
{
    public $type;
    public $fuel_type;
    public $gear_type;

    /**
     * Returns a notification saying the Vehicle has started
     *
     * @return string
     */
    public function start():string 
    {
        return parent::start() . ' (Type: ' . $this;
    }
}

?>