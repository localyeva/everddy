<?php
/*
 * Author: KhangLe
 * 
 * 
 */

function contact1_theme_customize_register($wp_customize) {
    $wp_customize->add_section('contact_1', array(
        'title' => __('CONTACT_1 PAGE'),
        'priority' => 26,
    ));
    $wp_customize->add_setting('contact_1_top_image', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_1_top_image_c', array(
        'label' => __('Contact_1 Top Image'),
        'section' => 'contact_1',
        'settings' => 'contact_1_top_image',
        'priority' => 1,
    )));

    $wp_customize->add_setting('contact_1_top_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('contact_1_top_text_c', array(
        'label' => __('Contact_1 Top Text'),
        'section' => 'contact_1',
        'settings' => 'contact_1_top_text',
        'priority' => 1,
        'type' => 'text',
    ));
    
    /*
    $wp_customize->add_setting('contact_1_head_title', array(
        'default' => '',
    ));
    $wp_customize->add_control('contact_1_head_title_c', array(
        'label' => __('Contact_1 Content Title'),
        'section' => 'contact_1',
        'settings' => 'contact_1_head_title',
        'priority' => 1,
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('contact_1_head_content', array(
        'default' => '',
    ));
    $wp_customize->add_control('contact_1_head_content_c', array(
        'label' => __('Contact_1 Head Content'),
        'section' => 'contact_1',
        'settings' => 'contact_1_head_content',
        'priority' => 1,
        'type' => 'textarea',
    ));
    
    $wp_customize->add_setting('contact_1_main_content', array(
        'default' => '',
    ));
    $wp_customize->add_control('contact_1_main_content_c', array(
        'label' => __('Contact_1 Main Content'),
        'section' => 'contact_1',
        'settings' => 'contact_1_main_content',
        'priority' => 1,
        'type' => 'textarea',
    ));
    
    $wp_customize->add_setting('contact_1_foot_content', array(
        'default' => '',
    ));
    $wp_customize->add_control('contact_1_foot_content_c', array(
        'label' => __('Contact_1 Foot Content'),
        'section' => 'contact_1',
        'settings' => 'contact_1_foot_content',
        'priority' => 1,
        'type' => 'textarea',
    ));     
     */
}

add_action('customize_register', 'contact1_theme_customize_register');

//css generate
function contact_1_generate_css() {
    ?>
    <style>        
        .contact1-head-img{
            background: url("<?php echo get_contact_1_top_image() ?>") no-repeat scroll center center / 100% auto;
        }
    </style>
    <?php
}

add_action('wp_head', 'contact_1_generate_css');


function get_contact_1_top_image() {
    return esc_url(get_theme_mod('contact_1_top_image'));
}
function get_contact_1_top_text() {
    return get_theme_mod('contact_1_top_text');
}
function get_contact_1_head_title() {
    return get_theme_mod('contact_1_head_title');
}
function get_contact_1_head_content() {
    return get_theme_mod('contact_1_head_content');
}
function get_contact_1_main_content() {
    return get_theme_mod('contact_1_main_content');
}
function get_contact_1_foot_content() {
    return get_theme_mod('contact_1_foot_content');
}
