<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\AbstractExtension;

class ThemeFunctions extends AbstractExtension
{
    const FUNCTION_NAMESPACE = 'theme';

    /**
     * @return string
     */
    public function getExtensionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_theme_support/
     * @param $feature
     * @return bool|void
     */
    public function add_theme_support($feature)
    {
        return add_theme_support($feature);
    }

    /**
     * https://developer.wordpress.org/reference/functions/current_theme_supports/
     * @param $feature
     * @return bool
     */
    public function current_theme_supports($feature)
    {
        return current_theme_supports($feature);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_current_theme/
     * @return string
     * @deprecated
     */
    public function get_current_theme()
    {
        return get_current_theme();
    }


    /**
     * https://developer.wordpress.org/reference/functions/get_theme/
     * @param $theme
     * @return array|null
     * @deprecated
     */
    public function get_theme($theme)
    {
        return get_theme($theme);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_themes/
     * @param array $args
     * @return array
     */
    public function wp_get_themes($args = array())
    {
        return wp_get_themes($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_theme_data/
     * @param $theme_file
     * @return array
     * @deprecated
     */
    public function get_theme_data($theme_file)
    {
        return get_theme_data($theme_file);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_theme_support/
     * @param $feature
     * @return mixed
     */
    public function get_theme_support($feature)
    {
        return get_theme_support($feature);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_theme_mod/
     * @param $name
     * @param bool $default
     * @return string
     */
    public function get_theme_mod($name, $default = false)
    {
        return get_theme_mod($name, $default);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_theme_mods/
     * @return array|void
     */
    public function get_theme_mods()
    {
        return get_theme_mods();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_theme_root/
     * @param bool $stylesheet_or_template
     * @return string
     */
    public function get_theme_root($stylesheet_or_template = false)
    {
        return get_theme_root($stylesheet_or_template);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_theme_roots/
     * @return array|string
     */
    public function get_theme_roots()
    {
        return get_theme_roots();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_theme_root_uri/
     * @param bool $stylesheet_or_template
     * @param bool $theme_root
     * @return string
     */
    public function get_theme_root_uri($stylesheet_or_template = false, $theme_root = false)
    {
        return get_theme_root_uri($stylesheet_or_template, $theme_root);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_themes/
     * @return array
     * @deprecated
     */
    public function get_themes()
    {
        return get_themes();
    }

    /**
     * https://developer.wordpress.org/reference/functions/preview_theme/
     * @deprecated
     */
    public function preview_theme()
    {
        return preview_theme();
    }

    /**
     * https://developer.wordpress.org/reference/functions/preview_theme_ob_filter/
     * @param $content
     * @return string
     * @deprecated
     */
    public function preview_theme_ob_filter($content)
    {
        return preview_theme_ob_filter($content);
    }

    /**
     * https://developer.wordpress.org/reference/functions/preview_theme_ob_filter_callback/
     * @param $matches
     * @return string
     * @deprecated
     */
    public function preview_theme_ob_filter_callback($matches)
    {
        return preview_theme_ob_filter_callback($matches);
    }

    /**
     * https://developer.wordpress.org/reference/functions/register_theme_directory/
     * @param $directory
     * @return bool
     */
    public function register_theme_directory($directory)
    {
        return register_theme_directory($directory);
    }

    /**
     * https://developer.wordpress.org/reference/functions/remove_theme_mod/
     * @param $name
     */
    public function remove_theme_mod($name)
    {
        return remove_theme_mod($name);
    }

    /**
     * https://developer.wordpress.org/reference/functions/remove_theme_mods/
     */
    public function remove_theme_mods()
    {
        return remove_theme_mods();
    }

    /**
     * https://developer.wordpress.org/reference/functions/remove_theme_support/
     * @param $feature
     * @return bool|void
     */
    public function remove_theme_support($feature)
    {
        return remove_theme_support($feature);
    }

    /**
     * https://developer.wordpress.org/reference/functions/require_if_theme_supports/
     * @param $feature
     * @param $include
     * @return bool
     */
    public function require_if_theme_supports($feature, $include)
    {
        return require_if_theme_supports($feature, $include);
    }

    /**
     * https://developer.wordpress.org/reference/functions/search_theme_directories/
     * @param bool $force
     * @return array|false
     */
    public function search_theme_directories($force = false)
    {
        return search_theme_directories($force);
    }

    /**
     * https://developer.wordpress.org/reference/functions/set_theme_mod/
     * @param $name
     * @param $value
     */
    public function set_theme_mod($name, $value)
    {
        return set_theme_mod($name, $value);
    }

    /**
     * https://developer.wordpress.org/reference/functions/switch_theme/
     * @param $stylesheet
     */
    public function switch_theme($stylesheet)
    {
        return switch_theme($stylesheet);
    }

    /**
     * https://developer.wordpress.org/reference/functions/validate_current_theme/
     * @return bool
     */
    public function validate_current_theme()
    {
        return validate_current_theme();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_theme/
     * @param null $stylesheet
     * @param null $theme_root
     * @return \WP_Theme
     */
    public function wp_get_theme($stylesheet = null, $theme_root = null)
    {
        return wp_get_theme($stylesheet, $theme_root);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_clean_themes_cache/
     * @param bool $clear_update_cache
     */
    public function wp_clean_themes_cache( $clear_update_cache = true )
    {
        wp_clean_themes_cache( $clear_update_cache );
    }
}