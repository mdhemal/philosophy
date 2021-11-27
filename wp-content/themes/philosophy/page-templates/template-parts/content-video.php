<?php
    $source_file = "";
     if(function_exists("the_field")) : 
        $source_file = get_field("source_file");
?>
<article class="masonry__brick entry format-video" data-aos="fade-up">
        
    <div class="entry__thumb video-image">
         <a href="<?php echo esc_url($source_file); ?>" class="entry__thumb-link">
            <?php the_post_thumbnail( 'large' ); ?>
        </a>
    </div>

    <?php get_template_part('template-parts/common/summery'); ?>

</article> <!-- end article -->
<?php endif; ?>