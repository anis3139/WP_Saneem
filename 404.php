<?php
get_header();
?>


<?php 
$saneem_banner_image=get_template_directory_uri().'/assets/images/404-Frog.png';

?>



    <div class="site-blocks-cover header overlay" style="background-image: url(<?php echo $saneem_banner_image;?>);" data-aos="fade" id="section-banner">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 mt-lg-5 text-center">
                    <h1 class="text-uppercase" data-aos="fade-up" data-aos-delay="300">
                        <?php
                    _e( "Sorry! We couldn't find what you were looking for", "saneem" );
                    ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>



<?php
get_footer();
