<?php 
// Rede Social do Header

function up_header_customizer( $wp_customize ) {

    // Logo
    $wp_customize->add_setting('up_logo_header', ['default' => '']);

    // SELECT
    $wp_customize->add_setting('up_select_menu', ['default' => 'start']);

    // Settings
    // $wp_customize->add_setting('up_telefone', ['default' => '']);
    // $wp_customize->add_setting('up_email', ['default' => '']);
    // $wp_customize->add_setting('up_endereco', ['default' => '']);

    // $wp_customize->add_setting('up_facebook', ['default' => '']);
    // $wp_customize->add_setting('up_twitter', ['default' => '']);
    // $wp_customize->add_setting('up_linkedin', ['default' => '']);
    // $wp_customize->add_setting('up_instagram', ['default' => '']);

    // Sections
    $wp_customize->add_section('up_header_section', [
        'title' => 'Header - Infos e Redes Sociais',
        'priority' => '1'
    ]);

    // Controllers

   // Logo 
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,

            'up_logo_header',
                [
                    'label'=>'Logo do Header',
                    'section' => 'up_header_section',
                    'settings' => 'up_logo_header'
                ]
        )
    );
    // SELECT 
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_select_menu',
            [
                'label' => 'Posição do menu',
                'section' => 'up_header_section',
                'settings' => 'up_select_menu',
                'type' => 'select',
                'choices' => array(
                    'start' => 'start',
                    'center' => 'center',
                    'end' => 'end',
                ),

            ]
        )
    );

    // Infos
    // $wp_customize->add_control(
    //     new WP_Customize_Control(
    //         $wp_customize,

    //         'up_telefone',
    //             [
    //                 'label'=>'Telefone',
    //                 'section' => 'up_header_section',
    //                 'settings' => 'up_telefone',
    //                 'type' => 'text'  
    //             ]
    //     )
    // );

    // $wp_customize->add_control(
    //     new WP_Customize_Control(
    //         $wp_customize,

    //         'up_email',
    //             [
    //                 'label'=>'Email',
    //                 'section' => 'up_header_section',
    //                 'settings' => 'up_email',
    //                 'type' => 'text'  
    //             ]
    //         )
    //     );

    // $wp_customize->add_control(
    //     new WP_Customize_Control(
    //         $wp_customize,

    //         'up_endereco',
    //             [
    //                 'label'=>'endereço',
    //                 'section' => 'up_header_section',
    //                 'settings' => 'up_endereco',
    //                 'type' => 'text'  
    //             ]
    //         )
    //     );

    // // Rede Social 
    // $wp_customize->add_control(
    //     new WP_Customize_Control(
    //         $wp_customize,

    //         'up_facebook',
    //             [
    //                 'label'=>'Link do Facebook',
    //                 'section' => 'up_header_section',
    //                 'settings' => 'up_facebook',
    //                 'type' => 'text'  
    //             ]
    //         )
    //     );
        
    // $wp_customize->add_control(
    //     new WP_Customize_Control(
    //         $wp_customize,

    //         'up_twitter',
    //             [
    //                 'label'=>'Link do Twitter',
    //                 'section' => 'up_header_section',
    //                 'settings' => 'up_twitter',
    //                 'type' => 'text'  
    //             ]
    //         )
    //     );

    // $wp_customize->add_control(
    //     new WP_Customize_Control(
    //         $wp_customize,

    //         'up_linkedin',
    //             [
    //                 'label'=>'Link do Linkedin',
    //                 'section' => 'up_header_section',
    //                 'settings' => 'up_linkedin',
    //                 'type' => 'text'  
    //             ]
    //         )
    //     );

    // $wp_customize->add_control(
    //     new WP_Customize_Control(
    //         $wp_customize,

    //         'up_instagram',
    //             [
    //                 'label'=>'Link do Instagram',
    //                 'section' => 'up_header_section',
    //                 'settings' => 'up_instagram',
    //                 'type' => 'text'  
    //             ]
    //         )
    //     );

}