<?php
/*
 * Author: KhangLe
 * 
 * 
 */

function service_feature_theme_customize_register($wp_customize) {
    $wp_customize->add_section('service_feature', array(
        'title' => __('SERVICE FEATURE PAGE'),
        'priority' => 26,
    ));
    $wp_customize->add_setting('service_feature_top_image', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_feature_top_image_c', array(
        'label' => __('Service Feature Top Image'),
        'section' => 'service_feature',
        'settings' => 'service_feature_top_image',
        'priority' => 1,
    )));

    $wp_customize->add_setting('service_feature_top_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('service_feature_top_text_c', array(
        'label' => __('Service Feature Top Text'),
        'section' => 'service_feature',
        'settings' => 'service_feature_top_text',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('service_feature_top_desc', array(
        'default' => '',
    ));
    $wp_customize->add_control('service_feature_top_desc_c', array(
        'label' => __('Service Feature Top Description'),
        'section' => 'service_feature',
        'settings' => 'service_feature_top_desc',
        'priority' => 1,
        'type' => 'textarea',
    ));
}

add_action('customize_register', 'service_feature_theme_customize_register');

//css generate
function service_feature_generate_css() {
    ?>
    <style>        
        .merit-head-img{
            background: url("<?php echo get_service_feature_top_image() ?>") no-repeat scroll center center / 100% auto;
        }
    </style>
    <?php
}

add_action('wp_head', 'service_feature_generate_css');

function get_service_feature_top_image() {
    return esc_url(get_theme_mod('service_feature_top_image'));
}
function get_service_feature_top_text() {

    return get_theme_mod('service_feature_top_text');
}
function get_service_feature_top_description() {

    return convert_newline(get_theme_mod('service_feature_top_desc'), '', '<br/>');
}
