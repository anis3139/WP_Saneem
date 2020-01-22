<?php 
$saneem_banner_image=get_template_directory_uri().'/assets/images/banner-image.png';
$saneem_featured_image=get_the_post_thumbnail_url(null, "large");
if(isset($saneem_featured_image)){
$saneem_banner_image= $saneem_featured_image;
}
?>



<div class="site-blocks-cover header overlay" style="background-image: url(<?php echo $saneem_banner_image;?>);" data-aos="fade" id="section-banner">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 mt-lg-5 text-center">
                <h1 class="text-uppercase mb-5" data-aos="fade-up" data-aos-delay="300">
                    <?php bloginfo( 'description' ); ?>
                </h1>
            </div>
        </div>
    </div>
</div>



