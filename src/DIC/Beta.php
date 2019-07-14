<?php

namespace App\DIC;

use App\DIC\CoBeta;
use App\Singleton\Singleton;

/**
 * Undocumented class
 */
class Beta
{
    private $_cb;
    private $_tab;
    private $_singleton;
    private $_id;

    /**
     * Undocumented function
     *
     * @param CoBeta    $cb
     * @param Singleton $singleton
     */
    public function __construct( CoBeta $cb, Singleton $singleton)
    {
        $this->_singleton = $singleton;
        $this->_cb = $cb;
        $this->_id = uniqid();
    }

    /**
     * Undocumented function
     *
     * @return CoBeta instance
     */
    public function getCb()
    {
        return $this->_cb;
    }

    /**
     * Undocumented function
     *
     * @return integer
     */
    public function getId()
    {
        return $this->_id;
    }

}
