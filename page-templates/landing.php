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








 





 <section class="site-section" id="blog-section">
     <div class="container">
         <div class="row mb-5">
             <div class="col-12 text-center" data-aos="fade">
                 <h2 class="section-title mb-3">Our Blog</h2>
             </div>
         </div>

         <div class="row">
             <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
                 <div class="h-entry">
                     <a href="single.html">
                         <img src="<?php echo get_template_directory_uri();?>/assets/images/post_1.jpg" alt="Image" class="img-fluid">
                     </a>
                     <h2 class="font-size-regular"><a href="#">Repudiandae Quisquam Eaque Dolore</a></h2>
                     <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                     <p><a href="#">Continue Reading...</a></p>
                 </div>
             </div>
             <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                 <div class="h-entry">
                     <a href="single.html">
                         <img src="<?php echo get_template_directory_uri();?>/assets/images/post_2.jpg" alt="Image" class="img-fluid">
                     </a>
                     <h2 class="font-size-regular"><a href="#">Repudiandae Quisquam Eaque Dolore</a></h2>
                     <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                     <p><a href="#">Continue Reading...</a></p>
                 </div>
             </div>
             <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                 <div class="h-entry">
                     <a href="single.html">
                         <img src="<?php echo get_template_directory_uri();?>/assets/images/post_3.jpg" alt="Image" class="img-fluid">
                     </a>
                     <h2 class="font-size-regular"><a href="#">Repudiandae Quisquam Eaque Dolore</a></h2>
                     <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                     <p><a href="#">Continue Reading...</a></p>
                 </div>
             </div>

         </div>
     </div>
 </section>




 <section class="site-section bg-light" id="contact-section" data-aos="fade">
     <div class="container">
         <div class="row mb-5">
             <div class="col-12 text-center">
                 <h2 class="section-title mb-3">Contact Us</h2>
             </div>
         </div>
         <div class="row mb-5">



             <div class="col-md-4 text-center">
                 <p class="mb-4">
                     <span class="icon-room d-block h4 text-primary"></span>
                     <span>203 Fake St. Mountain View, San Francisco, California, USA</span>
                 </p>
             </div>
             <div class="col-md-4 text-center">
                 <p class="mb-4">
                     <span class="icon-phone d-block h4 text-primary"></span>
                     <a href="#">+1 232 3235 324</a>
                 </p>
             </div>
             <div class="col-md-4 text-center">
                 <p class="mb-0">
                     <span class="icon-mail_outline d-block h4 text-primary"></span>
                     <a href="#">youremail@domain.com</a>
                 </p>
             </div>
         </div>
         <div class="row">
             <div class="col-md-12 mb-5">



                 <form action="#" class="p-5 bg-white">

                     <h2 class="h4 text-black mb-5">Contact Form</h2>

                     <div class="row form-group">
                         <div class="col-md-6 mb-3 mb-md-0">
                             <label class="text-black" for="fname">First Name</label>
                             <input type="text" id="fname" class="form-control">
                         </div>
                         <div class="col-md-6">
                             <label class="text-black" for="lname">Last Name</label>
                             <input type="text" id="lname" class="form-control">
                         </div>
                     </div>

                     <div class="row form-group">

                         <div class="col-md-12">
                             <label class="text-black" for="email">Email</label>
                             <input type="email" id="email" class="form-control">
                         </div>
                     </div>

                     <div class="row form-group">

                         <div class="col-md-12">
                             <label class="text-black" for="subject">Subject</label>
                             <input type="subject" id="subject" class="form-control">
                         </div>
                     </div>

                     <div class="row form-group">
                         <div class="col-md-12">
                             <label class="text-black" for="message">Message</label>
                             <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                         </div>
                     </div>

                     <div class="row form-group">
                         <div class="col-md-12">
                             <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                         </div>
                     </div>


                 </form>
             </div>

         </div>
     </div>
 </section>

 <?php get_footer();?>
