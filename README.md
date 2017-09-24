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

The 900+ core WordPress functions have been grouped into over 50 namespaces.   
For instance the functions **has_action**, **add_action**, **do_action** are all grouped into the namespace **action**.  

For example, consider the WordPress function **add_action** which is used to hook into the internal functionality of WordPress.  
In ObjectPress it is found in the class **Sympresso\ObjectPress\Extension\ActionFunctions**

Instead of calling add_action() directly...

    add_action('save_post',function($postId,$post){
        // Business logic on action save_post goes here
    });

You can call the add_action() method under the action() namespace using ObjectPress...

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

Notice, ObjectPress is just a simple facade.      
The functional signatures in ObjectPress are identical to the equivalent WordPress functions.   
When you call a method on ObjectPress, it in turn calls the equivalent WordPress function.   
The key difference is that you don't have to call global functions in your code (which will improve testability.)