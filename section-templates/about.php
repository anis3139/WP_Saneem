<?php
global $saneem_section_id;
$saneem_section_meta        = get_post_meta( $saneem_section_id, 'saneem_about_sections', true );
$saneem_section             = get_post( $saneem_section_id );
$saneem_section_title       = $saneem_section->post_title;
$saneem_section_description = $saneem_section->post_content;

$saneem_about_image= wp_get_attachment_image_src($saneem_section_meta['about_image'],'full');
?>

    
    <div class="site-section cta-big-image" id="<?php echo esc_attr($saneem_section->post_name);?>">
     <div class="container">
         <div class="row mb-5">
             <div class="col-12 text-center" data-aos="fade">
                 <h2 class="section-title mb-3">
                  <?php echo esc_html($saneem_section_title);?>
                 
                 </h2>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
                 <figure class="circle-bg">
                     <img src="<?php echo esc_url( $saneem_about_image[0]);?>" alt="Image" class="img-fluid">
                 </figure>
             </div>
             <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                 <div class="mb-4">
                     <h3 class="h3 mb-4 text-black"> 
                     <?php echo esc_html($saneem_section_meta['about_title']); ?>
                     </h3>
                     <p> 
                     <?php echo esc_html($saneem_section_meta['about_description']); ?>
                     </p>
                 </div>
                
                
                 <p><a href="<?php echo esc_url($saneem_section_meta['about_button_target']); ?>" class="smoothscroll btn btn-primary"> <?php echo esc_html($saneem_section_meta['about_button_title']); ?></a></p>



             </div>
         </div>
     </div>
 </div>