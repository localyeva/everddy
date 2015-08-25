<?php
/*
 * Author: KhangLe
 * 
 * 
 */

function contact2_theme_customize_register($wp_customize) {
    $wp_customize->add_section('contact_job', array(
        'title' => __('CONTACT JOB PAGE'),
        'priority' => 26,
    ));
    $wp_customize->add_setting('contact_job_top_image', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_job_top_image_c', array(
        'label' => __('Contact Job Top Image'),
        'section' => 'contact_job',
        'settings' => 'contact_job_top_image',
        'priority' => 1,
    )));

    $wp_customize->add_setting('contact_job_top_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('contact_job_top_text_c', array(
        'label' => __('Contact Job Top Text'),
        'section' => 'contact_job',
        'settings' => 'contact_job_top_text',
        'priority' => 1,
        'type' => 'textarea',
    ));
}

add_action('customize_register', 'contact2_theme_customize_register');

//css generate
function contact_job_generate_css() {
    ?>
    <style>        
        .contact2-head-img{
            background: url("<?php echo get_contact_job_top_image() ?>") no-repeat scroll center center / 100% auto;
        }
    </style>
    <?php
}

add_action('wp_head', 'contact_job_generate_css');

function get_contact_job_top_image() {
    return esc_url(get_theme_mod('contact_job_top_image'));
}

function get_contact_job_top_text() {

    return convert_newline(get_theme_mod('contact_job_top_text'), '', '<br/>');
}