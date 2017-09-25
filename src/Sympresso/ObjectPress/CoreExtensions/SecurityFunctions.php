<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\AbstractExtension;

class SecurityFunctions extends AbstractExtension
{

    const FUNCTION_NAMESPACE = 'security';

    /**
     * @return string
     */
    public function getExtensionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/check_admin_referer/
     * @param int $action
     * @param string $query_arg
     * @return false|int
     */
    public function check_admin_referer($action = -1, $query_arg = '_wpnonce')
    {
        return check_admin_referer($action, $query_arg);
    }

    /**
     * https://developer.wordpress.org/reference/functions/check_ajax_referer/
     * @param int $action
     * @param bool $query_arg
     * @param bool $die
     * @return false|int
     */
    public function check_ajax_referer($action = -1, $query_arg = false, $die = true)
    {
        return check_ajax_referer($action, $query_arg, $die);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_create_nonce/
     * @param int $action
     * @return string
     */
    public function wp_create_nonce($action = -1)
    {
        return wp_create_nonce($action);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_explain_nonce/
     * @param $action
     * @return string
     * @deprecated
     */
    public function wp_explain_nonce($action)
    {
        return wp_explain_nonce($action);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_original_referer/
     * @return false|string
     */
    public function wp_get_original_referer()
    {
        return wp_get_original_referer();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_referer/
     * @return false|string
     */
    public function wp_get_referer()
    {
        return wp_get_referer();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_nonce_ays/
     * @param $action
     */
    public function wp_nonce_ays($action)
    {
        return wp_nonce_ays($action);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_nonce_field/
     * @param int $action
     * @param string $name
     * @param bool $referer
     * @param bool $echo
     * @return string
     */
    public function wp_nonce_field($action = -1, $name = "_wpnonce", $referer = true, $echo = true)
    {
        return wp_nonce_field($action, $name, $referer, $echo);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_nonce_url/
     * @param $actionurl
     * @param int $action
     * @param string $name
     * @return string
     */
    public function wp_nonce_url($actionurl, $action = -1, $name = '_wpnonce')
    {
        return wp_nonce_url($actionurl, $action, $name);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_original_referer_field/
     * @param bool $echo
     * @param string $jump_back_to
     * @return string
     */
    public function wp_original_referer_field($echo = true, $jump_back_to = 'current')
    {
        return wp_original_referer_field($echo, $jump_back_to);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_referer_field/
     * @param bool $echo
     * @return string
     */
    public function wp_referer_field($echo = true)
    {
        return wp_referer_field($echo);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_verify_nonce/
     * @param $nonce
     * @param int $action
     * @return false|int
     */
    public function wp_verify_nonce($nonce, $action = -1)
    {
        return wp_verify_nonce($nonce, $action);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_salt/
     * @param string $scheme
     * @return string
     */
    public function wp_salt($scheme = 'auth')
    {
        return wp_salt($scheme);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_hash/
     * @param $data
     * @param string $scheme
     * @return string
     */
    public function wp_hash($data, $scheme = 'auth')
    {
        return wp_hash($data, $scheme = 'auth');
    }
}