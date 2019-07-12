<?php
namespace App\StaticFactory;

require_once('vendor/autoload.php');

$formatter = StaticFormatterFactory::factory("string");

echo $formatter->getFormat();
