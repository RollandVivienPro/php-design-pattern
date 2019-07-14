<?php

namespace App\StaticFactory;

use App\StaticFactory\FormatterInterface;


class FormatNumber implements FormatterInterface
{

    public function getFormat()
    {
        return 'number format';
    }

}
