<?php 

get_header();

if(have_posts()):
    while(have_posts()): the_post(); ?>
    
    <div class="block">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
    <?php the_excerpt();?>
    </div>

    
    <?php
    endwhile;

else:
    echo "No posts yet.";

endif;


get_footer();

?>