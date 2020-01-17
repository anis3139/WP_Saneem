<?php 
global $section_id;
$saneem_section_meta= get_post_meta($section_id,'saneem_banner_sections',true);
$saneem_banner_image=get_template_directory_uri().'/assets/images/hero_1.jpg';
if(isset($saneem_section_meta['banner_image'])){
$saneem_banner_image= wp_get_attachment_image_src($saneem_section_meta['banner_image'],'full');
}


$saneem_section= get_post($section_id);
$saneem_section_title= $saneem_section->post_title;
$saneem_section_description= $saneem_section->post_content;

?>



<div class="site-blocks-cover overlay" style="background-image: url(<?php echo esc_url( $saneem_banner_image[0]);?>);" data-aos="fade" id="home-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
             <div class="col-md-8 mt-lg-5 text-center">
                 <h1 class="text-uppercase mb-5" data-aos="fade-up">
                <?php echo esc_html($saneem_section_meta['Site_description']); ?>
                 </h1>
                
                <div data-aos="fade-up" data-aos-delay="100">
                    - <a href="<?php echo esc_url($saneem_section_meta['button_target']); ?>" class="btn smoothscroll btn-primary mr-2 mb-2">
                    <?php echo esc_html($saneem_section_meta['button_title']); ?>
                    </a>
                    - </div>
                 </div>

        </div>
    </div>

    <a href="#about-section" class="mouse smoothscroll">
        <span class="mouse-icon">
            <span class="mouse-wheel"></span>
        </span>
    </a>
</div>