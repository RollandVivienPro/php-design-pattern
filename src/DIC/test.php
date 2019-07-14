<?php

namespace App\DIC;

use App\DIC\DIC;
use App\DIC\Beta;
use App\DIC\CoBeta;
use App\Singleton\Singleton;

require_once 'vendor/autoload.php';

$dic = new DIC();

// $dic->set('\App\DIC\CoBeta', function(){
//     return new CoBeta();
// });

// $dic->set('\App\Singleton\Singleton', function () {
//     return Singleton::getInstance();
// });

// $dic->set('\App\DIC\Beta', function() use ($dic) {
//     return new Beta($dic->get('\App\DIC\CoBeta'),$dic->get('\App\Singleton\Singleton'));
// });

var_dump(($dic->get('\App\DIC\Beta')));
var_dump(($dic->get('\App\DIC\Beta')));









