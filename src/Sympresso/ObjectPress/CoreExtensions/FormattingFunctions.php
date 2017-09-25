<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\AbstractExtension;

class FormattingFunctions extends AbstractExtension
{

    const FUNCTION_NAMESPACE = 'formatting';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/absint/
     * @param $maybeint
     * @return int
     */
    public function absint($maybeint)
    {
        return absint($maybeint);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_magic_quotes/
     * @param $array
     * @return array
     */
    public function add_magic_quotes($array)
    {
        return add_magic_quotes($array);
    }

    /**
     * https://developer.wordpress.org/reference/functions/addslashes_gpc/
     * @param $gpc
     * @return string
     */
    public function addslashes_gpc($gpc)
    {
        return addslashes_gpc($gpc);
    }

    /**
     * https://developer.wordpress.org/reference/functions/antispambot/
     * @param $email_address
     * @param int $hex_encoding
     * @return string
     */
    public function antispambot($email_address, $hex_encoding = 0)
    {
        return antispambot($email_address, $hex_encoding);
    }

    /**
     * https://developer.wordpress.org/reference/functions/attribute_escape/
     * @param $text
     * @return string
     */
    public function attribute_escape($text)
    {
        return attribute_escape($text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/backslashit/
     * @param $string
     * @return string
     */
    public function backslashit($string)
    {
        return backslashit($string);
    }

    /**
     * https://developer.wordpress.org/reference/functions/balanceTags/
     * @param $text
     * @param bool $force
     * @return string
     */
    public function balanceTags($text, $force = false)
    {
        return balanceTags($text, $force);
    }

    /**
     * https://developer.wordpress.org/reference/functions/clean_pre/
     * @param $matches
     * @return string
     */
    public function clean_pre($matches)
    {
        return clean_pre($matches);
    }

    /**
     * https://developer.wordpress.org/reference/functions/clean_url/
     * @param $url
     * @param null $protocols
     * @param string $context
     * @return string
     * @deprecated
     */
    public function clean_url($url, $protocols = null, $context = 'display')
    {
        return clean_url($url, $protocols, $context);
    }

    /**
     * https://developer.wordpress.org/reference/functions/convert_chars/
     * @param $content
     * @param string $deprecated
     * @return string
     */
    public function convert_chars($content, $deprecated = '')
    {
        return convert_chars($content, $deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/convert_smilies/
     * @param $text
     * @return string
     */
    public function convert_smilies($text)
    {
        return convert_smilies($text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/ent2ncr/
     * @param $text
     * @return string
     */
    public function ent2ncr($text)
    {
        return ent2ncr($text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/esc_attr/
     * @param $text
     * @return string|void
     */
    public function esc_attr($text)
    {
        return esc_attr($text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/esc_html/
     * @param $text
     * @return string
     */
    public function esc_html($text)
    {
        return esc_html($text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/esc_js/
     * @param $text
     * @return string
     */
    public function esc_js($text)
    {
        return esc_js($text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/esc_textarea/
     * @param $text
     * @return string
     */
    public function esc_textarea($text)
    {
        return esc_textarea($text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/esc_sql/
     * @param $data
     * @return array|string
     */
    public function esc_sql($data)
    {
        return esc_sql($data);
    }

    /**
     * https://developer.wordpress.org/reference/functions/esc_url/
     * @param $url
     * @param null $protocols
     * @param string $_context
     * @return string
     */
    public function esc_url($url, $protocols = null, $_context = 'display')
    {
        return esc_url($url, $protocols, $_context);
    }

    /**
     * https://developer.wordpress.org/reference/functions/esc_url_raw/
     * @param $url
     * @param null $protocols
     * @return string
     */
    public function esc_url_raw($url, $protocols = null)
    {
        return esc_url_raw($url, $protocols);
    }

    /**
     * https://developer.wordpress.org/reference/functions/force_balance_tags/
     * @param $text
     * @return string
     */
    public function force_balance_tags($text)
    {
        return force_balance_tags($text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/format_to_edit/
     * @param $content
     * @param bool $rich_text
     * @return string
     */
    public function format_to_edit($content, $rich_text = false)
    {
        return format_to_edit($content, $rich_text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/format_to_post/
     * @param $content
     * @return string
     * @deprecated
     */
    public function format_to_post($content)
    {
        return format_to_post($content);
    }

    /**
     * https://developer.wordpress.org/reference/functions/funky_javascript_fix/
     * @param $text
     * @return string
     * @deprecated
     */
    public function funky_javascript_fix($text)
    {
        return funky_javascript_fix($text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/htmlentities2/
     * @param $myHTML
     * @return string
     */
    public function htmlentities2($myHTML)
    {
        return htmlentities2($myHTML);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_email/
     * @param $email
     * @param bool $deprecated
     * @return bool|string
     */
    public function is_email($email, $deprecated = false)
    {
        return is_email($email, $deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/js_escape/
     * @param $text
     * @return string
     * @deprecated
     */
    public function js_escape($text)
    {
        return js_escape($text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/make_clickable/
     * @param $text
     * @return string
     */
    public function make_clickable($text)
    {
        return make_clickable($text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/popuplinks/
     * @param $text
     * @return string
     * @deprecated
     */
    public function popuplinks($text)
    {
        return popuplinks($text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/remove_accents/
     * @param $string
     * @return string
     */
    public function remove_accents($string)
    {
        return remove_accents($string);
    }

    /**
     * https://developer.wordpress.org/reference/functions/sanitize_email/
     * @param $email
     * @return string
     */
    public function sanitize_email($email)
    {
        return sanitize_email($email);
    }

    /**
     * https://developer.wordpress.org/reference/functions/sanitize_file_name/
     * @param $filename
     * @return string
     */
    public function sanitize_file_name($filename)
    {
        return sanitize_file_name($filename);
    }

    /**
     * https://developer.wordpress.org/reference/functions/sanitize_html_class/
     * @param $class
     * @param string $fallback
     * @return string
     */
    public function sanitize_html_class($class, $fallback = '')
    {
        return sanitize_html_class($class, $fallback);
    }

    /**
     * https://developer.wordpress.org/reference/functions/sanitize_key/
     * @param $key
     * @return string
     */
    public function sanitize_key($key)
    {
        return sanitize_key($key);
    }

    /**
     * https://developer.wordpress.org/reference/functions/sanitize_mime_type/
     * @param $mime_type
     * @return string
     */
    public function sanitize_mime_type($mime_type)
    {
        return sanitize_mime_type($mime_type);
    }

    /**
     * https://developer.wordpress.org/reference/functions/sanitize_option/
     * @param $option
     * @param $value
     * @return string
     */
    public function sanitize_option($option, $value)
    {
        return sanitize_option($option, $value);
    }

    /**
     * https://developer.wordpress.org/reference/functions/sanitize_sql_orderby/
     * @param $orderby
     * @return false|string
     */
    public function sanitize_sql_orderby($orderby)
    {
        return sanitize_sql_orderby($orderby);
    }

    /**
     * https://developer.wordpress.org/reference/functions/sanitize_text_field/
     * @param $str
     * @return string
     */
    public function sanitize_text_field($str)
    {
        return sanitize_text_field($str);
    }

    /**
     * https://developer.wordpress.org/reference/functions/sanitize_title/
     * @param $title
     * @param string $fallback_title
     * @param string $context
     * @return string
     */
    public function sanitize_title($title, $fallback_title = '', $context = 'save')
    {
        return sanitize_title($title, $fallback_title, $context);
    }

    /**
     * https://developer.wordpress.org/reference/functions/sanitize_title_for_query/
     * @param $title
     * @return string
     */
    public function sanitize_title_for_query($title)
    {
        return sanitize_title_for_query($title);
    }

    /**
     * https://developer.wordpress.org/reference/functions/sanitize_comment_cookies/
     */
    public function sanitize_comment_cookies()
    {
        return sanitize_comment_cookies();
    }

    /**
     * https://developer.wordpress.org/reference/functions/sanitize_title_with_dashes/
     * @param $title
     * @param string $raw_title
     * @param string $context
     * @return string
     */
    public function sanitize_title_with_dashes($title, $raw_title = '', $context = 'display')
    {
        return sanitize_title_with_dashes($title, $raw_title, $context);
    }

    /**
     * https://developer.wordpress.org/reference/functions/sanitize_user/
     * @param $username
     * @param bool $strict
     * @return string
     */
    public function sanitize_user($username, $strict = false)
    {
        return sanitize_user($username, $strict);
    }

    /**
     * https://developer.wordpress.org/reference/functions/seems_utf8/
     * @param $str
     * @return bool
     */
    public function seems_utf8($str)
    {
        return seems_utf8($str);
    }

    /**
     * https://developer.wordpress.org/reference/functions/stripslashes_deep/
     * @param $value
     * @return mixed
     */
    public function stripslashes_deep($value)
    {
        return stripslashes_deep($value);
    }

    /**
     * https://developer.wordpress.org/reference/functions/trailingslashit/
     * @param $string
     * @return string
     */
    public function trailingslashit($string)
    {
        return trailingslashit($string);
    }

    /**
     * https://developer.wordpress.org/reference/functions/untrailingslashit/
     * @param $string
     * @return string
     */
    public function untrailingslashit($string)
    {
        return untrailingslashit($string);
    }

    /**
     * https://developer.wordpress.org/reference/functions/urlencode_deep/
     * @param $value
     * @return mixed
     */
    public function urlencode_deep($value)
    {
        return urlencode_deep($value);
    }

    /**
     * https://developer.wordpress.org/reference/functions/url_shorten/
     * @param $url
     * @param int $length
     * @return string
     */
    public function url_shorten($url, $length = 35)
    {
        return url_shorten($url, $length);
    }

    /**
     * https://developer.wordpress.org/reference/functions/utf8_uri_encode/
     * @param $utf8_string
     * @param int $length
     * @return string
     */
    public function utf8_uri_encode($utf8_string, $length = 0)
    {
        return utf8_uri_encode($utf8_string, $length);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpautop/
     * @param $pee
     * @param bool $br
     * @return string
     */
    public function wpautop($pee, $br = true)
    {
        return wpautop($pee, $br);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wptexturize/
     * @param $text
     * @param bool $reset
     * @return string
     */
    public function wptexturize($text, $reset = false)
    {
        return wptexturize($text, $reset);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_filter_kses/
     * @param $data
     * @return string
     */
    public function wp_filter_kses($data)
    {
        return wp_filter_kses($data);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_filter_post_kses/
     * @param $data
     * @return string
     */
    public function wp_filter_post_kses($data)
    {
        return wp_filter_post_kses($data);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_filter_nohtml_kses/
     * @param $data
     * @return string
     */
    public function wp_filter_nohtml_kses($data)
    {
        return wp_filter_nohtml_kses($data);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_iso_descrambler/
     * @param $string
     * @return string
     */
    public function wp_iso_descrambler($string)
    {
        return wp_iso_descrambler($string);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_kses/
     * @param $string
     * @param $allowed_html
     * @param array $allowed_protocols
     * @return string
     */
    public function wp_kses($string, $allowed_html, $allowed_protocols = array())
    {
        return wp_kses($string, $allowed_html, $allowed_protocols);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_kses_array_lc/
     * @param $inarray
     * @return array
     */
    public function wp_kses_array_lc($inarray)
    {
        return wp_kses_array_lc($inarray);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_kses_attr/
     * @param $element
     * @param $attr
     * @param $allowed_html
     * @param $allowed_protocols
     * @return string
     */
    public function wp_kses_attr($element, $attr, $allowed_html, $allowed_protocols)
    {
        return wp_kses_attr($element, $attr, $allowed_html, $allowed_protocols);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_kses_bad_protocol/
     * @param $string
     * @param $allowed_protocols
     * @return string
     */
    public function wp_kses_bad_protocol($string, $allowed_protocols)
    {
        return wp_kses_bad_protocol($string, $allowed_protocols);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_kses_bad_protocol_once/
     * @param $string
     * @param $allowed_protocols
     * @param int $count
     * @return string
     */
    public function wp_kses_bad_protocol_once($string, $allowed_protocols, $count = 1)
    {
        return wp_kses_bad_protocol_once($string, $allowed_protocols, $count);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_kses_bad_protocol_once2/
     * @param $string
     * @param $allowed_protocols
     * @return string
     */
    public function wp_kses_bad_protocol_once2($string, $allowed_protocols)
    {
        return wp_kses_bad_protocol_once2($string, $allowed_protocols);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_kses_check_attr_val/
     * @param $value
     * @param $vless
     * @param $checkname
     * @param $checkvalue
     * @return bool
     */
    public function wp_kses_check_attr_val($value, $vless, $checkname, $checkvalue)
    {
        return wp_kses_check_attr_val($value, $vless, $checkname, $checkvalue);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_kses_decode_entities/
     * @param $string
     * @return string
     */
    public function wp_kses_decode_entities($string)
    {
        return wp_kses_decode_entities($string);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_kses_hair/
     * @param $attr
     * @param $allowed_protocols
     * @return array
     */
    public function wp_kses_hair($attr, $allowed_protocols)
    {
        return wp_kses_hair($attr, $allowed_protocols);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_kses_hook/
     * @param $string
     * @param $allowed_html
     * @param $allowed_protocols
     * @return string
     */
    public function wp_kses_hook($string, $allowed_html, $allowed_protocols)
    {
        return wp_kses_hook($string, $allowed_html, $allowed_protocols);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wwp_kses_html_error/
     * @param $string
     * @return string
     */
    public function wwp_kses_html_error($string)
    {
        return wp_kses_html_error($string);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_kses_js_entities/
     * @param $string
     * @return string
     */
    public function wp_kses_js_entities($string)
    {
        return wp_kses_js_entities($string);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_kses_no_null/
     * @param $string
     * @param null $options
     * @return string
     */
    public function wp_kses_no_null($string, $options = null)
    {
        return wp_kses_no_null($string, $options);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_kses_normalize_entities/
     * @param $string
     * @return string
     */
    public function wp_kses_normalize_entities($string)
    {
        return wp_kses_normalize_entities($string);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_kses_normalize_entities2/
     * @param $matches
     * @return string
     */
    public function wp_kses_normalize_entities2($matches)
    {
        return wp_kses_normalize_entities2($matches);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_kses_split/
     * @param $string
     * @param $allowed_html
     * @param $allowed_protocols
     * @return string
     */
    public function wp_kses_split($string, $allowed_html, $allowed_protocols)
    {
        return wp_kses_split($string, $allowed_html, $allowed_protocols);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_kses_split2/
     * @param $string
     * @param $allowed_html
     * @param $allowed_protocols
     * @return string
     */
    public function wp_kses_split2($string, $allowed_html, $allowed_protocols)
    {
        return wp_kses_split2($string, $allowed_html, $allowed_protocols);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_kses_stripslashes/
     * @param $string
     * @return string
     */
    public function wp_kses_stripslashes($string)
    {
        return wp_kses_stripslashes($string);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_kses_version/
     * @return string
     */
    public function wp_kses_version()
    {
        return wp_kses_version();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_make_link_relative/
     * @param $link
     * @return string
     */
    public function wp_make_link_relative($link)
    {
        return wp_make_link_relative($link);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_normalize_path/
     * @param $path
     * @return string
     */
    public function wp_normalize_path($path)
    {
        return wp_normalize_path($path);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_rel_nofollow/
     * @param $text
     * @return string
     */
    public function wp_rel_nofollow($text)
    {
        return wp_rel_nofollow($text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_richedit_pre/
     * @param $text
     * @return string
     */
    public function wp_richedit_pre($text)
    {
        return wp_richedit_pre($text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_specialchars/
     * @param $string
     * @param int $quote_style
     * @param bool $charset
     * @param bool $double_encode
     * @return string
     * @deprecated
     */
    public function wp_specialchars($string, $quote_style = ENT_NOQUOTES, $charset = false, $double_encode = false)
    {
        return wp_specialchars($string, $quote_style, $charset, $double_encode);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_trim_words/
     * @param $text
     * @param int $num_words
     * @param null $more
     * @return string
     */
    public function wp_trim_words($text, $num_words = 55, $more = null)
    {
        return wp_trim_words($text, $num_words, $more);
    }

    /**
     * https://developer.wordpress.org/reference/functions/zeroise/
     * @param $number
     * @param $threshold
     * @return string
     */
    public function zeroise($number, $threshold)
    {
        return zeroise($number, $threshold);
    }
}