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
        "menu_name" => "[T] Our Services",
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
        "name" => "Service Merit",
        "singular_name" => "Service Merit",
        "menu_name" => "[T] Service Merit",
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
        "rewrite" => array("slug" => "service-merit", "with_front" => true),
        "query_var" => true,
        "menu_position" => 27,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h2.png',
        "supports" => array("title"),
    );
    register_post_type("service-merit", $args);

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
        "menu_position" => 28,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h3.png',
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
        "menu_position" => 29,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h4.png',
        "supports" => array("title"),
    );
    register_post_type("service-feature", $args);

    $labels = array(
        "name" => "Benefit",
        "singular_name" => "Benefit",
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
        "rewrite" => array("slug" => "benefit", "with_front" => true),
        "query_var" => true,
        "menu_position" => 30,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h5.png',
        "supports" => array("title"),
    );
    register_post_type("benefit", $args);

    $labels = array(
        "name" => "CEO Message",
        "singular_name" => "CEO Message",
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
        "rewrite" => array("slug" => "ceo-message", "with_front" => true),
        "query_var" => true,
        "menu_position" => 31,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h6.png',
        "supports" => array("title", "editor"),
    );
    register_post_type("ceo-message", $args);

    $labels = array(
        "name" => "Recruit",
        "singular_name" => "Recruit",
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
        "rewrite" => array("slug" => "recruit", "with_front" => true),
        "query_var" => true,
        "menu_position" => 32,
        "menu_icon" => get_template_directory_uri() . '/img/ad-ico/h7.png',
        "supports" => array("title", "editor"),
    );
    register_post_type("recruit", $args);

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
        'id' => 'acf_service-merit',
        'title' => 'Service Merit',
        'fields' => array(
            array(
                'key' => 'field_55dbedb8030ed',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_55dbedcd030ee',
                'label' => 'Content',
                'name' => 'content',
                'type' => 'wysiwyg',
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
            array(
                'key' => 'field_55dbeec60da6a',
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
                    'value' => 'service-merit',
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
                'label' => 'Image Number',
                'name' => 'image_number',
                'type' => 'image',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_55da796468490',
                'label' => 'Content',
                'name' => 'content',
                'type' => 'wysiwyg',
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'yes',
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

    register_field_group(array(
        'id' => 'acf_benefits',
        'title' => 'Benefits',
        'fields' => array(
            array(
                'key' => 'field_55da7a34ad0f7',
                'label' => 'Image Number',
                'name' => 'image_number',
                'type' => 'image',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_55da7a80ad0f8',
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
                    'value' => 'benefit',
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
        'id' => 'acf_ceo-message',
        'title' => 'CEO Message',
        'fields' => array(
            array(
                'key' => 'field_5640664ea9c12',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'save_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'ceo-message',
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
        'id' => 'acf_recruit',
        'title' => 'Recruit',
        'fields' => array(
            array(
                'key' => 'field_569744c5e2b69',
                'label' => 'Sub Title',
                'name' => 'sub_title',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_56a053cbc1236',
                'label' => '求人No',
                'name' => 'job_no',
                'type' => 'text',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_568c90bdd320c',
                'label' => 'Block Info',
                'name' => 'block_info',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_568c98d5d320d',
                        'label' => 'TItle',
                        'name' => 'title',
                        'type' => 'select',
                        'column_width' => '',
                        'choices' => array(
                            '企業・求人概要' => '企業・求人概要',
                            '応募条件' => '応募条件',
                            '勤務・就業規定・その他情報' => '勤務・就業規定・その他情報',
                        ),
                        'default_value' => '',
                        'allow_null' => 0,
                        'multiple' => 0,
                    ),
                    array(
                        'key' => 'field_568c9c44d320e',
                        'label' => 'Description 1',
                        'name' => 'description_1',
                        'type' => 'repeater',
                        'conditional_logic' => array(
                            'status' => 1,
                            'rules' => array(
                                array(
                                    'field' => 'field_568c98d5d320d',
                                    'operator' => '==',
                                    'value' => '企業・求人概要',
                                ),
                            ),
                            'allorany' => 'all',
                        ),
                        'column_width' => '',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_568c9d72d320f',
                                'label' => 'Sub Title',
                                'name' => 'sub_title',
                                'type' => 'select',
                                'column_width' => '',
                                'choices' => array(
                                    '募集背景' => '募集背景',
                                    '概要' => '概要',
                                ),
                                'default_value' => '',
                                'allow_null' => 0,
                                'multiple' => 0,
                            ),
                            array(
                                'key' => 'field_568cabe0d3210',
                                'label' => 'Content',
                                'name' => 'content',
                                'type' => 'textarea',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => '',
                                'formatting' => 'br',
                            ),
                        ),
                        'row_min' => '',
                        'row_limit' => '',
                        'layout' => 'table',
                        'button_label' => 'Add Row',
                    ),
                    array(
                        'key' => 'field_568cac3fd3211',
                        'label' => 'Description 2',
                        'name' => 'description_2',
                        'type' => 'repeater',
                        'conditional_logic' => array(
                            'status' => 1,
                            'rules' => array(
                                array(
                                    'field' => 'field_568c98d5d320d',
                                    'operator' => '==',
                                    'value' => '応募条件',
                                ),
                            ),
                            'allorany' => 'all',
                        ),
                        'column_width' => '',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_568cac51d3212',
                                'label' => 'Sub Title',
                                'name' => 'sub_title',
                                'type' => 'select',
                                'column_width' => '',
                                'choices' => array(
                                    '応募資格' => '応募資格',
                                    '雇用区分' => '雇用区分',
                                    '想定年収(給与詳細)' => '想定年収(給与詳細)',
                                    '採用人数' => '採用人数',
                                    '選考プロセス' => '選考プロセス',
                                ),
                                'default_value' => '',
                                'allow_null' => 0,
                                'multiple' => 0,
                            ),
                            array(
                                'key' => 'field_568cac83d3213',
                                'label' => 'Content',
                                'name' => 'content',
                                'type' => 'textarea',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => '',
                                'formatting' => 'br',
                            ),
                        ),
                        'row_min' => '',
                        'row_limit' => '',
                        'layout' => 'table',
                        'button_label' => 'Add Row',
                    ),
                    array(
                        'key' => 'field_568caca9d3214',
                        'label' => 'Description 3',
                        'name' => 'description_3',
                        'type' => 'repeater',
                        'conditional_logic' => array(
                            'status' => 1,
                            'rules' => array(
                                array(
                                    'field' => 'field_568c98d5d320d',
                                    'operator' => '==',
                                    'value' => '勤務・就業規定・その他情報', 
                                ),
                            ),
                            'allorany' => 'all',
                        ),
                        'column_width' => '',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_568cacbbd3215',
                                'label' => 'Sub Title',
                                'name' => 'sub_title',
                                'type' => 'select',
                                'column_width' => '',
                                'choices' => array(
                                    '勤務地' => '勤務地',
                                    '勤務時間' => '勤務時間',
                                    '待遇・福利厚生' => '待遇・福利厚生',
                                    '休日/休暇' => '休日/休暇',
                                    '備考欄' => '備考欄',
                                ),
                                'default_value' => '',
                                'allow_null' => 0,
                                'multiple' => 0,
                            ),
                            array(
                                'key' => 'field_568cacd7d3216',
                                'label' => 'Content',
                                'name' => 'content',
                                'type' => 'textarea',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => '',
                                'formatting' => 'br',
                            ),
                        ),
                        'row_min' => '',
                        'row_limit' => '',
                        'layout' => 'table',
                        'button_label' => 'Add Row',
                    ),
                ),
                'row_min' => '',
                'row_limit' => '',
                'layout' => 'row',
                'button_label' => 'Add Block Info',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'recruit',
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
    