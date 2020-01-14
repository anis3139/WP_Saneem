<?php

function saneem_team_section_metabox($metaboxes){
    $section_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    $section_meta= get_post_meta($section_id,'saneem-section-type',true);
    $section_type= $section_meta['type'];
    
    if('team'!=$section_type){
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'saneem_team_sections',
        'title'     => __( 'Team Section', 'saneem' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'id'     => 'saneem_team_section_one',
                'name'  => '',
                'icon'   => 'fa fa-image',
                'fields' => array(
                
                         
                         array(
                        'id'    => 'member_image',
                        'title'   => __( 'Member Image', 'saneem' ),
                        'type'    => 'image',
                        
                        ),
                        array(
                        'id'    => 'member_name',
                        'title'   => __( 'MemberS Name', 'saneem' ),
                        'type'    => 'text',
                        
                        ),
                        array(
                        'id'    => 'member_designation',
                        'title'   => __( 'Members Designation', 'saneem' ),
                        'type'    => 'text',   
                        ),
                    array(
                        'id'    => 'facebook',
                        'title'   => __( 'Facebook', 'saneem' ),
                        'type'    => 'text',   
                        ),
                    array(
                        'id'    => 'twitter',
                        'title'   => __( 'Twitter', 'saneem' ),
                        'type'    => 'text',   
                        ),
                    array(
                        'id'    => 'instagram',
                        'title'   => __( 'Instagram', 'saneem' ),
                        'type'    => 'text',   
                        ),
                    array(
                        'id'    => 'github',
                        'title'   => __( 'Github', 'saneem' ),
                        'type'    => 'text',   
                        ),
                   
                    ),
                ),
        
        ),  
    );
    
    
    
    
    
    return $metaboxes;
};

add_filter('cs_metabox_options', 'saneem_team_section_metabox');