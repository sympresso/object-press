<?php

namespace Sympresso\ObjectPress\CoreExtension;

use Sympresso\ObjectPress\Extension;

class EnclosureFunctions extends Extension
{

    const FUNCTION_NAMESPACE = 'enclosure';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
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