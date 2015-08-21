<?php

/*
 * This file is custom post type, custom taxonomy and custom fields
 * definition file.
 * 
 * Exported from CPT UI & Advanced Custom Fields
 */

/* ---------------------------------------------------------------------------- */
/* post type definitions */
/* ---------------------------------------------------------------------------- */
add_action('init', 'cptui_register_my_cpts');

function cptui_register_my_cpts() {

    $labels = array(
        "name" => "Service",
        "singular_name" => "Service",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => true,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "service", "with_front" => true),
        "query_var" => true,
        "menu_position" => 26,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h1.png',
        "supports" => array("title"),
    );
    register_post_type("service", $args);

    $labels = array(
        "name" => "Service Detail",
        "singular_name" => "Service Detail",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "service-detail", "with_front" => true),
        "query_var" => true,
        "menu_position" => 27,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h2.png',
        "supports" => array("title"),
    );
    register_post_type("service-detail", $args);


    $labels = array(
        "name" => "Service Feature",
        "singular_name" => "Service Feature",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "service-feature", "with_front" => true),
        "query_var" => true,
        "menu_position" => 28,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h3.png',
        "supports" => array("title", "editor"),
    );
    register_post_type("service-feature", $args);

// End of cptui_register_my_cpts()
}

/* ---------------------------------------------------------------------------- */
/* taxonomy definitions */
/* ---------------------------------------------------------------------------- */

/* ---------------------------------------------------------------------------- */
/* custom fields definitions */
/* ---------------------------------------------------------------------------- */
if (function_exists("register_field_group")) {
    register_field_group(array(
        'id' => 'acf_service',
        'title' => 'Service',
        'fields' => array(
            array(
                'key' => 'field_55d14add95e69',
                'label' => 'Short Description',
                'name' => 'short_description',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_55cb01740b031',
                'label' => 'image',
                'name' => 'image',
                'type' => 'image',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_55d6e3373ea6f',
                'label' => 'Redirect Url',
                'name' => 'redirect_url',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'service',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_service-detail',
        'title' => 'Service Detail',
        'fields' => array(
            array(
                'key' => 'field_55d6e2d2807e4',
                'label' => 'Image Number',
                'name' => 'image_number',
                'type' => 'image',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_55d6e2f7807e5',
                'label' => 'Content',
                'name' => 'content',
                'type' => 'wysiwyg',
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'service-detail',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_service-feature',
        'title' => 'Service Feature',
        'fields' => array(
            array(
                'key' => 'field_55cd925987c9e',
                'label' => 'Icon',
                'name' => 'icon',
                'type' => 'image',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_55cd926987c9f',
                'label' => 'Features',
                'name' => 'features',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_55cd92ae87ca0',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'wysiwyg',
                        'column_width' => '',
                        'default_value' => '',
                        'toolbar' => 'basic',
                        'media_upload' => 'no',
                    ),
                    array(
                        'key' => 'field_55cd92e487ca1',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'wysiwyg',
                        'column_width' => '',
                        'default_value' => '',
                        'toolbar' => 'basic',
                        'media_upload' => 'no',
                    ),
                ),
                'row_min' => '',
                'row_limit' => '',
                'layout' => 'table',
                'button_label' => 'Add Row',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'service-feature',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));
}
