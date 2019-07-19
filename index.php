<?php 

get_header();

if(have_posts()):
    $IdCounter = 0;
    while(have_posts()): the_post(); $IdCounter++;?>
    
    <div class="block post_list" id="<?php echo $IdCounter; ?>">
        <?php if(has_post_thumbnail()):?>
            <div style="width:40%;min-width:40%;padding:20px;">
                <img src="<?php the_post_thumbnail_url(); ?>">
            </div>
        <?php endif; ?>
        <div style="padding:20px;">
            <h2 class="post_title" onclick="change_zoom_css(<?php echo $IdCounter; ?>);"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
            <?php the_excerpt();?>
        </div>
    </div>

    <script>
        function change_zoom_css(id){
            document.getElementById(id).classList.add("block_zoom");
        }
    </script>
    
    <?php
    endwhile;

else:
    echo "No posts yet.";

endif;


get_footer();

?>