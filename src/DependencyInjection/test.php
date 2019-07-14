<?php


class Test {

}

class A {

    private $test;

    public function __construct(){
        $this->test = new Test(); //////// bad practice

    }

}

$a = new A();

class B
{
    private $test;

    public function __construct(Test $test) //////// good practice
    {
        $this->test = $test; 
    }
}

$test = new Test();
$b = new B($test);
