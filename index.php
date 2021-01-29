<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$variable = "overwritten";
$variable = "anything";

echo $variable;

define('__NAME__', 'Cameron');
// define('__NAME__', 'Luna');

echo "Hello world my name is ". __NAME__;

