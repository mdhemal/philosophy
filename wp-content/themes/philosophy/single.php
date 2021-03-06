<?php 
the_post();
get_header();
?>

    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">

        <article class="row format-standard">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    <?php the_title(); ?>
                </h1>
                <ul class="s-content__header-meta">
                    <li class="date"><?php echo get_the_date(); ?></li>
                    <li class="cat">
                        <?php _e('In', 'philosophy'); ?>
                        <?php the_category(" "); ?>
                    </li>
                </ul>
            </div> <!-- end s-content__header -->
    
            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                    <?php the_post_thumbnail( 'large' ); ?>
                </div>
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">
            	<?php the_content(); ?>
            	<p class="s-content__tags">
                    <span><?php echo esc_html('Post Tags', 'philosophy'); ?></span>

                    <span class="s-content__tag-list">
                        <?php echo get_the_tag_list( '','','' ); ?>
                    </span>
                </p> <!-- end s-content__tags -->

                <div class="s-content__author">
                    <?php echo get_avatar(get_the_author_meta("ID")); ?>

                    <div class="s-content__author-about">
                        <h4 class="s-content__author-name">
                            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>"><?php _e(get_the_author_meta('display_name')); ?></a>
                        </h4>
                    
                        <p><?php _e(get_the_author_meta("description")); ?>
                        </p>
                        <?php
                        	$facebook = get_field('facebook', 'user_'.get_the_author_meta("ID"));
                        	$twitter = get_field('twitter', 'user_'.get_the_author_meta("ID"));
                        	$youtube = get_field('youtube', 'user_'.get_the_author_meta("ID"));
                        	$instagram = get_field('instagram', 'user_'.get_the_author_meta("ID"));
                         ?>
                        <ul class="s-content__author-social">
                        	<?php if(!empty($facebook)) : ?>
                           <li><a href="<?php echo esc_url($facebook); ?>"><?php _e("Facebook", "philosophy"); ?></a></li>
	                       <?php endif; ?>
	                       <?php if(!empty($twitter)) : ?>
                           <li><a href="<?php echo esc_url($twitter); ?>"><?php _e("Twitter", "philosophy"); ?></a></li>
                            <?php endif; ?>
                           <?php if(!empty($instagram)) : ?>
                           <li><a href="<?php echo esc_url($youtube); ?>"><?php _e("Youtube", "philosophy"); ?></a></li>
                            <?php endif; ?>
                           <?php if(!empty($instagram)) : ?>
                           <li><a href="<?php echo esc_url($instagram); ?>"><?php _e("Instagram", "philosophy"); ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="s-content__pagenav">
                    <div class="s-content__nav">
                    	<?php 
                    	$get_prev_post = get_previous_post();
                    	 ?>
                    	 <?php if(!empty($get_prev_post)) : ?>
                        <div class="s-content__prev">
                            <a href="<?php echo esc_url(get_the_permalink($get_prev_post)); ?>" rel="prev">
                                <span><?php _e('Previous Post', 'philosophy'); ?></span>
                                <?php echo get_the_title($get_prev_post) ?>
                            </a>
                        </div>
	                    <?php endif; ?>
	                    <?php 
                    	$get_next_post = get_next_post();
                    	 ?>
                    	 <?php if(!empty($get_next_post)) : ?>
                        <div class="s-content__next">
                            <a href="<?php echo esc_url(get_the_permalink($get_next_post)); ?>" rel="next">
                                <span><?php _e("Next Post", "philosophy"); ?></span>
                                <?php echo  get_the_title($get_next_post) ?>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div> <!-- end s-content__pagenav -->

            </div> <!-- end s-content__main -->

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