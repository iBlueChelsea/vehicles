<?php

require_once 'classes/Motorbike.php';
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

$motorbikes = [];
$amount = 5;

for ($i = 0; $i < $amount; $i++) {
    $motorbikes[] = generateMotorbike($attributes);
}

$content = '<div class="container rounded bg-light">';

$content .= drawTable($motorbikes);

$content .= '</div>';

echo $content;

?>