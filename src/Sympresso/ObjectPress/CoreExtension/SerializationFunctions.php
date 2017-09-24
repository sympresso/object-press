<?php

namespace Sympresso\ObjectPress\CoreExtension;

class SerializationFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'serialization';

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
     * https://developer.wordpress.org/reference/functions/wp_hash/
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
     * https://developer.wordpress.org/reference/functions/maybe_serialize/
     * @param $data
     * @return mixed
     */
    public function maybe_serialize($data)
    {
        return maybe_serialize($data);
    }

    /**
     * https://developer.wordpress.org/reference/functions/maybe_unserialize/
     * @param $original
     * @return mixed
     */
    public function maybe_unserialize($original)
    {
        return maybe_unserialize($original);
    }
}