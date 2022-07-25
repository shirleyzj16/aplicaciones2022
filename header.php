<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php bloginfo('name');?></title>  
</head>

<body>


    <header>
        <nav class="navbar navbar-expand-lg bg-light navegacion">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/images/logo.png" alt="logo" class="img-responsive" style= "width: 120px;"/>
                </a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>   
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary menu',
                        'container_class' => 'collapse navbar-collapse nav justify-content-end',
                        'container_id' => 'navbar',
                        'menu_class' => 'navbar-nav'
                    ));          
                ?>
            </div>                       
        </nav>    
    </header>
