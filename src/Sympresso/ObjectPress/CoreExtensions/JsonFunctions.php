<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\AbstractExtension;

class JsonFunctions extends AbstractExtension
{

    const FUNCTION_NAMESPACE = 'json';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_send_json/
     * @param $response
     * @param null $status_code
     *
     */
    public function wp_send_json($response, $status_code = null)
    {
        return wp_send_json($response, $status_code);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_send_json_error/
     * @param null $data
     * @param null $status_code
     *
     */
    public function wp_send_json_error($data = null, $status_code = null)
    {
        return wp_send_json_error($data, $status_code);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_send_json_success/
     * @param null $data
     * @param null $status_code
     *
     */
    public function wp_send_json_success($data = null, $status_code = null)
    {
        return wp_send_json_success($data, $status_code);
    }
}