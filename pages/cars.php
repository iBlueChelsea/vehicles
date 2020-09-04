<?php

require_once 'classes/Car.php';
require_once 'navbar.php';
require_once 'utils.php';

$attributes = [
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

$cars = [];
$amount = 5;

for ($i = 0; $i < $amount; $i++) {
    $cars[] = generateCar($attributes);
}

$content = '<div class="container rounded bg-light">';

if (!isset($_REQUEST['view'])) {
    $content .= drawTable($cars);
} else {
    $content .= 'DetailView';
}

$content .= '</div>';

echo $content;

?>