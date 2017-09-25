<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\Extension;

class TaxFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'tax';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_object_taxonomies/
     * @param $object
     * @param string $output
     * @return array
     */
    public function get_object_taxonomies($object, $output = 'names')
    {
        return get_object_taxonomies($object, $output);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_edit_term_link/
     * @param $term_id
     * @param string $taxonomy
     * @param string $object_type
     * @return null|string
     */
    public function get_edit_term_link($term_id, $taxonomy = '', $object_type = '')
    {
        return get_edit_term_link($term_id, $taxonomy, $object_type);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_taxonomy/
     * @param $taxonomy
     * @return false|\WP_Taxonomy
     */
    public function get_taxonomy($taxonomy)
    {
        return get_taxonomy($taxonomy);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_taxonomies/
     * @param array $args
     * @param string $output
     * @param string $operator
     * @return array
     */
    public function get_taxonomies($args = array(), $output = 'names', $operator = 'and')
    {
        return get_taxonomies($args, $output, $operator);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_term/
     * @param $term
     * @param string $taxonomy
     * @param string $output
     * @param string $filter
     * @return array|null|\WP_Error|\WP_Term
     */
    public function get_term($term, $taxonomy = '', $output = OBJECT, $filter = 'raw')
    {
        return get_term($term, $taxonomy, $output, $filter);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_term_list/
     * @param $id
     * @param $taxonomy
     * @param string $before
     * @param string $sep
     * @param string $after
     * @return false|string|\WP_Error
     */
    public function get_the_term_list($id, $taxonomy, $before = '', $sep = '', $after = '')
    {
        return get_the_term_list($id, $taxonomy, $before, $sep, $after);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_term_by/
     * @param $field
     * @param $value
     * @param string $taxonomy
     * @param string $output
     * @param string $filter
     * @return array|false|\WP_Term
     */
    public function get_term_by($field, $value, $taxonomy = '', $output = OBJECT, $filter = 'raw')
    {
        return get_term_by($field, $value, $taxonomy, $output, $filter);
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_terms/
     * @param $id
     * @param $taxonomy
     * @param string $before
     * @param string $sep
     * @param string $after
     * @return false|void
     */
    public function the_terms($id, $taxonomy, $before = '', $sep = ', ', $after = '')
    {
        return the_terms($id, $taxonomy, $before, $sep, $after);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_terms/
     * @param $post
     * @param $taxonomy
     * @return array|false|\WP_Error
     */
    public function get_the_terms($post, $taxonomy)
    {
        return get_the_terms($post, $taxonomy);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_term_children/
     * @param $term_id
     * @param $taxonomy
     * @return array|\WP_Error
     */
    public function get_term_children($term_id, $taxonomy)
    {
        return get_term_children($term_id, $taxonomy);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_term_link/
     * @param $term
     * @param string $taxonomy
     * @return string|\WP_Error
     */
    public function get_term_link($term, $taxonomy = '')
    {
        return get_term_link($term, $taxonomy);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_terms/
     * @param array $args
     * @param string $deprecated
     * @return array|int|\WP_Error
     */
    public function get_terms($args = array(), $deprecated = '')
    {
        return get_terms($args, $deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_taxonomy/
     * @param $taxonomy
     * @return bool
     * @deprecated
     */
    public function is_taxonomy($taxonomy)
    {
        return is_taxonomy($taxonomy);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_tax/
     * @param string $taxonomy
     * @param string $term
     * @return bool
     */
    public function is_tax($taxonomy = '', $term = '')
    {
        return is_tax($taxonomy, $term);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_taxonomy_hierarchical/
     * @param $taxonomy
     * @return bool
     */
    public function is_taxonomy_hierarchical($taxonomy)
    {
        return is_taxonomy_hierarchical($taxonomy);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_term/
     * @param $term
     * @param string $taxonomy
     * @param int $parent
     * @return mixed
     * @deprecated
     */
    public function is_term($term, $taxonomy = '', $parent = 0)
    {
        return is_term($term, $taxonomy, $parent);
    }

    /**
     * https://developer.wordpress.org/reference/functions/taxonomy_exists/
     * @param $taxonomy
     * @return bool
     */
    public function taxonomy_exists($taxonomy)
    {
        return taxonomy_exists($taxonomy);
    }

    /**
     * https://developer.wordpress.org/reference/functions/term_exists/
     * @param $term
     * @param string $taxonomy
     * @param null $parent
     * @return mixed
     */
    public function term_exists($term, $taxonomy = '', $parent = null)
    {
        return term_exists($term, $taxonomy, $parent);
    }

    /**
     * https://developer.wordpress.org/reference/functions/register_taxonomy/
     * @param $taxonomy
     * @param $object_type
     * @param array $args
     * @return void|\WP_Error
     */
    public function register_taxonomy($taxonomy, $object_type, $args = array())
    {
        return register_taxonomy($taxonomy, $object_type, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/register_taxonomy_for_object_type/
     * @param $taxonomy
     * @param $object_type
     * @return bool
     */
    public function register_taxonomy_for_object_type($taxonomy, $object_type)
    {
        return register_taxonomy_for_object_type($taxonomy, $object_type);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_object_terms/
     * @param $object_ids
     * @param $taxonomies
     * @param array $args
     * @return array|\WP_Error
     */
    public function wp_get_object_terms($object_ids, $taxonomies, $args = array())
    {
        return wp_get_object_terms($object_ids, $taxonomies, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_remove_object_terms/
     * @param $object_id
     * @param $terms
     * @param $taxonomy
     * @return bool|\WP_Error
     */
    public function wp_remove_object_terms($object_id, $terms, $taxonomy)
    {
        return wp_remove_object_terms($object_id, $terms, $taxonomy);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_set_object_terms/
     * @param $object_id
     * @param $terms
     * @param $taxonomy
     * @param bool $append
     * @return array|\WP_Error
     */
    public function wp_set_object_terms($object_id, $terms, $taxonomy, $append = false)
    {
        return wp_set_object_terms($object_id, $terms, $taxonomy, $append);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_term/
     * @param $term
     * @param $taxonomy
     * @param array $args
     * @return array|\WP_Error
     */
    public function wp_insert_term($term, $taxonomy, $args = array())
    {
        return wp_insert_term($term, $taxonomy, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_update_term/
     * @param $term_id
     * @param $taxonomy
     * @param array $args
     * @return array|\WP_Error
     */
    public function wp_update_term($term_id, $taxonomy, $args = array())
    {
        return wp_update_term($term_id, $taxonomy, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_delete_term/
     * @param $term
     * @param $taxonomy
     * @param array $args
     * @return bool|int|\WP_Error
     */
    public function wp_delete_term($term, $taxonomy, $args = array())
    {
        return wp_delete_term($term, $taxonomy, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_terms_checklist/
     * @param int $post_id
     * @param array $args
     * @return string
     */
    public function wp_terms_checklist($post_id = 0, $args = array())
    {
        return wp_terms_checklist($post_id, $args);
    }
}