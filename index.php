<?php 

get_header();

if(have_posts()):
    while(have_posts()): the_post(); ?>
    
    <div class="block post_list">
        <?php if(has_post_thumbnail()):?>
            <div style="width:40%;min-width:40%;padding:20px;">
                <img src="<?php the_post_thumbnail_url(); ?>">
            </div>
        <?php endif; ?>
        <div>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
            <?php the_excerpt();?>
        </div>
    </div>

    
    <?php
    endwhile;

else:
    echo "No posts yet.";

endif;


get_footer();

?>