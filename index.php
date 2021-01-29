<?php


function welcome($name = "Allen", $age = 21){
    return "Hello $name your age is $age<br>";
}

echo welcome();

for($i = 0; $i < 5 ; $i ++){
    echo welcome($age = $i, $name = "Name here"); //order matters
}