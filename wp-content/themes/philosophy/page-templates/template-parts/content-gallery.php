<article class="masonry__brick entry format-gallery" data-aos="fade-up">
                        
                    <div class="entry__thumb slider">
                        <?php
                        if(class_exists('Attachments')) : 
                            $attachments = new Attachments("gallery");
                            if($attachments->exist()) {?>
                                <div class="slider__slides">
                                    <?php while( $attachment = $attachments->get() ) : ?>
                                    <div class="slider__slide">
                                        <?php echo $attachments->image('large'); ?>
                                    </div>
                                    <?php endwhile; ?>

                                </div>
                            <?php } endif;
                        ?>

                    </div>
    
                    <?php get_template_part('template-parts/common/summery'); ?>
    
                </article> <!-- end article -->