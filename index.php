<h1>hello world!</h1>

<?php 

get_header();

if(have_posts()):
    while(have_posts()): the_post(); ?>
    
    <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
    <?php the_excerpt();?>

    
    <?php
    endwhile;

else:
    echo "No posts yet.";

endif;


get_footer();

?>