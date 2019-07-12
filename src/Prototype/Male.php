<?php

namespace App\Prototype;

use App\Prototype\HumanAbstract;

class Male extends HumanAbstract
{
    protected $sexe = 'M';
 
    public function __clone()
    {
    }
}
