<?php get_header(); ?>

<div class="container">
<h2> <?php the_title(); ?></h2>

    <?php while (have_posts()) : the_post(); ?>
    <div class="single-content">
        </div>
        <?php the_content(); ?>
        
        <?php endwhile; ?>
        

</div>
<?php get_footer(); ?>