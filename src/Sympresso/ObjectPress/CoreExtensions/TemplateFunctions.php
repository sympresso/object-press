<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\Extension;

class TemplateFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'template';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/comments_template/
     * @param string $file
     * @param bool $separate_comments
     */
    public function comments_template($file = '/comments.php', $separate_comments = false)
    {
        return comments_template($file, $separate_comments);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_footer/
     * @param null $name
     */
    public function get_footer($name = null)
    {
        return get_footer($name);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_header/
     * @param null $name
     */
    public function get_header($name = null)
    {
        return get_header($name);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_sidebar/
     * @param null $name
     */
    public function get_sidebar($name = null)
    {
        return get_sidebar($name);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_search_form/
     * @param bool $echo
     * @return string|void
     */
    public function get_search_form($echo = true)
    {
        return get_search_form($echo);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_custom_background/
     * @param string $wp_head_callback
     * @param string $admin_head_callback
     * @param string $admin_preview_callback
     * @return bool|void
     * @deprecated
     */
    public function add_custom_background(
        $wp_head_callback = '',
        $admin_head_callback = '',
        $admin_preview_callback = ''
    ) {
        return add_custom_background($wp_head_callback, $admin_head_callback, $admin_preview_callback);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_custom_image_header/
     * @param $wp_head_callback
     * @param $admin_head_callback
     * @param string $admin_preview_callback
     * @return bool|void
     * @deprecated
     */
    public function add_custom_image_header($wp_head_callback, $admin_head_callback, $admin_preview_callback = '')
    {
        return add_custom_image_header($wp_head_callback, $admin_head_callback, $admin_preview_callback);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_image_size/
     * @param $name
     * @param int $width
     * @param int $height
     * @param bool $crop
     */
    public function add_image_size($name, $width = 0, $height = 0, $crop = false)
    {
        return add_image_size($name, $width, $height, $crop);
    }

    /**
     * https://developer.wordpress.org/reference/functions/body_class/
     * @param string $class
     */
    public function body_class($class = '')
    {
        return body_class($class);
    }

    /**
     * https://developer.wordpress.org/reference/functions/dynamic_sidebar/
     * @param int $index
     * @return bool
     */
    public function dynamic_sidebar($index = 1)
    {
        return dynamic_sidebar($index);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_404_template/
     * @return string
     */
    public function get_404_template()
    {
        return get_404_template();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_archive_template/
     * @return string
     */
    public function get_archive_template()
    {
        return get_archive_template();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_attachment_template/
     * @return string
     */
    public function get_attachment_template()
    {
        return get_attachment_template();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_author_template/
     * @return string
     */
    public function get_author_template()
    {
        return get_author_template();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_body_class/
     * @param string $class
     * @return array
     */
    public function get_body_class($class = '')
    {
        return get_body_class($class);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_category_template/
     * @return string
     */
    public function get_category_template()
    {
        return get_category_template();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_comments_popup_template/
     * @return string
     * @deprecated
     */
    public function get_comments_popup_template()
    {
        return get_comments_popup_template();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_date_template/
     * @return string
     */
    public function get_date_template()
    {
        return get_date_template();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_header_image/
     * @return false|string
     */
    public function get_header_image()
    {
        return get_header_image();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_header_textcolor/
     * @return string
     */
    public function get_header_textcolor()
    {
        return get_header_textcolor();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_home_template/
     * @return string
     */
    public function get_home_template()
    {
        return get_home_template();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_page_template/
     * @return string
     */
    public function get_page_template()
    {
        return get_page_template();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_paged_template/
     * @return string
     * @deprecated
     */
    public function get_paged_template()
    {
        return get_paged_template();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_class/
     * @param string $class
     * @param null $post_id
     * @return array
     */
    public function get_post_class($class = '', $post_id = null)
    {
        return get_post_class($class, $post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_query_template/
     * @param $type
     * @param array $templates
     * @return string
     */
    public function get_query_template($type, $templates = array())
    {
        return get_query_template($type, $templates);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_search_template/
     * @return string
     */
    public function get_search_template()
    {
        return get_search_template();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_single_template/
     * @return string
     */
    public function get_single_template()
    {
        return get_single_template();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_tag_template/
     * @return string
     */
    public function get_tag_template()
    {
        return get_tag_template();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_taxonomy_template/
     * @return string
     */
    public function get_taxonomy_template()
    {
        return get_taxonomy_template();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_template/
     * @return string
     */
    public function get_template()
    {
        return get_template();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_template_directory/
     * @return string
     */
    public function get_template_directory()
    {
        return get_template_directory();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_template_directory_uri/
     * @return string
     */
    public function get_template_directory_uri()
    {
        return get_template_directory_uri();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_template_part/
     * @param $slug
     * @param null $name
     */
    public function get_template_part($slug, $name = null)
    {
        return get_template_part($slug, $name = null);
    }

    /**
     * https://developer.wordpress.org/reference/functions/has_header_image/
     * @return bool
     */
    public function has_header_image()
    {
        return has_header_image();
    }

    /**
     * https://developer.wordpress.org/reference/functions/header_image/
     */
    public function header_image()
    {
        return header_image();
    }

    /**
     * https://developer.wordpress.org/reference/functions/header_textcolor/
     */
    public function header_textcolor()
    {
        return header_textcolor();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_term/
     * @return bool
     */
    public function in_the_loop()
    {
        return in_the_loop();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_term/
     * @return bool
     */
    public function is_child_theme()
    {
        return is_child_theme();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_term/
     * @param string $doctype
     */
    public function language_attributes($doctype = 'html')
    {
        return language_attributes($doctype);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_term/
     * @param $_template_file
     * @param bool $require_once
     */
    public function load_template($_template_file, $require_once = true)
    {
        return load_template($_template_file, $require_once);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_term/
     * @param $template_names
     * @param bool $load
     * @param bool $require_once
     * @return string
     */
    public function locate_template($template_names, $load = false, $require_once = true)
    {
        return locate_template($template_names, $load, $require_once);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_term/
     * @param string $class
     * @param null $post_id
     */
    public function post_class($class = '', $post_id = null)
    {
        return post_class($class, $post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_term/
     * @param string $args
     * @return string|void
     */
    public function wp_get_archives($args = '')
    {
        return wp_get_archives($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_term/
     * @param string $sep
     * @param bool $display
     * @param string $seplocation
     * @return null|string
     */
    public function wp_title($sep = '&raquo;', $display = true, $seplocation = '')
    {
        return wp_title($sep, $display, $seplocation);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_term/
     * @param null $post_id
     * @return bool
     */
    public function comments_open($post_id = null)
    {
        return comments_open($post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_term/
     * @param $tag
     * @param $post
     * @return bool
     */
    public function has_tag($tag, $post)
    {
        return has_tag($tag = '', $post = null);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_term/
     * @param null $post_id
     * @return bool
     */
    public function pings_open($post_id = null)
    {
        return pings_open($post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_term/
     * @param string $show
     * @param string $filter
     * @return string|void
     */
    public function get_bloginfo($show = '', $filter = 'raw')
    {
        return get_bloginfo($show, $filter);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_term/
     */
    public function wp_footer()
    {
        return wp_footer();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_term/
     */
    public function wp_head()
    {
        return wp_head();
    }
}