<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\AbstractExtension;

class OptionFunctions extends AbstractExtension
{
    const FUNCTION_NAMESPACE = 'option';

    /**
     * @return string
     */
    public function getExtensionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_option/
     * @param $option
     * @param string $value
     * @param string $deprecated
     * @param string $autoload
     * @return bool
     */
    public function add_option($option, $value = '', $deprecated = '', $autoload = 'yes')
    {
        return add_option($option, $value, $deprecated, $autoload);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_site_option/
     * @param $option
     * @param $value
     * @return bool
     */
    public function add_site_option($option, $value)
    {
        return add_site_option($option, $value);
    }

    /**
     * https://developer.wordpress.org/reference/functions/delete_option/
     * @param $option
     * @return bool
     */
    public function delete_option($option)
    {
        return delete_option($option);
    }

    /**
     * https://developer.wordpress.org/reference/functions/delete_site_option/
     * @param $option
     * @return bool
     */
    public function delete_site_option($option)
    {
        return delete_site_option($option);
    }

    /**
     * https://developer.wordpress.org/reference/functions/form_option/
     * @param $option
     */
    public function form_option($option)
    {
        return form_option($option);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_alloptions/
     * @return array
     * @deprecated
     */
    public function get_alloptions()
    {
        return get_alloptions();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_site_option/
     * @param $option
     * @param bool $default
     * @param bool $deprecated
     * @return mixed
     */
    public function get_site_option($option, $default = false, $deprecated = true)
    {
        return get_site_option($option, $default, $deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_site_url/
     * @param null $blog_id
     * @param string $path
     * @param null $scheme
     * @return string
     */
    public function get_site_url($blog_id = null, $path = '', $scheme = null)
    {
        return get_site_url($blog_id, $path, $scheme);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_admin_url/
     * @param null $blog_id
     * @param string $path
     * @param string $scheme
     * @return string
     */
    public function get_admin_url($blog_id = null, $path = '', $scheme = 'admin')
    {
        return get_admin_url($blog_id, $path, $scheme);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_user_option/
     * @param $option
     * @param int $user
     * @param string $deprecated
     * @return mixed
     */
    public function get_user_option($option, $user = 0, $deprecated = '')
    {
        return get_user_option($option, $user, $deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_option/
     * @param $option
     * @param bool $default
     * @return mixed|void
     */
    public function get_option($option, $default = false)
    {
        return get_option($option, $default);
    }

    /**
     * https://developer.wordpress.org/reference/functions/update_option/
     * @param $option
     * @param $value
     * @param null $autoload
     * @return bool
     */
    public function update_option($option, $value, $autoload = null)
    {
        return update_option($option, $value, $autoload);
    }

    /**
     * https://developer.wordpress.org/reference/functions/update_site_option/
     * @param $option
     * @param $value
     * @return bool
     */
    public function update_site_option($option, $value)
    {
        return update_site_option($option, $value);
    }

    /**
     * https://developer.wordpress.org/reference/functions/update_user_option/
     * @param $user_id
     * @param $option_name
     * @param $newvalue
     * @param bool $global
     * @return bool|int
     */
    public function update_user_option($user_id, $option_name, $newvalue, $global = false)
    {
        return update_user_option($user_id, $option_name, $newvalue, $global);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_load_alloptions/
     * @return array
     */
    public function wp_load_alloptions()
    {
        return wp_load_alloptions();
    }
}