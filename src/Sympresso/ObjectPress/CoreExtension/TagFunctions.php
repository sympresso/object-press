<?php

namespace Sympresso\ObjectPress\CoreExtension;

use Sympresso\ObjectPress\Extension;

class TagFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'tag';

    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_tag/
     * @param $tag
     * @param string $output
     * @param string $filter
     * @return array|null|\WP_Error|\WP_Term
     */
    public function get_tag($tag, $output = OBJECT, $filter = 'raw')
    {
        return get_tag($tag, $output, $filter);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_tag_link/
     * @param $tag
     * @return string
     */
    public function get_tag_link($tag)
    {
        return get_tag_link($tag);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_tags/
     * @param string $args
     * @return array
     */
    public function get_tags($args = '')
    {
        return get_tags($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_tag_list/
     * @param string $before
     * @param string $sep
     * @param string $after
     * @param int $id
     * @return false|string|\WP_Error
     */
    public function get_the_tag_list($before = '', $sep = '', $after = '', $id = 0)
    {
        return get_the_tag_list($before, $sep, $after, $id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_tags/
     * @param int $id
     * @return array|false|\WP_Error
     */
    public function get_the_tags($id = 0)
    {
        return get_the_tags($id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/has_tag/
     * @param string $tag
     * @param null $post
     * @return bool
     */
    public function has_tag($tag = '', $post = null)
    {
        return has_tag($tag, $post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_tag/
     * @param string $tag
     * @return bool
     */
    public function is_tag($tag = '')
    {
        return is_tag($tag);
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_tags/
     * @param null $before
     * @param string $sep
     * @param string $after
     */
    public function the_tags($before = null, $sep = ', ', $after = '')
    {
        return the_tags($before, $sep, $after);
    }

    /**
     * https://developer.wordpress.org/reference/functions/single_tag_title/
     * @param string $prefix
     * @param bool $display
     * @return string|void
     */
    public function single_tag_title($prefix = '', $display = true)
    {
        return single_tag_title($prefix, $display);
    }

    /**
     * https://developer.wordpress.org/reference/functions/tag_description/
     * @param int $tag
     * @return string
     */
    public function tag_description($tag = 0)
    {
        return tag_description($tag);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_generate_tag_cloud/
     * @param $tags
     * @param string $args
     * @return array|string
     */
    public function wp_generate_tag_cloud($tags, $args = '')
    {
        return wp_generate_tag_cloud($tags, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_tag_cloud/
     * @param string $args
     * @return mixed
     */
    public function wp_tag_cloud($args = '')
    {
        return wp_tag_cloud($args);
    }
}