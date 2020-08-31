<?php

require_once "header.html";
require_once "Car.php";
require_once "Motorbike.php";

$carattributes = [
    'color' => [
        'Blue',
        'Red',
        'Yellow',
        'White',
        'Green',
        'Black',
        'Silver',
    ],
    'brand' => [
        'BMW',
        'Mercedes',
        'Renault',
        'Suzuki',
        'Alfa Romeo',
        'Opel',
        'Volvo',
        'Ford',
        'Hyundai',
    ],
    'type' => [
        'Sedan',
        'Coupe',
        'SUV',
    ],
    'fuel_type' => [
        'Gasoline',
        'Diesel',
        'Electric'
    ],
    'gear_type' => [
        'Automatic',
        'Manual'
    ],
];

$motorattributes = [
    'color' => [
        'Blue',
        'Red',
        'Yellow',
        'White',
        'Green',
        'Black',
        'Silver',
    ],
    'brand' => [
        'Harley Davidson',
        'Ducati',
        'BMW',
        'Aprilia',
        'Honda',
        'Yamaha',
        'Kawasaki',
        'Suzuki',
    ],
    'type' => [
        'Chopper',
        'Cross',
        'Cruiser',
        'Scooter'
    ],
    'fuel_type' => [
        'Gasoline',
        'Electric'
    ],
    'gear_type' => [
        'Automatic',
        'Manual'
    ],
];

$cars = [];
$motorbikes = [];
$amount = 5;

for ($i = 0; $i < $amount; $i++) {
    $cars[] = generateCar($carattributes);
    $motorbikes[] = generateMotorbike($motorattributes);
}

drawList($cars);
drawList($motorbikes);

drawTable($cars);
drawTable($motorbikes);

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

//List

function drawList ($array) {
    echo '<ul>';
    foreach ($array as $object) {
        echo '<li>';
        $object->getVehicleInfo();
        echo ' ||| ';
        $object->start();
        echo '</li>';
    }
    echo '</ul>';
}

//Table

function drawTable ($array) {
    echo '<table class="table table-bordered table-striped table-dark">';
    echo '<thead><th>Type</th><th>Fuel Type</th><th>Gear Type</th><th>Color</th><th>Weight</th><th>Wheel count</th><th>Brand</th><th>Top speed</th></thead>';
    foreach ($array as $object) {
        echo '<tr>';
        foreach ($object as $property) {
            echo '<td width="12.5%">';
            echo $property;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}