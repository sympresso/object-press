## Sympresso/ObjectPress
ObjectPress is a simple object oriented facade to the global functions and variables provided by WordPress.  
All 900+ core WordPress functions are available.    

### Key Features
- Promotes object-oriented design in your code
- Functions are namespaced to easily discover functions using your IDE autocomplete
- Allows you to easily test code in isolation since you can mock the objects.
- Extensible so you can add more functions (for WordPress plugins for instance)

### Installation

    composer require sympresso/object-press

### Usage - WordPress Functions

The 900+ core WordPress functions have been grouped into over 50 classes.
Each of these classes are exposed as a public property (aka namespace) of the Sympresso\ObjectPress\Wordpress object.
For instance the functions has_action, add_action, do_action are all grouped under ActionFunctions the namespace **action**.

Using ObjectPress, you can call the add_action() method under the namespace action ...

    // Adding a WordPress action...
    $wp = new Sympresso\ObjectPress\WordPress();
    $wp->action->add_action('save_post',function($postId,$post){
        // Business logic on action save_post goes here
    });

Note: *ObjectPress is just a simple facade.*  When you call a method on ObjectPress, it in turn calls the equivalent WordPress function.  The key difference is that you don't have to call global functions in your code (which will improve testability.)

### Alternative Syntax

The WordPress object also implements the __call() magic method.
If you prefer, you can skip the namespace and call the the add_action directly on the WordPress object.

    $wp = new Sympresso\ObjectPress\WordPress();
    $wp->add_action('save_post',function($postId,$post){
        // Business logic on action save_post goes here
    });


## Usage - WordPress Global Variables

WordPress has many global variables (https://codex.wordpress.org/Global_Variables) that are also accessible.
To access these global variables, just access their variable name on the WordPress object as if it was an array.

For example, accessing the $post and $wpdb global variables...

    $wp = new Sympresso\ObjectPress\WordPress();
    $post = $wp['post'];
    $wpdb = $wp['wpdb'];

## Extending ObjectPress

You can extend ObjectPress by creating an Extension.
Extensions in ObjectPress implement the Sympresso\ObjectPress\ExtensionInterface which has three methods that you will need to implement.
When you register an extension, all the methods on the class become methods available on the WordPress object.

**getExtensionNamespace** (string) - The unique namespace for your extension.

**getGlobalVariables** (array) - An array of global variables exposed by your extension.

**getExcludedFunctions** (array) - An array of methods of your extension class to ignore (Since by default all methods on an extension will be added).

Here is a sample extension that adds the function foo() and global variable $fooGlobal ...

    use Sympresso\ObjectPress\AbstractExtension;

    class FooExtension extends AbstractExtension
    {
        function bar()
        {
            // business logic goes here
        }

        function getExtensionNamespace()
        {
            return 'foo';
        }

        function getGlobalVariables()
        {
            return array('fooGlobal');
        }
    }

Next you register your extension...

    $wp = new Sympresso\ObjectPress\WordPress();
    $wp->addExtension(new FooExtension());

Now you can use the function and global variables...

    $wp->foo->bar()                 // namespace syntax
    $wp->bar()                      // alternative syntax
    $fooGlobal = $wp['fooGlobal']   // accessing global variable

The core WordPress functions and global variables are added using extensions so you can use them for inspiration (located in Sympresso/ObjectPress/CoreExtensions).

Note:  If you want to override the core extensions, pass an associative array using namespace as keys when you instantiate ObjectPress.

### ObjectPress Namespaces and Functions
Here's a list of all the core WordPress functions supported:
- **action**- has_action, add_action, do_action, did_action, remove_action, remove_all_actions
- **admin** - add_menu_page, remove_menu_page, add_submenu_page, remove_submenu_page, add_object_page, add_utility_page, add_comments_page, add_dashboard_page, add_links_page, add_management_page, add_media_page, add_options_page, add_pages_page, add_plugins_page, add_posts_page, add_theme_page, add_users_page, add_meta_box, remove_meta_box, add_editor_style, wp_editor, wp_get_image_editor, post_submit_meta_box
- **asset** - wp_dequeue_script, wp_dequeue_style, wp_deregister_script, wp_deregister_style, wp_enqueue_script, wp_enqueue_style, wp_localize_script, wp_register_script, wp_register_style, wp_script_is, wp_style_is, wp_add_inline_style, get_locale_stylesheet_uri, get_stylesheet_uri, get_stylesheet, get_stylesheet_directory, get_stylesheet_directory_uri, locale_stylesheet
- **bookmark** - get_bookmark, get_bookmarks, wp_list_bookmarks
- **cache** - wp_cache_set, wp_cache_get, wp_cache_reset, clean_blog_cache
- **cat (Category)** - cat_is_ancestor_of, get_all_category_ids, get_ancestors, get_cat_ID, get_cat_name, get_categories, get_category, get_category_by_path, get_category_by_slug, get_the_category_by_ID, get_the_category_list, get_category_link, get_category_parents, get_the_category, single_cat_title, in_category, is_category, the_category, wp_category_checklist, wp_dropdown_categories, wp_list_categories, wp_create_category, wp_delete_category, wp_insert_category
- **comment** -  comment_link, get_comment_link, add_comment_meta, check_comment, comment_text, comment_form, comments_number, delete_comment_meta, get_approved_comments, get_avatar, get_comment, get_comment_text, get_comment_meta, get_comments, wp_list_comments, get_lastcommentmodified, have_comments, get_comment_author, update_comment_meta, wp_allow_comment, wp_count_comments, wp_delete_comment, wp_filter_comment, wp_get_comment_status, wp_get_current_commenter, wp_insert_comment, wp_new_comment, wp_set_comment_status, wp_throttle_comment_flood, wp_update_comment, wp_update_comment_count, wp_update_comment_count_now, comment_class, comment_ID, comment_author, comment_date, comment_time, get_comment_date, get_comment_time, paginate_comments_links, previous_comments_link, next_comments_link, get_comment_pages_count, comments_open
- **cond (Conditional)** - in_the_loop, is_child_theme, is_active_sidebar, is_admin_bar_showing, is_customize_preview, is_dynamic_sidebar, in_category, is_404, is_admin, is_archive, is_attachment, is_author, is_category, is_comments_popup, is_date, is_day, is_feed, is_front_page, is_home, is_month, is_page, is_page_template, is_paged, is_preview, is_search, is_single, is_singular, is_sticky, is_tag, is_tax, is_time, is_trackback, is_year, is_main_query, is_blog_installed, is_main_site, is_multisite, is_ssl, is_wp_error, wp_is_mobile, is_new_day, is_post_type_archive, is_post_type_hierarchical, is_serialized, is_serialized_string, is_taxonomy, is_taxonomy_hierarchical, is_term, has_nav_menu, current_theme_supports, has_header_image
- **cookie** - wp_clearcookie, wp_get_cookie_login, wp_set_auth_cookie
- **cron** - spawn_cron, wp_clear_scheduled_hook, wp_cron, wp_get_schedule, wp_get_schedules, wp_next_scheduled, wp_reschedule_event, wp_schedule_event, wp_schedule_single_event, wp_unschedule_event
- **date_time** - current_time, date_i18n, get_calendar, get_date_from_gmt, get_lastpostdate, get_lastpostmodified, get_day_link, get_gmt_from_date, get_month_link, the_date, get_the_date, the_time, get_the_time, the_modified_time, get_the_modified_time, get_weekstartend, get_year_link, human_time_diff, is_new_day, iso8601_timezone_to_offset, iso8601_to_datetime, mysql2date
- **embed** - wp_oembed_remove_provider, wp_embed_register_handler, wp_embed_unregister_handler, wp_embed_defaults, wp_oembed_get, wp_oembed_add_provider, wp_maybe_load_embeds, wp_embed_handler_youtube, wp_embed_handler_audio, wp_embed_handler_video, wp_oembed_register_route, wp_oembed_add_discovery_links, wp_oembed_add_host_js, get_post_embed_url, get_oembed_endpoint_url, get_post_embed_html, get_oembed_response_data, get_oembed_response_data_rich, wp_oembed_ensure_format, wp_filter_oembed_result, wp_embed_excerpt_more, the_excerpt_embed, wp_embed_excerpt_attachment, enqueue_embed_scripts, print_embed_styles, print_embed_scripts, print_embed_comments_button, print_embed_sharing_button, print_embed_sharing_dialog, the_embed_site_title, wp_filter_pre_oembed_result
- **enclosure** - get_enclosed, do_enclose
- **feed** - bloginfo_rss, comment_author_rss, comment_text_rss, do_feed, do_feed_atom, do_feed_rdf, do_feed_rss, do_feed_rss2, fetch_feed, fetch_rss, get_author_feed_link, get_bloginfo_rss, get_category_feed_link, get_comment_author_rss, get_post_comments_feed_link, get_rss, get_search_comments_feed_link, get_search_feed_link, get_the_category_rss, get_the_title_rss, permalink_single_rss, post_comments_feed_link, rss_enclosure, the_title_rss, the_category_rss, the_content_rss, the_excerpt_rss, wp_rss
- **file** - unzip_file, validate_file, validate_file_to_edit, wp_check_filetype, wp_handle_sideload, wp_upload_bits, wp_upload_dir, wp_mkdir_p, wp_max_upload_size
- **filter** - has_filter, add_filter, apply_filters, apply_filters_ref_array, current_filter, remove_filter, remove_all_filters
- **formatting** - absint, add_magic_quotes, addslashes_gpc, antispambot, attribute_escape, backslashit, balanceTags, clean_pre, clean_url, convert_chars, convert_smilies, ent2ncr, esc_attr, esc_html, esc_js, esc_textarea, esc_sql, esc_url, esc_url_raw, force_balance_tags, format_to_edit, format_to_post, funky_javascript_fix, htmlentities2, is_email, js_escape, make_clickable, popuplinks, remove_accents, sanitize_email, sanitize_file_name, sanitize_html_class, sanitize_key, sanitize_mime_type, sanitize_option, sanitize_sql_orderby, sanitize_text_field, sanitize_title, sanitize_title_for_query, sanitize_comment_cookies, sanitize_title_with_dashes, sanitize_user, seems_utf8, stripslashes_deep, trailingslashit, untrailingslashit, urlencode_deep, url_shorten, utf8_uri_encode, wpautop, wptexturize, wp_filter_kses, wp_filter_post_kses, wp_filter_nohtml_kses, wp_iso_descrambler, wp_kses, wp_kses_array_lc, wp_kses_attr, wp_kses_bad_protocol, wp_kses_bad_protocol_once, wp_kses_bad_protocol_once2, wp_kses_check_attr_val, wp_kses_decode_entities, wp_kses_hair,wp_kses_hook, wwp_kses_html_error, wp_kses_js_entities, wp_kses_no_null, wp_kses_normalize_entities, wp_kses_normalize_entities2, wp_kses_split, wp_kses_split2, wp_kses_stripslashes, wp_kses_version, wp_make_link_relative, wp_normalize_path, wp_rel_nofollow, wp_richedit_pre, wp_specialchars, wp_trim_words, zeroise
- **form** - checked, disabled, selected, submit_button, get_submit_button
- **http** - wp_remote_get, wp_remote_retrieve_body, wp_get_http_headers,wp_remote_fopen
- **http_header** - nocache_headers, status_header, cache_javascript_headers
- **json** - wp_send_json, wp_send_json_error, wp_send_json_success
- **lang (Language)** - __, _x, _n, _nx, _e, _ex, \_\_ngettext, esc_attr\_\_, esc_attr_e, get_locale, load_default_textdomain, load_plugin_textdomain, load_muplugin_textdomain, load_textdomain, load_theme_textdomain, is_rtl, wp_get_installed_translations, language_attributes, locale_stylesheet, get_locale_stylesheet_uri
- **mail** - wp_mail, wp_new_user_notification, wp_password_change_notification, wp_notify_moderator, wp_notify_postauthor
- **media** - get_attached_file, image_resize, is_attachment, is_local_attachment, set_post_thumbnail, update_attached_file, wp_attachment_is_image, wp_create_thumbnail, wp_insert_attachment, wp_delete_attachment, wp_get_attachment_image, wp_get_attachment_link, wp_get_attachment_image_src, wp_get_attachment_metadata, wp_get_attachment_thumb_file, wp_get_attachment_thumb_url, wp_get_attachment_url, wp_check_for_changed_slugs, wp_get_mime_types, wp_mime_type_icon, wp_generate_attachment_metadata, wp_prepare_attachment_for_js, wp_update_attachment_metadata
- **meta** - add_post_meta, delete_post_meta, get_post_custom, get_post_custom_keys, get_post_custom_values, get_post_meta, update_post_meta, register_meta
- **misc** - bool_from_yn, capital_P_dangit, do_robots, make_url_footnote, wp, wp_die, wp_install_defaults, wp_list_pluck, wp_text_diff
- **multisite** - confirm_delete_users, is_user_member_of_blog, wp_dashboard_quota, avoid_blog_page_permalink_collision, check_import_new_users, check_upload_size, choose_primary_blog, display_space_usage, fix_import_form_size, format_code_lang, get_site_allowed_themes, grant_super_admin, ms_deprecated_blogs_file, mu_dropdown_languages, new_user_email_admin_notice, refresh_user_details, revoke_super_admin, send_confirmation_on_profile_email, site_admin_notice, sync_category_tag_slugs, update_option_new_admin_email, update_user_status, upload_space_setting, wpmu_delete_blog, wpmu_delete_user, wpmu_get_blog_allowedthemes, add_blog_option, delete_blog_option, get_blogaddress_by_domain, get_blogaddress_by_id, get_blogaddress_by_name, get_blog_details, get_blog_option, get_blog_status, get_id_from_blogname, get_last_updated, is_archived, refresh_blog_details, restore_current_blog, switch_to_blog, update_archived, update_blog_details, update_blog_option, update_blog_status, wpmu_update_blogs_date, ms_cookie_constants, ms_file_constants, ms_subdomain_constants, ms_upload_constants, add_existing_user_to_blog, add_new_user_to_blog, add_user_to_blog, check_upload_mimes, create_empty_blog, domain_exists, filter_SSL, fix_phpmailer_messageid, force_ssl_content, get_active_blog_for_user, get_admin_users_for_domain, get_blogs_of_user, get_blog_count, get_blog_id_from_url, get_blog_permalink, get_blog_post, get_current_site, get_dashboard_blog, get_dirsize, get_most_recent_post_of_user, get_sitestats, get_space_allowed, get_space_used, get_upload_space_available, get_user_count, get_user_id_from_string, global_terms, insert_blog, install_blog, install_blog_defaults, is_blog_user, is_email_address_unsafe, is_upload_space_available, is_user_option_local, is_user_spammy, maybe_add_existing_user_to_blog, maybe_redirect_404, newblog_notify_siteadmin, newuser_notify_siteadmin, recurse_dirsize, redirect_this_site, remove_user_from_blog, signup_nonce_check, signup_nonce_fields, update_blog_public, update_posts_count, upload_is_file_too_big, upload_is_user_over_quota, upload_size_limit_filter, users_can_register_signup_filter, welcome_user_msg_filter, wp_get_sites, wpmu_activate_signup, wpmu_admin_redirect_add_updated_param, wpmu_create_blog, wpmu_create_user, wpmu_log_new_registrations, wpmu_signup_blog, wpmu_signup_blog_notification, wpmu_signup_user, wpmu_signup_user_notification, wpmu_validate_blog_signup, wpmu_validate_user_signup, wpmu_welcome_notification, wpmu_welcome_user_notification, get_current_site_name, is_subdomain_install, ms_not_installed, ms_site_check, wpmu_current_site
- **nav** - unregister_nav_menu, register_nav_menu, register_nav_menus, get_registered_nav_menus, wp_create_nav_menu, wp_get_nav_menu_items, wp_nav_menu, has_nav_menu, wp_page_menu
- **option** - add_option, add_site_option, delete_option, delete_site_option, form_option, get_alloptions, get_site_option, get_site_url, get_admin_url, get_user_option, get_option, update_option, update_site_option, update_user_option, wp_load_alloptions
- **page** - get_all_page_ids, get_ancestors, get_page, get_page_link, get_page_by_path, get_page_by_title, get_page_children, get_page_hierarchy, get_page_uri, get_pages, is_page, wp_link_pages, wp_list_pages, wp_page_menu, wp_dropdown_pages
- **ping** - add_ping, pingback, privacy_ping_filter, discover_pingback_server_uri, do_all_pings, generic_ping, get_pung, get_to_ping, weblog_ping, pings_open
- **plugin** - plugin_basename, plugins_url, get_plugin_data, get_admin_page_title, plugin_dir_path, register_activation_hook, register_deactivation_hook, menu_page_url, is_plugin_active, is_plugin_active_for_network, is_plugin_inactive, is_plugin_page, add_contextual_help, get_plugins, plugin_dir_url
- **post** - get_boundary_post, get_children, get_extended, get_next_post, get_next_posts_link, next_posts_link, get_permalink, the_permalink, get_the_excerpt, the_excerpt, get_the_post_thumbnail, get_post, get_post_field, get_post_ancestors, get_post_mime_type, get_post_status, get_post_format, set_post_format, get_edit_post_link, get_delete_post_link, get_previous_post, get_previous_posts_link, previous_posts_link, get_posts, have_posts, get_the_ID, the_ID, the_post, wp_get_recent_posts, wp_get_single_post, has_post_thumbnail, has_excerpt, has_post_format, register_post_status, wp_delete_post, wp_insert_post, wp_publish_post, wp_trash_post, wp_update_post, get_the_author, the_author, get_the_author_posts, get_the_content, the_content, get_the_title, the_title, the_title_attribute, wp_trim_excerpt, wp_get_post_revision, wp_get_post_revisions, wp_is_post_revision, paginate_links, get_post_stati, get_post_statuses, post_class, count_user_posts, count_many_users_posts, get_usernumposts
- **query** - add_query_arg, get_query_var, query_posts, remove_query_arg, rewind_posts, setup_postdata, wp_parse_args, wp_reset_postdata, wp_reset_query, get_num_queries
- **redirect** - wp_redirect, wp_safe_redirect
- **security** - check_admin_referer, check_ajax_referer, wp_create_nonce, wp_explain_nonce, wp_get_original_referer, wp_get_referer, wp_nonce_ays, wp_nonce_field, wp_nonce_url, wp_original_referer_field, wp_referer_field, wp_verify_nonce, wp_salt, wp_hash
- **serialization** - is_serialized, is_serialized_string, maybe_serialize, maybe_unserialize
- **setting** - register_setting, unregister_setting, settings_fields, do_settings_fields, do_settings_sections, add_settings_field, add_settings_section, add_settings_error, get_settings_errors, settings_errors
- **shortcode** - add_shortcode, do_shortcode, do_shortcode_tag, get_shortcode_regex, remove_shortcode, remove_all_shortcodes, shortcode_atts, shortcode_parse_atts, strip_shortcodes
- **sidebar** - get_sidebar, dynamic_sidebar, is_active_sidebar, is_dynamic_sidebar, register_sidebar, register_sidebars, unregister_sidebar
- **sql** - get_tax_sql, get_meta_sql, get_posts_by_author_sql
- **tag** - get_tag, get_tag_link, get_tags, get_the_tag_list, get_the_tags, has_tag, is_tag, the_tags, single_tag_title, tag_description, wp_generate_tag_cloud, wp_tag_cloud
- **tax (Taxonomy)** - get_object_taxonomies, get_edit_term_link, get_taxonomy, get_taxonomies, get_term, get_the_term_list, get_term_by, the_terms, get_the_terms, get_term_children, get_term_link, get_terms, is_taxonomy, is_tax, is_taxonomy_hierarchical, is_term, taxonomy_exists, term_exists, register_taxonomy, register_taxonomy_for_object_type, wp_get_object_terms, wp_remove_object_terms, wp_set_object_terms, wp_insert_term, wp_update_term, wp_delete_term, wp_terms_checklist
- **template** - comments_template, get_footer, get_header, get_sidebar, get_search_form, add_custom_background, add_custom_image_header, add_image_size, add_image_size, body_class, dynamic_sidebar, get_404_template, get_archive_template, get_attachment_template, get_author_template, get_body_class, get_category_template, get_comments_popup_template, get_date_template, get_header_image, get_header_textcolor, get_home_template, get_page_template, get_paged_template, get_post_class, get_query_template, get_search_template, get_single_template, get_tag_template, get_taxonomy_template, get_template, get_template_directory, get_template_directory_uri, get_template_part, has_header_image, header_image, header_textcolor, in_the_loop, is_child_theme, language_attributes, load_template, locate_template, post_class, wp_get_archives, wp_title, comments_open, has_tag, pings_open, get_bloginfo, wp_footer, wp_head
- **term** - wp_get_post_categories, wp_set_post_categories, wp_get_post_tags, wp_set_post_tags, wp_get_post_terms, wp_set_post_terms, wp_count_terms, has_term, is_object_in_term
- **theme** - add_theme_support, current_theme_supports, get_current_theme, get_theme, wp_get_themes, get_theme_data, get_theme_support, get_theme_mod, get_theme_mods, get_theme_root, get_theme_roots, get_theme_root_uri, get_themes, preview_theme, preview_theme_ob_filter, preview_theme_ob_filter_callback, register_theme_directory, remove_theme_mod, remove_theme_mods, remove_theme_support, require_if_theme_supports, search_theme_directories, set_theme_mod, switch_theme, validate_current_theme, wp_get_theme, wp_clean_themes_cache
- **traceback** - is_trackback, trackback, trackback_url, trackback_url_list, do_trackbacks
- **transient** - set_transient, get_transient, delete_transient, set_site_transient, get_site_transient, delete_site_transient
- **url** - add_rewrite_rule, admin_url, content_url, flush_rewrite_rules, home_url, includes_url, network_admin_url, network_home_url, network_site_url, plugin_dir_url, site_url
- **user** - auth_redirect, count_users, count_user_posts, count_many_users_posts, email_exists, get_currentuserinfo, get_current_user_id, get_profile, get_user_by, get_userdata, get_usernumposts, get_users, set_current_user, user_pass_ok, wp_authenticate, username_exists, validate_username, wp_dropdown_users, wp_get_current_user, wp_set_current_user, wp_set_password, get_author_posts_url, get_the_modified_author, is_multi_author, add_user_meta, delete_user_meta, get_user_meta, update_user_meta, get_the_author_meta, wp_create_user, wp_delete_user, wp_insert_user, wp_update_user, is_user_logged_in, wp_login_form, wp_signon, wp_logout, wp_loginout, wp_logout_url
- **widget** - is_active_widget, register_widget, the_widget, unregister_widget, wp_add_dashboard_widget, wp_convert_widget_settings, wp_get_sidebars_widgets, wp_get_widget_defaults, wp_register_sidebar_widget, wp_register_widget_control, wp_set_sidebars_widgets, wp_unregister_sidebar_widget, wp_unregister_widget_control, wp_widget_description
- **xmlrpc** - xmlrpc_getpostcategory, xmlrpc_getposttitle, xmlrpc_removepostdata