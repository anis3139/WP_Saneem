<?php

function saneem_banner_section_metabox($metaboxes){
    $section_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    $section_meta= get_post_meta($section_id,'saneem-section-type',true);
    $section_type= $section_meta['type'];
    
    if('banner'!=$section_type){
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'saneem_banner_sections',
        'title'     => __( 'Banner Setting', 'saneem' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'id'     => 'saneem-banner_section_one',
                'name'  => '',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'banner_image',
                        'title'   => __( 'Banner Image', 'saneem' ),
                        'type'    => 'image',
                        
                        ),
                    array(
                        'id'    => 'button_title',
                        'title'   => __( 'Banner Title', 'saneem' ),
                        'type'    => 'text',
                        
                        ),
                    array(
                        'id'    => 'button_target',
                        'title'   => __( 'Banner Terget', 'saneem' ),
                        'type'    => 'text',
                        
                        )
                    ),
                )
            ),

       
    );
    
    
    
    
    
    return $metaboxes;
};

add_filter('cs_metabox_options', 'saneem_banner_section_metabox');