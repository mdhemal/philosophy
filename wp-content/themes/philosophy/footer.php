
    <!-- s-extra
    ================================================== -->
    <section class="s-extra">

        <div class="row top">

            <div class="col-eight md-six tab-full popular">
                <h3>Popular Posts</h3>

                <div class="block-1-2 block-m-full popular__posts">
                    <?php
                    $philosophy_popular_posts = new WP_Query(array(
                        'posts_per_page' => '6',
                        'ignore_sticky_posts' => '1',
                        'orderby' => 'comment_count'
                    ));
                    if(!empty($philosophy_popular_posts)) {
                        while($philosophy_popular_posts->have_posts()) {
                            $philosophy_popular_posts->the_post();?>
                            <article class="col-block popular__post">
                                <?php if(has_post_thumbnail()) : ?>
                                <a href="<?php echo esc_url(get_the_permalink()); ?>" class="popular__thumb">
                                    <?php the_post_thumbnail( 'large' ) ?>
                                </a>
                                <?php endif; ?>
                                <h5><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a></h5>
                                <section class="popular__meta">
                                        <span class="popular__author"><span><?php _e('By', 'philosophy'); ?></span> <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")); ?>"> John Doe</a></span>
                                    <span class="popular__date"><span><?php _e("on", "philosophy"); ?></span> <time datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time></span>
                                </section>
                            </article>
                        <?php } wp_reset_query(); } ?>
                </div> <!-- end popular_posts -->
            </div> <!-- end popular -->
            
            <div class="col-four md-six tab-full about">
                <?php
                if(is_active_sidebar('footer-widget')) {
                    dynamic_sidebar( 'footer-widget' );
                }
                ?>
            </div> <!-- end about -->

        </div> <!-- end row -->

        <div class="row bottom tags-wrap">
            <div class="col-full tags">
                <h3>Tags</h3>

                <div class="tagcloud">
                    <?php the_tags('','',''); ?>
                </div> <!-- end tagcloud -->
            </div> <!-- end tags -->
        </div> <!-- end tags-wrap -->

    </section> <!-- end s-extra -->



    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">
                
                <div class="col-two md-four mob-full s-footer__sitelinks">
                        
                    <h4>Quick Links</h4>

                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'footer-1',
                            'menu_class' => 's-footer__linklist'
                        )
                    ) ?>

                </div> <!-- end s-footer__sitelinks -->

                <div class="col-two md-four mob-full s-footer__archives">
                        
                    <h4>Archives</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="#0">January 2018</a></li>
                        <li><a href="#0">December 2017</a></li>
                        <li><a href="#0">November 2017</a></li>
                        <li><a href="#0">October 2017</a></li>
                        <li><a href="#0">September 2017</a></li>
                        <li><a href="#0">August 2017</a></li>
                    </ul>

                </div> <!-- end s-footer__archives -->

                <div class="col-two md-four mob-full s-footer__social">
                        
                    <h4>Social</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="#0">Facebook</a></li>
                        <li><a href="#0">Instagram</a></li>
                        <li><a href="#0">Twitter</a></li>
                        <li><a href="#0">Pinterest</a></li>
                        <li><a href="#0">Google+</a></li>
                        <li><a href="#0">LinkedIn</a></li>
                    </ul>

                </div> <!-- end s-footer__social -->

                <div class="col-five md-full end s-footer__subscribe">
                        
                    <h4>Our Newsletter</h4>

                    <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.</p>

                    <div class="subscribe-form">
                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                
                            <input type="submit" name="subscribe" value="Send">
                
                            <label for="mc-email" class="subscribe-message"></label>
                
                        </form>
                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>?? Copyright Philosophy 2018</span> 
                        <span>Site Template by <a href="https://colorlib.com/">Colorlib</a></span>
                    </div>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"></a>
                    </div>
                </div>
            </div>
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


   <?php wp_footer(); ?>

</body>

</html>