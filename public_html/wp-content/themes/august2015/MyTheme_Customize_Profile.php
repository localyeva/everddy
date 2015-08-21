<?php
/*
 * Author: KhangLe
 * 
 * 
 */

function profile_theme_customize_register($wp_customize) {
    $wp_customize->add_section('profile', array(
        'title' => __('PROFILE PAGE'),
        'priority' => 26,
    ));
    $wp_customize->add_setting('profile_top_image', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'profile_top_image_c', array(
        'label' => __('Profile Top Image'),
        'section' => 'profile',
        'settings' => 'profile_top_image',
        'priority' => 1,
    )));

    $wp_customize->add_setting('profile_top_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('profile_top_text_c', array(
        'label' => __('Profile Top Text'),
        'section' => 'profile',
        'settings' => 'profile_top_text',
        'priority' => 1,
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('profile_button_status', array(
        'default' => '',
    ));
    $wp_customize->add_control('profile_button_status_c', array(
        'label' => __('Show / Hide buttons'),
        'section' => 'profile',
        'settings' => 'profile_button_status',
        'priority' => 1,
        'type' => 'checkbox',
    ));
}

add_action('customize_register', 'profile_theme_customize_register');

//css generate
function profile_generate_css() {
    ?>
    <style>        
        .profile-head-img{
            background: url("<?php echo get_profile_top_image() ?>") no-repeat scroll center center / 100% auto;
        }
    </style>
    <?php
}

add_action('wp_head', 'profile_generate_css');


/* PROFILE */

function get_profile_top_image() {
    return esc_url(get_theme_mod('profile_top_image'));
}
function get_profile_top_text() {
    return get_theme_mod('profile_top_text');
}
function get_profile_button_status() {
    return get_theme_mod('profile_button_status');
}
