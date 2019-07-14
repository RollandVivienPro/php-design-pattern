<?php

namespace App\DIC;

/**
 * Undocumented class
 */
class DIC
{
    private $_registry = [];

    /**
     * Undocumented function
     *
     * @param  string   $key
     * @param  callable $resolver
     * @return void
     */
    public function set(string $key, callable $resolver)
    {
        $this->_registry[$key] = $resolver;
    }

    /**
     * Undocumented function
     *
     * @param  string $key
     * @return void
     */
    public function get(string $key)
    {
        if (isset($this->_registry[$key])) {
            return $this->_registry[$key]();
        }

        return $this->_resolve($key)();
      
    }

    /**
     * Undocumented function
     *
     * @param  [type] $key
     * @return void
     */
    private function _resolve($key)
    {
        // return an instance for the Class called as string parameter, with recursive system for dependency injection

        try {
            $rfx = new \ReflectionClass($key); // ReflexionClass give us informations about the Class
        }
        catch (\ReflectionException $e){
            throw new \Exception($key . " is not a Class");
        }
        
        $singleton = array_key_exists('instance', $rfx->getStaticProperties()) ? true : false;

        if ($rfx->isInstantiable()) {

            $constructor = $rfx->getConstructor();
            if ($constructor) {
                $params = $constructor->getParameters();
                $constructor_parameters = [];

                foreach ($params as $param) {
                    if ($param->getClass()) { // if the param is a Class, we have to get an instance of it
                        $constructor_parameters[] = $this->get($param->getClass()->getName()); // recursive call to get instance
                    } else {
                        $constructor_parameters[] = $param->getDefaultValue();
                    }
                }
                // we have construct an array of parameters, we can instanciate our Class with parameters with newInstanceArgs($a)
                return function () use ($rfx,$constructor_parameters) {
                    return $rfx->newInstanceArgs($constructor_parameters);
                };
            } else {
                return  function () use ($rfx) {
                    return $rfx->newInstance(); 
                };
            }
        } elseif (!$rfx->isInstantiable() && $singleton===true) { // if the Class is not instanciable, but has static propertie named "instance", we instanciate it as a singleton (this trick only works if we respect this schema for singleton Class)
            return function () use ($rfx) {
                return ($rfx->getName())::getInstance(); // static call
            };
        } else {
            throw new \Exception($key . " is not an instanciable Class");
        }

    }

}
