<?php
    $source_file = "";
     if(function_exists("the_field")) : 
        $source_file = get_field("source_file");
    ?>
<article class="masonry__brick entry format-audio" data-aos="fade-up">

    <div class="entry__thumb">
        <a href="single-standard.html" class="entry__thumb-link">
            <?php the_post_thumbnail( 'large' ); ?>
        </a>
        <div class="audio-wrap">
            <audio id="player" src="<?php echo esc_url($source_file); ?>/assets/media/AirReview-Landmarks-02-ChasingCorporate.mp3" width="100%" height="42" controls="controls"></audio>
        </div>
    </div>

    <?php get_template_part('template-parts/common/summery'); ?>

</article> <!-- end article -->
<?php endif; ?>