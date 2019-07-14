<?php
namespace App\Singleton;

class Singleton
{
  protected static $instance; // the class instance
  private $id; // just for test, we can remove it

  protected function __construct() // constructor has to be private, the singleton class can't be called as normal
  {
    $this->id = uniqid(); // just for test, we can remote it
  } 

  protected function __clone()
  {
  } 
  
  public static function getInstance()
  {
      if (!isset(self::$instance)) { 
        self::$instance = new Singleton(); 
      }
      return self::$instance;
  }

  public function getId(){ // just for test, we can remove it
    return $this->id;
  }

}
