<?php

/*
 * Author: KhangLe
 * 
 * 
 */

include_once (dirname(__FILE__) . '/MyFunctions.php');
include_once (dirname(__FILE__) . '/MySettings.php');
include_once (dirname(__FILE__) . '/MyTheme_Customize.php');
include_once (dirname(__FILE__) . '/MyTheme_Customize_Profile.php');
include_once (dirname(__FILE__) . '/MyTheme_Customize_Contact.php');
include_once (dirname(__FILE__) . '/MyTheme_Customize_Contact_Job.php');
include_once (dirname(__FILE__) . '/MyTheme_Customize_Service_Detail.php');
include_once (dirname(__FILE__) . '/MyTheme_Customize_Service_Feature.php');
include_once (dirname(__FILE__) . '/MyTheme_Customize_Benefit.php');
include_once(dirname(__FILE__) . '/cpt_acf_definitions.php');

/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
add_action('init', 'myStartSession', 1);

// init session id
function myStartSession() {
    if (!session_id()) {
        session_start();
    }
}

add_action('wp_print_scripts', 'scripts');

function scripts() {
    if (is_page('contact')) {
        wp_enqueue_script('js-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array(), '1.14.0', TRUE);
    }

    if (is_page('service-feature')) {
        wp_enqueue_script('js-business', get_template_directory_uri() . '/js/business.scripts.js', array(), '1.0.0', TRUE);
    }
}

/* ------------------------------------------------------------ theme support */
global $theme_options;
$theme_options = get_option('my_theme_option');

add_action('wp_footer', 'add_custom_script');

function add_custom_script() {

    global $theme_options;
    $script = '';

    //Google Analytics
    if (isset($theme_options['ct_google_analytics'])) {
        $script .= $theme_options['ct_google_analytics'];
    }

    if (isset($theme_options['ct_google_tag_manager'])) {
        $script .= $theme_options['ct_google_tag_manager'];
    }

    // Social Network
    if (isset($theme_options['ct_facebook_script'])) {
        $script .= $theme_options['ct_facebook_script'];
    }

    if (isset($theme_options['ct_google_plus_script'])) {
        $script .= $theme_options['ct_google_plus_script'];
    }

    if (isset($theme_options['ct_twitter_script'])) {
        $script .= $theme_options['ct_twitter_script'];
    }

    // Custom Script
    if (isset($theme_options['ct_use_script']) && $theme_options['ct_use_script']) {
        if (isset($theme_options['ct_custom_script'])) {
            $script .= $theme_options['ct_custom_script'];
        }
    }

    echo $script;
}

add_action('wp_head', 'add_custom_css');

function add_custom_css() {
    global $theme_options;
    $css = '<style id="custom-css">';

    if (isset($theme_options['ct_use_css']) && $theme_options['ct_use_css']) {
        $css .= $theme_options['ct_custom_css'];
    }

    $css .= '</style>';

    echo $css;
}
