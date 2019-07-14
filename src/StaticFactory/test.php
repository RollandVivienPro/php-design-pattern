<?php
namespace App\StaticFactory;

require_once 'vendor/autoload.php';

$formatter = StaticFormatterFactory::factory("string");

echo $formatter->getFormat();

////////////////////////////////////////////////
// run php src/staticfactory/test.php

// this test show the concept : we don't create an instance with new FormatString() but with StaticFormatterFactory::factory("string")
// this pattern can be very userful, specially for dependency injection, if the class take an instance of something in his constructor, it will be declared in the factory, not directly 
