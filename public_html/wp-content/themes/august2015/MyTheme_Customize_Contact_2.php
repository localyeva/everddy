<?php
/*
 * Author: KhangLe
 * 
 * 
 */

function contact2_theme_customize_register($wp_customize) {
    $wp_customize->add_section('contact_2', array(
        'title' => __('CONTACT 2 PAGE'),
        'priority' => 26,
    ));
    $wp_customize->add_setting('contact_2_top_image', array(
        'default' => ''
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_2_top_image_c', array(
        'label' => __('Contact_2 Top Image'),
        'section' => 'contact_2',
        'settings' => 'contact_2_top_image',
        'priority' => 1,
    )));

    $wp_customize->add_setting('contact_2_top_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('contact_2_top_text_c', array(
        'label' => __('Contact_2 Top Text'),
        'section' => 'contact_2',
        'settings' => 'contact_2_top_text',
        'priority' => 1,
        'type' => 'textarea',
    ));

    /*
      $wp_customize->add_setting('contact_2_head_title', array(
      'default' => '',
      ));
      $wp_customize->add_control('contact_2_head_title_c', array(
      'label' => __('Contact_2 Content Title'),
      'section' => 'contact_2',
      'settings' => 'contact_2_head_title',
      'priority' => 1,
      'type' => 'text',
      ));

      $wp_customize->add_setting('contact_2_head_content', array(
      'default' => '',
      ));
      $wp_customize->add_control('contact_2_head_content_c', array(
      'label' => __('Contact_2 Head Content'),
      'section' => 'contact_2',
      'settings' => 'contact_2_head_content',
      'priority' => 1,
      'type' => 'textarea',
      ));

      $wp_customize->add_setting('contact_2_main_content', array(
      'default' => '',
      ));
      $wp_customize->add_control('contact_2_main_content_c', array(
      'label' => __('Contact_2 Main Content'),
      'section' => 'contact_2',
      'settings' => 'contact_2_main_content',
      'priority' => 1,
      'type' => 'textarea',
      ));

      $wp_customize->add_setting('contact_2_foot_content', array(
      'default' => '',
      ));
      $wp_customize->add_control('contact_2_foot_content_c', array(
      'label' => __('Contact_2 Foot Content'),
      'section' => 'contact_2',
      'settings' => 'contact_2_foot_content',
      'priority' => 1,
      'type' => 'textarea',
      ));
     */
}

add_action('customize_register', 'contact2_theme_customize_register');

//css generate
function contact_2_generate_css() {
    ?>
    <style>        
        .contact2-head-img{
            background: url("<?php echo get_contact_2_top_image() ?>") no-repeat scroll center center / 100% auto;
        }
    </style>
    <?php
}

add_action('wp_head', 'contact_2_generate_css');

function get_contact_2_top_image() {
    return esc_url(get_theme_mod('contact_2_top_image'));
}

function get_contact_2_top_text() {

    return convert_newline(get_theme_mod('contact_2_top_text'), '', '<br/>');
}

function get_contact_2_head_title() {
    return get_theme_mod('contact_2_head_title');
}

function get_contact_2_head_content() {
    return get_theme_mod('contact_2_head_content');
}

function get_contact_2_main_content() {
    return get_theme_mod('contact_2_main_content');
}

function get_contact_2_foot_content() {
    return get_theme_mod('contact_2_foot_content');
}
