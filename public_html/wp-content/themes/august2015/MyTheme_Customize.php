<?php
/*
 * Author: KhangLe
 * 
 * 
 */

function theme_customize_register($wp_customize) {

    /* ADD SECTION */
    /* GENERAL */
    $wp_customize->add_section('general', array(
        'title' => __('GENERAL'),
        'priority' => 20,
    ));

    /* TOP */
    $wp_customize->add_section('top', array(
        'title' => __('TOP'),
        'priority' => 21,
    ));

    /* SERVICE */
    $wp_customize->add_section('service', array(
        'title' => __('SERVICE'),
        'priority' => 22,
    ));

    /* BENEFIT OF USING SERVICE */
    $wp_customize->add_section('benefit_service', array(
        'title' => __('BENEFIT OF USING SERVICE'),
        'priority' => 23,
    ));

    /* BENEFITS OF FOREIGN ADOPTION */
    $wp_customize->add_section('benefit_foreign', array(
        'title' => __('BENEFITS OF FOREIGN ADOPTION'),
        'priority' => 24,
    ));

    /* CONTACT */
    $wp_customize->add_section('contact', array(
        'title' => __('CONTACT'),
        'priority' => 25,
    ));

    /* ADD SETTING & CONTROL */
    /* TOP */
    $wp_customize->add_setting('top_image', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'top_image_c', array(
        'label' => __('Top Image'),
        'section' => 'top',
        'settings' => 'top_image',
        'priority' => 1,
    )));

    $wp_customize->add_setting('top_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('top_text_c', array(
        'label' => __('Top text'),
        'section' => 'top',
        'settings' => 'top_text',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('top_descript', array(
        'default' => '',
    ));
    $wp_customize->add_control('top_descript_c', array(
        'label' => __('Top Description'),
        'section' => 'top',
        'settings' => 'top_descript',
        'priority' => 1,
        'type' => 'textarea',
    ));

    /* GENERAL */
    $wp_customize->add_setting('site_logo', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'site_logo_c', array(
        'label' => __('Logo'),
        'section' => 'general',
        'settings' => 'site_logo',
        'priority' => 1,
    )));

    /* SERVICE */
    $wp_customize->add_setting('service_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('service_text_c', array(
        'label' => __('Service Text'),
        'section' => 'service',
        'settings' => 'service_text',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('service_descript', array(
        'default' => '',
    ));
    $wp_customize->add_control('service_descript_c', array(
        'label' => __('Service Description'),
        'section' => 'service',
        'settings' => 'service_descript',
        'priority' => 1,
        'type' => 'textarea',
    ));

    /* BENEFIT OF USING SERVICE */
    $wp_customize->add_setting('benefit_service_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('benefit_service_text_c', array(
        'label' => __('Benefit Service Text'),
        'section' => 'benefit_service',
        'settings' => 'benefit_service_text',
        'priority' => 1,
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('service_button_status', array(
        'default' => '',
    ));
    $wp_customize->add_control('service_button_status_c', array(
        'label' => __('Show / Hide Service button'),
        'section' => 'benefit_service',
        'settings' => 'service_button_status',
        'priority' => 1,
        'type' => 'checkbox',
    ));

//    $wp_customize->add_setting('benefit_service_image', array(
//        'default' => ''
//    ));
//    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'benefit_service_image_c', array(
//        'label' => __('Image'),
//        'section' => 'benefit_service',
//        'settings' => 'benefit_service_image',
//        'priority' => 1,
//    )));

    /* BENEFITS OF FOREIGN ADOPTION */
    $wp_customize->add_setting('benefit_foreign_image_bg', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'benefit_foreign_image_bg_c', array(
        'label' => __('Image BG'),
        'section' => 'benefit_foreign',
        'settings' => 'benefit_foreign_image_bg',
        'priority' => 1,
    )));

    $wp_customize->add_setting('benefit_foreign_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('benefit_foreign_text_c', array(
        'label' => __('Benefit Foreign Text'),
        'section' => 'benefit_foreign',
        'settings' => 'benefit_foreign_text',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('benefit_foreign_descript', array(
        'default' => '',
    ));
    $wp_customize->add_control('benefit_foreign_descript_c', array(
        'label' => __('Benefit Foreign Descript'),
        'section' => 'benefit_foreign',
        'settings' => 'benefit_foreign_descript',
        'priority' => 1,
        'type' => 'textarea',
    ));

    /* CONTACT */
    $wp_customize->add_setting('contact_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('contact_text_c', array(
        'label' => __('Contact Text'),
        'section' => 'contact',
        'settings' => 'contact_text',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('contact_descript', array(
        'default' => '',
    ));
    $wp_customize->add_control('contact_descript_c', array(
        'label' => __('Contact Descript'),
        'section' => 'contact',
        'settings' => 'contact_descript',
        'priority' => 1,
        'type' => 'textarea',
    ));
    
    $wp_customize->add_setting('contact_bottom_bg', array(
        'default' => '#E6E6E6',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'contact_bottom_bg_c', array(
        'label' => __('Contact Bottom BG'),
        'section' => 'contact',
        'settings' => 'contact_bottom_bg',
        'priority' => 1,
    )));
    
}

add_action('customize_register', 'theme_customize_register');

//css generate
function generate_css() {
    ?>
    <style>
        .head-img{
            background: url("<?php echo get_top_image() ?>") no-repeat scroll center center / 100% auto;
        }
        .foot-img{
            background: url("<?php echo get_benefit_foreign_image_bg() ?>") no-repeat scroll 50% 50% / cover;
        }
        .foot-contact{
            background: <?php echo get_contact_bottom_bg() ?> !important;
        }
    </style>
    <?php
}

add_action('wp_head', 'generate_css');

/* GENERAL */

function get_site_logo() {
    return esc_url(get_theme_mod('site_logo'));
}

/* TOP */

function get_top_image() {
    return esc_url(get_theme_mod('top_image'));
}

function get_top_text() {
    return get_theme_mod('top_text');
}

function get_top_descript() {
    $description = get_theme_mod('top_descript');
    //
    return convert_newline($description, '<h3>', '</h3>');
}

/* SERVICE */

function get_service_text() {
    return get_theme_mod('service_text');
}

function get_service_descript() {
    $description = get_theme_mod('service_descript');
    //
    return convert_newline($description, '<p class="blur-black">', '</p>');
}

/* BENEFIT OF USING SERVICE */

function get_benefit_service_text() {
    return get_theme_mod('benefit_service_text');
}
function get_service_button_status() {
    return get_theme_mod('service_button_status');
}
//function get_benefit_service_image() {
//    return esc_url(get_theme_mod('benefit_service_image'));
//}

/* BENEFITS OF FOREIGN ADOPTION */

function get_benefit_foreign_image_bg() {
    return esc_url(get_theme_mod('benefit_foreign_image_bg'));
}

function get_benefit_foreign_text() {
    return get_theme_mod('benefit_foreign_text');
}

function get_benefit_foreign_descript() {
    $description = get_theme_mod('benefit_foreign_descript');
    //
    return convert_newline($description, '<h3>', '</h3>');
    ;
}

/* CONTACT */

function get_contact_text() {
    return get_theme_mod('contact_text');
}

function get_contact_descript() {
    $description = get_theme_mod('contact_descript');
    //
    return convert_newline($description, '<p class="blur-black">', '</p>');
}

function get_contact_bottom_bg(){
    return get_theme_mod('contact_bottom_bg');
}