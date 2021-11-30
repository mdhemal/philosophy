 <header class="header">
            <div class="header__content row">
                <div class="header__logo">
                    <a class="logo" href="<?php echo site_url("/"); ?>">
                        <?php if(has_custom_logo()) {
                            echo the_custom_logo();
                        } else {
                            echo get_bloginfo( 'name' );
                        } ?>
                    </a>
                </div> <!-- end header__logo -->
                <ul class="header__social">
                    <li>
                        <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </li>
                </ul> <!-- end header__social -->

                <a class="header__search-trigger" href="#0"></a>

                <div class="header__search">

                    <?php get_search_form(); ?>
        
                    <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

                </div>  <!-- end header__search -->


                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6"><?php _e('Site Navigation', 'philosophy'); ?></h2>

                    <?php

                    $menu =  wp_nav_menu(array(
                    	'menu_location' => 'topmenu',
                    	'menu_class' => 'header__nav',
                        'echo' => false
                    ));
                    $menu = str_replace('menu-item-has-children', 'menu-item-has-children has-children', $menu);
                    echo $menu;

                    ?>
                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu"><?php _e('Close', 'philosophy'); ?></a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->