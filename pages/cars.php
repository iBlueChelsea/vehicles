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
    $content .= '<h1><span class="badge badge-warning">Car - ' . $_REQUEST['view'] . '</span></h1>';
    $content .= '<div class="row">';
    $content .= '<div class="col-6"><img src="car.jpg" width="100%"></div>';
    $content .= '<div class="col-6">';
    $content .= '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a libero at massa elementum mollis quis a metus. Phasellus elementum, dolor ac scelerisque tristique, massa diam tempor quam, in pharetra erat nulla nec neque. Sed vehicula massa vel metus condimentum, ac consequat nulla auctor. Fusce volutpat volutpat turpis a luctus. Nunc sagittis pellentesque sem, nec finibus lorem pharetra id. Vivamus quis neque tristique metus suscipit ullamcorper nec in dui. Sed blandit consequat nisi quis pretium.</p>';
    $content .= '<p>Pellentesque pretium tortor eu quam congue, lobortis suscipit augue pellentesque. Ut eget vulputate massa, fermentum consectetur lectus. Proin molestie lacus vel est mollis tincidunt. Vestibulum dapibus vulputate tortor, in porttitor orci pretium vitae. Etiam et viverra eros. Mauris vel metus quis mi ullamcorper posuere. Etiam ut dui erat. Nulla aliquam tristique suscipit. Nullam tempus tempor volutpat. Suspendisse nulla mauris, tristique eget eleifend eget, dapibus ut mauris. </p>';
    $content .= '</div></div>';
}

$content .= '</div>';

echo $content;

?>