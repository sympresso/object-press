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
Each of these classes are exposed as a public property of the Sympresso\ObjectPress\Wordpress object.
For instance the functions **has_action**, **add_action**, **do_action** are all grouped under ActionFunctions the namespace **action**.

For example, consider the WordPress function **add_action** which is used to hook into the internal functionality of WordPress.  
In ObjectPress it is found under the namespace **action**

Instead of calling add_action() directly...

    add_action('save_post',function($postId,$post){
        // Business logic on action save_post goes here
    });

Using ObjectPress, you can call the add_action() method under the namespace **action** ...

    // Adding a WordPress action...
    $wp = new Sympresso\ObjectPress\WordPress();
    $wp->action->add_action('save_post',function($postId,$post){
        // Business logic on action save_post goes here
    });
   
You might be wondering, what is going on behind the scenes.   
The relevant code in this class for add_action() method is...

        namespace Sympresso\ObjectPress\Extension
        
        class ActionFunctions
        {

            /**
             * https://developer.wordpress.org/reference/functions/add_action/
             * @param $tag
             * @param $function_to_add
             * @param int $priority
             * @param int $accepted_args
             * @return true|void
             */
            public function add_action($tag, $function_to_add, $priority = 10, $accepted_args = 1)
            {
                return add_action($tag, $function_to_add, $priority, $accepted_args);
            }

        }

Notice: *ObjectPress is just a simple facade.*    

When you call a method on ObjectPress, it in turn calls the equivalent WordPress function.   
The key difference is that you don't have to call global functions in your code (which will improve testability.)

## Usage - WordPress Global Variables

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
- **lang (Language)** - __, _x, _n, _nx, _e, _ex, __ngettext, esc_attr__, esc_attr_e, get_locale, load_default_textdomain, load_plugin_textdomain, load_muplugin_textdomain, load_textdomain, load_theme_textdomain, is_rtl, wp_get_installed_translations, language_attributes, locale_stylesheet, get_locale_stylesheet_uri
- **mail** - wp_mail, wp_new_user_notification, wp_password_change_notification, wp_notify_moderator, wp_notify_postauthor
- **media** - get_attached_file, image_resize, is_attachment, is_local_attachment, set_post_thumbnail, update_attached_file, wp_attachment_is_image, wp_create_thumbnail, wp_insert_attachment, wp_delete_attachment, wp_get_attachment_image, wp_get_attachment_link, wp_get_attachment_image_src, wp_get_attachment_metadata, wp_get_attachment_thumb_file, wp_get_attachment_thumb_url, wp_get_attachment_url, wp_check_for_changed_slugs, wp_get_mime_types, wp_mime_type_icon, wp_generate_attachment_metadata, wp_prepare_attachment_for_js, wp_update_attachment_metadata
- meta
- misc
- multisite
- nav
- option
- page
- ping
- plugin
- post
- query
- redirect
- security
- serialization
- setting
- shortcode
- sidebar
- sql
- tag
- tax (Taxonomy)
- template
- term
- theme
- traceback
- transient
- url
- user
- widget
- xmlrpc