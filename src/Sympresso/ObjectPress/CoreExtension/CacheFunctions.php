<?php

namespace Sympresso\ObjectPress\CoreExtension;

use Sympresso\ObjectPress\Extension;

class CacheFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'cache';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_cache_set/
     * @param $key
     * @param $data
     * @param string $group
     * @param int $expire
     * @return bool
     */
    public function wp_cache_set($key, $data, $group = '', $expire = 0)
    {
        return wp_cache_set($key, $data, $group, $expire);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_cache_get/
     * @param $key
     * @param string $group
     * @param bool $force
     * @param null $found
     * @return bool|mixed
     */
    public function wp_cache_get($key, $group = '', $force = false, &$found = null)
    {
        return wp_cache_get($key, $group, $force, $found);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_cache_reset/
     * @deprecated
     */
    public function wp_cache_reset()
    {
        return wp_cache_reset();
    }

    /**
     * https://developer.wordpress.org/reference/functions/clean_blog_cache/
     * @param $blog
     */
    public function clean_blog_cache($blog)
    {
        return clean_blog_cache($blog);
    }
}