<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./theme.min.css">
    <link rel="stylesheet" href="./fonts/fonts.css">
    <title>Theme 03</title>

    <?php wp_head(); ?>

</head>
<body>
    
<!-- Header -->
<header class="header">
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light">

        <!-- Logo -->
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                <?php if( function_exists('the_custom_logo') ) 
                    the_custom_logo();
                ?>
            </a> 
        <!-- end Logo -->

            <button class="navbar-toggler order-1 order-sm-0 " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-3 order-sm-2" id="navbarSupportedContent">
                <?php 
                    if( has_nav_menu('main-menu') ) {
                        wp_nav_menu([
                            'theme_location' => 'main-menu',
                            'fallback_cb' => false,
                            'container_class' => null,
                            'container_id' => 'navbarResponsive',
                            'menu_class' => 'navbar-nav ml-auto'
                        ]);
                    }
                ?>

                <!-- <ul class="navbar-nav m-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Pages</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Elements</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Portfolio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>

                </ul> -->
            </div>

            <ul class="group-icons d-flex m-0 list-unstyled order-2 order-sm-3">

                <li class="pr-3">
                    <i class="fas fa-search"></i>
                </li>

                <li>
                    <i class="fas fa-info-circle"></i>
                </li>

            </ul>


        </nav>
        
    </div>
</header>
<!-- end Header -->