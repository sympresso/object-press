<?php

namespace Sympresso\ObjectPress\CoreExtension;

use Sympresso\ObjectPress\Extension;

class ShortcodeFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'shortcode';

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
     * https://developer.wordpress.org/reference/functions/add_shortcode/
     * @param $tag
     * @param $func
     */
    public function add_shortcode($tag, $func)
    {
        return add_shortcode($tag, $func);
    }

    /**
     * https://developer.wordpress.org/reference/functions/do_shortcode/
     * @param $content
     * @param bool $ignore_html
     * @return string
     */
    public function do_shortcode($content, $ignore_html = false)
    {
        return do_shortcode($content, $ignore_html);
    }

    /**
     * https://developer.wordpress.org/reference/functions/do_shortcode_tag/
     * @param $m
     * @return false|string
     */
    public function do_shortcode_tag($m)
    {
        return do_shortcode_tag($m);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_shortcode_regex/
     * @param null $tagnames
     * @return string
     */
    public function get_shortcode_regex($tagnames = null)
    {
        return get_shortcode_regex($tagnames);
    }

    /**
     * https://developer.wordpress.org/reference/functions/remove_shortcode/
     * @param $tag
     */
    public function remove_shortcode($tag)
    {
        return remove_shortcode($tag);
    }

    /**
     * https://developer.wordpress.org/reference/functions/remove_all_shortcodes/
     */
    public function remove_all_shortcodes()
    {
        return remove_all_shortcodes();
    }

    /**
     * https://developer.wordpress.org/reference/functions/shortcode_atts/
     * @param $pairs
     * @param $atts
     * @param string $shortcode
     * @return array
     */
    public function shortcode_atts($pairs, $atts, $shortcode = '')
    {
        return shortcode_atts($pairs, $atts, $shortcode);
    }

    /**
     * https://developer.wordpress.org/reference/functions/shortcode_parse_atts/
     * @param $text
     * @return array|string
     */
    public function shortcode_parse_atts($text)
    {
        return shortcode_parse_atts($text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/strip_shortcodes/
     * @param $content
     * @return string
     */
    public function strip_shortcodes($content)
    {
        return strip_shortcodes($content);
    }
}