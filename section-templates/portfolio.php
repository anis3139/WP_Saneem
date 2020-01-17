<?php
global $section_id;
$saneem_section_meta        = get_post_meta( $section_id, 'saneem_portfolio_sections', true );
$saneem_section             = get_post( $section_id );
$saneem_section_title       = $saneem_section->post_title;
$saneem_section_description = $saneem_section->post_content;
?>
<section class="site-section" id="portfolio-section">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 text-center" data-aos="fade">
                <h2 class="section-title mb-3"><?php echo esc_html($saneem_section_title);?></h2>
            </div>
        </div>
        <?php
                $saneem_gallery_items   = $saneem_section_meta['portfolio'];
                $saneem_item_categories = [];
                foreach ( $saneem_gallery_items as $saneem_gallery_item ) {
                $saneem_gallery_item_categories = explode( ",", $saneem_gallery_item['category'] );
                foreach ( $saneem_gallery_item_categories as $saneem_gallery_item_category ) {
                    $saneem_gallery_item_category = trim( $saneem_gallery_item_category );
                if ( ! in_array( $saneem_gallery_item_category, $saneem_item_categories ) ) {
                    array_push( $saneem_item_categories, $saneem_gallery_item_category );
                }
            }
        }
        ?>
        <div class="row justify-content-center mb-5" data-aos="fade-up">
            <div id="filters" class="filters text-center button-group col-md-7">
                <button class="btn btn-primary active" data-filter="*"><?php _e('All','saneem');?></button>
                <?php
                        foreach ( $saneem_item_categories as $saneem_item_category ):
                    ?>
                <button class="btn btn-primary" data-filter=".<?php echo esc_attr( $saneem_item_category ); ?>"><?php echo esc_html( $saneem_item_category ); ?></button>
                <?php endforeach; ?>
            </div>
        </div>
      
        <div id="posts" class="row no-gutter">
             <?php 
            foreach($saneem_gallery_items as $saneem_gallery_item):
            $saneem_item_class = str_replace( ",", " ", $saneem_gallery_item['category'] );
            $saneem_portfolio_image_id = $saneem_gallery_item['portfolio_image'];
            $saneem_portfolio_thumbnail = wp_get_attachment_image_src($saneem_portfolio_image_id,'medium');
            $saneem_portfolio_large = wp_get_attachment_image_src($saneem_portfolio_image_id,'large');
            ?>
            <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4 <?php echo esc_attr( $saneem_item_class ); ?>">
                <a href="<?php echo esc_url($saneem_portfolio_large[0]); ?>" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="<?php echo esc_url($saneem_portfolio_thumbnail[0]); ?>">
                </a>
            </div>
            <?php endforeach;?>
        </div>
        
    </div>
</section>