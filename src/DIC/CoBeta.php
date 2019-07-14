<?php

namespace App\DIC;

class CoBeta
{
    private $id;

    public function __construct()
    {
        $this->id = uniqid();
    }

    public function getId(){
        return $this->id;
    }
}
