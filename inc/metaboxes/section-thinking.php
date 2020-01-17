<?php

function saneem_thinking_section_metabox($metaboxes){
    $section_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
 if ( 'section' != get_post_type( $section_id ) ) {
        return $metaboxes;
    }
    $section_meta= get_post_meta($section_id,'saneem-section-type',true);
    $section_type= $section_meta['type'];
    
    if('thinking'!=$section_type){
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'saneem_thinking_sections',
        'title'     => __( 'Thinking Section', 'saneem' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'id'     => 'saneem_thinking_section_one',
                'name'  => 'saneem_thinking_section_one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                      array(
                        'id'    => 'thinking_image',
                        'title'   => __( 'Image', 'saneem' ),
                        'type'    => 'image',
                        
                        ),
                 array(
                        'id'              => 'thinking',
                        'type'            => 'group',
                        'title'           => __( 'Thinking Section Settings', 'saneem' ),
                        'button_title'    => __( 'New Thinking', 'saneem' ),
                        'accordion_title' => __( 'Add New Thinking Member', 'saneem' ),
                        'fields'          => array(
                          
                            array(
                        'id'    => 'thinking_title',
                        'title'   => __( 'Title', 'saneem' ),
                        'type'    => 'text',
                        
                        ),   
                            
                      
                            
                        array(
                        'id'    => 'thinking_icon',
                        'title'   => __( 'Thinking Icon', 'saneem' ),
                        'type'    => 'select',
                        'options'=>array(
                                    'flaticon-startup'=>__('Startup','saneem'),
                                    'flaticon-graphic-design'=>__('Graphic Design','saneem'),
                                    'flaticon-settings'=>__('Settings','saneem'),
                                    'flaticon-idea'=>__('Idea','saneem'),
                                    'flaticon-smartphone'=>__('Smartphone','saneem'),
                                    'flaticon-head'=>__('Head','saneem'),
                                )
                        
                        ),
   
                        array(
                        'id'    => 'thinking_descriptioin',
                        'title'   => __( 'Description', 'saneem' ),
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

add_filter('cs_metabox_options', 'saneem_thinking_section_metabox');
