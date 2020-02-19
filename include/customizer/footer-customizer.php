<?php 
// Footer informações das colunas

function up_footer_customizer( $wp_customize ) {
 
    // Settings 
        // Informações
    $wp_customize->add_setting( 'up_about', [ 'default' => "" ]);
    
    $wp_customize->add_setting( 'up_title_endereco', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_endereco', [ 'default' => "" ]);

    $wp_customize->add_setting( 'up_text_email_telefone', [ 'default' => "" ]);

    $wp_customize->add_setting( 'up_title_menu', [ 'default' => "" ]);

    $wp_customize->add_setting( 'up_title_newsletter', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_text_newsletter', [ 'default' => "" ]);

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

            'up_text_email_telefone',
            [
                'label' => 'Email e Telefone',
                'section' => 'up_footer_section',
                'settings' => 'up_text_email_telefone',
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