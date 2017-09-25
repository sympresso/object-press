<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\AbstractExtension;

class CookieFunctions extends AbstractExtension
{
    const FUNCTION_NAMESPACE = 'cookie';

    /**
     * @return string
     */
    public function getExtensionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
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