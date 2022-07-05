<?php

get_header();
?>
<?php
if (have_posts()) :
        the_post();
    ?>
        <article class="bg-slate-400">
            <h2><?php the_title(); ?></h2>
             <?php
             if ( has_post_thumbnail() ):?> 
              <div>
                 <?php the_post_thumbnail( 'large' ); ?>
              </div> 
             <?php endif;?>
            <p><?php the_content(); ?></p>
        </article>
    <?php
endif; ?>
<?php
get_footer();