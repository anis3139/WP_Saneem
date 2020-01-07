<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-5">
                        <?php 
                         if ( is_active_sidebar( "footer-sidebar-1" ) ) {
                        dynamic_sidebar( "footer-sidebar-1" );
                    }
                    ?>
                    </div>
                    <div class="col-md-3 ml-auto">
                        <?php 
                         if ( is_active_sidebar( "footer-sidebar-2" ) ) {
                        dynamic_sidebar( "footer-sidebar-2" );
                    }
                    ?>

                    </div>
                    <div class="col-md-3">
                        <?php 
                         if ( is_active_sidebar( "footer-sidebar-3" ) ) {
                        dynamic_sidebar( "footer-sidebar-3" );
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                   <?php 
                         if ( is_active_sidebar( "footer-sidebar-4" ) ) {
                        dynamic_sidebar( "footer-sidebar-4" );
                    }
                    ?>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                      <?php 
                         if ( is_active_sidebar( "footer-sidebar-5" ) ) {
                        dynamic_sidebar( "footer-sidebar-5" );
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</footer>

</div> <!-- .site-wrap -->


<?php wp_footer(); ?>


</body>

</html>
