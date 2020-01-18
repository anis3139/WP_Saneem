<?php
global $saneem_section_id;
$saneem_section_meta        = get_post_meta( $saneem_section_id, 'saneem_testimonials_sections', true );
$saneem_section             = get_post( $saneem_section_id );
$saneem_section_title       = $saneem_section->post_title;
$saneem_section_description = $saneem_section->post_content;
?>
 <div class="saneem-custom-padding">
    <section class="site-section testimonial-wrap" id="testimonials-section" data-aos="fade">
     <div class="container">
         <div class="row mb-5">
             <div class="col-12 text-center">
                 <h2 class="section-title mb-3"><?php echo esc_html($saneem_section_title);?></h2>
             </div>
         </div>
     </div>
     
       <?php 
        $saneem_testimonials= $saneem_section_meta['testimonials'];
        
        if($saneem_testimonials):
         ?>
    
     <div class="slide-one-item home-slider owl-carousel">
        <?php foreach ($saneem_testimonials as $saneem_testimonial): 
         $testimonials_image= wp_get_attachment_image_src($saneem_testimonial['testimonials_image'],'full');
         ?>
             <div class="site-blocks-cover overlay" style="background-image: url(<?php echo esc_url($testimonials_image[0]);?>" data-aos="fade" id="home-section">
                 <div class="container">
                     <div class="row align-items-center justify-content-center">
                         <div class="col-md-8 mt-lg-5 text-center">
                             <h1 class="text-uppercase mb-5" data-aos="fade-up"><?php echo esc_html($saneem_testimonial['testimonials_title']); ?></h1>
                         </div>

                     </div>
                 </div>
             </div>
           <?php endforeach;?>
      <?php endif;?>
            
     </div>
       
 </section>
 </div>