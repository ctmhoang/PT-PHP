<?php


$array = [
    'name' => 'Cameron',
    'age' => 20
];
$array1 = [
    'name' => 'Eric',
    'age' => 68
];

$nested = [$array, $array1];

foreach ($nested as $p) {
    switch ($p['name']) {
        case 'Cameron':
            echo 'That\' me <br>';
            break;
        case 'Eric':
            echo 'Best Professor';
        default:
            echo ' always grumpy<br>';
    }
}
