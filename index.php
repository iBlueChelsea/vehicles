<?php

require_once "Car.php";
require_once "Motorbike.php";

$carattributes = [
    color => [
        'Blue',
        'Red',
        'Yellow',
        'White',
        'Green',
        'Black',
        'Silver',
    ],
    brand => [
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
    type => [
        'Sedan',
        'Coupe',
        'SUV',
    ],
    fuel_type => [
        'Gasoline',
        'Diesel',
        'Electric'
    ],
    gear_type => [
        'Automatic',
        'Manual'
    ],
];

$motorattributes = [
    color => [
        'Blue',
        'Red',
        'Yellow',
        'White',
        'Green',
        'Black',
        'Silver',
    ],
    brand => [
        'Harley Davidson',
        'Ducati',
        'BMW',
        'Aprilia',
        'Honda',
        'Yamaha',
        'Kawasaki',
        'Suzuki',
    ],
    type => [
        'Chopper',
        'Cross',
        'Cruiser',
        'Scooter'
    ],
    fuel_type => [
        'Gasoline',
        'Electric'
    ],
    gear_type => [
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

function generateCar ($array){
    $car = new Car();
    $car->color = $array['color'][rand(0,count($array['color']))-1];
    return $car;
}

function generateMotorbike ($array){
    $motorbike = new Motorbike();
    $motorbike->color = $array['color'][rand(0,count($array['color']))-1];
    return $motorbike;
}

print_r($cars);
print_r($motorbikes);