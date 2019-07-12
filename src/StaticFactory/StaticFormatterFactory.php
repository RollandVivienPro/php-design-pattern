<?php

namespace App\StaticFactory;

use App\StaticFactory\FormatNumber;
use App\StaticFactory\FormatString;
use App\StaticFactory\FormatterInterface;

class StaticFormatterFactory
{
   
    public static function factory(string $type): FormatterInterface
    {

        if ($type == 'number') {
            return new FormatNumber();
        }
    
        if($type == 'string') {
            return new FormatString();
        }
        
        throw new \InvalidArgumentException('Unknown format given');

    }

}