<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\AbstractExtension;

class RedirectFunctions extends AbstractExtension
{
    const FUNCTION_NAMESPACE = 'redirect';

    /**
     * @return string
     */
    public function getExtensionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
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