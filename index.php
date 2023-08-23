<?php
require_once "Calculator.php";

$obj = new Calculator();
echo "The addition value is: ".$obj->add(5,3);
echo "\n";
echo "The substraction value is: ".$obj->substract(5,3);