<?php 
// Template Name: Contact Page
the_post();
get_header();
?>

    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">
        <article class="row format-standard">
            <div class="s-content__media col-full">
                <div class="s-content__header col-full">
                    <h1 class="s-content__header-title">
                        <?php echo esc_html__('Feel Free To Contact Us.', 'philosophy'); ?>
                    </h1>
                    <div class="s-content__media col-full">
                        <div id="map-wrap">
                            <div id="map-container"></div>
                            <div id="map-zoom-in"></div>
                            <div id="map-zoom-out"></div>
                        </div> 
                    </div> <!-- end s-content__media -->
                </div> <!-- end s-content__header -->

            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">
            	<?php the_content(); ?>
            </div> <!-- end s-content__main -->
            <div class="row block-1-2 block-tab-full">
                <div class="row">
                    <?php
                        if(is_active_sidebar( 'contact-widget' )) {
                            dynamic_sidebar( 'contact-widget' );
                        }
                    ?>
                </div>
            </div>
            <div class="row">
                    <div class="col-12">
                        <?php if(!empty("the_field")) : ?>
                        <?php
                        $sortcode = get_field("sortcode_code");
                        if(!empty($sortcode)) {
                            echo do_shortcode( $sortcode );
                        }
                        endif;
                        ?>
                    </div>
                </div>
        </article>


        <!-- comments
        ================================================== -->
        <?php
        if(!post_password_required()) {
	        comments_template();
        } 
        ?>
    </section> <!-- s-content -->
<?php get_footer(); ?>