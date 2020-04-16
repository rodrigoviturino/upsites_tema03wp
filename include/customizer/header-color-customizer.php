<?php 
// Footer informações das colunas

function up_color_header_customizer( $wp_customize ) {
 
    // Settings 
        // Menu Mobile
        $wp_customize->add_setting( 'up_cor_menumobile_header', ['default' => "#fff" ]);

        // Background Header
        $wp_customize->add_setting( 'up_cor_principal_header', ['default' => "#00000000)" ]);

        // Menu
        $wp_customize->add_setting( 'up_cor_item_menu_header', ['default' => "$white" ]);
        $wp_customize->add_setting( 'up_cor_hover_item_menu_header', ['default' => "#afafaf" ]);

        // Menu Sticky
        $wp_customize->add_setting( 'up_cor_slicky_header', ['default' => "#afafaf" ]);
        $wp_customize->add_setting( 'up_cor_item_slicky_header', ['default' => "#fff" ]);
        $wp_customize->add_setting( 'up_cor_hover_item_slicky_header', ['default' => "#afafaf" ]);


    //Sections
    $wp_customize->add_section('up_color_header_section', [
        'title' => 'Header - Cores ',
        'priority' => 2
    ]);


    //Controllers 
        // Menu Mobile
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_menumobile_header',
                [
                    'label' => 'Cor Menu Mobile Header',
                    'section' => 'up_color_header_section',
                    'settings' => 'up_cor_menumobile_header',
                ]
            )
        );

    // Background Header
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_principal_header',

            [
                'label' => 'Cor do fundo Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_principal_header',
            ]
        )
    );
    // Menu
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_item_menu_header',

            [
                'label' => 'Cor Item do Menu Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_item_menu_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_item_menu_header',

            [
                'label' => 'Cor Hover Item Menu Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_hover_item_menu_header',
            ]
        )
    );

    // Menu Sticky
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_slicky_header',
            [
                'label' => 'Cor Menu Sticky',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_slicky_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_item_slicky_header',
            [
                'label' => 'Cor Item Menu Sticky',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_item_slicky_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_item_slicky_header',
            [
                'label' => 'Cor Hover Item Menu Sticky',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_hover_item_slicky_header',
            ]
        )
    );


}