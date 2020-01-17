<?php

function saneem_services_section_metabox($metaboxes){
    $section_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
 if ( 'section' != get_post_type( $section_id ) ) {
        return $metaboxes;
    }
    $section_meta= get_post_meta($section_id,'saneem-section-type',true);
    $section_type= $section_meta['type'];
    
    if('services'!=$section_type){
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'saneem_services_sections',
        'title'     => __( 'services Section', 'saneem' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'  => 'saneem_services_section_one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                 array(
                        'id'              => 'services',
                        'type'            => 'group',
                        'title'           => __( 'services', 'saneem' ),
                        'button_title'    => __( 'New services', 'saneem' ),
                        'accordion_title' => __( 'Add New services Member', 'saneem' ),
                        'fields'          => array(
                          
                            array(
                        'id'    => 'services_title',
                        'title'   => __( 'Title', 'saneem' ),
                        'type'    => 'text',
                        
                        ),
                            
                        array(
                        'id'    => 'services_icon',
                        'title'   => __( 'services Icon', 'saneem' ),
                        'type'    => 'select',
                        'options'=>array(
                                    'flaticon-startup'=>__('Startup','meal'),
                                    'flaticon-graphic-design'=>__('Graphic Design','meal'),
                                    'flaticon-settings'=>__('Settings','meal'),
                                    'flaticon-idea'=>__('Idea','meal'),
                                    'flaticon-smartphone'=>__('Smartphone','meal'),
                                    'flaticon-head'=>__('Head','meal'),
                                )
                        
                        ),
   
                        array(
                        'id'    => 'services_descriptioin',
                        'title'   => __( 'description', 'saneem' ),
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

add_filter('cs_metabox_options', 'saneem_services_section_metabox');
