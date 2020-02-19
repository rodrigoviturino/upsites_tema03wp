
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">

            <div class="footer__logo col-md-3">

                <!-- Logo Footer -->
                <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                    <?php if( function_exists('the_custom_logo') ) 
                        the_custom_logo();
                    ?>
                </a> 
                <!-- end Logo Footer -->

                <div class="my-5"></div>

            <!-- About e Copyright -->
                <p class="text">
                    &copy; <?php echo Date('Y'); ?>
                    <?php if (get_theme_mod('up_about') ) : ?>
                        <?php echo get_theme_mod('up_about'); ?>
                    <?php endif; ?>
                </p>
            <!-- end About e Copyright -->

            </div>

            <!-- Endereço -->
                <div class="footer__address col-md-3">

                    <!-- Titulo -->
                    <?php if(get_theme_mod('up_title_endereco') ) : ?>
                        <h3 class="title"><?php echo get_theme_mod('up_title_endereco'); ?></h3>
                    <?php endif; ?>

                    <!-- Texto -->
                    <?php if(get_theme_mod('up_endereco') ) : ?>
                        <p class="text">
                            <?php echo get_theme_mod('up_endereco'); ?>
                        </p>
                    <?php endif; ?>

                    <!-- <div class="my-1"></div> -->
                    <!-- Texto -->
                    <?php if(get_theme_mod('up_text_email_telefone') ) : ?>
                        <p class="text">
                            <?php echo get_theme_mod('up_text_email_telefone'); ?>                        
                        </p>
                    <?php endif; ?>
                </div>
            <!-- end Endereço -->

            <!-- Email e Telefone -->
                <div class="footer__menu col-md-3">
                    <?php if(get_theme_mod('up_title_menu') ) : ?>
                        <h3 class="title"> <?php echo get_theme_mod('up_title_menu'); ?></h3>
                    <?php endif; ?>
                    
                    <?php
                        if( has_nav_menu('main-menu') ) {
                            wp_nav_menu([
                                'theme_location' => 'footer-menu',
                                'fallback_cb' => false,
                                'container_class' => null,
                                'container_id' => 'navbarResponsive',
                                'menu_class' => 'navbar'
                            ]);
                        }
                    ?>
                </div>
            <!-- end Email e Telefone -->

            <!-- Newsletter -->
                <div class="footer__newsletter col-md-3">

                    <?php if(get_theme_mod('up_title_newsletter') ) : ?>
                        <h3 class="title">
                            <?php echo get_theme_mod('up_title_newsletter'); ?>
                        </h3>
                    <?php endif; ?>

                    <?php if(get_theme_mod('up_text_newsletter') ) : ?>
                        <p class="text"><?php echo get_theme_mod('up_text_newsletter'); ?></p>
                    <?php endif; ?>

                    <form action="#" class="d-flex">
                        <div class="form-group">
                            <input type="text" placeholder="Email Address" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-dark btn-newsletter">Send</button>
                    </form>
                </div>
            <!-- end Newsletter -->

        </div>
    </div>
</footer>
<!-- end Footer -->

<?php wp_footer(); ?>

<!-- Scripts -->
    <script src="./theme.min.js"></script>
<!-- end Scripts -->

</body>
</html>