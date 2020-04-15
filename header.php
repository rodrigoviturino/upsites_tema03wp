<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Theme 03</title>

    <?php wp_head(); ?>

</head>
<body>
    
<!-- Header -->
<header class="header">
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light">

        <!-- Logo -->
            <?php 
                $img_logo = get_theme_mod('up_logo_header') ;
                    if(get_theme_mod('up_logo_header') ) : 
            ?>
                <a class="navbar-brand" href="<?php bloginfo('url');?> ">
                    <img src="<?= $img_logo ?> " class='img-fluid' alt="Logo Empresa">
                </a>
            <?php endif; ?>
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

            </div>

        </nav>
        
    </div>
</header>
<!-- end Header -->