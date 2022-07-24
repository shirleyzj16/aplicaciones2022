<?php get_header(); ?>

<div class="container-fluid" style="margin-bottom: 3em;">

    <?php 
    if ( have_posts() ) : ?>

        <h1 class="category-title"><?php single_cat_title( '', true ); ?></h1>
        
        <?php
            while ( have_posts() ) : the_post(); ?>

                <div class="container py-3">
                    <div class="card">
                        <div class="row ">
                            <div class="col-md-4">
                            <?php the_post_thumbnail('post', array('class' => 'w-100')); ?>
                            </div>
                            <div class="col-md-8 px-3">
                                <div class="card-block px-3" style="margin-top: 3em;" >
                                <h4 class="card-title"><?php the_title(); ?></h4>
                                <?php
                                    $posttags = get_the_tags();
                                    if ($posttags) {
                                        foreach($posttags as $tag) { ?>
                                            <div class="card-text tag-ciudad"> 
                                                <?php echo  $tag->name; ?> 
                                            </div>
                                        <?php
                                        }
                                    }
                                    ?>

                                <div class="card-text post-category-text"><?php the_excerpt(); ?> </div>
                                <a href="<?php the_permalink() ?>" class="btn btn-post-category">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

    <?php else: ?>
        <p>Sorry, no posts matched your criteria.</p>

    <?php endif; ?>



</div>


<?php get_footer(); ?> 