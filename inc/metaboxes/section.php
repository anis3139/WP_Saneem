<?php
function saneem_section_type_metabox( $metaboxes ) {
    $metaboxes[] = array(
        'id'        => 'saneem-section-type',
        'title'     => __( 'section type', 'saneem' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'saneem-section-type-one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'type',
                        'title'   => __( 'Select section type', 'saneem' ),
                        'type'    => 'select',
                        'options' => array(
                            'banner'       => __( 'Banner', 'saneem' ),
                            'about'     => __( 'About', 'saneem' ),
                            'team'      => __( 'Team', 'saneem' ),
                            'portfolio'         => __( 'Portfolio', 'saneem' ),
                            'services'     => __( 'Services', 'saneem' ),
                            'testimonials' => __( 'Testimonials', 'saneem' ),
                            'pricing'     => __( 'Pricing', 'saneem' ),
                            'faq'  => __( 'FAQ', 'saneem' ),
                            'thinking' => __( 'Thinking', 'saneem' ),
                            'blog' => __( 'Blog', 'saneem' ),
                            'contact'      => __( 'Contact', 'saneem' ),
                        )
                    ),
                )
            ),

        )
    );

    return $metaboxes;
}

add_filter( 'cs_metabox_options', 'saneem_section_type_metabox' );