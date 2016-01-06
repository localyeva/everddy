<?php
/*
 * Author: KhangLe
 * 
 * 
 */

function service_detail_theme_customize_register($wp_customize) {
    $wp_customize->add_section('service_detail', array(
        'title' => __('SERVICE DETAIL PAGE'),
        'priority' => 26,
    ));
    $wp_customize->add_setting('service_detail_top_image', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_detail_top_image_c', array(
        'label' => __('Service Detail Top Image'),
        'section' => 'service_detail',
        'settings' => 'service_detail_top_image',
        'priority' => 1,
    )));

    $wp_customize->add_setting('service_detail_top_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('service_detail_top_text_c', array(
        'label' => __('Service Detail Top Text'),
        'section' => 'service_detail',
        'settings' => 'service_detail_top_text',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('service_detail_top_desc', array(
        'default' => '',
    ));
    $wp_customize->add_control('service_detail_top_desc_c', array(
        'label' => __('Service Detail Top Description'),
        'section' => 'service_detail',
        'settings' => 'service_detail_top_desc',
        'priority' => 1,
        'type' => 'textarea',
    ));
}

add_action('customize_register', 'service_detail_theme_customize_register');

//css generate
function service_detail_generate_css() {
    ?>
    <style>        
        .detail-head-img{
            background: url("<?php echo get_service_detail_top_image() ?>") no-repeat scroll center center / 100% auto;
        }
    </style>
    <?php
}

add_action('wp_head', 'service_detail_generate_css');

function get_service_detail_top_image() {
    return esc_url(get_theme_mod('service_detail_top_image'));
}
function get_service_detail_top_text() {

    return get_theme_mod('service_detail_top_text');
}
function get_service_detail_top_description() {

    return convert_newline(get_theme_mod('service_detail_top_desc'), '', '<br/>');
}
