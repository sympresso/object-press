<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\Extension;

class ActionFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'action';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/has_action/
     * @param $tag
     * @param bool $function_to_check
     * @return bool|int
     */
    public function has_action($tag, $function_to_check = false)
    {
        return has_action($tag, $function_to_check);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_action/
     * @param $tag
     * @param $function_to_add
     * @param int $priority
     * @param int $accepted_args
     * @return true|void
     */
    public function add_action($tag, $function_to_add, $priority = 10, $accepted_args = 1)
    {
        return add_action($tag, $function_to_add, $priority, $accepted_args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/do_action/
     * @param $tag
     * @param string $arg
     */
    public function do_action($tag, $arg = '')
    {
        return do_action($tag, $arg);
    }

    /**
     * https://developer.wordpress.org/reference/functions/do_action_ref_array/
     * @param $tag
     * @param $args
     */
    public function do_action_ref_array($tag, $args)
    {
        return do_action_ref_array($tag, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/did_action/
     * @param $tag
     * @return int|void
     */
    public function did_action($tag)
    {
        return did_action($tag);
    }

    /**
     * https://developer.wordpress.org/reference/functions/remove_action/
     * @param $tag
     * @param $function_to_remove
     * @param int $priority
     * @return bool
     */
    public function remove_action($tag, $function_to_remove, $priority = 10)
    {
        return remove_action($tag, $function_to_remove);
    }

    /**
     * https://developer.wordpress.org/reference/functions/remove_all_actions/
     * @param $tag
     * @param bool $priority
     * @return true
     */
    public function remove_all_actions($tag, $priority = false)
    {
        return remove_all_actions($tag, $priority);
    }
}