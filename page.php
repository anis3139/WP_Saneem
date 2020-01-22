<?php get_header();?>

<?php get_template_part("template-parts/hero");?>


<div class="container single-page">
    <div class="row">
        <div class="col-md-12">
            <section <?php post_class();?> class="site-section" id="blog-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center" data-aos="fade">
                            <h2 class="section-title mb-3"><?php the_title();?></h2>
                        </div>
                    </div>

                    <div class="row">
                            <?php 
                            while(have_posts()):
                            the_post();
                            ?>
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="h-entry">
                                <a href="single.html">
                                    <?php 
                        if(has_post_thumbnail()){
                        the_post_thumbnail("large",array("class"=>"img-fluid"));
                        
                        }
                        ?>
                                </a>
                                <h2 class="font-size-regular"><a href="<?php the_permalink(); ?>"><?php echo the_post();?></a></h2>
                                
                                <p><?php the_content();?></p>
                                
                            </div>
                        </div>
                        <?php endwhile; ?>

                    </div>
                </div>
            </section>

        </div>
    </div>
</div>


<?php get_footer();?>
