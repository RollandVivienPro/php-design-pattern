<?php
namespace App\Singleton;

require_once('vendor/autoload.php');

use App\Singleton\Singleton;

$singleton = Singleton::getInStance();
$singleton2 = Singleton::getInStance();
$singleton3 = Singleton::getInStance();

echo $singleton->getId() . PHP_EOL;
echo $singleton2->getId() . PHP_EOL;
echo $singleton3->getId() . PHP_EOL;