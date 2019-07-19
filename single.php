<?php 

get_header();
?>
    
    <div class="block">
    <h2 class="post_title"><a href="<?php the_post(); the_permalink(); ?>"><?php the_title();?></a></h2>
    <?php the_content();?>
    </div>

    
    <?php
get_footer();
?>