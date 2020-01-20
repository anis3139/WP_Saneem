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
                <p class="post-meta"><?php echo get_the_date();?> &bull; <?php echo _e('Posted by:','saneem');?> <a href="#"> <?php echo get_the_author_meta( "display_name" ); ?></a></p>

            </div>

        </div>
    </div>
</div>



<section class="site-section">
    <div class="container">
        <div class="row">

            <div class="col-md-8 blog-content">
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
                <div class="pt-5 s-comments-box">
                   <?php endwhile; ?>
                    <?php
                        if(!post_password_required()){
                            comments_template();
                        }
                        ?>
                </div>



            </div>
            <div class="col-md-4 sidebar">
                <div class="sidebar-box">
                    <?php
                if(is_search()){
                    ?>
                    <h3><?php _e("You searched for","saneem") ?>: <?php the_search_query(); ?></h3>
                    <?php
                }
                ?>
                    <?php
                echo get_search_form();
                ?>

                </div>
                <div class="sidebar-box">
                    <div class="categories">
                        <?php 
                         if ( is_active_sidebar( "sidebar-1" ) ) {
                        dynamic_sidebar( "sidebar-1" );
                    }
                    ?>
                    </div>
                </div>

                <div class="sidebar-box">
                    <?php echo get_avatar( get_the_author_meta( "ID"));?>
                    <h3><?php echo get_the_author_meta( "display_name" ); ?></h3>
                    <p><?php echo get_the_author_meta( "description" ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container paginations">
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-8">

        </div>
    </div>
</div>

<?php get_footer();?>
