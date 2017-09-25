<?php

namespace Sympresso\ObjectPress\CoreExtension;

use Sympresso\ObjectPress\Extension;

class LanguageFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'lang';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/__/
     * @param $text
     * @param string $domain
     * @return string|void
     */
    public function __($text, $domain = 'default')
    {
        return __($text, $domain);
    }

    /**
     * https://developer.wordpress.org/reference/functions/_x/
     * @param $text
     * @param $context
     * @param string $domain
     * @return string|void
     */
    public function _x($text, $context, $domain = 'default')
    {
        return _x($text, $context, $domain);
    }

    /**
     * https://developer.wordpress.org/reference/functions/_n/
     * @param $single
     * @param $plural
     * @param $number
     * @param string $domain
     * @return string
     */
    public function _n($single, $plural, $number, $domain = 'default')
    {
        return _n($single, $plural, $number, $domain);
    }

    /**
     * https://developer.wordpress.org/reference/functions/_nx/
     * @param $single
     * @param $plural
     * @param $number
     * @param $context
     * @param string $domain
     * @return string
     */
    public function _nx($single, $plural, $number, $context, $domain = 'default')
    {
        return _nx($single, $plural, $number, $context, $domain);
    }

    /**
     * https://developer.wordpress.org/reference/functions/_e/
     * @param $text
     * @param string $domain
     *
     */
    public function _e($text, $domain = 'default')
    {
        return _e($text, $domain);
    }

    /**
     * https://developer.wordpress.org/reference/functions/_ex/
     * @param $text
     * @param $context
     * @param string $domain
     * @return string
     *
     */
    public function _ex($text, $context, $domain = 'default')
    {
        return _ex($text, $context, $domain);
    }

    /**
     * https://developer.wordpress.org/reference/functions/__ngettext/
     * @return mixed
     * @deprecated
     */
    public function __ngettext()
    {
        return __ngettext();
    }

    /**
     * https://developer.wordpress.org/reference/functions/esc_attr__/
     * @param $text
     * @param string $domain
     * @return string
     */
    public function esc_attr__($text, $domain = 'default')
    {
        return esc_attr__($text, $domain);
    }

    /**
     * https://developer.wordpress.org/reference/functions/esc_attr_e/
     * @param $text
     * @param string $domain
     */
    public function esc_attr_e($text, $domain = 'default')
    {
        return esc_attr_e($text, $domain);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_locale/
     * @return string
     */
    public function get_locale()
    {
        return get_locale();
    }

    /**
     * https://developer.wordpress.org/reference/functions/load_default_textdomain/
     * @param null $locale
     * @return bool
     */
    public function load_default_textdomain($locale = null)
    {
        return load_default_textdomain($locale);
    }

    /**
     * https://developer.wordpress.org/reference/functions/load_plugin_textdomain/
     * @param $domain
     * @param bool $deprecated
     * @param bool $plugin_rel_path
     * @return bool
     */
    public function load_plugin_textdomain($domain, $deprecated = false, $plugin_rel_path = false)
    {
        return load_plugin_textdomain($domain, $deprecated, $plugin_rel_path);
    }

    /**
     * https://developer.wordpress.org/reference/functions/load_muplugin_textdomain/
     * @param $domain
     * @param string $mu_plugin_rel_path
     * @return bool
     */
    public function load_muplugin_textdomain($domain, $mu_plugin_rel_path = '')
    {
        return load_muplugin_textdomain($domain, $mu_plugin_rel_path);
    }

    /**
     * https://developer.wordpress.org/reference/functions/load_textdomain/
     * @param $domain
     * @param $mofile
     * @return bool
     */
    public function load_textdomain($domain, $mofile)
    {
        return load_textdomain($domain, $mofile);
    }

    /**
     * https://developer.wordpress.org/reference/functions/load_theme_textdomain/
     * @param $domain
     * @param bool $path
     * @return bool
     */
    public function load_theme_textdomain($domain, $path = false)
    {
        return load_theme_textdomain($domain, $path);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_rtl/
     * @return bool
     */
    public function is_rtl()
    {
        return is_rtl();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_installed_translations/
     * @param $type
     * @return array
     */
    public function wp_get_installed_translations($type)
    {
        return wp_get_installed_translations($type);
    }

    /**
     * https://developer.wordpress.org/reference/functions/language_attributes/
     * @param string $doctype
     */
    public function language_attributes($doctype = 'html')
    {
        return language_attributes($doctype);
    }

    /**
     * https://developer.wordpress.org/reference/functions/locale_stylesheet/
     */
    public function locale_stylesheet()
    {
        return locale_stylesheet();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_locale_stylesheet_uri/
     * @return string
     */
    public function get_locale_stylesheet_uri()
    {
        return get_locale_stylesheet_uri();
    }
}