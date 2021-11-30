<?php 
// Template Name: About Us
the_post();
get_header();
?>

    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">

        <article class="row format-standard">
            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                    <?php the_post_thumbnail( 'large' ); ?>
                </div>
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">
            	<?php the_content(); ?>
            </div> <!-- end s-content__main -->
            <div class="row block-1-2 block-tab-full">
            <?php
            if(is_active_sidebar( 'sidebar-1' )) {
                dynamic_sidebar( 'sidebar-1' );
            }
            ?>
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