<?php

namespace Sympresso\ObjectPress;

interface ExtensionInterface
{
    /**
     * @return string
     */
    public function getFunctionNamespace();

    /**
     * @return mixed
     */
    function getGlobalVariables();

    /**
     * @return array
     */
    function getExcludedFunctions();
}