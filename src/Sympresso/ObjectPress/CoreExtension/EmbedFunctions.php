<?php

namespace Sympresso\ObjectPress\CoreExtension;


class EmbedFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'embed';

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
     * https://developer.wordpress.org/reference/functions/wp_oembed_remove_provider/
     * @param $format
     * @return bool
     */
    public function wp_oembed_remove_provider($format)
    {
        return wp_oembed_remove_provider($format);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_embed_register_handler/
     * @param $id
     * @param $regex
     * @param $callback
     * @param int $priority
     */
    public function wp_embed_register_handler($id, $regex, $callback, $priority = 10)
    {
        return wp_embed_register_handler($id, $regex, $callback, $priority);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_embed_unregister_handler/
     * @param $id
     * @param int $priority
     */
    public function wp_embed_unregister_handler($id, $priority = 10)
    {
        return wp_embed_unregister_handler($id, $priority);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_embed_defaults/
     * @param string $url
     * @return array
     */
    function wp_embed_defaults($url = '')
    {
        return wp_embed_defaults($url);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_oembed_get/
     * @param $url
     * @param string $args
     * @return false|string
     */
    function wp_oembed_get($url, $args = '')
    {
        return wp_oembed_get($url, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_oembed_add_provider/
     * @param $format
     * @param $provider
     * @param bool $regex
     */
    function wp_oembed_add_provider($format, $provider, $regex = false)
    {
        return wp_oembed_add_provider($format, $provider, $regex);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_maybe_load_embeds/
     */
    function wp_maybe_load_embeds()
    {
        return wp_maybe_load_embeds();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_embed_handler_youtube/
     * @param $matches
     * @param $attr
     * @param $url
     * @param $rawattr
     * @return string
     */
    function wp_embed_handler_youtube($matches, $attr, $url, $rawattr)
    {
        return wp_embed_handler_youtube($matches, $attr, $url, $rawattr);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_embed_handler_audio/
     * @param $matches
     * @param $attr
     * @param $url
     * @param $rawattr
     * @return string
     */
    function wp_embed_handler_audio($matches, $attr, $url, $rawattr)
    {
        return wp_embed_handler_audio($matches, $attr, $url, $rawattr);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_embed_handler_video/
     * @param $matches
     * @param $attr
     * @param $url
     * @param $rawattr
     * @return string
     */
    function wp_embed_handler_video($matches, $attr, $url, $rawattr)
    {
        return wp_embed_handler_video($matches, $attr, $url, $rawattr);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_oembed_register_route/
     */
    function wp_oembed_register_route()
    {
        return wp_oembed_register_route();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_oembed_add_discovery_links/
     */
    function wp_oembed_add_discovery_links()
    {
        return wp_oembed_add_discovery_links();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_oembed_add_host_js/
     */
    function wp_oembed_add_host_js()
    {
        return wp_oembed_add_host_js();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_embed_url/
     * @param null $post
     * @return false|string
     */
    function get_post_embed_url($post = null)
    {
        return get_post_embed_url($post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_oembed_endpoint_url/
     * @param string $permalink
     * @param string $format
     * @return string
     */
    function get_oembed_endpoint_url($permalink = '', $format = 'json')
    {
        return get_oembed_endpoint_url($permalink, $format);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_embed_html/
     * @param $width
     * @param $height
     * @param null $post
     * @return false|string
     */
    function get_post_embed_html($width, $height, $post = null)
    {
        return get_post_embed_html($width, $height, $post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_oembed_response_data/
     * @param $post
     * @param $width
     * @return array|false
     */
    function get_oembed_response_data($post, $width)
    {
        return get_oembed_response_data($post, $width);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_oembed_response_data_rich/
     * @param $data
     * @param $post
     * @param $width
     * @param $height
     * @return array
     */
    function get_oembed_response_data_rich($data, $post, $width, $height)
    {
        return get_oembed_response_data_rich($data, $post, $width, $height);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_oembed_ensure_format/
     * @param $format
     * @return string
     */
    function wp_oembed_ensure_format($format)
    {
        return wp_oembed_ensure_format($format);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_filter_oembed_result/
     * @param $result
     * @param $data
     * @param $url
     * @return string
     */
    function wp_filter_oembed_result($result, $data, $url)
    {
        return wp_filter_oembed_result( $result, $data, $url );
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_embed_excerpt_more/
     * @param $more_string
     * @return string
     */
    function wp_embed_excerpt_more($more_string)
    {
        return wp_embed_excerpt_more( $more_string );
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_excerpt_embed/
     */
    function the_excerpt_embed()
    {
        return the_excerpt_embed();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_embed_excerpt_attachment/
     * @param $content
     * @return string
     */
    function wp_embed_excerpt_attachment($content)
    {
        return wp_embed_excerpt_attachment( $content );
    }

    /**
     * https://developer.wordpress.org/reference/functions/enqueue_embed_scripts/
     */
    function enqueue_embed_scripts()
    {
        return enqueue_embed_scripts();
    }

    /**
     * https://developer.wordpress.org/reference/functions/print_embed_styles/
     */
    function print_embed_styles()
    {
        return print_embed_styles();
    }

    /**
     * https://developer.wordpress.org/reference/functions/print_embed_scripts/
     */
    function print_embed_scripts()
    {
        return print_embed_scripts();
    }

    /**
     * https://developer.wordpress.org/reference/functions/print_embed_comments_button/
     */
    function print_embed_comments_button()
    {
        return print_embed_comments_button();
    }

    /**
     * https://developer.wordpress.org/reference/functions/print_embed_sharing_button/
     */
    function print_embed_sharing_button()
    {
        return print_embed_sharing_button();
    }

    /**
     * https://developer.wordpress.org/reference/functions/print_embed_sharing_dialog/
     */
    function print_embed_sharing_dialog()
    {
        return print_embed_sharing_dialog();
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_embed_site_title/
     */
    function the_embed_site_title()
    {
        return the_embed_site_title();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_filter_pre_oembed_result/
     * @param $result
     * @param $url
     * @param $args
     * @return null|string
     */
    function wp_filter_pre_oembed_result($result, $url, $args)
    {
        return wp_filter_pre_oembed_result( $result, $url, $args );
    }
}