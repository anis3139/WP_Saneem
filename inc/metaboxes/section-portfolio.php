<?php

function saneem_portfolio_section_metabox($metaboxes){
    $section_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
 if ( 'section' != get_post_type( $section_id ) ) {
        return $metaboxes;
    }
    $section_meta= get_post_meta($section_id,'saneem-section-type',true);
    $section_type= $section_meta['type'];
    
    if('portfolio'!=$section_type){
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'saneem_portfolio_sections',
        'title'     => __( 'portfolio Section', 'saneem' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'  => 'saneem_portfolio_section_one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                 array(
                        'id'              => 'portfolio',
                        'type'            => 'group',
                        'title'           => __( 'portfolio', 'saneem' ),
                        'button_title'    => __( 'New portfolio', 'saneem' ),
                        'accordion_title' => __( 'Add New portfolio Member', 'saneem' ),
                        'fields'          => array(
                         
                        array(
                        'id'    => 'portfolio_image',
                        'title'   => __( 'Portfolio Image', 'saneem' ),
                        'type'    => 'image',
                        
                        ),
                        array(
                        'id'    => 'category',
                        'title'   => __( 'Category', 'saneem' ),
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

add_filter('cs_metabox_options', 'saneem_portfolio_section_metabox');
