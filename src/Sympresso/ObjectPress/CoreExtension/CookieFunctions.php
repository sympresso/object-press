<?php

namespace Sympresso\ObjectPress\CoreExtension;

use Sympresso\ObjectPress\Extension;

class CookieFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'cookie';

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
     * https://developer.wordpress.org/reference/functions/wp_clearcookie/
     * @deprecated
     */
    public function wp_clearcookie()
    {
        return wp_clearcookie();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_cookie_login/
     * @deprecated
     * @return bool
     */
    public function wp_get_cookie_login()
    {
        return wp_get_cookie_login();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_set_auth_cookie/
     * @param $user_id
     * @param bool $remember
     * @param string $secure
     * @param string $token
     */
    public function wp_set_auth_cookie($user_id, $remember = false, $secure = '', $token = '')
    {
        return wp_set_auth_cookie($user_id, $remember, $secure, $token);
    }
}