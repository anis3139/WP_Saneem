<?php get_header();?>
<?php 
$saneem_layout_class="col-md-8";
$saneem_layout_class_second="col-md-6 col-lg-6 mb-4 mb-lg-6";
if(!is_active_sidebar("sidebar-blog")){
    $saneem_layout_class="col-md-12";
    $saneem_layout_class_second="col-md-4 col-lg-4 mb-4 mb-lg-4";
};

$saneem_featured_image = get_the_post_thumbnail_url(null, "large");
?>



<div class="site-blocks-cover overlay" style="background-image: url(<?php echo $saneem_featured_image;?>);" data-aos="fade">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9 mt-lg-5 text-center">
                <h1><?php the_title();?></h1>
                <p class="post-meta"><a href="<?php the_permalink(); ?>"><?php echo get_the_date();?></a> &bull; <?php echo _e('Posted by','saneem');?> <a href="#"> <?php echo the_author();?></a></p>
            </div>
        </div>
    </div>
</div>
<?php ?>
<div class="container single-page">
    <div class="row">
        <?php 
                if(is_active_sidebar("sidebar-blog")):
            ?>
        <div class="col-md-4">
            <div class="sidebar-box">
                <?php 
                         if ( is_active_sidebar( "sidebar-blog" ) ) {
                        dynamic_sidebar( "sidebar-blog" );
                            }
                          ?>
            </div>
        </div>
        <?php endif; ?>
        <div class="<?php echo $saneem_layout_class; ?>">
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
                        <div class="<?php echo $saneem_layout_class_second; ?>" data-aos="fade-up" data-aos-delay="200">
                            <div class="h-entry">
                                <a href="<?php the_permalink();?>">
                                    <?php 
                        if(has_post_thumbnail()){
                        the_post_thumbnail("large",array("class"=>"img-fluid"));
                        }
                        ?>
                                </a>
                                <h2 class="font-size-regular"><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></h2>
                                <div class="meta mb-4"><a href="<?php the_author_posts_link()?>"><?php echo the_author();?></a> <span class="mx-2">&bullet;</span> <a href="<?php the_permalink(); ?>"><?php echo get_the_date();?></a><span class="mx-2">&bullet;</span> <a href="#"><?php echo get_the_tag_list("<span>",",&nbsp","</span>");?></a></div>
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
