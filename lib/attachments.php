<?php
define( 'ATTACHMENTS_SETTINGS_SCREEN', false );
add_filter( 'attachments_default_instance', '__return_false' );

function saneem_attachments($attachments){
    $fields = array(
       array(
           'name'      => 'title',
           'type'      => 'text',
           'label'     => __( 'Title', 'saneem' ),
       ),
    );

    $args = array(

        'label'         => 'Featured Slider',
        'post_type'     => array( 'post'),
        'filetype'      => array("image"),
        'note'          => 'Add Slider Images',
        'button_text'   => __( 'Attach Files', 'saneem' ),
        'fields'        => $fields,
    );

    $attachments->register( 'slider', $args );
}
add_action( 'attachments_register', 'saneem_attachments' );




function saneem_testimonial_attachments($attachments){
    $fields = array(
        array(
            'name'      => 'name',
            'type'      => 'text',
            'label'     => __( 'Name', 'saneem' ),
        ),
        array(
            'name'      => 'position',
            'type'      => 'text',
            'label'     => __( 'Position', 'saneem' ),
        ),
        array(
            'name'      => 'company',
            'type'      => 'text',
            'label'     => __( 'Company', 'saneem' ),
        ),
        array(
            'name'      => 'testimonial',
            'type'      => 'textarea',
            'label'     => __( 'Testimonial', 'saneem' ),
        ),
    );

    $args = array(

        'label'         => 'Testimonials',
        'post_type'     => array( 'page'),
        'filetype'      => array("image"),
        'note'          => 'Add testimonial',
        'button_text'   => __( 'Attach Files', 'saneem' ),
        'fields'        => $fields,
    );

    $attachments->register( 'testimonials', $args );
}
add_action( 'attachments_register', 'saneem_testimonial_attachments' );

