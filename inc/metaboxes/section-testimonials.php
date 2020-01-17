<?php

function saneem_testimonials_section_metabox($metaboxes){
    $section_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
 if ( 'section' != get_post_type( $section_id ) ) {
        return $metaboxes;
    }
    $section_meta= get_post_meta($section_id,'saneem-section-type',true);
    $section_type= $section_meta['type'];
    
    if('testimonials'!=$section_type){
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'saneem_testimonials_sections',
        'title'     => __( 'testimonials Section', 'saneem' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'  => 'saneem_testimonials_section_one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                 array(
                        'id'              => 'testimonials',
                        'type'            => 'group',
                        'title'           => __( 'testimonials', 'saneem' ),
                        'button_title'    => __( 'New testimonials', 'saneem' ),
                        'accordion_title' => __( 'Add New testimonials Member', 'saneem' ),
                        'fields'          => array(
                        array(
                        'id'    => 'testimonials_image',
                        'title'   => __( 'description', 'saneem' ),
                        'type'    => 'image',
                        
                        ),
                        array(
                        'id'    => 'testimonials_title',
                        'title'   => __( 'Title', 'saneem' ),
                        'type'    => 'text',
                        
                        ),
                
                    
                    ),
                    ),
                ),
            ),
        ),
           
    );
    
    
    
    
    
    return $metaboxes;
};

add_filter('cs_metabox_options', 'saneem_testimonials_section_metabox');
