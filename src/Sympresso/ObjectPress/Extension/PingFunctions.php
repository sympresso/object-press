<?php

namespace Sympresso\ObjectPress\Extension;

class PingFunctions extends WpExtension
{
    const FUNCTION_NAMESPACE = 'ping';

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
     * https://developer.wordpress.org/reference/functions/add_ping/
     * @param $post_id
     * @param $uri
     * @return false|int
     */
    public function add_ping($post_id, $uri)
    {
        return add_ping($post_id, $uri);
    }

    /**
     * https://developer.wordpress.org/reference/functions/pingback/
     * @param $content
     * @param $post_id
     */
    public function pingback($content, $post_id)
    {
        return pingback($content, $post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/privacy_ping_filter/
     * @param $sites
     * @return mixed
     */
    public function privacy_ping_filter($sites)
    {
        return privacy_ping_filter($sites);
    }

    /**
     * https://developer.wordpress.org/reference/functions/discover_pingback_server_uri/
     * @param $url
     * @param string $deprecated
     * @return false|string
     */
    public function discover_pingback_server_uri($url, $deprecated = '')
    {
        return discover_pingback_server_uri($url, $deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/do_all_pings/
     */
    public function do_all_pings()
    {
        return do_all_pings();
    }

    /**
     * https://developer.wordpress.org/reference/functions/generic_ping/
     * @param int $post_id
     * @return int
     */
    public function generic_ping($post_id = 0)
    {
        return generic_ping($post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_pung/
     * @param $post_id
     * @return array
     */
    public function get_pung($post_id)
    {
        return get_pung($post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_to_ping/
     * @param $post_id
     * @return array
     */
    public function get_to_ping($post_id)
    {
        return get_to_ping($post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/weblog_ping/
     * @param string $server
     * @param string $path
     */
    public function weblog_ping($server = '', $path = '')
    {
        return weblog_ping($server, $path);
    }

    /**
     * https://developer.wordpress.org/reference/functions/pings_open/
     * @param null $post_id
     * @return bool
     */
    public function pings_open($post_id = null)
    {
        return pings_open($post_id);
    }
}