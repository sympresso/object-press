<?php

namespace Sympresso\ObjectPress\CoreExtension;

use Sympresso\ObjectPress\Extension;

class SidebarFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'sidebar';

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
     * https://developer.wordpress.org/reference/functions/get_sidebar/
     * @param null $name
     */
    public function get_sidebar($name = null)
    {
        return get_sidebar($name);
    }

    /**
     * https://developer.wordpress.org/reference/functions/dynamic_sidebar/
     * @param int $index
     * @return bool
     */
    public function dynamic_sidebar($index = 1)
    {
        return dynamic_sidebar($index);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_active_sidebar/
     * @param $index
     * @return bool
     */
    public function is_active_sidebar($index)
    {
        return is_active_sidebar($index);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_dynamic_sidebar/
     * @return bool
     */
    public function is_dynamic_sidebar()
    {
        return is_dynamic_sidebar();
    }

    /**
     * https://developer.wordpress.org/reference/functions/register_sidebar/
     * @param array $args
     * @return string
     */
    public function register_sidebar($args = array())
    {
        return register_sidebar($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/register_sidebars/
     * @param int $number
     * @param array $args
     */
    public function register_sidebars($number = 1, $args = array())
    {
        return register_sidebars($number, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/unregister_sidebar/
     * @param $sidebar_id
     */
    public function unregister_sidebar($sidebar_id)
    {
        return unregister_sidebar($sidebar_id);
    }
}