<?php

namespace App\Prototype;

abstract class HumanAbstract
{
    protected $prenom;
     
    protected $sexe;
         
    public function __construct(string $prenom)
    {
        $this->prenom = $prenom;
    }
     
    public function getSexe(): string
    {
        return $this->sexe;
    }
     
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }
     
    public function getPrenom(): string
    {
        return $this->prenom;
    }
     
    abstract public function __clone();
}
