<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\Extension;

class MediaFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'media';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/https://developer.wordpress.org/reference/functions/wp_mail//
     * @param $attachment_id
     * @param bool $unfiltered
     * @return false|string
     */
    public function get_attached_file($attachment_id, $unfiltered = false)
    {
        return get_attached_file($attachment_id, $unfiltered);
    }

    /**
     * https://developer.wordpress.org/reference/functions/image_resize/
     * @param $file
     * @param $max_w
     * @param $max_h
     * @param bool $crop
     * @param null $suffix
     * @param null $dest_path
     * @param int $jpeg_quality
     * @return mixed
     * @deprecated
     */
    public function image_resize(
        $file,
        $max_w,
        $max_h,
        $crop = false,
        $suffix = null,
        $dest_path = null,
        $jpeg_quality = 90
    ) {
        return image_resize($file, $max_w, $max_h, $crop, $suffix, $dest_path, $jpeg_quality);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_attachment/
     * @param string $attachment
     * @return bool
     */
    public function is_attachment($attachment = '')
    {
        return is_attachment($attachment);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_local_attachment/
     * @param $url
     * @return bool
     */
    public function is_local_attachment($url)
    {
        return is_local_attachment($url);
    }

    /**
     * https://developer.wordpress.org/reference/functions/set_post_thumbnail/
     * @param $post
     * @param $thumbnail_id
     * @return bool|int
     */
    public function set_post_thumbnail($post, $thumbnail_id)
    {
        return set_post_thumbnail($post, $thumbnail_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/update_attached_file/
     * @param $attachment_id
     * @param $file
     * @return bool
     */
    public function update_attached_file($attachment_id, $file)
    {
        return update_attached_file($attachment_id, $file);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_attachment_is_image/
     * @param null $post
     * @return bool
     */
    public function wp_attachment_is_image($post = null)
    {
        return wp_attachment_is_image($post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_create_thumbnail/
     * @param $file
     * @param $max_side
     * @param string $deprecated
     * @return string
     */
    public function wp_create_thumbnail($file, $max_side, $deprecated = '')
    {
        return wp_create_thumbnail($file, $max_side, $deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_attachment/
     * @param $args
     * @param bool $file
     * @param int $parent
     * @param bool $wp_error
     * @return int|\WP_Error
     */
    public function wp_insert_attachment($args, $file = false, $parent = 0, $wp_error = false)
    {
        return wp_insert_attachment($args, $file, $parent, $wp_error);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_delete_attachment/
     * @param $post_id
     * @param bool $force_delete
     * @return mixed
     */
    public function wp_delete_attachment($post_id, $force_delete = false)
    {
        return wp_delete_attachment($post_id, $force_delete);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_attachment_image/
     * @param $attachment_id
     * @param string $size
     * @param bool $icon
     * @param string $attr
     * @return string
     */
    public function wp_get_attachment_image($attachment_id, $size = 'thumbnail', $icon = false, $attr = '')
    {
        return wp_get_attachment_image($attachment_id, $size, $icon, $attr);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_attachment_link/
     * @param int $id
     * @param string $size
     * @param bool $permalink
     * @param bool $icon
     * @param bool $text
     * @param string $attr
     * @return string
     */
    public function wp_get_attachment_link(
        $id = 0,
        $size = 'thumbnail',
        $permalink = false,
        $icon = false,
        $text = false,
        $attr = ''
    ) {
        return wp_get_attachment_link($id, $size, $permalink, $icon, $text, $attr);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_attachment_image_src/
     * @param $attachment_id
     * @param string $size
     * @param bool $icon
     * @return array|false
     */
    public function wp_get_attachment_image_src($attachment_id, $size = 'thumbnail', $icon = false)
    {
        return wp_get_attachment_image_src($attachment_id, $size, $icon);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_attachment_metadata/
     * @param int $post_id
     * @param bool $unfiltered
     * @return mixed
     */
    public function wp_get_attachment_metadata($post_id = 0, $unfiltered = false)
    {
        return wp_get_attachment_metadata($post_id, $unfiltered);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_attachment_thumb_file/
     * @param int $post_id
     * @return false|string
     */
    public function wp_get_attachment_thumb_file($post_id = 0)
    {
        return wp_get_attachment_thumb_file($post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_attachment_thumb_url/
     * @param int $post_id
     * @return false|string
     */
    public function wp_get_attachment_thumb_url($post_id = 0)
    {
        return wp_get_attachment_thumb_url($post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_attachment_url/
     * @param int $post_id
     * @return false|string
     */
    public function wp_get_attachment_url($post_id = 0)
    {
        return wp_get_attachment_url($post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_check_for_changed_slugs/
     * @param $post_id
     * @param $post
     * @param $post_before
     */
    public function wp_check_for_changed_slugs($post_id, $post, $post_before)
    {
        return wp_check_for_changed_slugs($post_id, $post, $post_before);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_count_posts/
     * @param string $type
     * @param string $perm
     * @return object
     */
    public function wp_count_posts($type = 'post', $perm = '')
    {
        return wp_count_posts($type, $perm);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_mime_types/
     * @return array
     */
    public function wp_get_mime_types()
    {
        return wp_get_mime_types();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_mime_type_icon/
     * @param int $mime
     * @return false|string
     */
    public function wp_mime_type_icon($mime = 0)
    {
        return wp_mime_type_icon($mime);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_generate_attachment_metadata/
     * @param $attachment_id
     * @param $file
     * @return mixed
     */
    public function wp_generate_attachment_metadata($attachment_id, $file)
    {
        return wp_generate_attachment_metadata($attachment_id, $file);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_prepare_attachment_for_js/
     * @param $attachment
     * @return array|void
     */
    public function wp_prepare_attachment_for_js($attachment)
    {
        return wp_prepare_attachment_for_js($attachment);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_update_attachment_metadata/
     * @param $post_id
     * @param $data
     * @return bool|int
     */
    public function wp_update_attachment_metadata($post_id, $data)
    {
        return wp_update_attachment_metadata($post_id, $data);
    }
}