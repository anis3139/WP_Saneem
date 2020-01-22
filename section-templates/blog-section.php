<?php
global $saneem_section_id;
$saneem_section             = get_post( $saneem_section_id );
$saneem_section_title       = $saneem_section->post_title;
$saneem_section_description = $saneem_section->post_content;
?>



<section class="site-section" id="<?php echo esc_attr($saneem_section->post_name);?>">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
                <h2 class="section-title mb-3">
                    <?php echo esc_html($saneem_section_title);?>
                </h2>
            </div>
        </div>

        <div class="row">
            <?php
    $saneem_popular_posts = new WP_Query( array(
        'posts_per_page'      => 3,
        'ignore_sticky_posts' => 1,
        'orderby'             => "comment_count"
    ) );
    while ( $saneem_popular_posts->have_posts() ) {
        $saneem_popular_posts->the_post();
    ?>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
                <div class="h-entry">
                    <a href="<?php the_permalink();?>">
                        <?php 
                        if(has_post_thumbnail()){
                        the_post_thumbnail("large",array("class"=>"img-fluid"));
                        }
                        ?>
                    </a>
                    <h2 class="font-size-regular"><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></h2>
                    <div class="meta mb-4"><em><?php echo the_author_posts_link();?></em><span class="mx-2">&bullet;</span> <a href="<?php the_permalink(); ?>"><?php echo get_the_date();?></a><span class="mx-2">&bullet;</span> <a href="#"><?php echo get_the_tag_list("<span>",",&nbsp","</span>");?></a></div>
                    <p><?php the_excerpt();?></p>
                    <p><a href="<?php the_permalink();?>"><?php _e('Continue Reading...','saneem');?></a></p>
                </div>
            </div>
            <?php
   }
   wp_reset_query();
?>
        </div>
    </div>
