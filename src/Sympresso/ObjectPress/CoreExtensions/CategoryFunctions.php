<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\AbstractExtension;

class CategoryFunctions extends AbstractExtension
{

    const FUNCTION_NAMESPACE = 'cat';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/cat_is_ancestor_of/
     * @param $cat1
     * @param $cat2
     * @return bool
     */
    public function cat_is_ancestor_of($cat1, $cat2)
    {
        return cat_is_ancestor_of($cat1, $cat2);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_all_category_ids/
     * @deprecated
     * @return object
     */
    public function get_all_category_ids()
    {
        return get_all_category_ids();
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
        return get_ancestors();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_cat_ID/
     * @param $cat_name
     * @return int
     */
    public function get_cat_ID($cat_name)
    {
        return get_cat_ID($cat_name);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_cat_name/
     * @param $cat_id
     * @return string
     */
    public function get_cat_name($cat_id)
    {
        return get_cat_name($cat_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_categories/
     * @param string $args
     * @return array
     */
    public function get_categories($args = '')
    {
        return get_categories($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_category/
     * @param $category
     * @param string $output
     * @param string $filter
     * @return array|null|object|\WP_Error
     */
    public function get_category($category, $output = OBJECT, $filter = 'raw')
    {
        return get_category($category, $output, $filter);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_category_by_path/
     * @param $category_path
     * @param bool $full_match
     * @param $output
     * @return array|null|\WP_Error|\WP_Term
     */
    public function get_category_by_path($category_path, $full_match = true, $output)
    {
        return get_category_by_path($category_path, $full_match, $output);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_category_by_slug/
     * @param $slug
     * @return object
     */
    public function get_category_by_slug($slug)
    {
        return get_category_by_slug($slug);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_category_by_ID/
     * @param $cat_ID
     * @return string|\WP_Error
     */
    public function get_the_category_by_ID($cat_ID)
    {
        return get_the_category_by_ID($cat_ID);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_category_list/
     * @param string $separator
     * @param string $parents
     * @param bool $post_id
     * @return string
     */
    public function get_the_category_list($separator = '', $parents = '', $post_id = false)
    {
        return get_the_category_list($separator, $parents, $post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_category_link/
     * @param $category
     * @return string
     */
    public function get_category_link($category)
    {
        return get_category_link($category);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_category_parents/
     * @param $id
     * @param bool $link
     * @param string $separator
     * @param bool $nicename
     * @param array $deprecated
     * @return string|\WP_Error
     */
    public function get_category_parents($id, $link = false, $separator = '/', $nicename = false, $deprecated = array())
    {
        return get_category_parents($id, $link, $separator, $nicename, $deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_category/
     * @param bool $id
     * @return array
     */
    public function get_the_category($id = false)
    {
        return get_the_category($id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/single_cat_title/
     * @param string $prefix
     * @param bool $display
     * @return string|void
     *
     */
    public function single_cat_title($prefix = '', $display = true)
    {
        return single_cat_title($prefix, $display);
    }

    /**
     * https://developer.wordpress.org/reference/functions/in_category/
     * @param $category
     * @param null $post
     * @return bool
     */
    public function in_category($category, $post = null)
    {
        return in_category($category, $post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_category/
     * @param string $category
     * @return bool
     */
    public function is_category($category = '')
    {
        return is_category($category);
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_category
     * @param string $separator
     * @param string $parents
     * @param bool $post_id
     *
     */
    public function the_category($separator = '', $parents = '', $post_id = false)
    {
        return the_category($separator, $parents, $post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_category_checklist/
     * @param int $post_id
     * @param int $descendants_and_self
     * @param bool $selected_cats
     * @param bool $popular_cats
     * @param null $walker
     * @param bool $checked_ontop
     */
    public function wp_category_checklist(
        $post_id = 0,
        $descendants_and_self = 0,
        $selected_cats = false,
        $popular_cats = false,
        $walker = null,
        $checked_ontop = true
    ) {
        return wp_category_checklist(
            $post_id,
            $descendants_and_self,
            $selected_cats,
            $popular_cats,
            $walker,
            $checked_ontop
        );
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_dropdown_categories/
     * @param string $args
     * @return string
     */
    public function wp_dropdown_categories($args = '')
    {
        return wp_dropdown_categories($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_list_categories/
     * @param string $args
     * @return false|string
     *
     */
    public function wp_list_categories($args = '')
    {
        return wp_list_categories($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_create_category/
     * @param $cat_name
     * @param int $parent
     * @return int|\WP_Error
     */
    public function wp_create_category($cat_name, $parent = 0)
    {
        return wp_create_category($cat_name, $parent);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_delete_category/
     * @param $cat_ID
     * @return bool|int|\WP_Error
     */
    public function wp_delete_category($cat_ID)
    {
        return wp_delete_category($cat_ID);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_category/
     * @param $catarr
     * @param bool $wp_error
     * @return int|object
     */
    public function wp_insert_category($catarr, $wp_error = false)
    {
        return wp_insert_category($catarr, $wp_error);
    }
}