<?php get_header(); ?>
    
    <?php $destacada = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full' ); ?>
    <?php $destacada = $destacada [0]; ?>
    
    <div class=" container-fluid hero-background text-center" style="background-image:url(<?php echo $destacada; ?>)">
        <?php $descripcion = get_bloginfo('description','display'); ?>

        <div class="container hero-text-block">
        <h1 class="hero-text"><?php echo $descripcion; ?> </h1>
        </div>
    </div>

    <!-- Ultimos agregados -->
    <div class="container-fluid background-post text-center">
        <div class="row">
        <h2 class="titulo-post"> ¡know the  <br> latest  <span class="titulo-reciente">recommendations</span>! </h2>
        <?php
            $args = array(
                'posts_per_page' => 6
            );
            $entradas = new WP_Query($args); while ($entradas->have_posts() ): $entradas -> the_post();
        ?>

        <div class="col-xs-6 col-md-4 entrada">
            <?php the_post_thumbnail('post', array('class' => 'img-responsive')); ?>
            
            <div class="contenido-entrada">
                <?php the_title('<h3>', '</h3>');?>
                <a href="<?php the_permalink(); ?>" class="btn-post"> Read more</a>
            </div>
        </div>
            
        <?php  
         endwhile; wp_reset_postdata();
        ?>
        </div>
    </div>

     <!-- Categorias -->
     
     <div class= "sec-categorias container text-center">
        <h2 class="titulo-cat"> Visit these amazing categories </h2>

        <?php $categorias = get_categories(); ?>

        <div class="row justify-content-center">
            <?php foreach($categorias as $categoria): ?>
               
                <div class="col-md-6 col-lg-3 categoria">
                    <a href="<?php echo get_category_link($categoria->cat_ID); ?>">    
                        <?php echo $categoria->name; ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- contactanos -->
    
    <?php
        get_template_part('includes/en/contactanos');
    ?>


<?php get_footer(); ?> 