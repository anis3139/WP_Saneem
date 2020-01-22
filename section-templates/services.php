<?php
global $saneem_section_id;
$saneem_section_meta        = get_post_meta( $saneem_section_id, 'saneem_services_sections', true );
$saneem_section             = get_post( $saneem_section_id );
$saneem_section_title       = $saneem_section->post_title;
$saneem_section_description = $saneem_section->post_content;
?>
 <section class="site-section border-bottom bg-light" id="<?php echo esc_attr($saneem_section->post_name);?>">
     <div class="container">
         <div class="row mb-5">
             <div class="col-12 text-center" data-aos="fade">
                 <h2 class="section-title mb-3"><?php echo esc_html($saneem_section_title);?></h2>
             </div>
         </div>
          <?php 
         $saneem_services= $saneem_section_meta['services'];
            if($saneem_services):
         ?>
         <div class="row align-items-stretch">
           <?php foreach ($saneem_services as $saneem_service): ?>
             <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                 <div class="unit-4">
                     <div class="unit-4-icon mr-4"><span class="text-primary <?php echo esc_attr($saneem_service['services_icon']); ?>"></span></div>
                     <div>
                      <h3><?php echo esc_html($saneem_service['services_title']); ?></h3>
                        <?php echo apply_filters('the_content',$saneem_service['services_descriptioin']); ?>
                         <p><a href="<?php the_permalink();?>"><?php _e('Learn More', 'saneem');?></a></p>
                     </div>
                 </div>
             </div>
              <?php endforeach;?>
         </div>
         <?php endif;?>
     </div>
 </section>
