<?php

namespace Sympresso\ObjectPress\Tests;

use Sympresso\ObjectPress\AbstractExtension;

class FooExtension extends AbstractExtension
{
    public function getExtensionNamespace()
    {
        return 'filter';
    }
}