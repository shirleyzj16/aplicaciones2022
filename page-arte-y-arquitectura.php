<?php get_header(); ?>


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