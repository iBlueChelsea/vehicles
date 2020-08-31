<?php

require_once "Vehicle.php";

class Car extends Vehicle
{
    public $type;
    public $fuel_type;
    public $gear_type;

    public function getVehicleInfo() {
        echo $this;
        foreach ($this as $property) {
            echo ' - ' . $property;
        }
    }
}

?>