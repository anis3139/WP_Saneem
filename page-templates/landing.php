 <?php
/**
 * Template Name: Landing Page
 */
?>
 
 
<?php get_header();?>



<?php 
 $saneem_current_page_id= get_the_ID();
 $saneem_page_meta = get_post_meta($saneem_current_page_id,'saneem-page-sections', true);
 foreach ($saneem_page_meta['sections'] as $saneem_page_section):
     $saneem_section_id= $saneem_page_section['section'];
     $saneem_section_meta= get_post_meta($saneem_section_id,'saneem-section-type', true);
     $saneem_section_type= $saneem_section_meta['type'];
     get_template_part("section-templates/{$saneem_section_type}");
  endforeach;
 
 ?>


 <?php get_footer();?>
