<?php
namespace App\Singleton;

class Singleton
{
  protected static $instance; // Contiendra l'instance de notre classe.
  private $id;

  protected function __construct()
  {
    $this->id = uniqid();
  } // Constructeur en privé.
  protected function __clone()
  {
  } // Méthode de clonage en privé aussi.
  
  public static function getInstance()
  {
      if (!isset(self::$instance)) { // Si on n'a pas encore instancié notre classe.
        self::$instance = new Singleton(); // On s'instancie nous-mêmes. :)
      }
    
      return self::$instance;
  }

  public function getId(){
    return $this->id;
  }
}
