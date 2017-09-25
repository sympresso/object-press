<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\AbstractExtension;

class HttpFunctions extends AbstractExtension
{
    const FUNCTION_NAMESPACE = 'http';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_remote_get/
     * @param $url
     * @param array $args
     * @return array|\WP_Error
     */
    public function wp_remote_get($url, $args = array())
    {
        return wp_remote_get($url, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_remote_retrieve_body/
     * @param $response
     * @return string
     */
    public function wp_remote_retrieve_body($response)
    {
        return wp_remote_retrieve_body($response);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_http_headers/
     * @param $url
     * @param $deprecated
     * @return bool|string
     */
    public function wp_get_http_headers($url, $deprecated = false)
    {
        return wp_get_http_headers($url, $deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_remote_fopen/
     * @param $uri
     * @return false|string
     */
    public function wp_remote_fopen($uri)
    {
        return wp_remote_fopen($uri);
    }
}