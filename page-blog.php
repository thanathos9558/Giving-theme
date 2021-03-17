<?php
/*
* Template Name: Creative
*/
get_header(); ?>
<hr>
<div class="title-post">
    <h2> <?php the_title(); ?></h2>
    <h4 class="breadcrums"><?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?></h4>
</div>

<div class="container-postp">
    <?php while (have_posts()) : the_post(); ?>
        <div class="primary">
            <?php if (has_post_thumbnail()) { ?>
                <div class="post-img">
                    <?php the_post_thumbnail(); ?>
                </div>

            <?php } else { ?>
                <h2 class="noimagen"> <?php the_title() ?></h2>

            <?php } ?>


            <?php the_content(); ?>

        </div>

    <?php endwhile; ?>

    <?php get_sidebar(); ?>

    <div class="clear"></div>
</div>

<?php get_footer(); ?>