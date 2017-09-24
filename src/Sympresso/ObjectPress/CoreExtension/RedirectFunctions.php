<?php

namespace Sympresso\ObjectPress\CoreExtension;

class RedirectFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'redirect';

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
     * https://developer.wordpress.org/reference/functions/wp_redirect/
     * @param $location
     * @param int $status
     * @return bool
     */
    public function wp_redirect($location, $status = 302)
    {
        return wp_redirect($location, $status);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_safe_redirect/
     * @param $location
     * @param int $status
     */
    public function wp_safe_redirect($location, $status = 302)
    {
        return wp_safe_redirect($location, $status);
    }
}