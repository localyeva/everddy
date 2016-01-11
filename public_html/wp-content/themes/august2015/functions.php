<?php
/*
 * Author: KhangLe
 * 
 * 
 */

include_once (dirname(__FILE__) . '/lib/includes/MyFunctions.php');
include_once (dirname(__FILE__) . '/lib/includes/MySettings.php');
include_once (dirname(__FILE__) . '/lib/includes/MyTheme_Customize.php');
include_once (dirname(__FILE__) . '/lib/includes/MyTheme_Customize_Profile.php');
include_once (dirname(__FILE__) . '/lib/includes/MyTheme_Customize_Contact.php');
include_once (dirname(__FILE__) . '/lib/includes/MyTheme_Customize_Contact_Job.php');
include_once (dirname(__FILE__) . '/lib/includes/MyTheme_Customize_Service_Detail.php');
include_once (dirname(__FILE__) . '/lib/includes/MyTheme_Customize_Service_Feature.php');
include_once (dirname(__FILE__) . '/lib/includes/MyTheme_Customize_Benefit.php');
include_once (dirname(__FILE__) . '/lib/includes/cpt_acf_definitions.php');

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

    echo stripslashes($script);
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

/* ---------------------------------------------------------------------Title */

function set_wp_title($title, $sep) {
    global $page, $paged;

    if (is_feed()) {
        return $title;
    }
    
    // Add the site name.
    $title .= get_bloginfo('name');

    if (is_front_page() || is_home()) {
        $title = "$title";
    } else {

        if (is_page()) {
            if (is_page('service-detail')) {
                $title = "サービス $title";
            }

            if (is_page('service-feature')) {
                $title = "ご利用メリット $title";
            }


            if (is_page('benefit')) {
                $title = "外国人採用メリット $title";
            }


            if (is_page('profile')) {
                $title = "会社概要 $title";
            }

            if (is_page('contact')) {
                $title = "お問い合わせはこちら $title";
            }

            if (is_page('contact-job')) {
                $title = "求職のご相談はこちら $title";
            }
        }
    }

    return $title;
}

add_filter('wp_title', 'set_wp_title', 10, 2);

/* -------------------------------------------------------------- Active Menu */
add_action('wp_head', 'set_active_menu', 10);

$active_menus = array();

function set_active_menu() {
    global $active_menus;

    $active_menus = array('home' => '', 'service-feature' => '', 'service-detail' => '', 'benefit' => '', 'profile' => '');
    if (is_front_page() || is_home()) {
        $active_menus['home'] = 'current_page_item';
    } else if (is_page('service-feature')) {
        $active_menus['service-feature'] = 'current_page_item';
    } else if (is_page('service-detail')) {
        $active_menus['service-detail'] = 'current_page_item';
    } else if (is_page('benefit')) {
        $active_menus['benefit'] = 'current_page_item';
    } else if (is_page('profile')) {
        $active_menus['profile'] = 'current_page_item';
    }
}

/* -------------------------------------------------------------------------- */

function my_login_logo() {
    ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/img/logo.png);
            width: 326px;
            height: 56px;
            background-size: auto;
        }
    </style>
    <?php
}

add_action('login_enqueue_scripts', 'my_login_logo');

function my_login_logo_url() {
    return home_url();
}

add_filter('login_headerurl', 'my_login_logo_url');

function my_login_logo_url_title() {
    return 'Power by Everddy Co.,Ltd.';
}

add_filter('login_headertitle', 'my_login_logo_url_title');

/* ----------------------------------------------------------------------- Menu */

function remove_menus_from_plugins() {

    remove_menu_page('edit.php?post_type=acf');     // ACF
    remove_menu_page('cptui_main_menu');          // CPT
}

// add_action('admin_init', 'remove_menus_from_plugins');

function remove_menus() {

    global $user_ID;

    $user = new WP_User($user_ID);
    $roles = $user->roles;
    $role = $roles[0];
    $arr_roles = array('administrator');

    if (in_array($role, $arr_roles)) {
    	remove_menu_page('edit.php?post_type=acf');     // ACF
        remove_menu_page('index.php');                  //Dashboard
        remove_menu_page('edit.php');                   //Posts
//        remove_menu_page('upload.php');                 //Media
        remove_menu_page('edit-comments.php');          //Comments
        remove_menu_page('plugins.php');                //Plugins
//        remove_menu_page('users.php');                  //Users
        remove_menu_page('tools.php');                  //Tools
        remove_menu_page('options-general.php');        //Settings
    } else {
        remove_menu_page('index.php');                  //Dashboard
        remove_menu_page('edit.php');                   //Posts
        remove_menu_page('upload.php');                 //Media
        remove_menu_page('edit.php?post_type=page');    //Pages
        remove_menu_page('edit-comments.php');          //Comments
        remove_menu_page('themes.php');                 //Appearance
        remove_menu_page('plugins.php');                //Plugins
        remove_menu_page('users.php');                  //Users
        remove_menu_page('tools.php');                  //Tools
        remove_menu_page('options-general.php');        //Settings
    }
}

//add_action('admin_menu', 'remove_menus');
