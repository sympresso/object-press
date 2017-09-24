<?php

namespace Sympresso\ObjectPress\CoreExtension;

class TransientFunctions extends Extension
{

    const FUNCTION_NAMESPACE = 'transient';

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
     * https://developer.wordpress.org/reference/functions/set_transient/
     * @param $transient
     * @param $value
     * @param int $expiration
     * @return bool
     */
    public function set_transient($transient, $value, $expiration = 0)
    {
        return set_transient($transient, $value, $expiration);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_transient/
     * @param $transient
     * @return mixed
     */
    public function get_transient($transient)
    {
        return get_transient($transient);
    }

    /**
     * https://developer.wordpress.org/reference/functions/delete_transient/
     * @param $transient
     * @return bool
     */
    public function delete_transient($transient)
    {
        return delete_transient($transient);
    }

    /**
     * https://developer.wordpress.org/reference/functions/set_site_transient/
     * @param $transient
     * @param $value
     * @param int $expiration
     * @return bool
     */
    public function set_site_transient($transient, $value, $expiration = 0)
    {
        return set_site_transient($transient, $value, $expiration);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_site_transient/
     * @param $transient
     * @return mixed
     */
    public function get_site_transient($transient)
    {
        return get_site_transient($transient);
    }

    /**
     * https://developer.wordpress.org/reference/functions/delete_site_transient/
     * @param $transient
     * @return bool
     */
    public function delete_site_transient($transient)
    {
        return delete_site_transient($transient);
    }
}