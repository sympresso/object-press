<?php

namespace Sympresso\ObjectPress\CoreExtension;

use Sympresso\ObjectPress\Extension;

class ConditionalFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'cond';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/in_the_loop/
     * @return bool
     */
    public function in_the_loop()
    {
        return in_the_loop();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_child_theme/
     * @return bool
     */
    public function is_child_theme()
    {
        return is_child_theme();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_active_sidebar/
     * @param $index
     * @return bool
     */
    public function is_active_sidebar($index)
    {
        return is_active_sidebar($index);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_admin_bar_showing/
     * @return bool
     */
    public function is_admin_bar_showing()
    {
        return is_admin_bar_showing();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_customize_preview/
     * @return bool
     */
    public function is_customize_preview()
    {
        return is_customize_preview();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_comment_time/
     * @return bool
     */
    public function is_dynamic_sidebar()
    {
        return is_dynamic_sidebar();
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
     * https://developer.wordpress.org/reference/functions/is_404/
     * @return bool
     */
    public function is_404()
    {
        return is_404();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_admin/
     * @return bool
     */
    public function is_admin()
    {
        return is_admin();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_archive/
     * @return bool
     */
    public function is_archive()
    {
        return is_archive();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_attachment/
     * @param string $attachment
     * @return bool
     */
    public function is_attachment($attachment = '')
    {
        return is_attachment($attachment);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_author/
     * @param string $author
     * @return bool
     */
    public function is_author($author = '')
    {
        return is_author($author);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_comment_time/
     * @param string $category
     * @return bool
     */
    public function is_category($category = '')
    {
        return is_category($category);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_comment_time/
     * @return bool
     */
    public function is_comments_popup()
    {
        return is_comments_popup();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_date/
     * @return bool
     */
    public function is_date()
    {
        return is_date();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_day/
     * @return bool
     */
    public function is_day()
    {
        return is_day();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_feed/
     * @param string $feeds
     * @return bool
     */
    public function is_feed($feeds = '')
    {
        return is_feed($feeds);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_front_page/
     * @return bool
     */
    public function is_front_page()
    {
        return is_front_page();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_home/
     * @return bool
     */
    public function is_home()
    {
        return is_home();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_month/
     * @return bool
     */
    public function is_month()
    {
        return is_month();
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
     * https://developer.wordpress.org/reference/functions/is_page_template/
     * @param string $template
     * @return bool
     */
    public function is_page_template($template = '')
    {
        return is_page_template($template);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_paged/
     * @return bool
     */
    public function is_paged()
    {
        return is_paged();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_preview/
     * @return bool
     */
    public function is_preview()
    {
        return is_preview();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_search/
     * @return bool
     */
    public function is_search()
    {
        return is_search();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_single/
     * @param string $post
     * @return bool
     */
    public function is_single($post = '')
    {
        return is_single($post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_singular/
     * @param string $post_types
     * @return bool
     */
    public function is_singular($post_types = '')
    {
        return is_singular($post_types);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_sticky/
     * @param int $post_id
     * @return bool
     */
    public function is_sticky($post_id = 0)
    {
        return is_sticky($post_id);
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
     * https://developer.wordpress.org/reference/functions/is_tax/
     * @param string $taxonomy
     * @param string $term
     * @return bool
     */
    public function is_tax($taxonomy = '', $term = '')
    {
        return is_tax($taxonomy, $term);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_time/
     * @return bool
     */
    public function is_time()
    {
        return is_time();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_trackback/
     * @return bool
     */
    public function is_trackback()
    {
        return is_trackback();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_year/
     * @return bool
     */
    public function is_year()
    {
        return is_year();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_main_query/
     * @return bool
     */
    public function is_main_query()
    {
        return is_main_query();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_blog_installed/
     * @return bool
     */
    public function is_blog_installed()
    {
        return is_blog_installed();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_main_site/
     * @param null $site_id
     * @return bool
     */
    public function is_main_site($site_id = null)
    {
        return is_main_site($site_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_multisite/
     * @return bool
     */
    public function is_multisite()
    {
        return is_multisite();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_ssl/
     * @return bool
     */
    public function is_ssl()
    {
        return is_ssl();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_ssl/
     * @param $thing
     * @return bool
     */
    public function is_wp_error($thing)
    {
        return is_wp_error($thing);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_is_mobile/
     * @return bool
     */
    public function wp_is_mobile()
    {
        return wp_is_mobile();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_new_day/
     * @return int
     */
    public function is_new_day()
    {
        return is_new_day();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_post_type_archive/
     * @param string $post_types
     * @return bool
     */
    public function is_post_type_archive($post_types = '')
    {
        return is_post_type_archive($post_types);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_post_type_hierarchical/
     * @param $post_type
     * @return bool
     */
    public function is_post_type_hierarchical($post_type)
    {
        return is_post_type_hierarchical($post_type);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_serialized/
     * @param $data
     * @param bool $strict
     * @return bool
     */
    public function is_serialized($data, $strict = true)
    {
        return is_serialized($data, $strict);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_serialized_string/
     * @param $data
     * @return bool
     */
    public function is_serialized_string($data)
    {
        return is_serialized_string($data);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_taxonomy/
     * @param $taxonomy
     * @return bool
     * @deprecated
     */
    public function is_taxonomy($taxonomy)
    {
        return is_taxonomy($taxonomy);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_taxonomy_hierarchical/
     * @param $taxonomy
     * @return bool
     */
    public function is_taxonomy_hierarchical($taxonomy)
    {
        return is_taxonomy_hierarchical($taxonomy);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_term/
     * @param $term
     * @param string $taxonomy
     * @param int $parent
     * @return mixed
     * @deprecated
     */
    public function is_term($term, $taxonomy = '', $parent = 0)
    {
        return is_term($term, $taxonomy, $parent);
    }

    /**
     * https://developer.wordpress.org/reference/functions/has_nav_menu/
     * @param $location
     * @return bool
     */
    public function has_nav_menu($location)
    {
        return has_nav_menu($location);
    }

    /**
     * https://developer.wordpress.org/reference/functions/current_theme_supports/
     * @param $feature
     * @return bool
     */
    public function current_theme_supports($feature)
    {
        return current_theme_supports($feature);
    }

    /**
     * https://developer.wordpress.org/reference/functions/has_header_image/
     * @return bool
     */
    public function has_header_image()
    {
        return has_header_image();
    }
}