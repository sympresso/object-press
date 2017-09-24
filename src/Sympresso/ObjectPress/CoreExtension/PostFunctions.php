<?php

namespace Sympresso\ObjectPress\CoreExtension;

use Sympresso\ObjectPress\Extension;

class PostFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'post';

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
     * https://developer.wordpress.org/reference/functions/get_adjacent_post/
     * @param bool $in_same_term
     * @param string $excluded_terms
     * @param bool $previous
     * @param string $taxonomy
     * @return null|string|\WP_Post
     */
    public function get_adjacent_post(
        $in_same_term = false,
        $excluded_terms = '',
        $previous = true,
        $taxonomy = 'category'
    ) {
        return get_adjacent_post($in_same_term, $excluded_terms, $previous, $taxonomy);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_boundary_post/
     * @param bool $in_same_term
     * @param string $excluded_terms
     * @param bool $start
     * @param string $taxonomy
     * @return array|null
     */
    public function get_boundary_post(
        $in_same_term = false,
        $excluded_terms = '',
        $start = true,
        $taxonomy = 'category'
    ) {
        return get_boundary_post($in_same_term, $excluded_terms, $start, $taxonomy);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_children/
     * @param string $args
     * @param string $output
     * @return array
     */
    public function get_children($args = '', $output = OBJECT)
    {
        return get_children($args, $output);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_extended/
     * @param $post
     * @return array
     */
    public function get_extended($post)
    {
        return get_extended($post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_next_post/
     * @param bool $in_same_term
     * @param string $excluded_terms
     * @param string $taxonomy
     * @return null|string|\WP_Post
     */
    public function get_next_post($in_same_term = false, $excluded_terms = '', $taxonomy = 'category')
    {
        return get_next_post($in_same_term, $excluded_terms, $taxonomy);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_next_posts_link/
     * @param null $label
     * @param int $max_page
     * @return string|void
     */
    public function get_next_posts_link($label = null, $max_page = 0)
    {
        return get_next_posts_link($label, $max_page);
    }

    /**
     * https://developer.wordpress.org/reference/functions/next_posts_link/
     * @param null $label
     * @param int $max_page
     */
    public function next_posts_link($label, $max_page)
    {
        return next_posts_link($label = null, $max_page = 0);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_permalink/
     * @param int $post
     * @param bool $leavename
     * @return false|string
     */
    public function get_permalink($post = 0, $leavename = false)
    {
        return get_permalink($post, $leavename);
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_permalink/
     * @param int $post
     *
     */
    public function the_permalink($post = 0)
    {
        return the_permalink($post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_excerpt/
     * @param null $post
     * @return string
     */
    public function get_the_excerpt($post = null)
    {
        return get_the_excerpt($post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_excerpt/
     */
    public function the_excerpt()
    {
        return the_excerpt();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_post_thumbnail/
     * @param null $post
     * @param string $size
     * @param string $attr
     * @return string
     */
    public function get_the_post_thumbnail($post = null, $size = 'post-thumbnail', $attr = '')
    {
        return get_the_post_thumbnail($post, $size, $attr);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post/
     * @param null $post
     * @param string $output
     * @param string $filter
     * @return array|null|\WP_Post
     */
    public function get_post($post = null, $output = OBJECT, $filter = 'raw')
    {
        return get_post($post, $output, $filter);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_field/
     * @param $field
     * @param null $post
     * @param string $context
     * @return string
     */
    public function get_post_field($field, $post = null, $context = 'display')
    {
        return get_post_field($field, $post, $context);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_ancestors/
     * @param $post
     * @return array
     */
    public function get_post_ancestors($post)
    {
        return get_post_ancestors($post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_mime_type/
     * @param string $ID
     * @return false|string
     */
    public function get_post_mime_type($ID = '')
    {
        return get_post_mime_type($ID);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_status/
     * @param string $ID
     * @return false|string
     */
    public function get_post_status($ID = '')
    {
        return get_post_status($ID);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_format/
     * @param null $post
     * @return false|string
     */
    public function get_post_format($post = null)
    {
        return get_post_format($post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/set_post_format/
     * @param $post
     * @param $format
     * @return array|false|\WP_Error
     */
    public function set_post_format($post, $format)
    {
        return set_post_format($post, $format);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_edit_post_link/
     * @param int $id
     * @param string $context
     * @return null|string
     */
    public function get_edit_post_link($id = 0, $context = 'display')
    {
        return get_edit_post_link($id, $context);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_delete_post_link/
     * @param int $id
     * @param string $deprecated
     * @param bool $force_delete
     * @return string|void
     */
    public function get_delete_post_link($id = 0, $deprecated = '', $force_delete = false)
    {
        return get_delete_post_link($id, $deprecated, $force_delete);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_previous_post/
     * @param bool $in_same_term
     * @param string $excluded_terms
     * @param string $taxonomy
     * @return null|string|\WP_Post
     */
    public function get_previous_post($in_same_term = false, $excluded_terms = '', $taxonomy = 'category')
    {
        return get_previous_post($in_same_term, $excluded_terms, $taxonomy);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_previous_posts_link/
     * @param null $label
     * @return string|void
     */
    public function get_previous_posts_link($label = null)
    {
        return get_previous_posts_link($label);
    }

    /**
     * https://developer.wordpress.org/reference/functions/previous_posts_link/
     * @param null $label
     */
    public function previous_posts_link($label = null)
    {
        return previous_posts_link($label);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_posts/
     * @param null $args
     * @return array
     */
    public function get_posts($args = null)
    {
        return get_posts($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/have_posts/
     * @return bool
     */
    public function have_posts()
    {
        return have_posts();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_ID/
     * @return false|int
     */
    public function get_the_ID()
    {
        return get_the_ID();
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_ID/
     * @return false|int
     */
    public function the_ID()
    {
        return get_the_ID();
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_post/
     */
    public function the_post()
    {
        return the_post();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_recent_posts/
     * @param array $args
     * @param string $output
     * @return array|false
     */
    public function wp_get_recent_posts($args = array(), $output = ARRAY_A)
    {
        return wp_get_recent_posts($args, $output);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_single_post/
     * @param int $postid
     * @param string $mode
     * @return null|\WP_Post
     * @deprecated
     */
    public function wp_get_single_post($postid = 0, $mode = OBJECT)
    {
        return wp_get_single_post($postid, $mode);
    }

    /**
     * https://developer.wordpress.org/reference/functions/has_post_thumbnail/
     * @param null $post
     * @return bool
     */
    public function has_post_thumbnail($post = null)
    {
        return has_post_thumbnail($post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/has_excerpt/
     * @param int $post
     * @return bool
     */
    public function has_excerpt($post = 0)
    {
        return has_excerpt($post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/has_post_format/
     * @param array $format
     * @param null $post
     * @return bool
     */
    public function has_post_format($format = array(), $post = null)
    {
        return has_post_format($format, $post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/register_post_status/
     * @param $post_status
     * @param array $args
     * @return object
     */
    public function register_post_status($post_status, $args = array())
    {
        return register_post_status($post_status, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_delete_post/
     * @param int $postid
     * @param bool $force_delete
     * @return array|false|\WP_Post
     */
    public function wp_delete_post($postid = 0, $force_delete = false)
    {
        return wp_delete_post($postid, $force_delete);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_post/
     * @param $postarr
     * @param bool $wp_error
     * @return int|\WP_Error
     */
    public function wp_insert_post($postarr, $wp_error = false)
    {
        return wp_insert_post($postarr, $wp_error);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_publish_post/
     * @param $post
     */
    public function wp_publish_post($post)
    {
        return wp_publish_post($post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_trash_post/
     * @param int $post_id
     * @return array|false|null|\WP_Post
     */
    public function wp_trash_post($post_id = 0)
    {
        return wp_trash_post($post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_update_post/
     * @param array $postarr
     * @param bool $wp_error
     * @return int|\WP_Error
     */
    public function wp_update_post($postarr = array(), $wp_error = false)
    {
        return wp_update_post($postarr, $wp_error);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_author/
     * @param string $deprecated
     * @return null|string
     */
    public function get_the_author($deprecated = '')
    {
        return get_the_author($deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_author/
     * @param string $deprecated
     * @param bool $deprecated_echo
     * @return null|string
     */
    public function the_author($deprecated = '', $deprecated_echo = true)
    {
        return the_author($deprecated, $deprecated_echo);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_author_posts/
     * @return int
     */
    public function get_the_author_posts()
    {
        return get_the_author_posts();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_content/
     * @param null $more_link_text
     * @param bool $strip_teaser
     * @return string
     */
    public function get_the_content($more_link_text = null, $strip_teaser = false)
    {
        return get_the_content($more_link_text, $strip_teaser);
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_content/
     * @param null $more_link_text
     * @param bool $strip_teaser
     */
    public function the_content($more_link_text = null, $strip_teaser = false)
    {
        return the_content($more_link_text, $strip_teaser);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_title/
     * @param int $post
     * @return string
     */
    public function get_the_title($post = 0)
    {
        return get_the_title($post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_title/
     * @param string $before
     * @param string $after
     * @param bool $echo
     * @return string|void
     */
    public function the_title($before = '', $after = '', $echo = true)
    {
        return the_title($before, $after, $echo);
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_title_attribute/
     * @param string $args
     * @return string|void
     */
    public function the_title_attribute($args = '')
    {
        return the_title_attribute($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_trim_excerpt/
     * @param string $text
     * @return string
     */
    public function wp_trim_excerpt($text = '')
    {
        return wp_trim_excerpt($text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_post_revision/
     * @param $post
     * @param string $output
     * @param string $filter
     * @return array|null|\WP_Post
     */
    public function wp_get_post_revision(&$post, $output = OBJECT, $filter = 'raw')
    {
        return wp_get_post_revision($post, $output, $filter);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_post_revisions/
     * @param int $post_id
     * @param null $args
     * @return array
     */
    public function wp_get_post_revisions($post_id = 0, $args = null)
    {
        return wp_get_post_revisions($post_id, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_is_post_revision/
     * @param $post
     * @return false|int
     */
    public function wp_is_post_revision($post)
    {
        return wp_is_post_revision($post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/paginate_links/
     * @param string $args
     * @return array|string|void
     */
    public function paginate_links($args = '')
    {
        return paginate_links($args = '');
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_stati/
     * @param array $args
     * @param string $output
     * @param string $operator
     * @return array
     */
    public function get_post_stati($args = array(), $output = 'names', $operator = 'and')
    {
        return get_post_stati($args, $output, $operator);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_statuses/
     * @return array
     */
    public function get_post_statuses()
    {
        return get_post_statuses();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_statuses/
     * @param string $class
     * @param null $post_id
     */
    public function post_class($class = '', $post_id = null)
    {
        return post_class($class, $post_id);
    }

    /**
     * @param $userid
     * @param string $post_type
     * @param bool $public_only
     * @return string
     */
    public function count_user_posts($userid, $post_type = 'post', $public_only = false)
    {
        return count_user_posts($userid, $post_type, $public_only);
    }

    /**
     * @param $users
     * @param string $post_type
     * @param bool $public_only
     * @return array
     */
    public function count_many_users_posts($users, $post_type = 'post', $public_only = false)
    {
        return count_many_users_posts($users, $post_type, $public_only);
    }

    /**
     * @param $userid
     * @return int
     * @deprecated
     */
    public function get_usernumposts($userid)
    {
        return get_usernumposts($userid);
    }
}