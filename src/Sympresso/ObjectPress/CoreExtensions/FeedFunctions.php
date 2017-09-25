<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\AbstractExtension;

class FeedFunctions extends AbstractExtension
{
    const FUNCTION_NAMESPACE = 'feed';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/bloginfo_rss/
     * @param $show
     *
     */
    public function bloginfo_rss($show)
    {
        return bloginfo_rss($show = '');
    }

    /**
     * https://developer.wordpress.org/reference/functions/comment_author_rss/
     *
     */
    public function comment_author_rss()
    {
        return comment_author_rss();
    }

    /**
     * https://developer.wordpress.org/reference/functions/comment_text_rss/
     *
     */
    public function comment_text_rss()
    {
        return comment_text_rss();
    }

    /**
     * https://developer.wordpress.org/reference/functions/do_feed/
     */
    public function do_feed()
    {
        return do_feed();
    }

    /**
     * https://developer.wordpress.org/reference/functions/do_feed_atom/
     * @param $for_comments
     */
    public function do_feed_atom($for_comments)
    {
        return do_feed_atom($for_comments);
    }

    /**
     * https://developer.wordpress.org/reference/functions/do_feed_rdf/
     */
    public function do_feed_rdf()
    {
        return do_feed_rdf();
    }

    /**
     * https://developer.wordpress.org/reference/functions/do_feed_rss/
     */
    public function do_feed_rss()
    {
        return do_feed_rss();
    }

    /**
     * https://developer.wordpress.org/reference/functions/do_feed_rss2/
     * @param $for_comments
     */
    public function do_feed_rss2($for_comments)
    {
        return do_feed_rss2($for_comments);
    }

    /**
     * https://developer.wordpress.org/reference/functions/fetch_feed/
     * @param $url
     * @return \SimplePie|\WP_Error
     */
    public function fetch_feed($url)
    {
        return fetch_feed($url);
    }

    /**
     * https://developer.wordpress.org/reference/functions/fetch_rss/
     * @param $url
     * @return bool|\MagpieRSS
     */
    public function fetch_rss($url)
    {
        return fetch_rss($url);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_author_feed_link/
     * @param $author_id
     * @param string $feed
     * @return string
     */
    public function get_author_feed_link($author_id, $feed = '')
    {
        return get_author_feed_link($author_id, $feed);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_bloginfo_rss/
     * @param string $show
     * @return string
     */
    public function get_bloginfo_rss($show = '')
    {
        return get_bloginfo_rss($show);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_category_feed_link/
     * @param $cat_id
     * @param string $feed
     * @return string
     */
    public function get_category_feed_link($cat_id, $feed = '')
    {
        return get_category_feed_link($cat_id, $feed);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_comment_author_rss/
     * @return string
     */
    public function get_comment_author_rss()
    {
        return get_comment_author_rss();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_post_comments_feed_link/
     * @param int $post_id
     * @param string $feed
     * @return string
     */
    public function get_post_comments_feed_link($post_id = 0, $feed = '')
    {
        return get_post_comments_feed_link($post_id, $feed);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_rss/
     * @param $url
     * @param int $num_items
     * @return bool
     *
     */
    public function get_rss($url, $num_items = 5)
    {
        return get_rss($url, $num_items);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_search_comments_feed_link/
     * @param string $search_query
     * @param string $feed
     * @return string
     */
    public function get_search_comments_feed_link($search_query = '', $feed = '')
    {
        return get_search_comments_feed_link($search_query, $feed);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_search_feed_link/
     * @param string $search_query
     * @param string $feed
     * @return string
     */
    public function get_search_feed_link($search_query = '', $feed = '')
    {
        return get_search_feed_link($search_query, $feed);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_category_rss/
     * @param null $type
     * @return string
     */
    public function get_the_category_rss($type = null)
    {
        return get_the_category_rss($type);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_title_rss/
     * @return string
     */
    public function get_the_title_rss()
    {
        return get_the_title_rss();
    }

    /**
     * https://developer.wordpress.org/reference/functions/permalink_single_rss/
     * @param string $deprecated
     * @deprecated
     *
     */
    public function permalink_single_rss($deprecated = '')
    {
        return permalink_single_rss($deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/post_comments_feed_link/
     * @param string $link_text
     * @param string $post_id
     * @param string $feed
     *
     */
    public function post_comments_feed_link($link_text = '', $post_id = '', $feed = '')
    {
        return post_comments_feed_link($link_text, $post_id, $feed);
    }

    /**
     * https://developer.wordpress.org/reference/functions/rss_enclosure/
     *
     */
    public function rss_enclosure()
    {
        return rss_enclosure();
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_title_rss/
     *
     */
    public function the_title_rss()
    {
        return the_title_rss();
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_category_rss/
     * @param null $type
     *
     */
    public function the_category_rss($type = null)
    {
        the_category_rss($type);
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_content_rss/
     * @param string $more_link_text
     * @param int $stripteaser
     * @param string $more_file
     * @param int $cut
     * @param int $encode_html
     *
     */
    public function the_content_rss(
        $more_link_text = '(more...)',
        $stripteaser = 0,
        $more_file = '',
        $cut = 0,
        $encode_html = 0
    ) {
        return the_content_rss($more_link_text, $stripteaser, $more_file, $cut, $encode_html);
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_excerpt_rss/
     *
     */
    public function the_excerpt_rss()
    {
        return the_excerpt_rss();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_rss/
     * @param $url
     * @param int $num_items
     *
     */
    public function wp_rss($url, $num_items = -1)
    {
        return wp_rss($url, $num_items);
    }
}