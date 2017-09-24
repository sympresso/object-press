<?php

namespace Sympresso\ObjectPress\CoreExtension;

class AdminFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'admin';

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
     * https://developer.wordpress.org/reference/functions/add_menu_page/
     * @param $page_title
     * @param $menu_title
     * @param $capability
     * @param $menu_slug
     * @param string $function
     * @param string $icon_url
     * @param null $position
     * @return string
     */
    public function add_menu_page(
        $page_title,
        $menu_title,
        $capability,
        $menu_slug,
        $function = '',
        $icon_url = '',
        $position = null
    ) {
        return add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position);
    }

    /**
     * https://developer.wordpress.org/reference/functions/remove_menu_page/
     * @param $menu_slug
     * @return array|bool
     */
    public function remove_menu_page($menu_slug)
    {
        return remove_menu_page($menu_slug);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_submenu_page/
     * @param $parent_slug
     * @param $page_title
     * @param $menu_title
     * @param $capability
     * @param $menu_slug
     * @param string $function
     * @return false|string
     */
    public function add_submenu_page($parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function = '')
    {
        return add_submenu_page($parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function = '');
    }

    /**
     * https://developer.wordpress.org/reference/functions/remove_submenu_page/
     * @param $menu_slug
     * @param $submenu_slug
     * @return array|bool
     */
    public function remove_submenu_page($menu_slug, $submenu_slug)
    {
        return remove_submenu_page($menu_slug, $submenu_slug);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_object_page/
     * @param $page_title
     * @param $menu_title
     * @param $capability
     * @param $menu_slug
     * @param string $function
     * @param string $icon_url
     * @return string
     * @deprecated
     */
    public function add_object_page($page_title, $menu_title, $capability, $menu_slug, $function = '', $icon_url = '')
    {
        return add_object_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_utility_page/
     * @param $page_title
     * @param $menu_title
     * @param $capability
     * @param $menu_slug
     * @param string $function
     * @param string $icon_url
     * @return string
     * @deprecated
     */
    public function add_utility_page($page_title, $menu_title, $capability, $menu_slug, $function = '', $icon_url = '')
    {
        return add_utility_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_comments_page/
     * @param $page_title
     * @param $menu_title
     * @param $capability
     * @param $menu_slug
     * @param string $function
     * @return false|string
     */
    public function add_comments_page($page_title, $menu_title, $capability, $menu_slug, $function = '')
    {
        return add_comments_page($page_title, $menu_title, $capability, $menu_slug, $function);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_dashboard_page/
     * @param $page_title
     * @param $menu_title
     * @param $capability
     * @param $menu_slug
     * @param string $function
     * @return false|string
     */
    public function add_dashboard_page($page_title, $menu_title, $capability, $menu_slug, $function = '')
    {
        return add_dashboard_page($page_title, $menu_title, $capability, $menu_slug, $function);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_links_page/
     * @param $page_title
     * @param $menu_title
     * @param $capability
     * @param $menu_slug
     * @param string $function
     * @return false|string
     */
    public function add_links_page($page_title, $menu_title, $capability, $menu_slug, $function = '')
    {
        return add_links_page($page_title, $menu_title, $capability, $menu_slug, $function);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_management_page/
     * @param $page_title
     * @param $menu_title
     * @param $capability
     * @param $menu_slug
     * @param string $function
     * @return false|string
     */
    public function add_management_page($page_title, $menu_title, $capability, $menu_slug, $function = '')
    {
        return add_management_page($page_title, $menu_title, $capability, $menu_slug, $function);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_media_page/
     * @param $page_title
     * @param $menu_title
     * @param $capability
     * @param $menu_slug
     * @param string $function
     * @return false|string
     */
    public function add_media_page($page_title, $menu_title, $capability, $menu_slug, $function = '')
    {
        return add_media_page($page_title, $menu_title, $capability, $menu_slug, $function);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_options_page/
     * @param $page_title
     * @param $menu_title
     * @param $capability
     * @param $menu_slug
     * @param string $function
     * @return false|string
     */
    public function add_options_page($page_title, $menu_title, $capability, $menu_slug, $function = '')
    {
        return add_options_page($page_title, $menu_title, $capability, $menu_slug, $function);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_pages_page/
     * @param $page_title
     * @param $menu_title
     * @param $capability
     * @param $menu_slug
     * @param string $function
     * @return false|string
     */
    public function add_pages_page($page_title, $menu_title, $capability, $menu_slug, $function = '')
    {
        return add_pages_page($page_title, $menu_title, $capability, $menu_slug, $function);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_plugins_page/
     * @param $page_title
     * @param $menu_title
     * @param $capability
     * @param $menu_slug
     * @param string $function
     * @return false|string
     */
    public function add_plugins_page($page_title, $menu_title, $capability, $menu_slug, $function = '')
    {
        return add_plugins_page($page_title, $menu_title, $capability, $menu_slug, $function);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_posts_page/
     * @param $page_title
     * @param $menu_title
     * @param $capability
     * @param $menu_slug
     * @param string $function
     * @return false|string
     */
    public function add_posts_page($page_title, $menu_title, $capability, $menu_slug, $function = '')
    {
        return add_posts_page($page_title, $menu_title, $capability, $menu_slug, $function);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_theme_page/
     * @param $page_title
     * @param $menu_title
     * @param $capability
     * @param $menu_slug
     * @param string $function
     * @return false|string
     */
    public function add_theme_page($page_title, $menu_title, $capability, $menu_slug, $function = '')
    {
        return add_theme_page($page_title, $menu_title, $capability, $menu_slug, $function);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_users_page/
     * @param $page_title
     * @param $menu_title
     * @param $capability
     * @param $menu_slug
     * @param string $function
     * @return false|string
     */
    public function add_users_page($page_title, $menu_title, $capability, $menu_slug, $function = '')
    {
        return add_users_page($page_title, $menu_title, $capability, $menu_slug, $function);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_meta_box/
     * @param $id
     * @param $title
     * @param $callback
     * @param null $screen
     * @param string $context
     * @param string $priority
     * @param null $callback_args
     */
    public function add_meta_box(
        $id,
        $title,
        $callback,
        $screen = null,
        $context = 'advanced',
        $priority = 'default',
        $callback_args = null
    ) {
        return add_meta_box($id, $title, $callback, $screen, $context, $priority, $callback_args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/remove_meta_box/
     * @param $id
     * @param $screen
     * @param $context
     */
    public function remove_meta_box($id, $screen, $context)
    {
        return remove_meta_box($id, $screen, $context);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_editor_style/
     * @param string $stylesheet
     */
    public function add_editor_style($stylesheet = 'editor-style.css')
    {
        return add_editor_style($stylesheet);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_editor/
     * @param $content
     * @param $editor_id
     * @param array $settings
     */
    public function wp_editor($content, $editor_id, $settings = array())
    {
        return wp_editor($content, $editor_id, $settings);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_image_editor/
     * @param $path
     * @param array $args
     * @return \WP_Error|\WP_Image_Editor
     */
    public function wp_get_image_editor($path, $args = array())
    {
        return wp_get_image_editor($path, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/post_submit_meta_box/
     * @param $post
     * @param array $args
     * @OutputBufer
     */
    public function post_submit_meta_box($post, $args = array())
    {
        return post_submit_meta_box($post, $args);
    }

}