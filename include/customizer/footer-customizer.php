<?php 
// Footer informações das colunas

function up_footer_customizer( $wp_customize ) {
 
    // Settings 
        
    $wp_customize->add_setting( 'up_logo_footer', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_about', [ 'default' => "" ]);
        // Informações
    $wp_customize->add_setting( 'up_about', [ 'default' => "" ]);
        // Email
    $wp_customize->add_setting( 'up_email_footer', ['default' => "" ]);
    $wp_customize->add_setting( 'up_link_email_footer', ['default' => "" ]);
        // Phone
    $wp_customize->add_setting( 'up_tel_footer', ['default' => "" ]);
    $wp_customize->add_setting( 'up_link_tel_footer', ['default' => "" ]);
    
    $wp_customize->add_setting( 'up_title_endereco', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_endereco', [ 'default' => "" ]);

    $wp_customize->add_setting( 'up_title_menu', [ 'default' => "" ]);

    $wp_customize->add_setting( 'up_title_newsletter', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_text_newsletter', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_text_input_newsletter_footer', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_text_btn_newsletter_footer', [ 'default' => "" ]);

    // $wp_customize->add_setting( 'up_copyright', [ 'default' => "" ]);


        // Rede social Footer
    $wp_customize->add_setting('up_facebook', ['default' => '']);
    $wp_customize->add_setting('up_twitter', ['default' => '']);
    $wp_customize->add_setting('up_linkedin', ['default' => '']);
    $wp_customize->add_setting('up_instagram', ['default' => '']);

    //Sections
    $wp_customize->add_section('up_footer_section', [
        'title' => 'Footer - Infos',
        'priority' => 2
    ]);

    //Controllers 
    $wp_customize->add_control(
        new WP_Customize_Image_Control (
            $wp_customize,

            'up_logo_footer',
            [
                'label' => 'Logo Footer',
                'section' => 'up_footer_section',
                'settings' => 'up_logo_footer',

            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_about',
            [
                'label' => 'Sobre Empresa e Copyright',
                'section' => 'up_footer_section',
                'settings' => 'up_about',
                'type' => 'textarea' ,

            ]
        )
    );
    // Email
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_email_footer',
            [
                'label' => 'Insira o email',
                'section' => 'up_footer_section',
                'settings' => 'up_email_footer',
                'type' => 'text' ,

            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_link_email_footer',
            [
                'label' => 'Confirme o email',
                'section' => 'up_footer_section',
                'settings' => 'up_link_email_footer',
                'type' => 'text' ,

            ]
        )
    );
    // Telefone
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_link_tel_footer',
            [
                'label' => 'Caso tenha o Link do Whatsapp',
                'section' => 'up_footer_section',
                'settings' => 'up_link_tel_footer',
                'type' => 'text' ,

            ]
        )
    ); 
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_tel_footer',
            [
                'label' => 'Numero Telefone/Whatsapp',
                'section' => 'up_footer_section',
                'settings' => 'up_tel_footer',
                'type' => 'text',

            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_title_endereco',
            [
                'label' => 'Titulo Sessão Endereço',
                'section' => 'up_footer_section',
                'settings' => 'up_title_endereco',
                'type' => 'text',

            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_endereco',
            [
                'label' => 'Endereço Empresa, Email e Telefone',
                'section' => 'up_footer_section',
                'settings' => 'up_endereco',
                'type' => 'textarea' ,

            ]
        )
    );



    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_title_menu',
            [
                'label' => 'Titulo Sessão Menu Footer',
                'section' => 'up_footer_section',
                'settings' => 'up_title_menu',
                'type' => 'text' ,

            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_title_newsletter',
            [
                'label' => 'Titulo Newsletter',
                'section' => 'up_footer_section',
                'settings' => 'up_title_newsletter',
                'type' => 'text' ,

            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_text_newsletter',
            [
                'label' => 'Texto Newsletter',
                'section' => 'up_footer_section',
                'settings' => 'up_text_newsletter',
                'type' => 'textarea' ,

            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_text_input_newsletter_footer',
            [
                'label' => 'Texto Input Newsletter',
                'section' => 'up_footer_section',
                'settings' => 'up_text_input_newsletter_footer',
                'type' => 'text' ,

            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_text_btn_newsletter_footer',
            [
                'label' => 'Texto Botão Newsletter',
                'section' => 'up_footer_section',
                'settings' => 'up_text_btn_newsletter_footer',
                'type' => 'text' ,

            ]
        )
    );

  
    
    // Rede Social Footer
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_copyright',
            [
                'label' => 'Texto do Copyright',
                'section' => 'up_footer_section',
                'settings' => 'up_copyright',
                'type' => 'textarea' ,

            ]
        )
    );

}