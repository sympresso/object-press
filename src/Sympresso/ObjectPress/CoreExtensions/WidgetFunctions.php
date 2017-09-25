<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\Extension;

class WidgetFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'widget';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * @param bool $callback
     * @param bool $widget_id
     * @param bool $id_base
     * @param bool $skip_inactive
     * @return false|string
     * https://developer.wordpress.org/reference/functions/is_active_widget/
     */
    public function is_active_widget($callback = false, $widget_id = false, $id_base = false, $skip_inactive = true)
    {
        return is_active_widget($callback, $widget_id, $id_base, $skip_inactive);
    }

    /**
     * @param $widget_class
     * https://developer.wordpress.org/reference/functions/register_widget/
     */
    public function register_widget($widget_class)
    {
        return register_widget($widget_class);
    }

    /**
     * @param $widget
     * @param array $instance
     * @param array $args
     * https://developer.wordpress.org/reference/functions/the_widget/
     */
    public function the_widget($widget, $instance = array(), $args = array())
    {
        return the_widget($widget, $instance, $args);
    }

    /**
     * @param $widget_class
     * https://developer.wordpress.org/reference/functions/unregister_widget/
     */
    public function unregister_widget($widget_class)
    {
        return unregister_widget($widget_class);
    }

    /**
     * @param $widget_id
     * @param $widget_name
     * @param $callback
     * @param null $control_callback
     * @param null $callback_args
     * https://developer.wordpress.org/reference/functions/wp_add_dashboard_widget/
     */
    public function wp_add_dashboard_widget(
        $widget_id,
        $widget_name,
        $callback,
        $control_callback = null,
        $callback_args = null
    )
    {
        return wp_add_dashboard_widget($widget_id, $widget_name, $callback, $control_callback, $callback_args);
    }

    /**
     * @param $base_name
     * @param $option_name
     * @param $settings
     * @return array
     * https://developer.wordpress.org/reference/functions/wp_convert_widget_settings/
     */
    public function wp_convert_widget_settings($base_name, $option_name, $settings)
    {
        return wp_convert_widget_settings($base_name, $option_name, $settings);
    }

    /**
     * @param bool $deprecated
     * @return array
     * https://developer.wordpress.org/reference/functions/wp_get_sidebars_widgets/
     */
    public function wp_get_sidebars_widgets($deprecated = true)
    {
        return wp_get_sidebars_widgets($deprecated);
    }

    /**
     * @return array
     * https://developer.wordpress.org/reference/functions/wp_get_widget_defaults/
     */
    public function wp_get_widget_defaults()
    {
        return wp_get_widget_defaults();
    }

    /**
     * @param $id
     * @param $name
     * @param $output_callback
     * @param $options
     * https://developer.wordpress.org/reference/functions/wp_register_sidebar_widget/
     */
    public function wp_register_sidebar_widget($id, $name, $output_callback, $options)
    {
        return wp_register_sidebar_widget($id, $name, $output_callback, $options);
    }

    /**
     * @param $id
     * @param $name
     * @param $control_callback
     * @param array $options
     * https://developer.wordpress.org/reference/functions/wp_register_widget_control/
     */
    public function wp_register_widget_control($id, $name, $control_callback, $options = array())
    {
        return wp_register_widget_control($id, $name, $control_callback, $options);
    }

    /**
     * @param $sidebars_widgets
     * https://developer.wordpress.org/reference/functions/wp_set_sidebars_widgets/
     */
    public function wp_set_sidebars_widgets($sidebars_widgets)
    {
        return wp_set_sidebars_widgets($sidebars_widgets);
    }

    public function wp_unregister_sidebar_widget($id)
    {
        return wp_unregister_sidebar_widget($id);
    }

    /**
     * @param $id
     * https://developer.wordpress.org/reference/functions/wp_unregister_widget_control/
     */
    public function wp_unregister_widget_control($id)
    {
        return wp_unregister_widget_control($id);
    }

    /**
     * @param $id
     * @return string|void
     * https://developer.wordpress.org/reference/functions/wp_widget_description/
     */
    public function wp_widget_description($id)
    {
        return wp_widget_description($id);
    }
}