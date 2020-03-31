
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">

            <div class="footer__logo col-md-3">


            <!-- Footer Logo -->
                <?php 
                    $img_logo = get_theme_mod('up_logo_footer');
                    if(get_theme_mod('up_logo_footer') ) : 
                ?>
                    <a class="navbar-brand" href="<?php bloginfo('url');?> ">
                        <img src="<?= $img_logo ?> " class='img-fluid' alt="Logo Empresa">
                    </a>
                <?php endif; ?>
            <!-- end Footer Logo -->

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
                    

                    <?php if( get_theme_mod('up_link_email_footer') && get_theme_mod('up_email_footer') ) : ?>
                        <p class="text">
                            <a href="mailto:<?= get_theme_mod('up_link_email_footer'); ?>" class="email"><?= get_theme_mod('up_email_footer'); ?></a>
                        </p>
                    <?php endif; ?>

                    <?php if( get_theme_mod('up_tel_footer') ) : ?>
                        <a href="<?= get_theme_mod('up_link_tel_footer'); ?>" class="phone">
                            <?php echo get_theme_mod('up_tel_footer'); ?> 
                        </a>
                    <?php endif; ?>

                </div>
            <!-- end Endereço -->

            <!-- Menu -->
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
            <!-- end Menu -->

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
                            <input type="text" placeholder="<?= get_theme_mod('up_text_input_newsletter_footer'); ?>" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-dark btn-newsletter"><?= get_theme_mod('up_text_btn_newsletter_footer'); ?></button>
                    </form>
                </div>
            <!-- end Newsletter -->

        </div>
    </div>
</footer>
<!-- end Footer -->

<?php wp_footer(); ?>

<!-- Scripts -->
    <!-- <script src="./theme.min.js"></script> -->
<!-- end Scripts -->

<style type="text/css">
    .header{
        background-color: <?= get_theme_mod( 'up_cor_principal_header' ); ?>;
    }
    .header .navbar #navbarSupportedContent .navbar-nav .menu-item a {
        color: <?= get_theme_mod('up_cor_item_menu_header'); ?>;
    }
    .header .navbar #navbarSupportedContent .navbar-nav .menu-item a:hover {
        color: <?= get_theme_mod('up_cor_hover_item_menu_header'); ?>;
    }
    .header .group-icons li i.fa-search {
        color: <?= get_theme_mod('up_cor_icone_search_header'); ?>;
    }
    .header .group-icons li i.fa-search:hover {
        color: <?= get_theme_mod('up_cor_hover_icone_search_header'); ?>;
    }
    .header .group-icons li i.fa-info-circle {
        color: <?= get_theme_mod('up_cor_icone_info_header'); ?>;
    }
    .header .group-icons li i.fa-info-circle:hover {
        color: <?= get_theme_mod('up_cor_hover_icone_info_header'); ?>;
    }
    /** Menu Slicky */
    .header.scrollHide {
        background-color: <?= get_theme_mod('up_cor_slicky_header'); ?>;
    }
    .header.scrollHide .navbar #navbarSupportedContent .navbar-nav .menu-item a {
        color: <?= get_theme_mod('up_cor_item_slicky_header'); ?>;
    }
    .header.scrollHide .navbar #navbarSupportedContent .navbar-nav .menu-item a:hover {
        color: <?= get_theme_mod('up_cor_hover_item_slicky_header'); ?>;
    }
    .header .group-icons li i.fa-search {
        color: <?= get_theme_mod('up_cor_search_slicky_header'); ?>;
    }
    .header .group-icons li i.fa-search:hover {
        color: <?= get_theme_mod('up_cor_hover_search_slicky_header'); ?>;
    }
    .header .group-icons li i.fa-info-circle {
        color: <?= get_theme_mod('up_cor_info_slicky_header'); ?>;
    }
    .header .group-icons li i.fa-info-circle:hover {
        color: <?= get_theme_mod('up_cor_hover_info_slicky_header'); ?>;
    }
    /** Footer */
    .footer {
        background-color: <?= get_theme_mod('up_cor_principal_footer'); ?>;
    }
    .footer__logo .text {
        color: <?= get_theme_mod('up_cor_texto_about_footer'); ?>;
    }
    .footer__address .title {
        color: <?= get_theme_mod('up_cor_titulo_local_footer'); ?>;
    }
    .footer__address .text {
        color: <?= get_theme_mod('up_cor_texto_local_footer'); ?>;
    }
    .footer__address .email {
        color: <?= get_theme_mod('up_cor_email_footer'); ?>;
    }
    .footer__address .phone {
        color: <?= get_theme_mod('up_cor_tel_footer'); ?>;
    }

    .footer__menu .title {
        color: <?= get_theme_mod('up_cor_titulo_menu_footer'); ?>;
    }
    .footer__menu ul li a {
        color: <?= get_theme_mod('up_cor_item_menu_footer'); ?>;
    }
    .footer__menu ul li a:hover {
        color: <?= get_theme_mod('up_cor_hover_item_menu_footer'); ?>;
    }
    /** Newsletter */
    .footer__newsletter .title {
        color: <?= get_theme_mod('up_cor_titulo_newsletter_footer'); ?>;
    }
    .footer__newsletter .text {
        color: <?= get_theme_mod('up_cor_texto_newsletter_footer'); ?>;
    }
        /** Botão Newsletter */
    .footer__newsletter form input {
        background-color: <?= get_theme_mod('up_cor_btn_input_newsletter_footer'); ?>;
        color: <?= get_theme_mod('up_cor_txt_btn_input_newsletter_footer'); ?>;
        border-color: <?= get_theme_mod('up_cor_borda_btn_input_newsletter_footer'); ?>;
    }
    .footer__newsletter form .btn-newsletter {
        background-color: <?= get_theme_mod('up_cor_btn_enviar_newsletter_footer'); ?>;
        color: <?= get_theme_mod('up_cor_txt_btn_enviar_newsletter_footer'); ?>;
        border-color: <?= get_theme_mod('up_cor_txt_btn_enviar_newsletter_footer'); ?>;
    }

</style>

</body>
</html>