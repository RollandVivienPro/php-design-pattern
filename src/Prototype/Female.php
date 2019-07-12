<?php

namespace App\Prototype;

use App\Prototype\HumanAbstract;

class Female extends HumanAbstract
{
    protected $sexe = 'F';
     
    public function __clone()
    {
    }
}
