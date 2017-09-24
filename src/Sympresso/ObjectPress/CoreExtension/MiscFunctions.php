<?php

namespace Sympresso\ObjectPress\CoreExtension;

class MiscFunctions extends Extension
{

    const FUNCTION_NAMESPACE = 'misc';

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
     * https://developer.wordpress.org/reference/functions/bool_from_yn/
     * @param $yn
     * @return bool
     */
    public function bool_from_yn($yn)
    {
        return bool_from_yn($yn);
    }

    /**
     * https://developer.wordpress.org/reference/functions/capital_P_dangit/
     * @param $text
     * @return string
     */
    public function capital_P_dangit($text)
    {
        return capital_P_dangit($text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/do_robots/
     *
     */
    public function do_robots()
    {
        return do_robots();
    }

    /**
     * https://developer.wordpress.org/reference/functions/make_url_footnote/
     * @param $content
     * @return string
     * @deprecated
     */
    public function make_url_footnote($content)
    {
        return make_url_footnote($content);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp/
     * @param string $query_vars
     */
    public function wp($query_vars = '')
    {
        return wp($query_vars);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_die/
     * @param string $message
     * @param string $title
     * @param array $args
     */
    public function wp_die($message = '', $title = '', $args = array())
    {
        return wp_die($message, $title, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_install_defaults/
     * @param $user_id
     */
    public function wp_install_defaults($user_id)
    {
        return wp_install_defaults($user_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_list_pluck/
     * @param $list
     * @param $field
     * @param null $index_key
     * @return array
     */
    public function wp_list_pluck($list, $field, $index_key = null)
    {
        return wp_list_pluck($list, $field, $index_key);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_text_diff/
     * @param $left_string
     * @param $right_string
     * @param null $args
     * @return string
     */
    public function wp_text_diff($left_string, $right_string, $args = null)
    {
        return wp_text_diff($left_string, $right_string, $args);
    }
}