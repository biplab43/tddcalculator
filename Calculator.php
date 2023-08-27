<?php

use function PHPUnit\Framework\isEmpty;

class Calculator
{
    function add($a, $b){
        if($a == "" || $b == "")
            return "Please enter both values";
        elseif (!is_numeric($a) || !is_numeric($b))
            return "Please enter number in both values";
        else
        return $a+$b;
    }
    function substract ($a, $b){
        if($a == "" || $b == "")
            return "Please enter both values";
        elseif (!is_numeric($a) || !is_numeric($b))
            return "Please enter number in both values";
        else
        return $a-$b;
    }
    function multiply ($a, $b){
        if($a == "" || $b == "")
            return "Please enter both values";
        elseif (!is_numeric($a) || !is_numeric($b))
            return "Please enter number in both values";
        else
            return $a*$b;
    }
    function divide ($a, $b){
        if($a == "" || $b == "")
            return "Please enter both values";
        elseif($b == 0)
            return "Dividing by zero will be infinitive";
        elseif (!is_numeric($a) || !is_numeric($b))
            return "Please enter number in both values";
        else
            return round($a/$b,2);
    }
}