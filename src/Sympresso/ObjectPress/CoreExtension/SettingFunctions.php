<?php

namespace Sympresso\ObjectPress\CoreExtension;

class SettingFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'setting';

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
     * https://developer.wordpress.org/reference/functions/register_setting/
     * @param $option_group
     * @param $option_name
     * @param array $args
     */
    public function register_setting($option_group, $option_name, $args = array())
    {
        return register_setting($option_group, $option_name, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/unregister_setting/
     * @param $option_group
     * @param $option_name
     * @param string $deprecated
     */
    public function unregister_setting($option_group, $option_name, $deprecated = '')
    {
        return unregister_setting($option_group, $option_name, $deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/settings_fields/
     * @param $option_group
     */
    public function settings_fields($option_group)
    {
        return settings_fields($option_group);
    }

    /**
     * https://developer.wordpress.org/reference/functions/do_settings_fields/
     * @param $page
     * @param $section
     */
    public function do_settings_fields($page, $section)
    {
        return do_settings_fields($page, $section);
    }

    /**
     * https://developer.wordpress.org/reference/functions/do_settings_sections/
     * @param $page
     */
    public function do_settings_sections($page)
    {
        return do_settings_sections($page);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_settings_field/
     * @param $id
     * @param $title
     * @param $callback
     * @param $page
     * @param string $section
     * @param array $args
     */
    public function add_settings_field($id, $title, $callback, $page, $section = 'default', $args = array())
    {
        return add_settings_field($id, $title, $callback, $page, $section, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_settings_section/
     * @param $id
     * @param $title
     * @param $callback
     * @param $page
     */
    public function add_settings_section($id, $title, $callback, $page)
    {
        return add_settings_section($id, $title, $callback, $page);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_settings_error/
     * @param $setting
     * @param $code
     * @param $message
     * @param string $type
     */
    public function add_settings_error($setting, $code, $message, $type = 'error')
    {
        return add_settings_error($setting, $code, $message, $type);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_settings_errors/
     * @param string $setting
     * @param bool $sanitize
     * @return array
     */
    public function get_settings_errors($setting = '', $sanitize = false)
    {
        return get_settings_errors($setting, $sanitize);
    }

    /**
     * https://developer.wordpress.org/reference/functions/settings_errors/
     * @param string $setting
     * @param bool $sanitize
     * @param bool $hide_on_update
     */
    public function settings_errors($setting = '', $sanitize = false, $hide_on_update = false)
    {
        return settings_errors($setting, $sanitize, $hide_on_update);
    }
}