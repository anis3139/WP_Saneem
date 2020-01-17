<?php
global $section_id;
$saneem_section_meta        = get_post_meta( $section_id, 'saneem_services_sections', true );
$saneem_section             = get_post( $section_id );
$saneem_section_title       = $saneem_section->post_title;
$saneem_section_description = $saneem_section->post_content;
?>



 <section class="site-section border-bottom bg-light" id="services-section">
     <div class="container">
         <div class="row mb-5">
             <div class="col-12 text-center" data-aos="fade">
                 <h2 class="section-title mb-3"><?php echo esc_html($saneem_section_title);?></h2>
             </div>
         </div>
         
         
         <div class="row align-items-stretch">
            <?php 
         $saneem_services= $saneem_section_meta['services'];
        if($saneem_services):
         ?>
             <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                <?php foreach ($saneem_services as $saneem_service): ?>
                 <div class="unit-4">
                     <div class="unit-4-icon mr-4"><span class="text-primary <?php echo esc_attr($saneem_service['services_icon']); ?>"></span></div>
                     <div>
                      <h3><?php echo esc_html($saneem_service['services_title']); ?></h3>
                        <?php echo apply_filters('the_content',$saneem_service['services_descriptioin']); ?>
                         <p><a href="#">Learn More</a></p>
                     </div>
                 </div>
                 <?php endforeach;?>
             </div>
             
            <?php endif;?>

         </div>
     </div>
 </section>
 
