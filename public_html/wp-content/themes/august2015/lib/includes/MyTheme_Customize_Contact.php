<?php
/*
 * Author: KhangLe
 * 
 * 
 */

function contact1_theme_customize_register($wp_customize) {
    $wp_customize->add_section('contact_page', array(
        'title' => __('CONTACT PAGE'),
        'priority' => 26,
    ));
    $wp_customize->add_setting('contact_top_image', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_top_image_c', array(
        'label' => __('Contact Top Image'),
        'section' => 'contact_page',
        'settings' => 'contact_top_image',
        'priority' => 1,
    )));

    $wp_customize->add_setting('contact_top_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('contact_top_text_c', array(
        'label' => __('Contact Top Text'),
        'section' => 'contact_page',
        'settings' => 'contact_top_text',
        'priority' => 1,
        'type' => 'text',
    ));
    
    /*
    $wp_customize->add_setting('contact_head_title', array(
        'default' => '',
    ));
    $wp_customize->add_control('contact_head_title_c', array(
        'label' => __('Contact Content Title'),
        'section' => 'contact',
        'settings' => 'contact_head_title',
        'priority' => 1,
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('contact_head_content', array(
        'default' => '',
    ));
    $wp_customize->add_control('contact_head_content_c', array(
        'label' => __('Contact Head Content'),
        'section' => 'contact',
        'settings' => 'contact_head_content',
        'priority' => 1,
        'type' => 'textarea',
    ));
    
    $wp_customize->add_setting('contact_main_content', array(
        'default' => '',
    ));
    $wp_customize->add_control('contact_main_content_c', array(
        'label' => __('Contact Main Content'),
        'section' => 'contact',
        'settings' => 'contact_main_content',
        'priority' => 1,
        'type' => 'textarea',
    ));
    
    $wp_customize->add_setting('contact_foot_content', array(
        'default' => '',
    ));
    $wp_customize->add_control('contact_foot_content_c', array(
        'label' => __('Contact Foot Content'),
        'section' => 'contact',
        'settings' => 'contact_foot_content',
        'priority' => 1,
        'type' => 'textarea',
    ));     
     */
}

add_action('customize_register', 'contact1_theme_customize_register');

//css generate
function contact_generate_css() {
    ?>
    <style>        
        .contact1-head-img{
            background: url("<?php echo get_contact_top_image() ?>") no-repeat scroll center center / 100% auto;
        }
    </style>
    <?php
}

add_action('wp_head', 'contact_generate_css');


function get_contact_top_image() {
    return esc_url(get_theme_mod('contact_top_image'));
}
function get_contact_top_text() {
    return get_theme_mod('contact_top_text');
}
function get_contact_head_title() {
    return get_theme_mod('contact_head_title');
}
function get_contact_head_content() {
    return get_theme_mod('contact_head_content');
}
function get_contact_main_content() {
    return get_theme_mod('contact_main_content');
}
function get_contact_foot_content() {
    return get_theme_mod('contact_foot_content');
}
