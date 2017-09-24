<?php

namespace Sympresso\ObjectPress\CoreExtension;

use Sympresso\ObjectPress\Extension;

class MetaFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'meta';

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
     * https://developer.wordpress.org/reference/functions/add_post_meta/
     * @param $post_id
     * @param $meta_key
     * @param $meta_value
     * @param bool $unique
     * @return false|int
     */
    public function add_post_meta($post_id, $meta_key, $meta_value, $unique = false)
    {
        return add_post_meta($post_id, $meta_key, $meta_value, $unique);
    }

    /**
     * https://developer.wordpress.org/reference/functions/delete_post_meta/
     * @param $post_id
     * @param $meta_key
     * @param string $meta_value
     * @return bool
     */
    public function delete_post_meta($post_id, $meta_key, $meta_value = '')
    {
        return delete_post_meta($post_id, $meta_key, $meta_value);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_custom/
     * @param int $post_id
     * @return array
     */
    public function get_post_custom($post_id = 0)
    {
        return get_post_custom($post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_custom_keys/
     * @param int $post_id
     * @return array|void
     */
    public function get_post_custom_keys($post_id = 0)
    {
        return get_post_custom_keys($post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_custom_values/
     * @param string $key
     * @param int $post_id
     * @return array|null
     */
    public function get_post_custom_values($key = '', $post_id = 0)
    {
        return get_post_custom_values($key, $post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_meta/
     * @param $post_id
     * @param string $key
     * @param bool $single
     * @return mixed
     */
    public function get_post_meta($post_id, $key = '', $single = false)
    {
        return get_post_meta($post_id, $key, $single);
    }

    /**
     * https://developer.wordpress.org/reference/functions/update_post_meta/
     * @param $post_id
     * @param $meta_key
     * @param $meta_value
     * @param string $prev_value
     * @return bool|int
     */
    public function update_post_meta($post_id, $meta_key, $meta_value, $prev_value = '')
    {
        return update_post_meta($post_id, $meta_key, $meta_value, $prev_value);
    }

    /**
     * https://developer.wordpress.org/reference/functions/register_meta/
     * @param $object_type
     * @param $meta_key
     * @param $args
     * @param null $deprecated
     * @return bool
     */
    public function register_meta($object_type, $meta_key, $args, $deprecated = null)
    {
        return register_meta($object_type, $meta_key, $args, $deprecated);
    }
}