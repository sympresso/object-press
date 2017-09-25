<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\Extension;

class QueryFunctions extends Extension
{

    const FUNCTION_NAMESPACE = 'query';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_query_arg/
     * @return string
     */
    public function add_query_arg()
    {
        return add_query_arg();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_query_var/
     * @param $var
     * @param string $default
     * @return mixed
     */
    public function get_query_var($var, $default = '')
    {
        return get_query_var($var, $default);
    }

    /**
     * https://developer.wordpress.org/reference/functions/query_posts/
     * @param $query
     * @return array
     */
    public function query_posts($query)
    {
        return query_posts($query);
    }

    /**
     * https://developer.wordpress.org/reference/functions/remove_query_arg/
     * @param $key
     * @param bool $query
     * @return string
     */
    public function remove_query_arg($key, $query = false)
    {
        return remove_query_arg($key, $query);
    }

    /**
     * https://developer.wordpress.org/reference/functions/rewind_posts/
     */
    public function rewind_posts()
    {
        return rewind_posts();
    }

    /**
     * https://developer.wordpress.org/reference/functions/setup_postdata/
     * @param $post
     * @return bool
     */
    public function setup_postdata($post)
    {
        return setup_postdata($post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_parse_args/
     * @param $args
     * @param string $defaults
     * @return array
     */
    public function wp_parse_args($args, $defaults = '')
    {
        return wp_parse_args($args, $defaults);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_reset_postdata/
     */
    public function wp_reset_postdata()
    {
        return wp_reset_postdata();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_reset_query/
     */
    public function wp_reset_query()
    {
        return wp_reset_query();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_num_queries/
     * @return mixed
     */
    public function get_num_queries()
    {
        return get_num_queries();
    }
}