<?php
global $section_id;
$saneem_section_meta        = get_post_meta( $section_id, 'saneem_team_sections', true );
$saneem_section             = get_post( $section_id );
$saneem_section_title       = $saneem_section->post_title;
$saneem_section_description = $saneem_section->post_content;
?>

    

    
    <section class="site-section border-bottom" id="team-section">
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
         <div class="row">


             <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
                 <div class="team-member">
                     <figure>
                          <ul class="social">
                             <li><a href="<?php echo esc_url($saneem_section_meta['facebook']); ?>"><span class="icon-facebook"></span></a></li>
                             <li><a href="<?php echo esc_url($saneem_section_meta['twitter']); ?>"><span class="icon-twitter"></span></a></li>
                             <li><a href="<?php echo esc_url($saneem_section_meta['github']); ?>"><span class="icon-github"></span></a></li>
                             <li><a href="<?php echo esc_url($saneem_section_meta['instagram']); ?>"><span class="icon-instagram"></span></a></li>
                         </ul>
                         <img src="<?php echo get_template_directory_uri();?>/assets/images/person_6.jpg" alt="Image" class="img-fluid">
                     </figure>
                     <div class="p-3">
                         <h3><?php echo esc_html($saneem_section_meta['member_name']); ?></h3>
                         <span class="position"><?php echo esc_html($saneem_section_meta['member_designation']); ?></span>
                     </div>
                 </div>
             </div>
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             

             <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                 <div class="team-member">
                     <figure>
                         <ul class="social">
                             <li><a href="<?php echo esc_url($saneem_section_meta['about_button_target']); ?>"><span class="icon-facebook"></span></a></li>
                             <li><a href="<?php echo esc_url($saneem_section_meta['about_button_target']); ?>"><span class="icon-twitter"></span></a></li>
                             <li><a href="<?php echo esc_url($saneem_section_meta['about_button_target']); ?>"><span class="icon-linkedin"></span></a></li>
                             <li><a href="<?php echo esc_url($saneem_section_meta['about_button_target']); ?>"><span class="icon-instagram"></span></a></li>
                         </ul>
                         <img src="<?php echo get_template_directory_uri();?>/assets/images/person_6.jpg" alt="Image" class="img-fluid">
                     </figure>
                     <div class="p-3">
                         <h3>Dave Simpson</h3>
                         <span class="position">Product Manager</span>
                     </div>
                 </div>
             </div>

             <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                 <div class="team-member">
                     <figure>
                         <ul class="social">
                             <li><a href="#"><span class="icon-facebook"></span></a></li>
                             <li><a href="#"><span class="icon-twitter"></span></a></li>
                             <li><a href="#"><span class="icon-linkedin"></span></a></li>
                             <li><a href="#"><span class="icon-instagram"></span></a></li>
                         </ul>
                         <img src="<?php echo get_template_directory_uri();?>/assets/images/person_7.jpg" alt="Image" class="img-fluid">
                     </figure>
                     <div class="p-3">
                         <h3>Ben Thompson</h3>
                         <span class="position">Product Manager</span>
                     </div>
                 </div>
             </div>

             <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                 <div class="team-member">
                     <figure>
                         <ul class="social">
                             <li><a href="#"><span class="icon-facebook"></span></a></li>
                             <li><a href="#"><span class="icon-twitter"></span></a></li>
                             <li><a href="#"><span class="icon-linkedin"></span></a></li>
                             <li><a href="#"><span class="icon-instagram"></span></a></li>
                         </ul>
                         <img src="<?php echo get_template_directory_uri();?>/assets/images/person_8.jpg" alt="Image" class="img-fluid">
                     </figure>
                     <div class="p-3">
                         <h3>Kyla Stewart</h3>
                         <span class="position">Product Manager</span>
                     </div>
                 </div>
             </div>

             <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
                 <div class="team-member">
                     <figure>
                         <ul class="social">
                             <li><a href="#"><span class="icon-facebook"></span></a></li>
                             <li><a href="#"><span class="icon-twitter"></span></a></li>
                             <li><a href="#"><span class="icon-linkedin"></span></a></li>
                             <li><a href="#"><span class="icon-instagram"></span></a></li>
                         </ul>
                         <img src="<?php echo get_template_directory_uri();?>/assets/images/person_1.jpg" alt="Image" class="img-fluid">
                     </figure>
                     <div class="p-3">
                         <h3>Kaiara Spencer</h3>
                         <span class="position">Product Manager</span>
                     </div>
                 </div>
             </div>

             <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                 <div class="team-member">
                     <figure>
                         <ul class="social">
                             <li><a href="#"><span class="icon-facebook"></span></a></li>
                             <li><a href="#"><span class="icon-twitter"></span></a></li>
                             <li><a href="#"><span class="icon-linkedin"></span></a></li>
                             <li><a href="#"><span class="icon-instagram"></span></a></li>
                         </ul>
                         <img src="<?php echo get_template_directory_uri();?>/assets/images/person_2.jpg" alt="Image" class="img-fluid">
                     </figure>
                     <div class="p-3">
                         <h3>Dave Simpson</h3>
                         <span class="position">Product Manager</span>
                     </div>
                 </div>
             </div>

             <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                 <div class="team-member">
                     <figure>
                         <ul class="social">
                             <li><a href="#"><span class="icon-facebook"></span></a></li>
                             <li><a href="#"><span class="icon-twitter"></span></a></li>
                             <li><a href="#"><span class="icon-linkedin"></span></a></li>
                             <li><a href="#"><span class="icon-instagram"></span></a></li>
                         </ul>
                         <img src="<?php echo get_template_directory_uri();?>/assets/images/person_3.jpg" alt="Image" class="img-fluid">
                     </figure>
                     <div class="p-3">
                         <h3>Ben Thompson</h3>
                         <span class="position">Product Manager</span>
                     </div>
                 </div>
             </div>

             <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                 <div class="team-member">
                     <figure>
                         <ul class="social">
                             <li><a href="#"><span class="icon-facebook"></span></a></li>
                             <li><a href="#"><span class="icon-twitter"></span></a></li>
                             <li><a href="#"><span class="icon-linkedin"></span></a></li>
                             <li><a href="#"><span class="icon-instagram"></span></a></li>
                         </ul>
                         <img src="<?php echo get_template_directory_uri();?>/assets/images/person_4.jpg" alt="Image" class="img-fluid">
                     </figure>
                     <div class="p-3">
                         <h3>Chris Stewart</h3>
                         <span class="position">Product Manager</span>
                     </div>
                 </div>
             </div>



         </div>
     </div>
 </section>
