<?php

class Vehicle
{
    public $color;
    public $weight;
    public $wheel_count;
    public $brand;
    public $top_speed;
    protected $chassis_number;

    public function getVehicleInfo() {
        echo $this;
        foreach ($this as $property) {
            echo ' - ' . $property;
        }
    }

    public function start() {
        echo 'Vehicle (Type: ' . $this . ') started!' ;
    }

    protected function getChassisNumber() {
        $chassis_number = '';
        for ($i = 0; $i < 10; $i++) {
            if ($i == 0) {
                $chassis_number .= rand(1,9);
            } else {
                $chassis_number .= rand(0,9);
            }
        }
        return $chassis_number;
    }

    public function __toString() {
        return get_class($this);
    }

    function __construct() {
        $this->chassis_number = $this->getChassisNumber();
    }

}

?>