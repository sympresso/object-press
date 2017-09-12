<?php

namespace Sympresso\ObjectPress\Extension;

class TermFunctions extends WpExtension
{
    const FUNCTION_NAMESPACE = 'term';

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
     * https://developer.wordpress.org/reference/functions/wp_get_post_categories/
     * @param int $post_id
     * @param array $args
     * @return array|\WP_Error
     */
    public function wp_get_post_categories($post_id = 0, $args = array())
    {
        return wp_get_post_categories($post_id, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_set_post_categories/
     * @param int $post_ID
     * @param array $post_categories
     * @param bool $append
     * @return array|false|\WP_Error
     */
    public function wp_set_post_categories($post_ID = 0, $post_categories = array(), $append = false)
    {
        return wp_set_post_categories($post_ID, $post_categories, $append);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_post_tags/
     * @param int $post_id
     * @param array $args
     * @return array|\WP_Error
     */
    public function wp_get_post_tags($post_id = 0, $args = array())
    {
        return wp_get_post_tags($post_id, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_set_post_tags/
     * @param int $post_id
     * @param string $tags
     * @param bool $append
     * @return array|false|\WP_Error
     */
    public function wp_set_post_tags($post_id = 0, $tags = '', $append = false)
    {
        return wp_set_post_tags($post_id, $tags, $append);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_post_terms/
     * @param int $post_id
     * @param string $taxonomy
     * @param array $args
     * @return array|\WP_Error
     */
    public function wp_get_post_terms($post_id = 0, $taxonomy = 'post_tag', $args = array())
    {
        return wp_get_post_terms($post_id, $taxonomy, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_set_post_terms/
     * @param int $post_id
     * @param string $tags
     * @param string $taxonomy
     * @param bool $append
     * @return array|false|\WP_Error
     */
    public function wp_set_post_terms($post_id = 0, $tags = '', $taxonomy = 'post_tag', $append = false)
    {
        return wp_set_post_terms($post_id, $tags, $taxonomy, $append);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_count_terms/
     * @param $taxonomy
     * @param array $args
     * @return array|int|\WP_Error
     */
    public function wp_count_terms($taxonomy, $args = array())
    {
        return wp_count_terms($taxonomy, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/has_term/
     * @param string $term
     * @param string $taxonomy
     * @param null $post
     * @return bool
     */
    public function has_term($term = '', $taxonomy = '', $post = null)
    {
        return has_term($term, $taxonomy, $post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_object_in_term/
     * @param $object_id
     * @param $taxonomy
     * @param null $terms
     * @return bool|\WP_Error
     */
    public function is_object_in_term($object_id, $taxonomy, $terms = null)
    {
        return is_object_in_term($object_id, $taxonomy, $terms);
    }
}