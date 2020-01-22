<?php 
get_header();
?>
<?php get_template_part("template-parts/hero");?>



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
                <div class="post-pagination pt-5">
                    <h3><?php _e('Next & Previous Post');?></h3>
                    <?php 
                    next_post_link();
                    echo "<br/>";
                    previous_post_link();
                    ?>
                </div>
                <div class="related-post pt-5">
                    <?php if ( function_exists( "the_field" ) ) : ?>
                    <div>
                        <h1><?php _e( "Related Posts", "saneem" ); ?></h1>
                        <?php
                            $related_posts = get_field( "related_posts" );
                            $saneem_rp      = new WP_Query( array(
                               'post__in' => $related_posts,
                           'orderby'  => 'post__in',
                           ) );
                         while ( $saneem_rp->have_posts() ) {
                         $saneem_rp->the_post();
                      ?>
                        <a href="<?php the_permalink();?>">
                            <h4><?php the_title(); ?></h4>
                        </a>
                        <?php
                           }
                          wp_reset_query();
                        ?>
                    </div>
                    <?php endif; ?>
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
                    <h3 class="text-primary"><b><?php echo _e('Posted by','saneem');?></b></h3>
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
