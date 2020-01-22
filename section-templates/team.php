<?php
global $saneem_section_id;
$saneem_section_meta        = get_post_meta( $saneem_section_id, 'saneem_team_sections', true );
$saneem_section             = get_post( $saneem_section_id );
$saneem_section_title       = $saneem_section->post_title;
$saneem_section_description = $saneem_section->post_content;
?>

    

    
    <section class="site-section border-bottom" id="<?php echo esc_attr($saneem_section->post_name);?>">
     <div class="container">
         <div class="row mb-5 justify-content-center">
             <div class="col-md-8 text-center">
                 <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">
                 <?php echo esc_html($saneem_section_title);?>
                 </h2>
                 <p class="lead" data-aos="fade-up" data-aos-delay="100">
                 <?php echo esc_html($saneem_section_description);?>
                 </p>
             </div>
         </div>
         
         <?php 
         $saneem_teams= $saneem_section_meta['team'];
         if($saneem_teams):
         
         ?>
         
         <div class="row">
            <?php 
             foreach($saneem_teams as $saneem_team):
             $saneem_members_image = wp_get_attachment_image_src( $saneem_team['member_image'], 'saneem-team-image' );
             ?>
             <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
                 <div class="team-member">
                     <figure>
                          <ul class="social">
                             <li><a href="<?php echo esc_url($saneem_team['social_profiles']['facebook']); ?>"><span class="icon-facebook"></span></a></li>
                             <li><a href="<?php echo esc_url($saneem_team['social_profiles']['twitter']); ?>"><span class="icon-twitter"></span></a></li>
                             <li><a href="<?php echo esc_url($saneem_team['social_profiles']['github']); ?>"><span class="icon-github"></span></a></li>
                             <li><a href="<?php echo esc_url($saneem_team['social_profiles']['instagram']); ?>"><span class="icon-instagram"></span></a></li>
                         </ul>
                         <img src="<?php echo esc_attr($saneem_members_image[0]);?>" alt="<?php echo esc_html($saneem_about['member_name']); ?>" class="img-fluid">
                     </figure>
                     <div class="p-3">
                         <h3><?php echo esc_html($saneem_team['member_name']); ?></h3>
                         <span class="position"><?php echo esc_html($saneem_team['member_designation']); ?></span>
                     </div>
                 </div>
                 
             </div>
             <?php endforeach; ?>
         </div>
<?php endif; ?>
     </div>
      
 </section>
