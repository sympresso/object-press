<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\AbstractExtension;

class BookmarkFunctions extends AbstractExtension
{
    const FUNCTION_NAMESPACE = 'bookmark';

    /**
     * @return string
     */
    public function getExtensionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_bookmark/
     * @param $bookmark
     * @param string $output
     * @param string $filter
     * @return array|null|object
     */
    public function get_bookmark($bookmark, $output = OBJECT, $filter = 'raw')
    {
        return get_bookmark($bookmark, $output, $filter);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_bookmarks/
     * @param string $args
     * @return array
     */
    public function get_bookmarks($args = '')
    {
        return get_bookmarks($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_list_bookmarks/
     * @param string $args
     * @return string|void
     *
     */
    public function wp_list_bookmarks($args = '')
    {
        return wp_list_bookmarks($args);
    }
}