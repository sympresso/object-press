<?php

namespace Sympresso\ObjectPress;

abstract class Extension
{
    /**
     * @return string
     */
    abstract public function __getNamespace();

    /**
     * @return mixed
     */
    abstract public function __getGlobalVariables();

    /**
     * @return array
     */
    public function __getExcludedFunctions()
    {
        return array(
            'getNamespace',
            'getGlobalVariables'
        );
    }
}