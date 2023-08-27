<?php

use PHPUnit\Framework\TestCase;

require_once "Calculator.php";

class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator(); 
    }

    function testAdd(){
        $this->assertEquals("Please enter both values", $this->calculator->add("",""));
        $this->assertEquals("Please enter both values", $this->calculator->add(5,""));
        $this->assertEquals("Please enter both values", $this->calculator->add("",0));
        $this->assertEquals(5, $this->calculator->add(2,3));
        $this->assertEquals(2, $this->calculator->add(-3,5));
        $this->assertEquals(-8, $this->calculator->add(-3,-5));
        $this->assertEquals(0, $this->calculator->add(0,0));
        $this->assertEquals("Please enter integer in both values", $this->calculator->add("5",3));
        $this->assertEquals("Please enter integer in both values", $this->calculator->add("5","a"));
    }

    function testSubstract(){
        $this->assertEquals("Please enter both values", $this->calculator->substract("",""));
        $this->assertEquals("Please enter both values", $this->calculator->substract(5,""));
        $this->assertEquals("Please enter both values", $this->calculator->substract("",0));
        $this->assertEquals(5, $this->calculator->substract(8,3));
        $this->assertEquals(-15, $this->calculator->substract(-10,5));
        $this->assertEquals(5, $this->calculator->substract(-5,-10));
        $this->assertEquals(0, $this->calculator->substract(10,10));
        $this->assertEquals(0, $this->calculator->substract(0,0));
        $this->assertEquals("Please enter integer in both values", $this->calculator->substract("5",3));
        $this->assertEquals("Please enter integer in both values", $this->calculator->substract("5","a"));
    }

    function testMultiply(){
        $this->assertEquals("Please enter both values", $this->calculator->multiply("",""));
        $this->assertEquals("Please enter both values", $this->calculator->multiply(5,""));
        $this->assertEquals("Please enter both values", $this->calculator->multiply("",0));
        $this->assertEquals(0, $this->calculator->multiply(0,0));
        $this->assertEquals(0, $this->calculator->multiply(0,5));        
        $this->assertEquals(0, $this->calculator->multiply(0,-5));
        $this->assertEquals(-15, $this->calculator->multiply(3,-5));
        $this->assertEquals(15, $this->calculator->multiply(-3,-5));
        $this->assertEquals("Please enter integer in both values", $this->calculator->multiply("5",3));
        $this->assertEquals("Please enter integer in both values", $this->calculator->multiply("5","a"));
    }

    function testDivide(){
        $this->assertEquals("Please enter both values", $this->calculator->divide("",""));
        $this->assertEquals("Please enter both values", $this->calculator->divide("",3));
        $this->assertEquals("Please enter both values", $this->calculator->divide(0,""));
        $this->assertEquals(0, $this->calculator->divide(0,5));
        $this->assertEquals("Dividing by zero will be infinitive", $this->calculator->divide(5,0));
        $this->assertEquals(5, $this->calculator->divide(10,2));
        $this->assertEquals(33.33, $this->calculator->divide(100,3));
        $this->assertEquals(16.67, $this->calculator->divide(100,6));
        $this->assertEquals(0.2, $this->calculator->divide(2,10));
        $this->assertEquals("Please enter integer in both values", $this->calculator->divide("5",3));
        $this->assertEquals("Please enter integer in both values", $this->calculator->divide("5","a"));
    }
}