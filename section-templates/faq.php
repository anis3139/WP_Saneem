<?php
global $saneem_section_id;
$saneem_section_meta        = get_post_meta( $saneem_section_id, 'saneem_faq_sections', true );
$saneem_section             = get_post( $saneem_section_id );
$saneem_section_title       = $saneem_section->post_title;
$saneem_section_description = $saneem_section->post_content;
?>


<div class="row site-section" id="faq-section">
    <div class="col-12 text-center" data-aos="fade">
        <h2 class="section-title"><?php echo esc_html($saneem_section_title);?></h2>
    </div>
</div>
  <?php 
         $saneem_faqs= $saneem_section_meta['faq'];
        if($saneem_faqs):
         ?>
<div class="row saneem-custom-padding">
     <?php foreach ($saneem_faqs as $saneem_faq): ?>
    <div class="col-lg-6">
      
        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-black h5 mb-4"><?php echo esc_html($saneem_faq['faq_title']); ?></h3>
            <?php echo apply_filters('the_content',$saneem_faq['faq_descriptioin']); ?>
        </div>
       
    </div>
    <?php endforeach;?>
</div>
<?php endif; ?>