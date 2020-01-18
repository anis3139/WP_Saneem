<?php
global $saneem_section_id;
$saneem_section_meta        = get_post_meta( $saneem_section_id, 'saneem_contact_sections', true );
$saneem_section             = get_post( $saneem_section_id );
$saneem_section_title       = $saneem_section->post_title;
$saneem_section_description = $saneem_section->post_content;
?>
<section class="site-section bg-light" id="contact-section" data-aos="fade">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3"><?php echo esc_html($saneem_section_title);?></h2>
            </div>
        </div>
        <div class="row mb-5">



            <div class="col-md-4 text-center">
                <p class="mb-4">
                    <span class="icon-room d-block h4 text-primary"></span>
                    <span><?php echo esc_html($saneem_section_meta['adress']); ?></span>
                </p>
            </div>
            <div class="col-md-4 text-center">
                <p class="mb-4">
                    <span class="icon-phone d-block h4 text-primary"></span>
                    <a href="#"><?php echo esc_html($saneem_section_meta['phone']); ?></a>
                </p>
            </div>
            <div class="col-md-4 text-center">
                <p class="mb-0">
                    <span class="icon-mail_outline d-block h4 text-primary"></span>
                    <a href="#"><?php echo esc_html($saneem_section_meta['email']); ?></a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-5">



                <form action="#" class="p-5 bg-white">
                    <?php wp_nonce_field('contact','contact');?>
                    <h2 class="h4 text-black mb-5"><?php _e('Contact Form','saneem');?></h2>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="name"><?php _e('Your Name','saneem')?></label>
                            <input type="text" id="name" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="email"><?php _e('Email','saneem')?></label>
                            <input type="email" id="email" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject"><?php _e('Phone','saneem')?></label>
                            <input type="subject" id="subject" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="message"><?php _e('Message','saneem')?></label>
                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" id="send-massage" value="Send Message" class="btn btn-primary btn-md text-white">
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>
</section>
