 <?php
/**
 * Template Name: Landing Page
 */
?>
 
 
<?php get_header();?>
 
<?php 
$section_id=280;
get_template_part("section-templates/banner");
?>
 <?php 
$section_id=281;
get_template_part("section-templates/about");
?>
 <?php 
$section_id=293;
get_template_part("section-templates/team");
?>
 <?php 
$section_id=292;
get_template_part("section-templates/portfolio");
?>
 <?php 
$section_id=294;
get_template_part("section-templates/services");
?> 
<?php 
$section_id=295;
get_template_part("section-templates/testimonials");
?>
<?php 
$section_id=323;
get_template_part("section-templates/faq");
?><?php 
$section_id=324;
get_template_part("section-templates/thinking");
?>
?><?php 
$section_id=325;
get_template_part("section-templates/contact");
?>



<!--
<?php

        $saneem_current_page_id = get_the_ID();
        $saneem_page_meta = get_post_meta($saneem_current_page_id,'saneem-page-sections',true);
        foreach($saneem_page_meta['sections'] as $saneem_page_section):
            $saneem_section_id = $saneem_page_section['section'];
            $saneem_section_meta = get_post_meta($saneem_section_id,'saneem-section-type',true);
            $saneem_section_type = $saneem_section_meta['type'];
	        get_template_part("section-templates/{$saneem_section_type}");
        endforeach;
 ?>-->
 
 



 <?php get_footer();?>
