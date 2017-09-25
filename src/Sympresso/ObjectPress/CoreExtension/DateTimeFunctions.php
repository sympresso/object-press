<?php

namespace Sympresso\ObjectPress\CoreExtension;

use Sympresso\ObjectPress\Extension;

class DateTimeFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'date_time';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/current_time/
     * @param $type
     * @param int $gmt
     * @return int|string
     */
    public function current_time($type, $gmt = 0)
    {
        return current_time($type, $gmt);
    }

    /**
     * https://developer.wordpress.org/reference/functions/date_i18n/
     * @param $dateformatstring
     * @param bool $unixtimestamp
     * @param bool $gmt
     * @return string
     */
    public function date_i18n($dateformatstring, $unixtimestamp = false, $gmt = false)
    {
        return date_i18n($dateformatstring, $unixtimestamp, $gmt);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_calendar/
     * @param bool $initial
     * @param bool $echo
     * @return string|void
     */
    public function get_calendar($initial = true, $echo = true)
    {
        return get_calendar($initial, $echo);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_date_from_gmt/
     * @param $string
     * @param string $format
     * @return string
     */
    public function get_date_from_gmt($string, $format = 'Y-m-d H:i:s')
    {
        return get_date_from_gmt($string, $format);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_lastpostdate/
     * @param string $timezone
     * @param string $post_type
     * @return string
     */
    public function get_lastpostdate($timezone = 'server', $post_type = 'any')
    {
        return get_lastpostdate($timezone, $post_type);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_lastpostmodified/
     * @param string $timezone
     * @param string $post_type
     * @return string
     */
    public function get_lastpostmodified($timezone = 'server', $post_type = 'any')
    {
        return get_lastpostmodified($timezone, $post_type);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_day_link/
     * @param $year
     * @param $month
     * @param $day
     * @return string
     */
    public function get_day_link($year, $month, $day)
    {
        return get_day_link($year, $month, $day);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_gmt_from_date/
     * @param $string
     * @param string $format
     * @return string
     */
    public function get_gmt_from_date($string, $format = 'Y-m-d H:i:s')
    {
        return get_gmt_from_date($string, $format);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_month_link/
     * @param $year
     * @param $month
     * @return string
     */
    public function get_month_link($year, $month)
    {
        return get_month_link($year, $month);
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_date/
     * @param string $d
     * @param string $before
     * @param string $after
     * @param bool $echo
     * @return string|void
     *
     */
    public function the_date($d = '', $before = '', $after = '', $echo = true)
    {
        return the_date($d, $before, $after, $echo);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_date/
     * @param string $d
     * @param null $post
     * @return false|string
     */
    public function get_the_date($d = '', $post = null)
    {
        return get_the_date($d, $post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_time/
     * @param string $d
     *
     */
    public function the_time($d = '')
    {
        return the_time($d);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_time/
     * @param string $d
     * @param null $post
     * @return false|int|string
     */
    public function get_the_time($d = '', $post = null)
    {
        return get_the_time($d, $post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/the_modified_time/
     * @param string $d
     *
     */
    public function the_modified_time($d = '')
    {
        return the_modified_time($d);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_modified_time/
     * @param string $d
     * @param null $post
     * @return false|string
     */
    public function get_the_modified_time($d = '', $post = null)
    {
        return get_the_modified_time($d, $post);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_weekstartend/
     * @param $mysqlstring
     * @param string $start_of_week
     * @return array
     */
    public function get_weekstartend($mysqlstring, $start_of_week = '')
    {
        return get_weekstartend($mysqlstring, $start_of_week);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_year_link/
     * @param $year
     * @return string
     */
    public function get_year_link($year)
    {
        return get_year_link($year);
    }

    /**
     * https://developer.wordpress.org/reference/functions/human_time_diff/
     * @param $from
     * @param string $to
     * @return string
     */
    public function human_time_diff($from, $to = '')
    {
        return human_time_diff($from, $to);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_new_day/
     * @return int
     */
    public function is_new_day()
    {
        return is_new_day();
    }

    /**
     * https://developer.wordpress.org/reference/functions/iso8601_timezone_to_offset/
     * @param $timezone
     * @return float|int
     */
    public function iso8601_timezone_to_offset($timezone)
    {
        return iso8601_timezone_to_offset($timezone);
    }

    /**
     * https://developer.wordpress.org/reference/functions/iso8601_to_datetime/
     * @param $date_string
     * @param string $timezone
     * @return string
     */
    public function iso8601_to_datetime($date_string, $timezone = 'user')
    {
        return iso8601_to_datetime($date_string, $timezone);
    }

    /**
     * https://developer.wordpress.org/reference/functions/mysql2date/
     * @param $format
     * @param $date
     * @param bool $translate
     * @return bool|int|string
     */
    public function mysql2date($format, $date, $translate = true)
    {
        return mysql2date($format, $date, $translate);
    }
}