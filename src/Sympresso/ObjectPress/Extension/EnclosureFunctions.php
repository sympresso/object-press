<?php

namespace Sympresso\ObjectPress\Extension;

class EnclosureFunctions extends WpExtension
{

    const FUNCTION_NAMESPACE = 'enclosure';

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
     * https://developer.wordpress.org/reference/functions/get_enclosed/
     * @param $post_id
     * @return array
     */
    public function get_enclosed($post_id)
    {
        return get_enclosed($post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/do_enclose/
     * @param $content
     * @param $post_ID
     */
    public function do_enclose($content, $post_ID)
    {
        return do_enclose($content, $post_ID);
    }
}