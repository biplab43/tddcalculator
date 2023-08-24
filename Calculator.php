<?php

use function PHPUnit\Framework\isEmpty;

class Calculator
{
    function add($a, $b){
        if($a == "" || $b == "")
            return "Please enter both values";
        elseif (is_string($a) || is_string($b))
            return "Please enter integer in both values";
        else
        return $a+$b;
    }
    function substract ($a, $b){
        if($a == "" || $b == "")
            return "Please enter both values";
        elseif (is_string($a) || is_string($b))
            return "Please enter integer in both values";
        else
        return $a-$b;
    }
    function multiply ($a, $b){
        if($a == "" || $b == "")
            return "Please enter both values";
        elseif (is_string($a) || is_string($b))
            return "Please enter integer in both values";
        else
            return $a*$b;
    }
}