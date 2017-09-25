<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\AbstractExtension;

class MultisiteFunctions extends AbstractExtension
{
    const FUNCTION_NAMESPACE = 'multisite';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/confirm_delete_users/
     * @param $users
     * @return bool
     *
     */
    public function confirm_delete_users($users)
    {
        return confirm_delete_users($users);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_user_member_of_blog/
     * @param int $user_id
     * @param int $blog_id
     * @return bool
     */
    public function is_user_member_of_blog($user_id = 0, $blog_id = 0)
    {
        return is_user_member_of_blog($user_id, $blog_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_dashboard_quota/
     * @return bool|null
     *
     */
    public function wp_dashboard_quota()
    {
        return wp_dashboard_quota();
    }

    /**
     * https://developer.wordpress.org/reference/functions/avoid_blog_page_permalink_collision/
     * @param $data
     * @param $postarr
     * @return array
     */
    public function avoid_blog_page_permalink_collision($data, $postarr)
    {
        return avoid_blog_page_permalink_collision($data, $postarr);
    }

    /**
     * https://developer.wordpress.org/reference/functions/check_import_new_users/
     * @param $permission
     * @return bool
     */
    public function check_import_new_users($permission)
    {
        return check_import_new_users($permission);
    }

    /**
     * https://developer.wordpress.org/reference/functions/check_upload_size/
     * @param $file
     * @return array
     */
    public function check_upload_size($file)
    {
        return check_upload_size($file);
    }

    /**
     * https://developer.wordpress.org/reference/functions/choose_primary_blog/
     */
    public function choose_primary_blog()
    {
        return choose_primary_blog();
    }

    /**
     * https://developer.wordpress.org/reference/functions/display_space_usage/
     */
    public function display_space_usage()
    {
        return display_space_usage();
    }

    /**
     * https://developer.wordpress.org/reference/functions/fix_import_form_size/
     * @param $size
     * @return int
     */
    public function fix_import_form_size($size)
    {
        return fix_import_form_size($size);
    }

    /**
     * https://developer.wordpress.org/reference/functions/format_code_lang/
     * @param string $code
     * @return string
     */
    public function format_code_lang($code = '')
    {
        return format_code_lang($code);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_site_allowed_themes/
     * @return array
     * @deprecated
     */
    public function get_site_allowed_themes()
    {
        return get_site_allowed_themes();
    }

    /**
     * https://developer.wordpress.org/reference/functions/grant_super_admin/
     * @param $user_id
     * @return bool
     */
    public function grant_super_admin($user_id)
    {
        return grant_super_admin($user_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/ms_deprecated_blogs_file/
     * @deprecated
     */
    public function ms_deprecated_blogs_file()
    {
        return ms_deprecated_blogs_file();
    }

    /**
     * https://developer.wordpress.org/reference/functions/mu_dropdown_languages/
     * @param array $lang_files
     * @param string $current
     */
    public function mu_dropdown_languages($lang_files = array(), $current = '')
    {
        return mu_dropdown_languages($lang_files, $current);
    }

    /**
     * https://developer.wordpress.org/reference/functions/new_user_email_admin_notice/
     */
    public function new_user_email_admin_notice()
    {
        return new_user_email_admin_notice();
    }

    /**
     * https://developer.wordpress.org/reference/functions/refresh_user_details/
     * @param $id
     * @return bool|int
     */
    public function refresh_user_details($id)
    {
        return refresh_user_details($id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/revoke_super_admin/
     * @param $user_id
     * @return bool
     */
    public function revoke_super_admin($user_id)
    {
        return revoke_super_admin($user_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/send_confirmation_on_profile_email/
     * @return bool|void
     */
    public function send_confirmation_on_profile_email()
    {
        return send_confirmation_on_profile_email();
    }

    /**
     * https://developer.wordpress.org/reference/functions/site_admin_notice/
     * @return false
     */
    public function site_admin_notice()
    {
        return site_admin_notice();
    }

    /**
     * https://developer.wordpress.org/reference/functions/sync_category_tag_slugs/
     * @param $term
     * @param $taxonomy
     * @return array|object
     */
    public function sync_category_tag_slugs($term, $taxonomy)
    {
        return sync_category_tag_slugs($term, $taxonomy);
    }

    /**
     * https://developer.wordpress.org/reference/functions/update_option_new_admin_email/
     * @param $old_value
     * @param $value
     */
    public function update_option_new_admin_email($old_value, $value)
    {
        return update_option_new_admin_email($old_value, $value);
    }

    /**
     * https://developer.wordpress.org/reference/functions/update_user_status/
     * @param $id
     * @param $pref
     * @param $value
     * @param null $deprecated
     * @return int
     */
    public function update_user_status($id, $pref, $value, $deprecated = null)
    {
        return update_user_status($id, $pref, $value, $deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/upload_space_setting/
     * @param $id
     */
    public function upload_space_setting($id)
    {
        return upload_space_setting($id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpmu_delete_blog/
     * @param $blog_id
     * @param bool $drop
     */
    public function wpmu_delete_blog($blog_id, $drop = false)
    {
        return wpmu_delete_blog($blog_id, $drop);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpmu_delete_user/
     * @param $id
     * @return bool
     */
    public function wpmu_delete_user($id)
    {
        return wpmu_delete_user($id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpmu_get_blog_allowedthemes/
     * @param int $blog_id
     * @return array
     * @deprecated
     */
    public function wpmu_get_blog_allowedthemes($blog_id = 0)
    {
        return wpmu_get_blog_allowedthemes($blog_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_blog_option/
     * @param $id
     * @param $option
     * @param $value
     * @return bool
     */
    public function add_blog_option($id, $option, $value)
    {
        return add_blog_option($id, $option, $value);
    }

    /**https://developer.wordpress.org/reference/functions/delete_blog_option/
     * @param $id
     * @param $option
     * @return bool
     */
    public function delete_blog_option($id, $option)
    {
        return delete_blog_option($id, $option);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_blogaddress_by_domain/
     * @param $domain
     * @param $path
     * @return string
     */
    public function get_blogaddress_by_domain($domain, $path)
    {
        return get_blogaddress_by_domain($domain, $path);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_blogaddress_by_id/
     * @param $blog_id
     * @return string
     */
    public function get_blogaddress_by_id($blog_id)
    {
        return get_blogaddress_by_id($blog_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_blogaddress_by_name/
     * @param $blogname
     * @return string
     */
    public function get_blogaddress_by_name($blogname)
    {
        return get_blogaddress_by_name($blogname);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_blog_details/
     * @param null $fields
     * @param bool $get_all
     * @return false|\WP_Site
     */
    public function get_blog_details($fields = null, $get_all = true)
    {
        return get_blog_details($fields, $get_all);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_blog_option/
     * @param $id
     * @param $option
     * @param bool $default
     * @return mixed
     */
    public function get_blog_option($id, $option, $default = false)
    {
        return get_blog_option($id, $option, $default);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_blog_status/
     * @param $id
     * @param $pref
     * @return bool|null|string
     */
    public function get_blog_status($id, $pref)
    {
        return get_blog_status($id, $pref);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_id_from_blogname/
     * @param $slug
     * @return int|null
     */
    public function get_id_from_blogname($slug)
    {
        return get_id_from_blogname($slug);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_last_updated/
     * @param string $deprecated
     * @param int $start
     * @param int $quantity
     * @return array
     */
    public function get_last_updated($deprecated = '', $start = 0, $quantity = 40)
    {
        return get_last_updated($deprecated, $start, $quantity);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_archived/
     * @param $id
     * @return string
     */
    public function is_archived($id)
    {
        return is_archived($id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/refresh_blog_details/
     * @param int $blog_id
     */
    public function refresh_blog_details($blog_id = 0)
    {
        return refresh_blog_details($blog_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/restore_current_blog/
     * @return bool
     */
    public function restore_current_blog()
    {
        return restore_current_blog();
    }

    /**
     * https://developer.wordpress.org/reference/functions/switch_to_blog/
     * @param $new_blog
     * @param null $deprecated
     * @return true
     */
    public function switch_to_blog($new_blog, $deprecated = null)
    {
        return switch_to_blog($new_blog, $deprecated = null);
    }

    /**
     * https://developer.wordpress.org/reference/functions/update_archived/
     * @param $id
     * @param $archived
     * @return string
     */
    public function update_archived($id, $archived)
    {
        return update_archived($id, $archived);
    }

    /**
     * https://developer.wordpress.org/reference/functions/update_blog_details/
     * @param $blog_id
     * @param array $details
     * @return bool
     */
    public function update_blog_details($blog_id, $details = array())
    {
        return update_blog_details($blog_id, $details);
    }

    /**
     * https://developer.wordpress.org/reference/functions/update_blog_option/
     * @param $id
     * @param $option
     * @param $value
     * @param null $deprecated
     * @return bool
     */
    public function update_blog_option($id, $option, $value, $deprecated = null)
    {
        return update_blog_option($id, $option, $value, $deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/update_blog_status/
     * @param $blog_id
     * @param $pref
     * @param $value
     * @param null $deprecated
     * @return false|string
     */
    public function update_blog_status($blog_id, $pref, $value, $deprecated = null)
    {
        return update_blog_status($blog_id, $pref, $value, $deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpmu_update_blogs_date/
     */
    public function wpmu_update_blogs_date()
    {
        return wpmu_update_blogs_date();
    }

    /**
     * https://developer.wordpress.org/reference/functions/ms_cookie_constants/
     */
    public function ms_cookie_constants()
    {
        return ms_cookie_constants();
    }

    /**
     * https://developer.wordpress.org/reference/functions/ms_file_constants/
     */
    public function ms_file_constants()
    {
        return ms_file_constants();
    }

    /**
     * https://developer.wordpress.org/reference/functions/ms_subdomain_constants/
     */
    public function ms_subdomain_constants()
    {
        return ms_subdomain_constants();
    }

    /**
     * https://developer.wordpress.org/reference/functions/ms_upload_constants/
     */
    public function ms_upload_constants()
    {
        return ms_upload_constants();
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_existing_user_to_blog/
     * @param bool $details
     * @return true|void|\WP_Error
     */
    public function add_existing_user_to_blog($details = false)
    {
        return add_existing_user_to_blog($details);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_new_user_to_blog/
     * @param $user_id
     * @param $password
     * @param $meta
     */
    public function add_new_user_to_blog($user_id, $password, $meta)
    {
        return add_new_user_to_blog($user_id, $password, $meta);
    }

    /**
     * https://developer.wordpress.org/reference/functions/add_user_to_blog/
     * @param $blog_id
     * @param $user_id
     * @param $role
     * @return true|\WP_Error
     */
    public function add_user_to_blog($blog_id, $user_id, $role)
    {
        return add_user_to_blog($blog_id, $user_id, $role);
    }

    /**
     * https://developer.wordpress.org/reference/functions/check_upload_mimes/
     * @param $mimes
     * @return array
     */
    public function check_upload_mimes($mimes)
    {
        return check_upload_mimes($mimes);
    }

    /**
     * https://developer.wordpress.org/reference/functions/create_empty_blog/
     * @param $domain
     * @param $path
     * @param $weblog_title
     * @param int $site_id
     * @return int|string
     * @deprecated
     */
    public function create_empty_blog($domain, $path, $weblog_title, $site_id = 1)
    {
        return create_empty_blog($domain, $path, $weblog_title, $site_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/domain_exists/
     * @param $domain
     * @param $path
     * @param int $site_id
     * @return int
     */
    public function domain_exists($domain, $path, $site_id = 1)
    {
        return domain_exists($domain, $path, $site_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/filter_SSL/
     * @param $url
     * @return string
     */
    public function filter_SSL($url)
    {
        return filter_SSL($url);
    }

    /**
     * https://developer.wordpress.org/reference/functions/fix_phpmailer_messageid/
     * @param $phpmailer
     */
    public function fix_phpmailer_messageid($phpmailer)
    {
        return fix_phpmailer_messageid($phpmailer);
    }

    /**
     * https://developer.wordpress.org/reference/functions/force_ssl_content/
     * @param string $force
     * @return bool
     */
    public function force_ssl_content($force = '')
    {
        return force_ssl_content($force);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_active_blog_for_user/
     * @param $user_id
     * @return void|\WP_Site
     */
    public function get_active_blog_for_user($user_id)
    {
        return get_active_blog_for_user($user_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_admin_users_for_domain/
     * @param string $sitedomain
     * @param string $path
     * @return array|false
     * @deprecated
     */
    public function get_admin_users_for_domain($sitedomain = '', $path = '')
    {
        return get_admin_users_for_domain($sitedomain, $path);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_blogs_of_user/
     * @param $user_id
     * @param bool $all
     * @return array
     */
    public function get_blogs_of_user($user_id, $all = false)
    {
        return get_blogs_of_user($user_id, $all);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_blog_count/
     * @param null $network_id
     * @return int
     */
    public function get_blog_count($network_id = null)
    {
        return get_blog_count($network_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_blog_id_from_url/
     * @param $domain
     * @param string $path
     * @return int
     */
    public function get_blog_id_from_url($domain, $path = '/')
    {
        return get_blog_id_from_url($domain, $path);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_blog_permalink/
     * @param $blog_id
     * @param $post_id
     * @return string
     */
    public function get_blog_permalink($blog_id, $post_id)
    {
        return get_blog_permalink($blog_id, $post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_blog_post/
     * @param $blog_id
     * @param $post_id
     * @return null|\WP_Post
     */
    public function get_blog_post($blog_id, $post_id)
    {
        return get_blog_post($blog_id, $post_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_current_site/
     * @return \WP_Network
     */
    public function get_current_site()
    {
        return get_current_site();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_dashboard_blog/
     * @return \WP_Site
     * @deprecated
     */
    public function get_dashboard_blog()
    {
        return get_dashboard_blog();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_dirsize/
     * @param $directory
     * @return int
     */
    public function get_dirsize($directory)
    {
        return get_dirsize($directory);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_most_recent_post_of_user/
     * @param $user_id
     * @return array
     */
    public function get_most_recent_post_of_user($user_id)
    {
        return get_most_recent_post_of_user($user_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_sitestats/
     * @return array
     */
    public function get_sitestats()
    {
        return get_sitestats();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_space_allowed/
     * @return int
     */
    public function get_space_allowed()
    {
        return get_space_allowed();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_space_used/
     * @return int
     */
    public function get_space_used()
    {
        return get_space_used();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_upload_space_available/
     * @return int
     */
    public function get_upload_space_available()
    {
        return get_upload_space_available();
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_user_count/
     * @param null $network_id
     * @return int
     */
    public function get_user_count($network_id = null)
    {
        return get_user_count($network_id = null);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_user_id_from_string/
     * @param $string
     * @return int
     * @deprecated
     */
    public function get_user_id_from_string($string)
    {
        return get_user_id_from_string($string);
    }

    /**
     * https://developer.wordpress.org/reference/functions/global_terms/
     * @param $term_id
     * @param string $deprecated
     * @return int
     */
    public function global_terms($term_id, $deprecated = '')
    {
        return global_terms($term_id, $deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/insert_blog/
     * @param $domain
     * @param $path
     * @param $site_id
     * @return false|int
     */
    public function insert_blog($domain, $path, $site_id)
    {
        return insert_blog($domain, $path, $site_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/install_blog/
     * @param $blog_id
     * @param string $blog_title
     */
    public function install_blog($blog_id, $blog_title = '')
    {
        return install_blog($blog_id, $blog_title);
    }

    /**
     * https://developer.wordpress.org/reference/functions/install_blog_defaults/
     * @param $blog_id
     * @param $user_id
     * @deprecated
     */
    public function install_blog_defaults($blog_id, $user_id)
    {
        return install_blog_defaults($blog_id, $user_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_blog_user/
     * @param int $blog_id
     * @return bool
     */
    public function is_blog_user($blog_id = 0)
    {
        return is_blog_user($blog_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_email_address_unsafe/
     * @param $user_email
     * @return bool
     */
    public function is_email_address_unsafe($user_email)
    {
        return is_email_address_unsafe($user_email);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_upload_space_available/
     * @return bool
     */
    public function is_upload_space_available()
    {
        return is_upload_space_available();
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_user_option_local/
     * @param $key
     * @param int $user_id
     * @param int $blog_id
     * @return bool
     */
    public function is_user_option_local($key, $user_id = 0, $blog_id = 0)
    {
        return is_user_option_local($key, $user_id, $blog_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_user_spammy/
     * @param null $user
     * @return bool
     */
    public function is_user_spammy($user = null)
    {
        return is_user_spammy($user);
    }

    /**
     * https://developer.wordpress.org/reference/functions/maybe_add_existing_user_to_blog/
     */
    public function maybe_add_existing_user_to_blog()
    {
        return maybe_add_existing_user_to_blog();
    }

    /**
     * https://developer.wordpress.org/reference/functions/maybe_redirect_404/
     */
    public function maybe_redirect_404()
    {
        return maybe_redirect_404();
    }

    /**
     * https://developer.wordpress.org/reference/functions/newblog_notify_siteadmin/
     * @param $blog_id
     * @param string $deprecated
     * @return bool
     */
    public function newblog_notify_siteadmin($blog_id, $deprecated = '')
    {
        return newblog_notify_siteadmin($blog_id, $deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/newuser_notify_siteadmin/
     * @param $user_id
     * @return bool
     */
    public function newuser_notify_siteadmin($user_id)
    {
        return newuser_notify_siteadmin($user_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/recurse_dirsize/
     * @param $directory
     * @param null $exclude
     * @return false|int
     */
    public function recurse_dirsize($directory, $exclude = null)
    {
        return recurse_dirsize($directory, $exclude);
    }

    /**
     * https://developer.wordpress.org/reference/functions/redirect_this_site/
     * @param string $deprecated
     * @return array
     */
    public function redirect_this_site($deprecated = '')
    {
        return redirect_this_site($deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/remove_user_from_blog/
     * @param $user_id
     * @param string $blog_id
     * @param string $reassign
     * @return true|\WP_Error
     */
    public function remove_user_from_blog($user_id, $blog_id = '', $reassign = '')
    {
        return remove_user_from_blog($user_id, $blog_id, $reassign);
    }

    /**
     * https://developer.wordpress.org/reference/functions/signup_nonce_check/
     * @param $result
     * @return array
     */
    public function signup_nonce_check($result)
    {
        return signup_nonce_check($result);
    }

    /**
     * https://developer.wordpress.org/reference/functions/signup_nonce_fields/
     */
    public function signup_nonce_fields()
    {
        return signup_nonce_fields();
    }

    /**
     * https://developer.wordpress.org/reference/functions/update_blog_public/
     * @param $old_value
     * @param $value
     */
    public function update_blog_public($old_value, $value)
    {
        return update_blog_public($old_value, $value);
    }

    /**
     * https://developer.wordpress.org/reference/functions/update_posts_count/
     * @param string $deprecated
     */
    public function update_posts_count($deprecated = '')
    {
        return update_posts_count($deprecated);
    }

    /**
     * https://developer.wordpress.org/reference/functions/upload_is_file_too_big/
     * @param $upload
     * @return array|string
     */
    public function upload_is_file_too_big($upload)
    {
        return upload_is_file_too_big($upload);
    }

    /**
     * https://developer.wordpress.org/reference/functions/upload_is_user_over_quota/
     * @param bool $echo
     * @return bool
     */
    public function upload_is_user_over_quota($echo = true)
    {
        return upload_is_user_over_quota($echo);
    }

    /**
     * https://developer.wordpress.org/reference/functions/upload_size_limit_filter/
     * @param $size
     * @return int
     */
    public function upload_size_limit_filter($size)
    {
        return upload_size_limit_filter($size);
    }

    /**
     * https://developer.wordpress.org/reference/functions/users_can_register_signup_filter/
     * @return bool
     */
    public function users_can_register_signup_filter()
    {
        return users_can_register_signup_filter();
    }

    /**
     * https://developer.wordpress.org/reference/functions/welcome_user_msg_filter/
     * @param $text
     * @return string
     */
    public function welcome_user_msg_filter($text)
    {
        return welcome_user_msg_filter($text);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wp_get_sites/
     * @param array $args
     * @return array
     * @deprecated
     */
    public function wp_get_sites($args = array())
    {
        return wp_get_sites($args = array());
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpmu_activate_signup/
     * @param $key
     * @return array|\WP_Error
     */
    public function wpmu_activate_signup($key)
    {
        return wpmu_activate_signup($key);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpmu_admin_redirect_add_updated_param/
     * @param string $url
     * @return string
     * @deprecated
     */
    public function wpmu_admin_redirect_add_updated_param($url = '')
    {
        return wpmu_admin_redirect_add_updated_param($url);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpmu_create_blog/
     * @param $domain
     * @param $path
     * @param $title
     * @param $user_id
     * @param array $meta
     * @param int $site_id
     * @return int|\WP_Error
     */
    public function wpmu_create_blog($domain, $path, $title, $user_id, $meta = array(), $site_id = 1)
    {
        return wpmu_create_blog($domain, $path, $title, $user_id, $meta, $site_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpmu_create_user/
     * @param $user_name
     * @param $password
     * @param $email
     * @return false|int
     */
    public function wpmu_create_user($user_name, $password, $email)
    {
        return wpmu_create_user($user_name, $password, $email);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpmu_log_new_registrations/
     * @param $blog_id
     * @param $user_id
     */
    public function wpmu_log_new_registrations($blog_id, $user_id)
    {
        return wpmu_log_new_registrations($blog_id, $user_id);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpmu_signup_blog/
     * @param $domain
     * @param $path
     * @param $title
     * @param $user
     * @param $user_email
     * @param array $meta
     */
    public function wpmu_signup_blog($domain, $path, $title, $user, $user_email, $meta = array())
    {
        return wpmu_signup_blog($domain, $path, $title, $user, $user_email, $meta);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpmu_signup_blog_notification/
     * @param $domain
     * @param $path
     * @param $title
     * @param $user_login
     * @param $user_email
     * @param $key
     * @param array $meta
     * @return bool
     */
    public function wpmu_signup_blog_notification(
        $domain,
        $path,
        $title,
        $user_login,
        $user_email,
        $key,
        $meta = array()
    ) {
        return wpmu_signup_blog_notification($domain, $path, $title, $user_login, $user_email, $key, $meta);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpmu_signup_user/
     * @param $user
     * @param $user_email
     * @param array $meta
     */
    public function wpmu_signup_user($user, $user_email, $meta = array())
    {
        return wpmu_signup_user($user, $user_email, $meta);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpmu_signup_user_notification/
     * @param $user_login
     * @param $user_email
     * @param $key
     * @param array $meta
     * @return bool
     */
    public function wpmu_signup_user_notification($user_login, $user_email, $key, $meta = array())
    {
        return wpmu_signup_user_notification($user_login, $user_email, $key, $meta);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpmu_validate_blog_signup/
     * @param $blogname
     * @param $blog_title
     * @param string $user
     * @return array
     */
    public function wpmu_validate_blog_signup($blogname, $blog_title, $user = '')
    {
        return wpmu_validate_blog_signup($blogname, $blog_title, $user);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpmu_validate_user_signup/
     * @param $user_name
     * @param $user_email
     * @return array
     */
    public function wpmu_validate_user_signup($user_name, $user_email)
    {
        return wpmu_validate_user_signup($user_name, $user_email);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpmu_welcome_notification/
     * @param $blog_id
     * @param $user_id
     * @param $password
     * @param $title
     * @param array $meta
     * @return bool
     */
    public function wpmu_welcome_notification($blog_id, $user_id, $password, $title, $meta = array())
    {
        return wpmu_welcome_notification($blog_id, $user_id, $password, $title, $meta);
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpmu_welcome_user_notification/
     * @param $user_id
     * @param $password
     * @param array $meta
     * @return bool
     */
    public function wpmu_welcome_user_notification($user_id, $password, $meta = array())
    {
        return wpmu_welcome_user_notification($user_id, $password, $meta);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_current_site_name/
     * @param $current_site
     * @return object
     * @deprecated
     */
    public function get_current_site_name($current_site)
    {
        return get_current_site_name($current_site);
    }

    /**
     * https://developer.wordpress.org/reference/functions/is_subdomain_install/
     * @return bool
     */
    public function is_subdomain_install()
    {
        return is_subdomain_install();
    }

    /**
     * https://developer.wordpress.org/reference/functions/ms_not_installed/
     * @param $domain
     * @param $path
     */
    public function ms_not_installed($domain, $path)
    {
        return ms_not_installed($domain, $path);
    }

    /**
     * https://developer.wordpress.org/reference/functions/ms_site_check/
     * @return string|true
     */
    public function ms_site_check()
    {
        return ms_site_check();
    }

    /**
     * https://developer.wordpress.org/reference/functions/wpmu_current_site/
     * @return object
     * @deprecated
     */
    public function wpmu_current_site()
    {
        return wpmu_current_site();
    }
}