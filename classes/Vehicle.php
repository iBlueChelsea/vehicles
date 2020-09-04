<?php

class Vehicle
{
    public $color;
    public $weight;
    public $wheel_count;
    public $brand;
    public $top_speed;
    protected $chassis_number;

    /**
     * Returns Vehicle information
     *
     * @return array
     */
    public function getVehicleInfo():array
    {
        $result = [];
        $result['vehicle'] = $this->__toString();
        
        foreach ($this as $key => $property) {
            $result[$key] = $property;
        }

        return $result;
    }

    /**
     * Returns a notification saying the Vehicle has started
     *
     * @return string
     */
    public function start():string 
    {
        return 'Vehicle has started!';
    }

    /**
     * Generate a unique Chassis Number for the Vehicle
     *
     * @return string
     */
    protected function getChassisNumber():string 
    {
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

    /**
     * Displays the Class name
     *
     * @return string
     */
    public function __toString() 
    {
        return get_class($this);
    }

    /**
     * Constructor
     */
    public function __construct() 
    {
        $this->chassis_number = $this->getChassisNumber();
    }

}

?>