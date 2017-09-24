<?php

namespace Sympresso\ObjectPress\CoreExtension;

class HttpHeaderFunctions extends Extension
{

    const FUNCTION_NAMESPACE = 'http_header';

    /**
     * @return string
     */
    public function __getNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * @return array
     */
    public function __getGlobalVariables()
    {
        return array();
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