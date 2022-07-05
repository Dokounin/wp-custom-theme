<?php

get_header();
?>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
    ?>
        <article class="bg-slate-400">
            <h2 class="text-4xl"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h2>
        </article>
    <?php
    endwhile;
else:
    ?>
    <p>Aucun post n'a été trouvé</p>
    <?php
endif; ?>

<?php
get_footer();