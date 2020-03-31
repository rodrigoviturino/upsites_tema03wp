<?php 
// Footer informações das colunas

function up_color_footer_customizer( $wp_customize ) {
 
    // Settings 
        // Cor Principal Footer
        $wp_customize->add_setting( 'up_cor_principal_footer', ['default' => "#1e2228" ]);
            // About
        $wp_customize->add_setting( 'up_cor_texto_about_footer', ['default' => "#cacaca" ]);
            // Titulo Empresa
        $wp_customize->add_setting( 'up_cor_titulo_local_footer', ['default' => "#fff" ]);
        $wp_customize->add_setting( 'up_cor_texto_local_footer', ['default' => "#cacaca" ]);

            // Email
        $wp_customize->add_setting( 'up_cor_email_footer', ['default' => "#cacaca" ]);
        // $wp_customize->add_setting( 'up_link_email_footer', ['default' => "#afafaf" ]);
        //     // Phone
        $wp_customize->add_setting( 'up_cor_tel_footer', ['default' => "#cacaca" ]);
        // $wp_customize->add_setting( 'up_link_phone_footer', ['default' => "#afafaf" ]);
        
        // Localização
        $wp_customize->add_setting( 'up_cor_titulo_local_footer', ['default' => "#fff" ]);
        $wp_customize->add_setting( 'up_cor_texto_local_footer', ['default' => "#cacaca" ]);
        
        // Menu
        $wp_customize->add_setting( 'up_cor_titulo_menu_footer', ['default' => "#fff" ]);
        $wp_customize->add_setting( 'up_cor_item_menu_footer', ['default' => "#cacaca" ]);
        $wp_customize->add_setting( 'up_cor_itens_menu_footer', ['default' => "#343a40" ]);
        
        // NewSletter
        $wp_customize->add_setting( 'up_cor_titulo_newsletter_footer', ['default' => "#fff" ]);
        $wp_customize->add_setting( 'up_cor_texto_newsletter_footer', ['default' => "#cacaca" ]);
        // Botões
            // Input
        $wp_customize->add_setting( 'up_cor_texto_newsletter_footer', ['default' => "#cacaca" ]);
        $wp_customize->add_setting( 'up_cor_txt_btn_input_newsletter_footer', ['default' => "#cacaca" ]);
        $wp_customize->add_setting( 'up_cor_borda_btn_input_newsletter_footer', ['default' => "#343a40" ]);
            // Send
        $wp_customize->add_setting( 'up_cor_btn_enviar_send_footer', ['default' => "#6f42c1" ]);
        $wp_customize->add_setting( 'up_cor_txt_btn_enviar_send_footer', ['default' => "#fff" ]);
        $wp_customize->add_setting( 'up_cor_borda_btn_input_send_footer', ['default' => "#6f42c1" ]);


        // Coluna About
        // $wp_customize->add_setting( 'up_cor_text_about_footer', ['default' => "#fff" ]);

        // $wp_customize->add_setting( 'up_cor_icone_telefone_footer', ['default' => "#F35C27" ]);
        // $wp_customize->add_setting( 'up_cor_text_telefone_footer', ['default' => "#8A99C0" ]);
        // $wp_customize->add_setting( 'up_cor_icone_email_footer', ['default' => "#F35C27" ]);
        // $wp_customize->add_setting( 'up_cor_text_email_footer', ['default' => "#8A99C0" ]);
        // $wp_customize->add_setting( 'up_cor_icone_local_footer', ['default' => "#F35C27" ]);
        // $wp_customize->add_setting( 'up_cor_text_local_footer', ['default' => "#8A99C0" ]);

        // Icones Rede Social
        // $wp_customize->add_setting( 'up_cor_icon_face_footer', ['default' => "#8A99C0" ]);
        // $wp_customize->add_setting( 'up_cor_hover_icon_face_footer', ['default' => "#F35C27" ]);

        // $wp_customize->add_setting( 'up_cor_icon_twitter_footer', ['default' => "#8A99C0" ]);
        // $wp_customize->add_setting( 'up_cor_hover_icon_twitter_footer', ['default' => "#F35C27" ]);

        // $wp_customize->add_setting( 'up_cor_icon_linkedin_footer', ['default' => "#8A99C0" ]);
        // $wp_customize->add_setting( 'up_cor_hover_icon_linkedin_footer', ['default' => "#F35C27" ]);

        // $wp_customize->add_setting( 'up_cor_icon_insta_footer', ['default' => "#8A99C0" ]);
        // $wp_customize->add_setting( 'up_cor_hover_icon_insta_footer', ['default' => "#F35C27" ]);        

        // Coluna Menu
        // $wp_customize->add_setting( 'up_cor_titulo_menu_footer', ['default' => "#FFF" ]);        
        // $wp_customize->add_setting( 'up_cor_itens_menu_footer', ['default' => "#8A99C0" ]);
        // $wp_customize->add_setting( 'up_cor_hover_itens_menu_footer', ['default' => "#F35C27" ]);
        
        // Coluna Newsletter
        // $wp_customize->add_setting( 'up_cor_title_newsletter_footer', ['default' => "#FFF" ]);
        // $wp_customize->add_setting( 'up_cor_button_newsletter_footer', ['default' => "#F35C27" ]);
        // $wp_customize->add_setting( 'up_cor_hover_button_newsletter_footer', ['default' => "#F35C27" ]);
        // $wp_customize->add_setting( 'up_cor_hover_text_button_newsletter_footer', ['default' => "#FFF" ]);

        // $wp_customize->add_setting( 'up_cor_fundo_menu', ['default' => "#f7f9fa" ]);
        
        // Sessão Copyright
        // $wp_customize->add_setting( 'up_cor_fundo_copyright', ['default' => "#1e2227" ]);
        // $wp_customize->add_setting( 'up_cor_link_copyright', ['default' => "#8a99c0" ]);
        // $wp_customize->add_setting( 'up_cor_hover_link_copyright', ['default' => "#f35c27" ]);


    //Sections
    $wp_customize->add_section('up_color_footer_section', [
        'title' => 'Footer - Cores ',
        'priority' => 4
    ]);


    //Controllers 

     // Color Background
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_principal_footer',

            [
                'label' => 'Cor Background Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_principal_footer',
            ]
        )
    );
    // Titulo Empresa
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_titulo_local_footer',

            [
                'label' => 'Cor Titulo Empresa',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_titulo_local_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_texto_local_footer',

            [
                'label' => 'Cor Texto Localização',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_texto_local_footer',
            ]
        )
    );

        // email
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_email_footer',

            [
                'label' => 'Cor Texto Email',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_email_footer',
            ]
        )
    );
        // Telefone
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_tel_footer',

            [
                'label' => 'Cor Texto Telefone',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_tel_footer',
            ]
        )
    );

    
    // Titulo Menu
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_titulo_menu_footer',

            [
                'label' => 'Cor Titulo da coluna Menu',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_titulo_menu_footer',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_itens_menu_footer',

            [
                'label' => 'Cor dos Itens do Menu',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_itens_menu_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_itens_menu_footer',

            [
                'label' => 'Cor Hover dos Itens do Menu',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_itens_menu_footer',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_itens_menu_footer',

            [
                'label' => 'Cor Hover dos Itens do Menu',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_itens_menu_footer',
            ]
        )
    );


    // Cor Icone Telefone
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_telefone_footer',

            [
                'label' => 'Cor do icone do telefone',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_telefone_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_telefone_footer',

            [
                'label' => 'Cor da texto do telefone',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_telefone_footer',
            ]
        )
    );
    // Cor Icone Email
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_email_footer',

            [
                'label' => 'Cor do icone do email',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_email_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_email_footer',

            [
                'label' => 'Cor da texto do email',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_email_footer',
            ]
        )
    );
    // Cor Icone Local
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_local_footer',

            [
                'label' => 'Cor do icone do local',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_local_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_local_footer',

            [
                'label' => 'Cor da texto do local',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_local_footer',
            ]
        )
    );
    
    
    // Coluna Newsletter
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_title_newsletter_footer',

            [
                'label' => 'Cor do Titulo Newsletter',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_title_newsletter_footer',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_button_newsletter_footer',

            [
                'label' => 'Cor do Botão',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_button_newsletter_footer',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_button_newsletter_footer',

            [
                'label' => 'Cor do Hover do Botão',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_button_newsletter_footer',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_text_button_newsletter_footer',

            [
                'label' => 'Cor do Texto Hover do Botão',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_text_button_newsletter_footer',
            ]
        )
    );

    // Sessão Copyright
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_fundo_copyright',

            [
                'label' => 'Cor do fundo Copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_fundo_copyright',
            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_link_copyright',

            [
                'label' => 'Cor dos links do copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_link_copyright',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_link_copyright',

            [
                'label' => 'Cor do hover dos links do copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_link_copyright',
            ]
        )
    );



}