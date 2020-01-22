<?php

function saneem_contact_section_metabox($metaboxes){
    $section_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }
 if ( 'section' != get_post_type( $section_id ) ) {
        return $metaboxes;
    }
    $section_meta= get_post_meta($section_id,'saneem-section-type',true);
    $section_type= $section_meta['type'];
    
    if('contact'!=$section_type){
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'saneem_contact_sections',
        'title'     => __( 'Contact Setting', 'saneem' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'id'     => 'saneem-contact_section_one',
                'name'  => '',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'adress',
                        'title'   => __( 'Adress', 'saneem' ),
                        'type'    => 'text',
                        
                        ),
                    array(
                        'id'    => 'phone',
                        'title'   => __( 'Phone Number', 'saneem' ),
                        'type'    => 'text',
                        
                        ),
                    array(
                        'id'    => 'email',
                        'title'   => __( 'Email', 'saneem' ),
                        'type'    => 'text',
                        
                        ),
                    array(
                        'id'    => 'contact_form_shortcode',
                        'title'   => __( 'Contact Form Shortcode', 'saneem' ),
                        'type'    => 'textarea',
                        'default' => 'Please Drop Here Your Contact Form Short Code'
                        ),
                    array(
                          'id'      => 'gmap',
                          'type'    => 'textarea',
                          'title'   => __( 'Google Map', 'saneem' ),
                          'default' => 'Please Drop Here Your Google Map HTML Code'
                        ),
                    ),
                )
            ),

       
    );
    
    
    
    
    
    return $metaboxes;
};

add_filter('cs_metabox_options', 'saneem_contact_section_metabox');
