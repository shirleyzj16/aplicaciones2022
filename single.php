<?php get_header(); ?>

<div class="container-fluid text-center" style="margin-bottom: 3em;">

    <?php 
    if ( have_posts() ) : ?>

        <?php
            while ( have_posts() ) : the_post(); ?>

                <h1 class="title-single"><?php the_title(); ?></h1>
                <?php the_post_thumbnail('post', array('class' => 'img-responsive')); ?>

                <div class= "row">
                    <?php
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) {   ?>
                        <div class="category-single" style="margin-top: 0.5em;"> 
                            <?php echo esc_html( $categories[0]->name ); ?> 
                        </div>
                    <?php
                    }
                    ?>

                    <?php
                        $posttags = get_the_tags();
                            if ($posttags) {
                                foreach($posttags as $tag) { ?>
                                    <div class="category-single"> 
                                        <?php echo  $tag->name; ?> 
                                    </div>
                                <?php
                                    }
                                }
                                ?>

                    <div class="paragraph-single"><?php the_content(); ?> </div>

                </div>
            <?php endwhile; ?>

    <?php endif; ?>
</div>

<?php 
    $withcomments = "1";
    comments_template(); // Get wp-comments.php template 
?>

<?php get_footer(); ?> 