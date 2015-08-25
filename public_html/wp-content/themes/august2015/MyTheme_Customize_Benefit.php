<?php
/*
 * Author: KhangLe
 * 
 * 
 */

function benefit_theme_customize_register($wp_customize) {
    $wp_customize->add_section('benefit', array(
        'title' => __('BENEFIT PAGE'),
        'priority' => 26,
    ));
    $wp_customize->add_setting('benefit_top_image', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'benefit_top_image_c', array(
        'label' => __('Benefit Top Image'),
        'section' => 'benefit',
        'settings' => 'benefit_top_image',
        'priority' => 1,
    )));

    $wp_customize->add_setting('benefit_top_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('benefit_top_text_c', array(
        'label' => __('Benefit Top Text'),
        'section' => 'benefit',
        'settings' => 'benefit_top_text',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('benefit_top_desc', array(
        'default' => '',
    ));
    $wp_customize->add_control('benefit_top_desc_c', array(
        'label' => __('Benefit Top Description'),
        'section' => 'benefit',
        'settings' => 'benefit_top_desc',
        'priority' => 1,
        'type' => 'textarea',
    ));
}

add_action('customize_register', 'benefit_theme_customize_register');

//css generate
function benefit_generate_css() {
    ?>
    <style>        
        .benefit-head-img{
            background: url("<?php echo get_benefit_top_image() ?>") no-repeat scroll center center / 100% auto;
        }
    </style>
    <?php
}

add_action('wp_head', 'benefit_generate_css');

function get_benefit_top_image() {
    return esc_url(get_theme_mod('benefit_top_image'));
}
function get_benefit_top_text() {

    return get_theme_mod('benefit_top_text');
}
function get_benefit_top_description() {

    return convert_newline(get_theme_mod('benefit_top_desc'), '', '<br/>');
}
