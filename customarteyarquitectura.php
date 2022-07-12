<?php
/* Template Name: Arte y Arquictura Template */

get_header(); ?>

<?php
      $args = array(
                                'post_type'      => 'page',
                                'posts_per_page' => -1,
                                'post_parent'    => $post->ID,
                                'orderby'          => 'rand'
                            );
                            $parent = new WP_Query( $args );

                            if ( $parent->have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>   

        <section class="section py-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 px-2 px-lg-5">
                    <img class="img-fluid img-work" src="<?php the_field('imagen'); ?>" alt="Lugar">
                    <h2 class="pb-1"><?php the_title(); ?></h2>
                    <p class="subtitulo"><?php the_field('subtitulo'); ?></p>
                    <p><?php the_content(); ?></p>
                    
                   
                </div>
            </div>
        </div>
    </section>

    <?php endwhile; ?>

    <?php endif; wp_reset_postdata(); ?>

</div>
<?php get_footer(); ?>