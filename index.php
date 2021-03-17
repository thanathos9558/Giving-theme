<?php get_header(); ?>

<h2> <?php the_title(); ?></h2>
<div class="container">
    <?php while (have_posts()) : the_post(); ?>

        
        <div class="single-content">
        </div>
        <?php the_content(); ?>

    <?php endwhile; ?>

</div>
<?php get_footer(); ?>