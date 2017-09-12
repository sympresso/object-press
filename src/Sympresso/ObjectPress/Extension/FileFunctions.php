<?php

namespace Sympresso\ObjectPress\Extension;

class FileFunctions extends WpExtension
{
    const FUNCTION_NAMESPACE = 'file';

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
     * https://developer.wordpress.org/reference/functions/unzip_file/
     * @param $file
     * @param $to
     * @return mixed
     */
    public function unzip_file($file, $to)
    {
        return unzip_file($file, $to);
    }

    /**
     * https://developer.wordpress.org/reference/functions/validate_file/
     * @param $file
     * @param string $allowed_files
     * @return int
     */
    public function validate_file($file, $allowed_files = '')
    {
        return validate_file($file, $allowed_files);
    }

    /**
     * https://developer.wordpress.org/reference/functions/validate_file_to_edit/
     * @param $file
     * @param string $allowed_files
     * @return null|string
     */
    public function validate_file_to_edit($file, $allowed_files = '')
    {
        return validate_file_to_edit($file, $allowed_files);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_check_filetype/
     * @param $filename
     * @param null $mimes
     * @return array
     */
    public function wp_check_filetype($filename, $mimes = null)
    {
        return wp_check_filetype($filename, $mimes);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_handle_sideload/
     * @param $file
     * @param bool $overrides
     * @param null $time
     * @return array
     */
    public function wp_handle_sideload(&$file, $overrides = false, $time = null)
    {
        return wp_handle_sideload($file, $overrides, $time);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_upload_bits/
     * @param $name
     * @param $deprecated
     * @param $bits
     * @param null $time
     * @return array
     */
    public function wp_upload_bits($name, $deprecated, $bits, $time = null)
    {
        return wp_upload_bits($name, $deprecated, $bits, $time);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_upload_dir/
     * @param null $time
     * @param bool $create_dir
     * @param bool $refresh_cache
     * @return array
     */
    public function wp_upload_dir($time = null, $create_dir = true, $refresh_cache = false)
    {
        return wp_upload_dir($time, $create_dir, $refresh_cache);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_mkdir_p/
     * @param $target
     * @return bool
     */
    public function wp_mkdir_p($target)
    {
        return wp_mkdir_p($target);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_max_upload_size/
     * @return int
     */
    public function wp_max_upload_size()
    {
        return wp_max_upload_size();
    }
}