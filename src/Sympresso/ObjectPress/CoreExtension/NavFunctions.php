<?php

namespace Sympresso\ObjectPress\CoreExtension;

class NavFunctions extends Extension
{

    const FUNCTION_NAMESPACE = 'nav';

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
     * https://developer.wordpress.org/reference/functions/unregister_nav_menu/
     * @param $location
     */
    public function unregister_nav_menu($location)
    {
        unregister_nav_menu($location);
    }

    /**
     * https://developer.wordpress.org/reference/functions/register_nav_menu/
     * @param $location
     * @param $description
     */
    public function register_nav_menu($location, $description)
    {
        return register_nav_menu($location, $description);
    }

    /**
     * https://developer.wordpress.org/reference/functions/register_nav_menus/
     * @param array $locations
     */
    public function register_nav_menus($locations = array())
    {
        return register_nav_menus($locations);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_registered_nav_menus/
     * @return array
     */
    public function get_registered_nav_menus()
    {
        return get_registered_nav_menus();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_create_nav_menu/
     * @param $menu_name
     * @return int|\WP_Error
     */
    public function wp_create_nav_menu($menu_name)
    {
        return wp_create_nav_menu($menu_name);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_nav_menu_items/
     * @param $menu
     * @param array $args
     * @return array|false
     */
    public function wp_get_nav_menu_items($menu, $args = array())
    {
        return wp_get_nav_menu_items($menu, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_nav_menu/
     * @param array $args
     * @return false|string|void
     */
    public function wp_nav_menu($args = array())
    {
        return wp_nav_menu($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/has_nav_menu/
     * @param $location
     * @return bool
     */
    public function has_nav_menu($location)
    {
        return has_nav_menu($location);
    }

    /**
     * @param array $args
     * @return string|void
     */
    public function wp_page_menu($args = array())
    {
        return wp_page_menu($args);
    }
}