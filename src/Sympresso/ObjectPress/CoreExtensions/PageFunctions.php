<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\AbstractExtension;

class PageFunctions extends AbstractExtension
{
    const FUNCTION_NAMESPACE = 'page';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_all_page_ids/
     * @return array
     */
    public function get_all_page_ids()
    {
        return get_all_page_ids();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_ancestors/
     * @param int $object_id
     * @param string $object_type
     * @param string $resource_type
     * @return array
     */
    public function get_ancestors($object_id = 0, $object_type = '', $resource_type = '')
    {
        return get_ancestors($object_id, $object_type, $resource_type);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_page/
     * @param $page
     * @param string $output
     * @param string $filter
     * @return array|null|\WP_Post
     * @deprecated
     */
    public function get_page($page, $output = OBJECT, $filter = 'raw')
    {
        return get_page($page, $output, $filter);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_page_link/
     * @param bool $post
     * @param bool $leavename
     * @param bool $sample
     * @return string
     */
    public function get_page_link($post = false, $leavename = false, $sample = false)
    {
        return get_page_link($post, $leavename, $sample);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_page_by_path/
     * @param $page_path
     * @param string $output
     * @param string $post_type
     * @return array|null|\WP_Post
     */
    public function get_page_by_path($page_path, $output = OBJECT, $post_type = 'page')
    {
        return get_page_by_path($page_path, $output, $post_type);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_page_by_title/
     * @param $page_title
     * @param string $output
     * @param string $post_type
     * @return array|null|\WP_Post
     */
    public function get_page_by_title($page_title, $output = OBJECT, $post_type = 'page')
    {
        return get_page_by_title($page_title, $output, $post_type);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_page_children/
     * @param $page_id
     * @param $pages
     * @return array
     */
    public function get_page_children($page_id, $pages)
    {
        return get_page_children($page_id, $pages);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_page_hierarchy/
     * @param $pages
     * @param int $page_id
     * @return array
     */
    public function get_page_hierarchy(&$pages, $page_id = 0)
    {
        return get_page_hierarchy($pages, $page_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_page_uri/
     * @param int $page
     * @return false|string
     */
    public function get_page_uri($page = 0)
    {
        return get_page_uri($page = 0);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_pages/
     * @param array $args
     * @return array|false
     */
    public function get_pages($args = array())
    {
        return get_pages($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_page/
     * @param string $page
     * @return bool
     */
    public function is_page($page = '')
    {
        return is_page($page);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_link_pages/
     * @param string $args
     * @return string
     */
    public function wp_link_pages($args = '')
    {
        return wp_link_pages($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_list_pages/
     * @param string $args
     * @return string|void
     */
    public function wp_list_pages($args = '')
    {
        return wp_list_pages($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_page_menu/
     * @param array $args
     * @return string|void
     */
    public function wp_page_menu($args = array())
    {
        return wp_page_menu($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_dropdown_pages/
     * @param string $args
     * @return string
     */
    public function wp_dropdown_pages($args = '')
    {
        return wp_dropdown_pages($args);
    }
}