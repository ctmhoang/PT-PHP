<?php
$array = [
    'name' => 'Cameron',
    'age' => 20
];
$array1 = [
    'name' => 'Cameron',
    'age' => 20
];

$nested = [$array, $array1];
print_r($nested); 
exit;
foreach ($array as $k => $v) {
    echo "$k. $v</br>";
}

foreach($array as $v){
    echo $v;
}
