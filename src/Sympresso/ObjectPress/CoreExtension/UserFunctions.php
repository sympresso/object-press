<?php

namespace Sympresso\ObjectPress\CoreExtension;

use Sympresso\ObjectPress\Extension;

class UserFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'user';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/auth_redirect/
     */
    public function auth_redirect()
    {
        return auth_redirect();
    }

    /**
     * https://developer.wordpress.org/reference/functions/count_users/
     * @param string $strategy
     * @return array
     */
    public function count_users($strategy = 'time')
    {
        return count_users($strategy);
    }

    /**
     * https://developer.wordpress.org/reference/functions/count_user_posts/
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
     * https://developer.wordpress.org/reference/functions/count_many_users_posts/
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
     * https://developer.wordpress.org/reference/functions/email_exists/
     * @param $email
     * @return false|int
     */
    public function email_exists($email)
    {
        return email_exists($email);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_currentuserinfo/
     * @return bool|\WP_User
     * @deprecated
     */
    public function get_currentuserinfo()
    {
        return get_currentuserinfo();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_current_user_id/
     * @return int
     */
    public function get_current_user_id()
    {
        return get_current_user_id();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_profile/
     * @param $field
     * @param bool $user
     * @return string
     * @deprecated
     */
    public function get_profile($field, $user = false)
    {
        return get_profile($field, $user);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_user_by/
     * @param $field
     * @param $value
     * @return false|\WP_User
     */
    public function get_user_by($field, $value)
    {
        return get_user_by($field, $value);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_userdata/
     * @param $user_id
     * @return false|\WP_User
     */
    public function get_userdata($user_id)
    {
        return get_userdata($user_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_usernumposts/
     * @param $userid
     * @return int
     * @deprecated
     */
    public function get_usernumposts($userid)
    {
        return get_usernumposts($userid);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_users/
     * @param array $args
     * @return array
     */
    public function get_users($args = array())
    {
        return get_users($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/set_current_user/
     * @param $id
     * @param string $name
     * @return \WP_User
     * @deprecated
     */
    public function set_current_user($id, $name = '')
    {
        return set_current_user($id, $name = '');
    }

    /**
     * https://developer.wordpress.org/reference/functions/user_pass_ok/
     * @param $user_login
     * @param $user_pass
     * @return bool
     * @deprecated
     */
    public function user_pass_ok($user_login, $user_pass)
    {
        return user_pass_ok($user_login, $user_pass);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_authenticate/
     * @param $username
     * @param $password
     * @return \WP_Error|\WP_User
     */
    public function wp_authenticate($username, $password)
    {
        return wp_authenticate($username, $password);
    }

    /**
     * https://developer.wordpress.org/reference/functions/username_exists/
     * @param $username
     * @return false|int
     */
    public function username_exists($username)
    {
        return username_exists($username);
    }

    /**
     * https://developer.wordpress.org/reference/functions/validate_username/
     * @param $username
     * @return bool
     */
    public function validate_username($username)
    {
        return validate_username($username);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_dropdown_users/
     * @param string $args
     * @return string
     */
    public function wp_dropdown_users($args = '')
    {
        return wp_dropdown_users($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_current_user/
     * @return \WP_User
     */
    public function wp_get_current_user()
    {
        return wp_get_current_user();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_set_current_user/
     * @param $id
     * @param string $name
     * @return \WP_User
     */
    public function wp_set_current_user($id, $name = '')
    {
        return wp_set_current_user($id, $name);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_set_password/
     * @param $password
     * @param $user_id
     */
    public function wp_set_password($password, $user_id)
    {
        return wp_set_password($password, $user_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_author_posts_url/
     * @param $author_id
     * @param string $author_nicename
     * @return string
     */
    public function get_author_posts_url($author_id, $author_nicename = '')
    {
        return get_author_posts_url($author_id, $author_nicename);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_modified_author/
     * @return string|void
     */
    public function get_the_modified_author()
    {
        return get_the_modified_author();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_multi_author/
     * @return bool
     */
    public function is_multi_author()
    {
        return is_multi_author();
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_user_meta/
     * @param $user_id
     * @param $meta_key
     * @param $meta_value
     * @param bool $unique
     * @return false|int
     */
    public function add_user_meta($user_id, $meta_key, $meta_value, $unique = false)
    {
        return add_user_meta($user_id, $meta_key, $meta_value, $unique);
    }

    /**
     * https://developer.wordpress.org/reference/functions/delete_user_meta/
     * @param $user_id
     * @param $meta_key
     * @param string $meta_value
     * @return bool
     */
    public function delete_user_meta($user_id, $meta_key, $meta_value = '')
    {
        return delete_user_meta($user_id, $meta_key, $meta_value);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_user_meta/
     * @param $user_id
     * @param string $key
     * @param bool $single
     * @return mixed
     */
    public function get_user_meta($user_id, $key = '', $single = false)
    {
        return get_user_meta($user_id, $key, $single);
    }

    /**
     * https://developer.wordpress.org/reference/functions/update_user_meta/
     * @param $user_id
     * @param $meta_key
     * @param $meta_value
     * @param string $prev_value
     * @return bool|int
     */
    public function update_user_meta($user_id, $meta_key, $meta_value, $prev_value = '')
    {
        return update_user_meta($user_id, $meta_key, $meta_value, $prev_value);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_the_author_meta/
     * @param string $field
     * @param bool $user_id
     * @return string
     */
    public function get_the_author_meta($field = '', $user_id = false)
    {
        return get_the_author_meta($field, $user_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_create_user/
     * @param $username
     * @param $password
     * @param string $email
     * @return int|\WP_Error
     */
    public function wp_create_user($username, $password, $email = '')
    {
        return wp_create_user($username, $password, $email);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_delete_user/
     * @param $id
     * @param null $reassign
     * @return bool
     */
    public function wp_delete_user($id, $reassign = null)
    {
        return wp_delete_user($id, $reassign);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_insert_user/
     * @param $userdata
     * @return int|\WP_Error
     */
    public function wp_insert_user($userdata)
    {
        return wp_insert_user($userdata);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_update_user/
     * @param $userdata
     * @return int|\WP_Error
     */
    public function wp_update_user($userdata)
    {
        return wp_update_user($userdata);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_user_logged_in/
     * @return bool
     */
    public function is_user_logged_in()
    {
        return is_user_logged_in();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_login_form/
     * @param array $args
     * @return string|void
     */
    public function wp_login_form($args = array())
    {
        return wp_login_form($args);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_signon/
     * @param array $credentials
     * @param string $secure_cookie
     * @return \WP_Error|\WP_User
     */
    public function wp_signon($credentials = array(), $secure_cookie = '')
    {
        return wp_signon($credentials, $secure_cookie);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_logout/
     */
    public function wp_logout()
    {
        return wp_logout();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_loginout/
     * @param string $redirect
     * @param bool $echo
     * @return string|void
     */
    public function wp_loginout($redirect = '', $echo = true)
    {
        return wp_loginout($redirect, $echo);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_logout_url/
     * @param string $redirect
     * @return string
     */
    public function wp_logout_url($redirect = '')
    {
        return wp_logout_url($redirect);
    }
}