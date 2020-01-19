<?php get_header();?>
<div class="container single-page">
    <div class="row">
        <div class="col-md-4 offsate-md-1">
            <div class="sidebar-box">
                
                        <?php 
                         if ( is_active_sidebar( "sidebar-blog" ) ) {
                        dynamic_sidebar( "sidebar-blog" );
                    }
                    ?>
            </div>
        </div>
        <div class="col-md-8 offsate-md-1">
            <section <?php post_class();?> class="site-section" id="blog-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 text-center" data-aos="fade">
                            <h2 class="section-title mb-3"><?php _e('Our Blog','saneem');?></h2>
                        </div>
                    </div>

                    <div class="row">
                        <?php 
                while(have_posts()):
                the_post();
                    ?>
                        <div class="col-md-6 col-lg-6 mb-4 mb-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="h-entry">
                                <a href="single.html">
                                    <?php 
                        if(has_post_thumbnail()){
                        the_post_thumbnail("large",array("class"=>"img-fluid"));
                        
                        }
                        ?>
                                </a>
                                <h2 class="font-size-regular"><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></h2>
                                <div class="meta mb-4"><a href="<?php the_author_posts_link()?>"><?php echo the_author();?></a> <span class="mx-2">&bullet;</span> <?php echo get_the_date();?><span class="mx-2">&bullet;</span> <a href="#"><?php echo get_the_tag_list("<span>",",&nbsp","</span>");?></a></div>
                                <p><?php the_excerpt();?></p>
                                <p><a href="<?php the_permalink();?>"><?php _e('Continue Reading...','saneem');?></a></p>
                            </div>
                        </div>
                        <?php endwhile; ?>

                    </div>
                </div>
            </section>

        </div>
    </div>
</div>



<div class="container paginations">
    <div class="row">
        <div class="col-md-4"> </div>
        <div class="col-md-8">
            <?php the_posts_pagination(
                    array(
                        screen_reader_text=>" ",
                    )
                );?>
        </div>
    </div>
</div>


<?php get_footer();?>
