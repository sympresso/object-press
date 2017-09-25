<?php

namespace Sympresso\ObjectPress\CoreExtension;

use Sympresso\ObjectPress\Extension;

class CoreGlobals extends Extension
{
    const FUNCTION_NAMESPACE = 'globals';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * @return array
     */
    public function getGlobalVariables()
    {
        return array(
            'post',
            'authordata',
            'currentday',
            'currentmonth',
            'page',
            'pages',
            'multipage',
            'more',
            'numpages',
            'is_iphone',
            'is_chrome',
            'is_safari',
            'is_NS4',
            'is_opera',
            'is_macIE',
            'is_winIE',
            'is_gecko',
            'is_lynx',
            'is_IE (boolean)Internet Explorer',
            'is_edge',
            'is_apache',
            'is_IIS',
            'is_iis7',
            'wp_version',
            'wp_db_version',
            'tinymce_version',
            'manifest_version',
            'required_php_version',
            'required_mysql_version',
            'super_admins',
            'wp_query',
            'wp_rewrite',
            'wp',
            'wpdb',
            'wp_locale',
            'wp_admin_bar',
            'wp_roles',
            'wp_meta_boxes',
            'wp_registered_sidebars',
            'wp_registered_widgets',
            'wp_registered_widget_controls',
            'wp_registered_widget_updates',
            'pagenow',
            'post_type',
            'allowedposttags',
            'allowedtags',
            'menu'
        );
    }
}