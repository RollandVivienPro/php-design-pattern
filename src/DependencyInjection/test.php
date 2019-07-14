<?php

/**
 * Undocumented class
 */
class Test
{

}

/**
 * Undocumented class
 */
class A
{

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $_test;

    /**
     * Undocumented function
     */
    public function __construct()
    {
        $this->_test = new Test(); //////// bad practice

    }

}

$a = new A();

/**
 * Undocumented class
 */
class B
{
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $_test;

    /**
     * Undocumented function
     *
     * @param Test $test
     */
    public function __construct(Test $test) //////// good practice
    {
        $this->_test = $test; 
    }
}

$test = new Test();
$b = new B($test);
