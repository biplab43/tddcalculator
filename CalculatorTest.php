<?php

use PHPUnit\Framework\TestCase;

require_once "Calculator.php";

class CalculatorTest extends TestCase
{
    function testAdd(){
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->add(2,3));
        $this->assertEquals(2, $calculator->add(-3,5));
        $this->assertEquals(-2, $calculator->add(3,-5));
        $this->assertEquals(0, $calculator->add(0,0));
    }

    function testSubstract(){
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->substract(8,3));
        $this->assertEquals(-15, $calculator->substract(-10,5));
        $this->assertEquals(15, $calculator->substract(5,-10));
        $this->assertEquals(0, $calculator->substract(10,10));
        $this->assertEquals(0, $calculator->substract(0,0));
    }
}