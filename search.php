<?php get_header(); ?>


<?php 
$saneem_featured_image = get_the_post_thumbnail_url(null, "large");
?>

<div class="site-blocks-cover overlay" style="background-image: url(<?php echo $saneem_featured_image;?>);" data-aos="fade">
    <div class="container">
        <div class="row align-items-center justify-content-center">


            <div class="col-md-9 mt-lg-5 text-center">
                <h1><?php the_title();?></h1>
                <p class="post-meta"><?php echo get_the_date();?> &bull; <?php echo _e('Posted by','saneem');?> <a href="#"> <?php echo the_author_posts_link();?></a></p>

            </div>

        </div>
    </div>
</div>

<?php ?>

<body<?php body_class(); ?>>
   <div class="container single-page text-center">
       <div class="row">
           <div class="col-md-12  bg-info text-white"><h1>
           <?php _e('Search Results','saneem');?>
           </h1></div>
       </div>
   </div>
    <div class="posts single-page">
        <?php
        if ( ! have_posts() ):
            ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>
                        <?php _e('No result found','saneem'); ?>
                        
                    </h4>
                </div>
            </div>
        </div>
        <?php endif;?>
    </div>


    <section class="site-section">
        <div class="container">
            <div class="row">

                <div class="col-md-10 offset-md-1 blog-content">
                    <?php 
                    while(have_posts()):
                        the_post();?>
                    <div class="row mb-5">
                       

                    </div>
                    <p class="lead">
                        <?php 
                    the_content();
                    wp_link_pages();
                    ?>
                    </p>
                    <div class="pt-5">
                        <p><?php _e('Categories:','saneem');?> <a href="#"><?php echo get_the_category_list();?></a> <?php _e('Tags:','saneem');?> <?php echo get_the_tag_list("<span>",",&nbsp","</span>");?></p>
                    </div>
                    <div class="post-pagination">
                        <?php 
                    next_post_link();
                    echo "<br/>";
                    previous_post_link();
                    ?>
                    </div>
                    <?php endwhile; ?>



                </div>


            </div>
        </div>
    </section>



    <?php get_footer(); ?>
