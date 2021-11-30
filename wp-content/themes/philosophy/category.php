<?php get_header() ?>


<!-- s-content
================================================== -->
<section class="s-content">
     <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1><?php _e('Category:', 'philosophy'); ?> <?php single_cat_title(); ?></h1>

                <p class="lead"><?php echo category_description(); ?></p>
            </div>
        </div>
    <div class="row masonry-wrap">
        <div class="masonry">

            <div class="grid-sizer"></div>

            <?php
            while(have_posts()){
                the_post();
                get_template_part("page-templates/template-parts/content",get_post_format());
            }
            if(!have_posts()) {?>
                <h3 class="text-center"><?php _e('Sorry Post Not Found', 'philosophy'); ?></h3>
            <?php }
            ?>

        </div> <!-- end masonry -->
    </div> <!-- end masonry-wrap -->

    <div class="row">
        <div class="col-full">
            <nav class="pgn">
                <?php philosophy_pagination(); ?>
            </nav>
        </div>
    </div>


</section> <!-- s-content -->


<?php get_footer(); ?>