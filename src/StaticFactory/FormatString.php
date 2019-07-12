<?php

namespace App\StaticFactory;

use App\StaticFactory\FormatterInterface;


class FormatString implements FormatterInterface 
{

    public function getFormat() {
        return 'string format';
    }
       
}