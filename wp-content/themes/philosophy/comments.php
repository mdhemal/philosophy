<div class="comments-wrap">

            <div id="comments" class="row">
                <div class="col-full">

                    <h3 class="h2">
                        <?php
                        $comments_number = get_comments_number();
                        if($comments_number <= 0 ) {?>
                            <h4><?php _e('No Comments', 'philosophy'); ?></h4>
                        <?php } else {?>
                            <h4><?php echo $comments_number; ?> <?php _e('Comments', 'philosophy'); ?></h4>
                        <?php }
                        ?>
                    </h3>

                    <!-- commentlist -->
                   <ol class="commentlist">
                       <?php
                           wp_list_comments( array(
                            'screen_render_text' => '',
                            'prev_text' => __('Prev Comments', 'philosophy'),
                            'next_text' => __('Next Comments', 'philosophy')
                           ) );
                       ?>
                   </ol>


                    <!-- respond
                    ================================================== -->
                    <div class="respond">

                        <h3 class="h2"><?php _e('Add Comment','philosophy'); ?></h3>

                        <?php comment_form(); ?>

                    </div> <!-- end respond -->

                </div> <!-- end col-full -->

            </div> <!-- end row comments -->
        </div> <!-- end comments-wrap -->
