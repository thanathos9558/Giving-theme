<?php get_header(); ?>
<hr>
<div id="contenido" class="container">

    <?php while (have_posts()) : the_post(); ?>
        <div class="post-img">
            <?php the_post_thumbnail('destacada'); ?>
        </div>
        <h2> <?php the_title(); ?></h2>
        <?php the_content(); ?>

    <?php endwhile; ?>

    <?php get_footer(); ?>