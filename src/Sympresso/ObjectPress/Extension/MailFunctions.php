<?php

namespace Sympresso\ObjectPress\Extension;

class MailFunctions extends WpExtension
{
    const FUNCTION_NAMESPACE = 'mail';

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
     * https://developer.wordpress.org/reference/functions/wp_mail/
     * @param $to
     * @param $subject
     * @param $message
     * @param string $headers
     * @param array $attachments
     * @return bool
     */
    public function wp_mail($to, $subject, $message, $headers = '', $attachments = array())
    {
        return wp_mail($to, $subject, $message, $headers, $attachments);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_new_user_notification/
     * @param $user_id
     * @param null $deprecated
     * @param string $notify
     */
    public function wp_new_user_notification($user_id, $deprecated = null, $notify = '')
    {
        return wp_new_user_notification($user_id, $deprecated, $notify);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_password_change_notification/
     * @param $user
     */
    public function wp_password_change_notification($user)
    {
        return wp_password_change_notification($user);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_notify_moderator/
     * @param $comment_id
     * @return true
     */
    public function wp_notify_moderator($comment_id)
    {
        return wp_notify_moderator($comment_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_notify_postauthor/
     * @param $comment_id
     * @param null $deprecated
     * @return bool
     */
    public function wp_notify_postauthor($comment_id, $deprecated = null)
    {
        return wp_notify_postauthor($comment_id, $deprecated);
    }
}