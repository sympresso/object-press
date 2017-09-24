<?php

namespace Sympresso\ObjectPress;

class Globals implements \ArrayAccess
{
    protected $globals;

    /**
     * @param array $names
     */
    public function addGlobals(array $names)
    {
        foreach ($names as $name) {
            $this->addGlobal($name);
        }
    }

    /**
     * @param $name
     */
    public function addGlobal($name)
    {
        $this[$name] = $name;
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->globals[$offset]);
    }

    /**
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        if (isset($this->globals[$offset])) {
            return $GLOBALS[$offset];
        }
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->globals[$offset] = $value;
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        unset($this->globals[$offset]);
    }
}