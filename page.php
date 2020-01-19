<?php 
get_header();
?>
<?php 
$saneem_featured_image = get_the_post_thumbnail_url(null, "large");
?>

<div class="site-blocks-cover overlay" style="background-image: url(<?php echo $saneem_featured_image;?>);" data-aos="fade">
    <div class="container">
        <div class="row align-items-center justify-content-center">


            <div class="col-md-9 mt-lg-5 text-center">
                <h1><?php the_title();?></h1>
                <p class="post-meta"><?php echo get_the_date();?> &bull; <?php echo _e('Posted by','saneem');?> <a href="#"> <?php echo the_author();?></a></p>

            </div>

        </div>
    </div>
</div>



<section class="site-section">
    <div class="container">
        <div class="row">

            <div class="col-md-10 offsate-md-1 blog-content">
                <?php 
            while(have_posts()):
              the_post();?>
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <?php 
                        if(has_post_thumbnail()){
                        the_post_thumbnail("large",array("class"=>"img-fluid"));
                        }
                        ?>
                    </div>

                </div>
                <p class="lead">
                    <?php 
                    the_content();
                    wp_link_pages();
                    ?>
                </p>
                
                <?php endwhile; ?>
   
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>
