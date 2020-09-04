<?php

function drawTable ($array) {
    $table = '<table class="table table-bordered table-striped">';
    $thead = '<thead>';
    $i = 0;
    foreach ($array as $object) {
        $properties = $object->getVehicleInfo();
        $tbody .= '<tr>';
        foreach ($properties as $key => $property) {
            $tbody .= '<td>';
            if ($key == 'chassis_number') {
                $tbody .= '<a href="?page=' . $_REQUEST['page'] . '&view=' . $property . '">';
            }
            $tbody .= $property;
            $tbody .= '</td>';
            if ($i == count($array)-1) {
                $thead .= '<th>';
                $thead .= $key;
                $thead .= '</th>';
            }
        }
        $tbody .= '</tr>';
        $i++;
    }
    $thead .= '</thead>';
    $result .= $table . $thead . $tbody . '</table>';
    return $result;
}

function generateCar ($array) {
    $car = new Car();
    $car->color = $array['color'][rand(0,count($array['color'])-1)];
    $car->weight = rand(1000,3000) . ' kg';
    $car->wheel_count = '4 wheels';
    $car->brand = $array['brand'][rand(0,count($array['brand'])-1)];
    $car->top_speed = rand(160,320) . ' km/h';
    $car->type = $array['type'][rand(0,count($array['type'])-1)];
    $car->fuel_type = $array['fuel_type'][rand(0,count($array['fuel_type'])-1)];
    $car->gear_type = $array['gear_type'][rand(0,count($array['gear_type'])-1)];
    return $car;
}

function generateMotorbike ($array) {
    $motorbike = new Motorbike();
    $motorbike->color = $array['color'][rand(0,count($array['color'])-1)];
    $motorbike->weight = rand(100,300) . ' kg';
    $motorbike->wheel_count = '2 wheels';
    $motorbike->brand = $array['brand'][rand(0,count($array['brand'])-1)];
    $motorbike->top_speed = rand(160,320) . ' km/h';
    $motorbike->type = $array['type'][rand(0,count($array['type'])-1)];
    $motorbike->fuel_type = $array['fuel_type'][rand(0,count($array['fuel_type'])-1)];
    $motorbike->gear_type = $array['gear_type'][rand(0,count($array['gear_type'])-1)];
    return $motorbike;
}

?>