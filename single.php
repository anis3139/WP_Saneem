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
                <?php endwhile; ?>

                <!--
                <div class="pt-5">
                    <h3 class="mb-5">6 Comments</h3>
                    <ul class="comment-list">
                        <li class="comment">
                            <div class="vcard bio">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/person_1.jpg" alt="Free Website Template by Free-Template.co">
                            </div>
                            <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>
                        </li>

                        <li class="comment">
                            <div class="vcard bio">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>

                            <ul class="children">
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/person_1.jpg" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                        <p><a href="#" class="reply">Reply</a></p>
                                    </div>


                                    <ul class="children">
                                        <li class="comment">
                                            <div class="vcard bio">
                                                <img src="<?php echo get_template_directory_uri();?>/assets/images/person_1.jpg" alt="Image placeholder">
                                            </div>
                                            <div class="comment-body">
                                                <h3>Jean Doe</h3>
                                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                <p><a href="#" class="reply">Reply</a></p>
                                            </div>

                                            <ul class="children">
                                                <li class="comment">
                                                    <div class="vcard bio">
                                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/person_1.jpg" alt="Image placeholder">
                                                    </div>
                                                    <div class="comment-body">
                                                        <h3>Jean Doe</h3>
                                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                        <p><a href="#" class="reply">Reply</a></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="comment">
                            <div class="vcard bio">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>
                        </li>
                    </ul>
                     END comment-list 
                    

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form action="#" class="p-5 bg-light">
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                </div>
-->


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
