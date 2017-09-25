<?php

namespace Sympresso\ObjectPress\CoreExtensions;

use Sympresso\ObjectPress\Extension;

class FormFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'form';

    /**
     * @return string
     */
    public function getFunctionNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * https://developer.wordpress.org/reference/functions/checked/
     * @param $checked
     * @param bool $current
     * @param bool $echo
     * @return string
     */
    public function checked($checked, $current = true, $echo = true)
    {
        return checked($checked, $current, $echo);
    }

    /**
     * https://developer.wordpress.org/reference/functions/disabled/
     * @param $disabled
     * @param bool $current
     * @param bool $echo
     * @return string
     */
    public function disabled($disabled, $current = true, $echo = true)
    {
        return disabled($disabled, $current, $echo);
    }

    /**
     * https://developer.wordpress.org/reference/functions/selected/
     * @param $selected
     * @param bool $current
     * @param bool $echo
     * @return string
     */
    public function selected($selected, $current = true, $echo = true)
    {
        return selected($selected, $current, $echo);
    }

    /**
     * https://developer.wordpress.org/reference/functions/submit_button/
     * @param null $text
     * @param string $type
     * @param string $name
     * @param bool $wrap
     * @param null $other_attributes
     */
    public function submit_button(
        $text = null,
        $type = 'primary',
        $name = 'submit',
        $wrap = true,
        $other_attributes = null
    ) {
        return submit_button($text, $type, $name, $wrap, $other_attributes);
    }

    /**
     * https://developer.wordpress.org/reference/functions/get_submit_button/
     * @param string $text
     * @param string $type
     * @param string $name
     * @param bool $wrap
     * @param string $other_attributes
     * @return string
     */
    public function get_submit_button(
        $text = '',
        $type = 'primary large',
        $name = 'submit',
        $wrap = true,
        $other_attributes = ''
    ) {
        return get_submit_button($text, $type, $name, $wrap, $other_attributes);
    }
}