<?php get_header(); ?>

<hr>
<div class="title-post">
    <h2> <?php the_title(); ?></h2>
    <h4 class="breadcrums"><?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?></h4>
</div>

<div class="container-postp">
    <?php while (have_posts()) : the_post(); ?>

    <?php get_sidebar(); ?>

    <div id="primary" class="primary">
            <?php the_post_thumbnail(); ?>
            <div class="info-post">

                <?php the_tags(__('Etiquetas: '),',','<br>');?>
                <?php _e('Categorias: '); the_category( ', ' );?>
                <p class="date"><?php the_time(get_option('date_format')); ?> | Autor: <span class="author"><?php the_author(); ?></span> </p>
                
            </div>
            <?php the_content(); ?>
        </div>
        
        <div class="number-comments">
            <h3> Have <?php echo get_comments_number(); ?> comments</h3>
        </div>
        <div id="comments" class="primary">
            <?php comments_template(); ?>
        </div>
        
        <?php endwhile; ?>
    <div class="clear"></div>

</div>


<?php get_footer(); ?>