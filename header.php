<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?> data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-xl-2">
                        <h1 class="mb-0 site-logo"><a href="<?php echo site_url();?>" class="mb-0"><?php _e("Saneem","saneem");?></a></h1>
                    </div>

                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <?php
		                          echo wp_nav_menu( array(
		                          	'location' => 'primary',
                                    'menu_class'=>'site-menu main-menu js-clone-nav mr-auto d-none d-lg-block'
		                          ) );
		                      ?>

                        </nav>
                    </div>


                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

                </div>
            </div>

        </header>
