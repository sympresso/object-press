<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\AbstractExtension;

class UrlFunctions extends AbstractExtension
{
    const FUNCTION_NAMESPACE = 'url';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_rewrite_rule/
     * @param $regex
     * @param $query
     * @param string $after
     */
    public function add_rewrite_rule($regex, $query, $after = 'bottom')
    {
        return add_rewrite_rule($regex, $query, $after);
    }

    /**
     * https://developer.wordpress.org/reference/functions/admin_url/
     * @param string $path
     * @param string $scheme
     * @return string|void
     */
    public function admin_url($path = '', $scheme = 'admin')
    {
        return admin_url($path, $scheme);
    }

    /**
     * https://developer.wordpress.org/reference/functions/content_url/
     * @param string $path
     * @return string
     */
    public function content_url($path = '')
    {
        return content_url($path);
    }

    /**
     * https://developer.wordpress.org/reference/functions/flush_rewrite_rules/
     * @param bool $hard
     */
    public function flush_rewrite_rules($hard = true)
    {
        return flush_rewrite_rules($hard);
    }

    /**
     * https://developer.wordpress.org/reference/functions/home_url/
     * @param string $path
     * @param null $scheme
     * @return string|void
     */
    public function home_url($path = '', $scheme = null)
    {
        return home_url($path, $scheme);
    }

    /**
     * https://developer.wordpress.org/reference/functions/includes_url/
     * @param string $path
     * @param null $scheme
     * @return string|void
     */
    public function includes_url($path = '', $scheme = null)
    {
        return includes_url($path, $scheme);
    }

    /**
     * https://developer.wordpress.org/reference/functions/network_admin_url/
     * @param string $path
     * @param string $scheme
     * @return string
     */
    public function network_admin_url($path = '', $scheme = 'admin')
    {
        return network_admin_url($path, $scheme);
    }

    /**
     * https://developer.wordpress.org/reference/functions/network_home_url/
     * @param string $path
     * @param null $scheme
     * @return string
     */
    public function network_home_url($path = '', $scheme = null)
    {
        return network_home_url($path, $scheme);
    }

    /**
     * https://developer.wordpress.org/reference/functions/network_site_url/
     * @param string $path
     * @param null $scheme
     * @return string
     */
    public function network_site_url($path = '', $scheme = null)
    {
        return network_site_url($path, $scheme);
    }

    /**
     * https://developer.wordpress.org/reference/functions/plugin_dir_url/
     * @param $file
     * @return string
     */
    public function plugin_dir_url($file)
    {
        return plugin_dir_url($file);
    }

    /**
     * https://developer.wordpress.org/reference/functions/site_url/
     * @param string $path
     * @param null $scheme
     * @return string|void
     */
    public function site_url($path = '', $scheme = null)
    {
        return site_url($path, $scheme);
    }
}