<?php

function saneem_faq_section_metabox($metaboxes){
    $section_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
 if ( 'section' != get_post_type( $section_id ) ) {
        return $metaboxes;
    }
    $section_meta= get_post_meta($section_id,'saneem-section-type',true);
    $section_type= $section_meta['type'];
    
    if('faq'!=$section_type){
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'saneem_faq_sections',
        'title'     => __( 'faq Section', 'saneem' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'  => 'saneem_faq_section_one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                 array(
                        'id'              => 'faq',
                        'type'            => 'group',
                        'title'           => __( 'faq', 'saneem' ),
                        'button_title'    => __( 'New FAQ', 'saneem' ),
                        'accordion_title' => __( 'Add New faq Member', 'saneem' ),
                        'fields'          => array(
                          
                            array(
                        'id'    => 'faq_title',
                        'title'   => __( 'FAQ Title', 'saneem' ),
                        'type'    => 'text',
                        
                        ),
                        array(
                        'id'    => 'faq_descriptioin',
                        'title'   => __( 'FAQ description', 'saneem' ),
                        'type'    => 'textarea',
                        
                        ),
                    
                    ),
                    ),
                ),
            ),
        ),
           
    );
    
    
    
    
    
    return $metaboxes;
};

add_filter('cs_metabox_options', 'saneem_faq_section_metabox');
