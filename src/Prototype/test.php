<?php
namespace App\Prototype;

use App\Prototype\Male;
use App\Prototype\Female;

require_once('vendor/autoload.php');


$prenoms = [
        'René', 'Eric', 'Jean', 'Robert', 'Marius',
        'Kevin', 'Léo', 'Jacques', 'Loïc', 'John',
        'Alexis', 'Kenneth', 'Nathanaël', 'Christophe'
    ];
     
$male1 = new Male('Rrrnnngrrwggl');
 
$numeroClone = 0;
$clones = [];
 
foreach ($prenoms as $prenom) {
    ++$numeroClone;
     
    $nomClone = 'clone'.$numeroClone;
    $$nomClone = clone $male1;
    $$nomClone->setPrenom($prenom);
    $clones[] = $$nomClone;
}
 
$prenoms = [
        'Lise', 'Marie', 'Ninon', 'Rachida', 'Ana',
        'Martine', 'Svetlana', 'Eve', 'Carole',
        'Sylvie', 'Laurie', 'Zhang', 'Fatoumata'
    ];
 
$femelle1 = new Female('Nyyyynyaaa');
     
foreach ($prenoms as $prenom) {
    ++$numeroClone;
     
    $nomClone = 'clone'.$numeroClone;
    $$nomClone = clone $femelle1;
    $$nomClone->setPrenom($prenom);
    $clones[] = $$nomClone;
}
 
foreach ($clones as $clone) {
    echo $clone->getSexe().'/'.$clone->getPrenom().PHP_EOL;
}
