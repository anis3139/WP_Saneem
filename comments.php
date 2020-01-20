 <div class="pt-5">
     <h3 class="mb-5">
         <?php
                $saneem_cn = get_comments_number();
                if ( $saneem_cn <= 1 ) {
                    echo esc_html($saneem_cn) . " " . __( "Comment", "saneem" );
                } else {
                    echo esc_html($saneem_cn) . " " . __( "Comments", "saneem" );
                }
                ?>
     </h3>
     
     
     <ul class="comment-list">
     <?php
                wp_list_comments(
                    
                );
                ?>
     </ul>
     <div class="comments-pagination">
                <?php
                the_comments_pagination( array(
                    'screen_reader_text' => __( 'Pagination', 'saneem' ),
                    'prev_text'          => '<' . __( 'Previous Comments', 'saneem' ),
                    'next_text'          => '>' . __( 'Next Comments', 'saneem' ),
                ) );
                ?>
            </div>
     <div class="comment-form-wrap pt-5">
        
         <h3 class="h2">
                    <?php _e("Add Comment","saneem"); ?>
                </h3>

                <?php
                comment_form();
                ?>

         
     </div>
 </div>
