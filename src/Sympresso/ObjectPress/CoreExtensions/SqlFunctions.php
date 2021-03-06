<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\AbstractExtension;

class SqlFunctions extends AbstractExtension
{
    const FUNCTION_NAMESPACE = 'sql';

    /**
     * @return string
     */
    public function getExtensionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_tax_sql/
     * @param $tax_query
     * @param $primary_table
     * @param $primary_id_column
     * @return array
     */
    public function get_tax_sql($tax_query, $primary_table, $primary_id_column)
    {
        return get_tax_sql($tax_query, $primary_table, $primary_id_column);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_meta_sql/
     * @param $meta_query
     * @param $type
     * @param $primary_table
     * @param $primary_id_column
     * @param null $context
     * @return array
     */
    public function get_meta_sql($meta_query, $type, $primary_table, $primary_id_column, $context = null)
    {
        return get_meta_sql($meta_query, $type, $primary_table, $primary_id_column, $context = null);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_posts_by_author_sql/
     * @param $post_type
     * @param bool $full
     * @param null $post_author
     * @param bool $public_only
     * @return string
     */
    public function get_posts_by_author_sql($post_type, $full = true, $post_author = null, $public_only = false)
    {
        return get_posts_by_author_sql($post_type, $full, $post_author, $public_only);
    }
}