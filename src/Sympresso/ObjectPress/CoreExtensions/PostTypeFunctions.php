<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\AbstractExtension;

class PostTypeFunctions extends AbstractExtension
{
    const FUNCTION_NAMESPACE = 'post_type';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/register_post_type/
     * @param $post_type
     * @param array $args
     * @return \WP_Error|\WP_Post_Type
     */
    public function register_post_type($post_type, $args = array())
    {
        return register_post_type($post_type, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/post_type_archive_title/
     * @param string $prefix
     * @param bool $display
     * @return string|void
     */
    public function post_type_archive_title($prefix = '', $display = true)
    {
        return post_type_archive_title($prefix, $display);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_post_type_support/
     * @param $post_type
     * @param $feature
     */
    public function add_post_type_support($post_type, $feature)
    {
        return add_post_type_support($post_type, $feature);
    }

    /**
     * https://developer.wordpress.org/reference/functions/remove_post_type_support/
     * @param $post_type
     * @param $feature
     */
    public function remove_post_type_support($post_type, $feature)
    {
        return remove_post_type_support($post_type, $feature);
    }

    /**
     * https://developer.wordpress.org/reference/functions/post_type_supports/
     * @param $post_type
     * @param $feature
     * @return bool
     */
    public function post_type_supports($post_type, $feature)
    {
        return post_type_supports($post_type, $feature);
    }

    /**
     * https://developer.wordpress.org/reference/functions/set_post_type/
     * @param int $post_id
     * @param string $post_type
     * @return false|int
     */
    public function set_post_type($post_id = 0, $post_type = 'post')
    {
        return set_post_type($post_id, $post_type);
    }

    /**
     * https://developer.wordpress.org/reference/functions/post_type_exists/
     * @param $post_type
     * @return bool
     */
    public function post_type_exists($post_type)
    {
        return post_type_exists($post_type);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_type/
     * @param null $post
     * @return false|string
     */
    public function get_post_type($post = null)
    {
        return get_post_type($post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_types/
     * @param array $args
     * @param string $output
     * @param string $operator
     * @return array
     */
    public function get_post_types($args = array(), $output = 'names', $operator = 'and')
    {
        return get_post_types($args, $output, $operator);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_type_archive_link/
     * @param $post_type
     * @return false|string
     */
    public function get_post_type_archive_link($post_type)
    {
        return get_post_type_archive_link($post_type);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_type_object/
     * @param $post_type
     * @return null|\WP_Post_Type
     */
    public function get_post_type_object($post_type)
    {
        return get_post_type_object($post_type);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_type_capabilities/
     * @param $args
     * @return object
     */
    public function get_post_type_capabilities($args)
    {
        return get_post_type_capabilities($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_type_labels/
     * @param $post_type_object
     * @return object
     */
    public function get_post_type_labels($post_type_object)
    {
        return get_post_type_labels($post_type_object);
    }
}