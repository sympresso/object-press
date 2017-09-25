<?php

namespace Sympresso\ObjectPress;

interface ExtensionInterface
{
    /**
     * @return string
     */
    public function getExtensionNamespace();

    /**
     * @return mixed
     */
    function getGlobalVariables();

    /**
     * @return array
     */
    function getExcludedFunctions();
}