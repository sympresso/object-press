<?php

namespace Sympresso\ObjectPress\CoreExtension;

use Sympresso\ObjectPress\Extension;

class AssetFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'assets';

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
     * https://developer.wordpress.org/reference/functions/wp_dequeue_script/
     * @param $handle
     */
    public function wp_dequeue_script($handle)
    {
        return wp_dequeue_script($handle);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_dequeue_style/
     * @param $handle
     */
    public function wp_dequeue_style($handle)
    {
        return wp_dequeue_style($handle);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_deregister_script/
     * @param $handle
     */
    public function wp_deregister_script($handle)
    {
        return wp_deregister_script($handle);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_deregister_style/
     * @param $handle
     */
    public function wp_deregister_style($handle)
    {
        return wp_deregister_style($handle);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_enqueue_script/
     * @param $handle
     * @param string $src
     * @param array $deps
     * @param bool $ver
     * @param bool $in_footer
     */
    public function wp_enqueue_script($handle, $src = '', $deps = array(), $ver = false, $in_footer = false)
    {
        return wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_enqueue_style/
     * @param $handle
     * @param string $src
     * @param array $deps
     * @param bool $ver
     * @param string $media
     */
    public function wp_enqueue_style($handle, $src = '', $deps = array(), $ver = false, $media = 'all')
    {
        return wp_enqueue_style($handle, $src, $deps, $ver, $media);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_localize_script/
     * @param $handle
     * @param $object_name
     * @param $l10n
     * @return bool
     */
    public function wp_localize_script($handle, $object_name, $l10n)
    {
        return wp_localize_script($handle, $object_name, $l10n);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_register_script/
     * @param $handle
     * @param $src
     * @param array $deps
     * @param bool $ver
     * @param bool $in_footer
     * @return bool
     */
    public function wp_register_script($handle, $src, $deps = array(), $ver = false, $in_footer = false)
    {
        return wp_register_script($handle, $src, $deps, $ver, $in_footer);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_register_style/
     * @param $handle
     * @param $src
     * @param array $deps
     * @param bool $ver
     * @param string $media
     * @return bool
     */
    public function wp_register_style($handle, $src, $deps = array(), $ver = false, $media = 'all')
    {
        return wp_register_style($handle, $src, $deps, $ver, $media);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_script_is/
     * @param $handle
     * @param string $list
     * @return bool
     */
    public function wp_script_is($handle, $list = 'enqueued')
    {
        return wp_script_is($handle, $list);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_style_is/
     * @param $handle
     * @param $list
     * @return bool
     */
    public function wp_style_is($handle, $list)
    {
        return wp_style_is($handle, $list = 'enqueued');
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_add_inline_style/
     * @param $handle
     * @param $data
     * @return bool
     */
    public function wp_add_inline_style( $handle, $data )
    {
        return wp_add_inline_style( $handle, $data );
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_locale_stylesheet_uri/
     * @return string
     */
    public function get_locale_stylesheet_uri()
    {
        return get_locale_stylesheet_uri();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_stylesheet_uri/
     * @return string
     */
    public function get_stylesheet_uri()
    {
        return get_stylesheet_uri();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_stylesheet/
     * @return string
     */
    public function get_stylesheet()
    {
        return get_stylesheet();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_stylesheet_directory/
     * @return string
     */
    public function get_stylesheet_directory()
    {
        return get_stylesheet_directory();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_stylesheet_directory_uri/
     * @return string
     */
    public function get_stylesheet_directory_uri()
    {
        return get_stylesheet_directory_uri();
    }

    /**
     * https://developer.wordpress.org/reference/functions/locale_stylesheet/
     */
    public function locale_stylesheet()
    {
        return locale_stylesheet();
    }
}