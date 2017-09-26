<?php

namespace Sympresso\ObjectPress;

abstract class AbstractExtension implements ExtensionInterface
{
    /**
     * @return string
     */
    abstract public function getExtensionNamespace();

    /**
     * @return mixed
     */
    public function getGlobalVariables(){
        return array();
    }

    /**
     * @return array
     */
    public function getExcludedFunctions()
    {
        return array();
    }
}