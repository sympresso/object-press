<?php

namespace Sympresso\ObjectPress\CoreExtension;

use Sympresso\ObjectPress\Extension;

class CronFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'cron';

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
     * https://developer.wordpress.org/reference/functions/spawn_cron/
     * @param int $gmt_time
     */
    public function spawn_cron($gmt_time = 0)
    {
        return spawn_cron($gmt_time);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_clear_scheduled_hook/
     * @param $hook
     * @param array $args
     */
    public function wp_clear_scheduled_hook($hook, $args = array())
    {
        return wp_clear_scheduled_hook($hook, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_cron/
     */
    public function wp_cron()
    {
        return wp_cron();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_schedule/
     * @param $hook
     * @param array $args
     * @return false|string
     */
    public function wp_get_schedule($hook, $args = array())
    {
        return wp_get_schedule($hook, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_schedules/
     * @return array
     */
    public function wp_get_schedules()
    {
        return wp_get_schedules();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_next_scheduled/
     * @param $hook
     * @param array $args
     * @return false|int
     */
    public function wp_next_scheduled($hook, $args = array())
    {
        return wp_next_scheduled($hook, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_reschedule_event/
     * @param $timestamp
     * @param $recurrence
     * @param $hook
     * @param array $args
     * @return false|void
     */
    public function wp_reschedule_event($timestamp, $recurrence, $hook, $args = array())
    {
        return wp_reschedule_event($timestamp, $recurrence, $hook, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_schedule_event/
     * @param $timestamp
     * @param $recurrence
     * @param $hook
     * @param $args
     * @return false|void
     */
    public function wp_schedule_event($timestamp, $recurrence, $hook, $args)
    {
        return wp_schedule_event($timestamp, $recurrence, $hook, $args = array());
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_schedule_single_event/
     * @param $timestamp
     * @param $hook
     * @param array $args
     * @return false|void
     */
    public function wp_schedule_single_event($timestamp, $hook, $args = array())
    {
        return wp_schedule_single_event($timestamp, $hook, $args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_unschedule_event/
     * @param $timestamp
     * @param $hook
     * @param array $args
     * @return false|void
     */
    public function wp_unschedule_event($timestamp, $hook, $args = array())
    {
        return wp_unschedule_event($timestamp, $hook, $args);
    }
}