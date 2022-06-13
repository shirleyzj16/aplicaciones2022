<?php get_header(); ?>
    
    <?php
        while (have_posts() ) : the_post();
    ?>
        <?php $destacada = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full' ); ?>
        <?php $destacada = $destacada [0]; ?>
        <div class="row imagen-nosotros" style="background-image:url(<?php echo $destacada; ?>)">
            <h1 class="titulo_nosotros"><?php the_title(); ?> </h1>
        </div>
    
        <div class = "container">
            <p><?php the_content(); ?> </p>
        </div>
            
    <?php endwhile; ?>    

<?php get_footer(); ?> 