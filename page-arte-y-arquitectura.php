<?php get_header(); ?>

<?php
      $args = array(
                                'post_type'      => 'page',
                                'posts_per_page' => -1,
                                'post_parent'    => $post->ID,
                                'orderby'          => 'rand'
                            );
                            $parent = new WP_Query( $args );

if ( $parent->have_posts() ) : ?>



<?php
        //Loop
        while( have_posts() ) : the_post();

 ?>

    <div class="container">

    <div >
        <h1 class="title"><?php the_title(); ?></h1>
    </div>
        <p ><?php the_content(); ?></p>
    </div>   

    <?php endwhile; ?>




<?php get_footer(); ?> 

<?php endif; wp_reset_postdata(); ?>