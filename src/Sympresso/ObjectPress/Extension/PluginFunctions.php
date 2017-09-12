<?php

namespace Sympresso\ObjectPress\Extension;

class PluginFunctions extends WpExtension
{

    const FUNCTION_NAMESPACE = 'plugin';

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
     * https://developer.wordpress.org/reference/functions/plugin_basename/
     * @param $file
     * @return string
     */
    public function plugin_basename($file)
    {
        return plugin_basename($file);
    }

    /**
     * https://developer.wordpress.org/reference/functions/plugins_url/
     * @param string $path
     * @param string $plugin
     * @return string
     */
    public function plugins_url($path = '', $plugin = '')
    {
        return plugins_url($path, $plugin);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_plugin_data/
     * @param $plugin_file
     * @param bool $markup
     * @param bool $translate
     * @return array
     */
    public function get_plugin_data($plugin_file, $markup = true, $translate = true)
    {
        return get_plugin_data($plugin_file, $markup, $translate);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_admin_page_title/
     * @return array|string|void
     */
    public function get_admin_page_title()
    {
        return get_admin_page_title();
    }

    /**
     * https://developer.wordpress.org/reference/functions/plugin_dir_path/
     * @param $file
     * @return string
     */
    public function plugin_dir_path($file)
    {
        return plugin_dir_path($file);
    }

    /**
     * https://developer.wordpress.org/reference/functions/register_activation_hook/
     * @param $file
     * @param $function
     */
    public function register_activation_hook($file, $function)
    {
        return register_activation_hook($file, $function);
    }

    /**
     * https://developer.wordpress.org/reference/functions/register_deactivation_hook/
     * @param $file
     * @param $function
     */
    public function register_deactivation_hook($file, $function)
    {
        return register_deactivation_hook($file, $function);
    }

    /**
     * https://developer.wordpress.org/reference/functions/menu_page_url/
     * @param $menu_slug
     * @param bool $echo
     * @return string
     */
    public function menu_page_url($menu_slug, $echo = true)
    {
        return menu_page_url($menu_slug, $echo);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_plugin_active/
     * @param $plugin
     * @return bool
     */
    public function is_plugin_active($plugin)
    {
        return is_plugin_active($plugin);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_plugin_active_for_network/
     * @param $plugin
     * @return bool
     */
    public function is_plugin_active_for_network($plugin)
    {
        return is_plugin_active_for_network($plugin);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_plugin_inactive/
     * @param $plugin
     * @return bool
     */
    public function is_plugin_inactive($plugin)
    {
        return is_plugin_inactive($plugin);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_plugin_page/
     * @return bool
     * @deprecated
     */
    public function is_plugin_page()
    {
        return is_plugin_page();
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_contextual_help/
     * @param $screen
     * @param $help
     * @deprecated
     */
    public function add_contextual_help($screen, $help)
    {
        return add_contextual_help($screen, $help);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_plugins/
     * @param string $plugin_folder
     * @return array
     */
    public function get_plugins($plugin_folder = '')
    {
        return get_plugins($plugin_folder = '');
    }

    /**
     * @param $file
     * @return string
     * https://developer.wordpress.org/reference/functions/plugin_dir_url/
     */
    public function plugin_dir_url($file)
    {
        return plugin_dir_url($file);
    }
}