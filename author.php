<?php get_header();?>
<?php 
$saneem_featured_image = get_the_post_thumbnail_url(null, "large");
?>
<div class="site-blocks-cover overlay" style="background-image: url(<?php echo $saneem_featured_image;?>);" data-aos="fade">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9 mt-lg-5 text-center">
                <h1><?php the_title();?></h1>
                <p class="post-meta"><a href="<?php the_permalink(); ?>"><?php echo get_the_date();?></a> &bull; <?php echo _e('Posted by','saneem');?> <a href="#"> <?php echo the_author_posts_link();?></a></p>
            </div>
        </div>
    </div>
</div>
<?php ?>
<div class="container single-page">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <section <?php post_class();?> class="site-section" id="blog-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 text-center" data-aos="fade">
                            <h2 class="section-title mb-3">
                                
                <div class="sidebar-box">
                    <?php echo get_avatar( get_the_author_meta( "ID"));?>
                    <h3><?php echo get_the_author_meta( "display_name" ); ?></h3>
                    <h3><?php echo get_the_author_meta( "nicename" ); ?></h3>
                </div>
                            <?php _e('Post Under: ').single_tag_title();?></h2>
                        </div>
                        <br/>
                    </div>
                    <div class="row">
                        <?php 
                while(have_posts()):
                the_post();
                    ?>
                        <div class="col-md-10 offset-md-1" data-aos="fade-up" data-aos-delay="200">
                            <div class="h-entry">
                                <h2 class="font-size-regular text-center"><a class="bg-light text-primary" href="<?php the_permalink(); ?>"><?php echo the_title();?></a></h2>
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
        <div class="col-md-4">  <div class="pt-5">
                    <p><?php _e('Categories:','saneem');?> <a href="#"><?php echo get_the_category_list();?></a> <?php _e('Tags:','saneem');?> <?php echo get_the_tag_list("<span>",",&nbsp","</span>");?></p>
                </div></div>
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
