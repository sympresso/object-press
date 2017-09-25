<?php

namespace Sympresso\ObjectPress\CoreExtension;

use Sympresso\ObjectPress\Extension;

class CommentFunctions extends Extension
{

    const FUNCTION_NAMESPACE = 'comment';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/comment_link/
     * @param null $comment
     *
     */
    public function comment_link($comment = null)
    {
        return comment_link($comment);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_comment_link/
     * @param null $comment
     * @param array $args
     * @return string
     */
    public function get_comment_link($comment = null, $args = array())
    {
        return get_comment_link($comment, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_comment_meta/
     * @param $comment_id
     * @param $meta_key
     * @param $meta_value
     * @param bool $unique
     * @return bool|int
     */
    public function add_comment_meta($comment_id, $meta_key, $meta_value, $unique = false)
    {
        return add_comment_meta($comment_id, $meta_key, $meta_value, $unique);
    }

    /**
     * https://developer.wordpress.org/reference/functions/check_comment/
     * @param $author
     * @param $email
     * @param $url
     * @param $comment
     * @param $user_ip
     * @param $user_agent
     * @param $comment_type
     * @return bool
     */
    public function check_comment($author, $email, $url, $comment, $user_ip, $user_agent, $comment_type)
    {
        return check_comment($author, $email, $url, $comment, $user_ip, $user_agent, $comment_type);
    }

    /**
     * https://developer.wordpress.org/reference/functions/comment_text/
     * @param int $comment_ID
     * @param array $args
     *
     */
    public function comment_text($comment_ID = 0, $args = array())
    {
        return comment_text($comment_ID, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/comment_form/
     * @param array $args
     * @param null $post_id
     *
     */
    public function comment_form($args = array(), $post_id = null)
    {
        return comment_form($args, $post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/comments_number/
     * @param bool $zero
     * @param bool $one
     * @param bool $more
     * @param string $deprecated
     *
     */
    public function comments_number($zero = false, $one = false, $more = false, $deprecated = '')
    {
        return comments_number($zero, $one, $more, $deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/delete_comment_meta/
     * @param $comment_id
     * @param $meta_key
     * @param string $meta_value
     * @return bool
     */
    public function delete_comment_meta($comment_id, $meta_key, $meta_value = '')
    {
        return delete_comment_meta($comment_id, $meta_key, $meta_value);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_approved_comments/
     * @param $post_id
     * @param array $args
     * @return array|int
     */
    public function get_approved_comments($post_id, $args = array())
    {
        return get_approved_comments($post_id, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_avatar/
     * @param $id_or_email
     * @param int $size
     * @param string $default
     * @param string $alt
     * @param null $args
     * @return false|string
     */
    public function get_avatar($id_or_email, $size = 96, $default = '', $alt = '', $args = null)
    {
        return get_avatar($id_or_email, $size, $default, $alt, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_comment/
     * @param null $comment
     * @param string $output
     * @return array|null|\WP_Comment
     */
    public function get_comment(&$comment = null, $output = OBJECT)
    {
        return get_comment($comment, $output);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_comment_text/
     * @param int $comment_ID
     * @param array $args
     * @return string
     */
    public function get_comment_text($comment_ID = 0, $args = array())
    {
        return get_comment_text($comment_ID, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_comment_meta/
     * @param $comment_id
     * @param string $key
     * @param bool $single
     * @return mixed
     */
    public function get_comment_meta($comment_id, $key = '', $single = false)
    {
        return get_comment_meta($comment_id, $key, $single);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_comments/
     * @param string $args
     * @return array|int
     */
    public function get_comments($args = '')
    {
        return get_comments($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_list_comments/
     * @param array $args
     * @param null $comments
     * @return string
     *
     */
    public function wp_list_comments($args = array(), $comments = null)
    {
        return wp_list_comments($args, $comments);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_lastcommentmodified/
     * @param string $timezone
     * @return false|string
     */
    public function get_lastcommentmodified($timezone = 'server')
    {
        return get_lastcommentmodified($timezone);
    }

    /**
     * https://developer.wordpress.org/reference/functions/have_comments/
     * @return bool
     */
    public function have_comments()
    {
        return have_comments();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_comment_author/
     * @param int $comment_ID
     * @return string
     */
    public function get_comment_author($comment_ID = 0)
    {
        return get_comment_author($comment_ID);
    }

    /**
     * https://developer.wordpress.org/reference/functions/update_comment_meta/
     * @param $comment_id
     * @param $meta_key
     * @param $meta_value
     * @param string $prev_value
     * @return bool|int
     */
    public function update_comment_meta($comment_id, $meta_key, $meta_value, $prev_value = '')
    {
        return update_comment_meta($comment_id, $meta_key, $meta_value, $prev_value);
    }

    /**
     * https://developer.wordpress.org/reference/functions/update_comment_meta/
     * @param $commentdata
     * @param bool $avoid_die
     * @return int|string|\WP_Error
     */
    public function wp_allow_comment($commentdata, $avoid_die = false)
    {
        return wp_allow_comment($commentdata, $avoid_die);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_count_comments/
     * @param int $post_id
     * @return array|object
     */
    public function wp_count_comments($post_id = 0)
    {
        return wp_count_comments($post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_delete_comment/
     * @param $comment_id
     * @param bool $force_delete
     * @return bool
     */
    public function wp_delete_comment($comment_id, $force_delete = false)
    {
        return wp_delete_comment($comment_id, $force_delete);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_delete_comment/
     * @param $commentdata
     * @return array
     */
    public function wp_filter_comment($commentdata)
    {
        return wp_filter_comment($commentdata);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_comment_status/
     * @param $comment_id
     * @return false|string
     */
    public function wp_get_comment_status($comment_id)
    {
        return wp_get_comment_status($comment_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_current_commenter/
     * @return array
     */
    public function wp_get_current_commenter()
    {
        return wp_get_current_commenter();
    }


    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_comment/
     * @param $commentdata
     * @return false|int
     */
    public function wp_insert_comment($commentdata)
    {
        return wp_insert_comment($commentdata);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_new_comment/
     * @param $commentdata
     * @param bool $avoid_die
     * @return false|int|\WP_Error
     */
    public function wp_new_comment($commentdata, $avoid_die = false)
    {
        return wp_new_comment($commentdata, $avoid_die);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_set_comment_status/
     * @param $comment_id
     * @param $comment_status
     * @param bool $wp_error
     * @return bool|\WP_Error
     */
    public function wp_set_comment_status($comment_id, $comment_status, $wp_error = false)
    {
        return wp_set_comment_status($comment_id, $comment_status, $wp_error);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_throttle_comment_flood/
     * @param $block
     * @param $time_lastcomment
     * @param $time_newcomment
     * @return bool
     */
    public function wp_throttle_comment_flood($block, $time_lastcomment, $time_newcomment)
    {
        return wp_throttle_comment_flood($block, $time_lastcomment, $time_newcomment);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_update_comment/
     * @param $commentarr
     * @return int
     */
    public function wp_update_comment($commentarr)
    {
        return wp_update_comment($commentarr);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_update_comment_count/
     * @param $post_id
     * @param bool $do_deferred
     * @return bool|void
     */
    public function wp_update_comment_count($post_id, $do_deferred = false)
    {
        return wp_update_comment_count($post_id, $do_deferred);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_update_comment_count_now/
     * @param $post_id
     * @return bool
     */
    public function wp_update_comment_count_now($post_id)
    {
        return wp_update_comment_count_now($post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/comment_class/
     * @param string $class
     * @param null $comment
     * @param null $post_id
     * @param bool $echo
     * @return string
     *
     */
    public function comment_class($class = '', $comment = null, $post_id = null, $echo = true)
    {
        return comment_class($class, $comment, $post_id, $echo);
    }

    /**
     * https://developer.wordpress.org/reference/functions/comment_ID/
     *
     */
    public function comment_ID()
    {
        return comment_ID();
    }

    /**
     * https://developer.wordpress.org/reference/functions/comment_author/
     * @param int $comment_ID
     *
     */
    public function comment_author($comment_ID = 0)
    {
        return comment_author($comment_ID);
    }

    /**
     * https://developer.wordpress.org/reference/functions/comment_date/
     * @param string $d
     * @param int $comment_ID
     *
     */
    public function comment_date($d = '', $comment_ID = 0)
    {
        return comment_date($d, $comment_ID);
    }

    /**
     * https://developer.wordpress.org/reference/functions/comment_time/
     * @param string $d
     *
     */
    public function comment_time($d = '')
    {
        return comment_time($d);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_comment_date/
     * @param string $d
     * @param int $comment_ID
     * @return string
     */
    public function get_comment_date($d = '', $comment_ID = 0)
    {
        return get_comment_date($d, $comment_ID);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_comment_time/
     * @param string $d
     * @param bool $gmt
     * @param bool $translate
     * @return string
     */
    public function get_comment_time($d = '', $gmt = false, $translate = true)
    {
        return get_comment_time($d, $gmt, $translate);
    }

    /**
     * https://developer.wordpress.org/reference/functions/paginate_comments_links/
     * @param array $args
     * @return string|void
     *
     */
    public function paginate_comments_links($args = array())
    {
        return paginate_comments_links($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/previous_comments_link/
     * @param string $label
     *
     */
    public function previous_comments_link($label = '')
    {
        return previous_comments_link($label = '');
    }

    /**
     * https://developer.wordpress.org/reference/functions/next_comments_link/
     * @param string $label
     * @param int $max_page
     *
     */
    public function next_comments_link($label = '', $max_page = 0)
    {
        return next_comments_link($label, $max_page);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_comment_pages_count/
     * @param null $comments
     * @param null $per_page
     * @param null $threaded
     * @return int
     */
    public function get_comment_pages_count($comments = null, $per_page = null, $threaded = null)
    {
        return get_comment_pages_count($comments, $per_page, $threaded);
    }

    /**
     * https://developer.wordpress.org/reference/functions/comments_open/
     * @param null $post_id
     * @return bool
     */
    public function comments_open($post_id = null)
    {
        return comments_open($post_id);
    }
}