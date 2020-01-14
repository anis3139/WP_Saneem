<?php

function saneem_about_section_metabox($metaboxes){
    $section_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    $section_meta= get_post_meta($section_id,'saneem-section-type',true);
    $section_type= $section_meta['type'];
    
    if('about'!=$section_type){
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'saneem_about_sections',
        'title'     => __( 'About Section', 'saneem' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'id'     => 'saneem_about_section_one',
                'name'  => '',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'about_image',
                        'title'   => __( 'Banner Image', 'saneem' ),
                        'type'    => 'image',
                        
                        ),
                    array(
                        'id'    => 'about_button_title',
                        'title'   => __( 'Button Title', 'saneem' ),
                        'type'    => 'text',
                        
                        ),
                    array(
                        'id'    => 'about_button_target',
                        'title'   => __( 'Button Terget', 'saneem' ),
                        'type'    => 'text',   
                        ),
                    array(
                            'id'    => 'about_title',
                            'type'  => 'text',
                            'title' =>  __( 'About Title', 'saneem' ),
                          ),
                    array(
                                'id'    => 'about_description',
                            'type'  => 'textarea',
                            'title' => __( 'About Description', 'saneem' ),
                          ),
                    
                    
                    array(
                        'id'        => 'about_tag_list',
                        'type'      => 'group',
                        'title'     =>  __( 'About Tag List', 'saneem' ),
                        'fields'    => array(
                          array(
                            'id'    => 'about_tag_text',
                            'type'  => 'text',
                            'title' => __( 'About Tag Text', 'saneem' ),
                          ),

                        ),
                        ),
                    ),
                ),
            ),

       
    );
    
    
    
    
    
    return $metaboxes;
};

add_filter('cs_metabox_options', 'saneem_about_section_metabox');