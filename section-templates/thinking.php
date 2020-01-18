<?php
global $saneem_section_id;
$saneem_section_meta        = get_post_meta( $saneem_section_id, 'saneem_thinking_sections', true );
$saneem_section             = get_post( $saneem_section_id );
$saneem_section_title       = $saneem_section->post_title;
$saneem_section_description = $saneem_section->post_content;
$saneem_thinking_image= wp_get_attachment_image_src($saneem_section_meta['thinking_image'],'full'); 
?>
<section class="site-section" id="about-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
                <h2 class="section-title mb-3"><?php echo esc_html($saneem_section_title);?></h2>
            </div>
        </div>
        <div class="row mb-5">
           
            <?php 
           
            ?>
            
            <div class="col-lg-6 ml-auto mb-5 order-1 order-lg-2" data-aos="fade" data-aos="fade-up" data-aos-delay="">
                <img src="<?php echo esc_url( $saneem_thinking_image[0]);?>" alt="Image" class="img-fluid rounded">
            </div>
            
            <div class="col-lg-6 order-2 order-lg-1" data-aos="fade">
                    <?php 
                         $saneem_thinkings= $saneem_section_meta['thinking'];
                        if($saneem_thinkings):
                    ?>
                <div class="row">
                    <?php foreach ($saneem_thinkings as $saneem_thinking): ?>
                    <div class="col-md-12 mb-md-5 mb-0 col-lg-6" data-aos="fade-up" data-aos-delay="">
                        <div class="unit-4">
                            <div class="unit-4-icon mr-4 mb-3"><span class="text-primary <?php echo esc_attr($saneem_thinking['thinking_icon']); ?>"></span></div>
                            <div>
                                <h3><?php echo esc_html($saneem_thinking['thinking_title']); ?></h3>
                                <p><?php echo esc_html($saneem_thinking['thinking_descriptioin']); ?></p>
                                <p class="mb-0"><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                 <?php endif; ?>
            </div>
        </div>
    </div>
</section>
