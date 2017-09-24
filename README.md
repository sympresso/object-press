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

### Usage

The 900+ core WordPress functions have been grouped into over 50 classes.   
For instance the functions **has_action**, **add_action**, **do_action** are all grouped into the group **action**.  

For example, consider the WordPress function **add_action** which is used to hook into the internal functionality of WordPress.  
In ObjectPress it is found in the class **Sympresso\ObjectPress\Extension\ActionFunctions**

Instead of calling add_action() directly...

    add_action('save_post',function($postId,$post){
        // Business logic on action save_post goes here
    });

You can call the add_action() method under the action() group using ObjectPress...

    // Adding a WordPress action...
    $wp = new Sympresso\ObjectPress\WordPress();
    $wp->action()->add_action('save_post',function($postId,$post){
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

The functional signatures in ObjectPress are identical to the equivalent WordPress functions.   
When you call a method on ObjectPress, it in turn calls the equivalent WordPress function.   
The key difference is that you don't have to call global functions in your code (which will improve testability.)

### ObjectPress Function Groups
- **action**- has_action, add_action, do_action, did_action, remove_action, remove_all_actions
- **admin** - add_menu_page, remove_menu_page, add_submenu_page, remove_submenu_page, add_object_page, add_utility_page, add_comments_page, add_dashboard_page, add_links_page, add_management_page, add_media_page, add_options_page, add_pages_page, add_plugins_page, add_posts_page, add_theme_page, add_users_page, add_meta_box, remove_meta_box, add_editor_style, wp_editor, wp_get_image_editor, post_submit_meta_box
- **asset** - wp_dequeue_script, wp_dequeue_style, wp_deregister_script, wp_deregister_style, wp_enqueue_script, wp_enqueue_style, wp_localize_script, wp_register_script, wp_register_style, wp_script_is, wp_style_is, wp_add_inline_style, get_locale_stylesheet_uri, get_stylesheet_uri, get_stylesheet, get_stylesheet_directory, get_stylesheet_directory_uri, locale_stylesheet
- **bookmark** - get_bookmark, get_bookmarks, wp_list_bookmarks
- **cache** - wp_cache_set, wp_cache_get, wp_cache_reset, clean_blog_cache
- **cat (Category)** - cat_is_ancestor_of, get_all_category_ids, get_ancestors, get_cat_ID, get_cat_name, get_categories, get_category, get_category_by_path, get_category_by_slug, get_the_category_by_ID, get_the_category_list, get_category_link, get_category_parents, get_the_category, single_cat_title, in_category, is_category, the_category, wp_category_checklist, wp_dropdown_categories, wp_list_categories, wp_create_category, wp_delete_category, wp_insert_category
- **comment** -  comment_link, get_comment_link, add_comment_meta, check_comment, comment_text, comment_form, comments_number, delete_comment_meta, get_approved_comments, get_avatar, get_comment, get_comment_text, get_comment_meta, get_comments, wp_list_comments, get_lastcommentmodified, have_comments, get_comment_author, update_comment_meta, wp_allow_comment, wp_count_comments, wp_delete_comment, wp_filter_comment, wp_get_comment_status, wp_get_current_commenter, wp_insert_comment, wp_new_comment, wp_set_comment_status, wp_throttle_comment_flood, wp_update_comment, wp_update_comment_count, wp_update_comment_count_now, comment_class, comment_ID, comment_author, comment_date, comment_time, get_comment_date, get_comment_time, paginate_comments_links, previous_comments_link, next_comments_link, get_comment_pages_count, comments_open
- cond (Conditional)
- cookie
- cron
- date_time
- embed
- enclosure
- feed
- file
- filter
- formatting
- form
- http
- http_header
- json
- lang (Language)
- mail
- media
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