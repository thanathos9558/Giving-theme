<?php get_header(); ?>

<?php if(is_page()){ ?>
    <?php $destacada = wp_get_attachment_image_src( get_post_thumbnail_id(),'full');?>
    <?php $destacada = $destacada[0]; ?>
    <div class="containerimg" style="background-image: url(<?php echo $destacada ?>);">
        <div class="contBanner">
            <h1 class="uppercase"><?php echo bloginfo('name') ?></h1>
            <h2><?php echo bloginfo('description') ?></h2>
        </div>
    </div>
<?php } ?>

<div class="post_container">
    <?php while (have_posts()) : the_post(); ?>
    <!-- <h2 class="noimagen"> <?php the_title() ?></h2> -->
        <div class="card">
            <?php if (has_post_thumbnail()) { ?>
                

            <?php } else { ?>
                

            <?php } ?>

            <div class="entradas">
                <?php $args = array(
                    'cat' => array(3),
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'Asc'
                ); ?>
                <?php $portfolio = new WP_Query($args); ?>
                <?php while ($portfolio->have_posts()) : $portfolio->the_post(); ?>

                    <div class="post-portfolio">
                        <div class="imagen">
                            <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail('portfolio'); ?>
                            
                            </a>
                        </div>
                        
                        <div class="content">
                            <h3 class="uppercase"><?php the_title(); ?></h3>
                            <div class="categoria">
                            <?php the_category(); ?>
                            </div>
                            
                            <!-- <?php the_excerpt(); ?> -->
                            <!-- <a href="<?php the_permalink(); ?>">Ver más</a> -->
                        </div>

                        <!-- <div class="info-post">
                            <p class="author"> Por: <?php the_author(); ?></p>
                            <p class="date"><?php the_time(get_option( 'date_format' ));?></p>
                        </div> -->
                    </div>

                <?php endwhile;
                wp_reset_postdata(); ?>

            </div>

           <div class="latest-post-container">
               <h2 class="center">Latest post</h2>
           <div class="entradas">
                <?php $args = array(
                    'cat' => array(252),
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC'
                ); ?>
                <?php $portfolio = new WP_Query($args); ?>
                <?php while ($portfolio->have_posts()) : $portfolio->the_post(); ?>

                    <div class="post-portfolio">
                        <div class="imagen">
                            <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail('portfolio'); ?>
                            
                            </a>
                        </div>
                        
                        <div class="content">
                            <h3 class="uppercase"><?php the_title(); ?></h3>
                            <p class="date"><?php the_time(get_option( 'date_format' ));?></p>
                            <div class="categoria">
                            <?php the_category(); ?>
                            </div>
                        </div>

                        <div class="info-post">
                            <p class="author"> Por: <?php the_author(); ?></p>
                            <!-- <?php the_excerpt(); ?>  -->
                             <a  href="<?php the_permalink(); ?>">Ver más</a> 
                        </div>
                    </div>

                <?php endwhile;
                wp_reset_postdata(); ?>

            </div>

           </div>

            <div class="clear"></div>

        </div>

    <?php endwhile; ?>


    <?php get_footer(); ?>