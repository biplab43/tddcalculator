<?php

use PHPUnit\Framework\TestCase;

require_once "Calculator.php";

class CalculatorTest extends TestCase
{

    function testAdd(){
        $calculator = new Calculator();
        $this->assertEquals("Please enter both values", $calculator->add("",""));
        $this->assertEquals("Please enter both values", $calculator->add(5,""));
        $this->assertEquals("Please enter both values", $calculator->add("",0));
        $this->assertEquals(5, $calculator->add(2,3));
        $this->assertEquals(2, $calculator->add(-3,5));
        $this->assertEquals(-2, $calculator->add(3,-5));
        $this->assertEquals(0, $calculator->add(0,0));
        $this->assertEquals("Please enter integer in both values", $calculator->add("5",3));
        $this->assertEquals("Please enter integer in both values", $calculator->add("5","a"));
    }

    function testSubstract(){
        $calculator = new Calculator();
        $this->assertEquals("Please enter both values", $calculator->substract("",""));
        $this->assertEquals("Please enter both values", $calculator->substract(5,""));
        $this->assertEquals("Please enter both values", $calculator->substract("",0));
        $this->assertEquals(5, $calculator->substract(8,3));
        $this->assertEquals(-15, $calculator->substract(-10,5));
        $this->assertEquals(15, $calculator->substract(5,-10));
        $this->assertEquals(0, $calculator->substract(10,10));
        $this->assertEquals(0, $calculator->substract(0,0));
        $this->assertEquals("Please enter integer in both values", $calculator->substract("5",3));
        $this->assertEquals("Please enter integer in both values", $calculator->substract("5","a"));
    }

    function testMultiply(){
        $calculator = new Calculator();
        $this->assertEquals("Please enter both values", $calculator->multiply("",""));
        $this->assertEquals("Please enter both values", $calculator->multiply(5,""));
        $this->assertEquals("Please enter both values", $calculator->multiply("",0));
        $this->assertEquals(0, $calculator->multiply(0,0));
        $this->assertEquals(0, $calculator->multiply(0,5));        
        $this->assertEquals(0, $calculator->multiply(0,-5));
        $this->assertEquals(-15, $calculator->multiply(3,-5));
        $this->assertEquals(15, $calculator->multiply(-3,-5));
        $this->assertEquals("Please enter integer in both values", $calculator->multiply("5",3));
        $this->assertEquals("Please enter integer in both values", $calculator->multiply("5","a"));
    }
}