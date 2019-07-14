<?php

namespace App\DIC;

class DIC
{
    private $registry = [];
    private $factories = [];
    private $instances = [];

    public function set(string $key, callable $resolver)
    {
        $this->registry[$key] = $resolver;
    }

    public function setFactory(string $key, callable $resolver)
    {
        $this->factories[$key] = $resolver;
    }

    public function get(string $key)
    {
        if (isset($this->registry[$key])) {
            var_dump('REUSED-----' . array_search($this->registry[$key], $this->registry));
            return $this->registry[$key]();
        }else{
            $this->instances[$key] = $this->_resolve($key);
            $this->registry[$key] = $this->instances[$key];
             var_dump('NEW--------' . array_search($this->registry[$key], $this->registry));
        }

        return $this->registry[$key]();
      
    }

    private function _resolve($key){

        $rfx = new \ReflectionClass($key);
        $singleton = array_key_exists('instance', $rfx->getStaticProperties()) ? true : false;

        if ($rfx->isInstantiable()) {
            $constructor = $rfx->getConstructor();
            if ($constructor) {
                $params = $constructor->getParameters();
                $constructor_parameters = [];

                foreach ($params as $param) {
                    if ($param->getClass()) {
                        $constructor_parameters[] = $this->get($param->getClass()->getName());
                    } else {
                        $constructor_parameters[] = $param->getDefaultValue();
                    }
                }
                return function() use ($rfx,$constructor_parameters) {
                    return $rfx->newInstanceArgs($constructor_parameters);
                };
            } else {
                return  function() use ($rfx) {
                    return $rfx->newInstance();
                };
            }
        } elseif (!$rfx->isInstantiable() && $singleton===true) {
            return function() use ($rfx) {
                return ($rfx->getName())::getInstance();
            };
        } else {
            throw new \Exception($key . " is not an instanciable Class");
        }


    }

    public function dumpRegistry(){
        var_dump($this->registry);
    }
}
