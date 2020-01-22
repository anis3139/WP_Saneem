<?php get_header(); ?>
<?php 
$saneem_featured_image = get_the_post_thumbnail_url(null, "large");
?>
<div class="site-blocks-cover overlay" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/search-1.jpg">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9 mt-lg-5 text-white text-center">
                <h1><?php _e('Search Results','saneem');?></h1>
            </div>
        </div>
    </div>
</div>
<?php ?>
<body<?php body_class(); ?>>
    <div class="col-md-4 pt-5 offset-md-4">
        <?php
        echo get_search_form();
        ?>
        
        
        <?php
        if(is_search()){
        ?>
        <h3><span  class="text-primary"><?php _e("You searched for:","saneem") ?></span> <?php the_search_query(); ?></h3>
        <?php
         }
        ?>
        
    </div>
    <div class="posts single-page">
        <?php
        if ( ! have_posts() ):
            ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 p-3 bg-gradient-warning text-danger text-center">
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
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>