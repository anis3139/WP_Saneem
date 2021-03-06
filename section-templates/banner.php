<?php 
global $saneem_section_id;
$saneem_section_meta= get_post_meta($saneem_section_id,'saneem_banner_sections',true);
$saneem_banner_image= get_template_directory_uri().'/assets/images/banner-image.png';
if(isset($saneem_section_meta['banner_image'])){
$saneem_banner_image= wp_get_attachment_image_src($saneem_section_meta['banner_image'],'full');
}


$saneem_section= get_post($saneem_section_id);
$saneem_section_title= $saneem_section->post_title;
$saneem_section_description= $saneem_section->post_content;

?>



<div class="site-blocks-cover header overlay" style="background-image: url(<?php echo esc_url( $saneem_banner_image[0]);?>);" data-aos="fade" id="<?php echo esc_attr($saneem_section->post_name);?>">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 mt-lg-5 text-center">
               <div class="text-uppercase mySelector mb-5">
                   <h1 class="text-uppercase mb-5" data-aos="fade-up" data-aos-delay="300">
                    <?php bloginfo( 'description' ); ?>
                </h1>
               </div> 

                <div data-aos="fade-up" data-aos-delay="100">
                     <a href="<?php echo esc_url($saneem_section_meta['button_target']); ?>" class="btn smoothscroll btn-primary mr-2 mb-2">
                        <?php echo esc_html($saneem_section_meta['button_title']); ?>
                    </a>
                     </div>
            </div>

        </div>
    </div>

    <a href="#about-section" class="mouse smoothscroll">
        <span class="mouse-icon">
            <span class="mouse-wheel"></span>
        </span>
    </a>
</div>
<?php get_template_part("section-tenplate/banner.php");?>
