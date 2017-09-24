<?php

namespace Sympresso\ObjectPress\CoreExtension;

use Sympresso\ObjectPress\Extension;

class FilterFunctions extends Extension
{

    const FUNCTION_NAMESPACE = 'filter';

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
     * https://developer.wordpress.org/reference/functions/the_category_rss/
     * @param $tag
     * @param bool $function_to_check
     * @return false|int
     */
    public function has_filter($tag, $function_to_check = false)
    {
        return has_filter($tag, $function_to_check);
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_category_rss/
     * @param $tag
     * @param $function_to_add
     * @param int $priority
     * @param int $accepted_args
     */
    public function add_filter($tag, $function_to_add, $priority = 10, $accepted_args = 1)
    {
        add_filter($tag, $function_to_add, $priority, $accepted_args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_category_rss/
     * @param $tag
     * @param $value
     * @return mixed|void
     */
    public function apply_filters($tag, $value)
    {
        return apply_filters($tag, $value);
    }

    /**
     * https://developer.wordpress.org/reference/functions/apply_filters_ref_array/
     * @param $tag
     * @param $args
     * @return mixed
     */
    public function apply_filters_ref_array($tag, $args)
    {
        return apply_filters_ref_array($tag, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/current_filter/
     * @return string
     */
    public function current_filter()
    {
        return current_filter();
    }

    /**
     * https://developer.wordpress.org/reference/functions/remove_filter/
     * @param $tag
     * @param $function_to_remove
     * @param int $priority
     * @return bool
     */
    public function remove_filter($tag, $function_to_remove, $priority = 10)
    {
        return remove_filter($tag, $function_to_remove, $priority);
    }

    /**
     * https://developer.wordpress.org/reference/functions/remove_all_filters/
     * @param $tag
     * @param bool $priority
     * @return true
     */
    public function remove_all_filters($tag, $priority = false)
    {
        return remove_all_filters($tag, $priority);
    }
}