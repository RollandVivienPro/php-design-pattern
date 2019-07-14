<?php

namespace App\DIC;

use App\DIC\CoBeta;
use App\Singleton\Singleton;


class Beta
{
    private $cb;
    private $tab;
    private $singleton;

    public function __construct( CoBeta $cb, Singleton $singleton)
    {
        $this->singleton = $singleton;
        $this->cb = $cb;
    }

    public function getId(){
        return $this->cb->getId();
    }

}
