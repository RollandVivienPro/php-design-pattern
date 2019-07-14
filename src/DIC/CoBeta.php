<?php

namespace App\DIC;

/**
 * Undocumented class
 */
class CoBeta
{
    private $_id;

    /**
     * Undocumented function
     */
    public function __construct()
    {
        $this->_id = uniqid();
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getId()
    {
        return $this->_id;
    }
}
