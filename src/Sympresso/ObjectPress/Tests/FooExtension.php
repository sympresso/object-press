<?php

namespace Sympresso\ObjectPress\Tests;

use Sympresso\ObjectPress\Extension;

class FooExtension extends Extension
{
    public function getFunctionNamespace()
    {
        return 'filter';
    }
}