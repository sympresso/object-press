<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\AbstractExtension;

class HttpHeaderFunctions extends AbstractExtension
{

    const FUNCTION_NAMESPACE = 'http_header';

    /**
     * @return string
     */
    public function getExtensionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/nocache_headers/
     *
     */
    public function nocache_headers()
    {
        return nocache_headers();
    }

    /**
     * https://developer.wordpress.org/reference/functions/status_header/
     *
     * @param $code
     * @param string $description
     */
    public function status_header($code, $description = '')
    {
        return status_header($code, $description);
    }

    /**
     * https://developer.wordpress.org/reference/functions/cache_javascript_headers/
     *
     */
    public function cache_javascript_headers()
    {
        return cache_javascript_headers();
    }
}