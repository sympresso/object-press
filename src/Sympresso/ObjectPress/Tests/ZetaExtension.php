<?php

namespace Sympresso\ObjectPress\Tests;

use Sympresso\ObjectPress\AbstractExtension;

class ZetaExtension extends AbstractExtension
{
    public function getExtensionNamespace()
    {
        return 'zeta';
    }

    public function foo()
    {

    }

    public function bar()
    {

    }

    public function getGlobalVariables()
    {
        return array(
            'fooGlobal',
        );
    }
}