<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\Extension;

class TracebackFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'traceback';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
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
     * https://developer.wordpress.org/reference/functions/trackback/
     * @param $trackback_url
     * @param $title
     * @param $excerpt
     * @param $ID
     * @return false|int|void
     */
    public function trackback($trackback_url, $title, $excerpt, $ID)
    {
        return trackback($trackback_url, $title, $excerpt, $ID);
    }

    /**
     * https://developer.wordpress.org/reference/functions/trackback_url/
     * @param bool $deprecated_echo
     * @return string|void
     */
    public function trackback_url($deprecated_echo = true)
    {
        return trackback_url($deprecated_echo = true);
    }

    /**
     * https://developer.wordpress.org/reference/functions/trackback_url_list/
     * @param $tb_list
     * @param $post_id
     */
    public function trackback_url_list($tb_list, $post_id)
    {
        return trackback_url_list($tb_list, $post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/do_trackbacks/
     * @param $post_id
     * @return bool|void
     */
    public function do_trackbacks($post_id)
    {
        return do_trackbacks($post_id);
    }
}