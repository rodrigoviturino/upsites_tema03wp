<?php 
// Footer informações das colunas

function up_color_header_customizer( $wp_customize ) {
 
    // Settings 

        $wp_customize->add_setting( 'up_cor_principal_header', ['default' => "#00000000)" ]);

        // Menu
        $wp_customize->add_setting( 'up_cor_item_menu_header', ['default' => "$white" ]);
        $wp_customize->add_setting( 'up_cor_hover_item_menu_header', ['default' => "#afafaf" ]);
        // Icones
        $wp_customize->add_setting( 'up_cor_icone_search_header', ['default' => "#fff" ]);
        $wp_customize->add_setting( 'up_cor_hover_icone_search_header', ['default' => "#afafaf" ]);

        $wp_customize->add_setting( 'up_cor_icone_info_header', ['default' => "#fff" ]);
        $wp_customize->add_setting( 'up_cor_hover_icone_info_header', ['default' => "#afafaf" ]);
        // Menu Sticky
        $wp_customize->add_setting( 'up_cor_slicky_header', ['default' => "#afafaf" ]);
        $wp_customize->add_setting( 'up_cor_item_slicky_header', ['default' => "#fff" ]);
        $wp_customize->add_setting( 'up_cor_hover_item_slicky_header', ['default' => "#afafaf" ]);
            // Icones
            $wp_customize->add_setting( 'up_cor_search_slicky_header', ['default' => "#fff" ]);
            $wp_customize->add_setting( 'up_cor_hover_search_slicky_header', ['default' => "#afafaf" ]);
    
            $wp_customize->add_setting( 'up_cor_info_slicky_header', ['default' => "#fff" ]);
            $wp_customize->add_setting( 'up_cor_hover_info_slicky_header', ['default' => "#afafaf" ]);


    //Sections
    $wp_customize->add_section('up_color_header_section', [
        'title' => 'Header - Cores ',
        'priority' => 2
    ]);


    //Controllers 
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
    // Cor Icone Search
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_search_header',

            [
                'label' => 'Cor Icone Pesquisa Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_icone_search_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_icone_search_header',

            [
                'label' => 'Cor Hover Icone Pesquisa Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_hover_icone_search_header',
            ]
        )
    );
    // Cor Icone Info
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_info_header',

            [
                'label' => 'Cor icone info Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_icone_info_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_icone_info_header',

            [
                'label' => 'Cor hover icone info Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_hover_icone_info_header',
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
    // Icones Slicky
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_search_slicky_header',
            [
                'label' => 'Cor icone Pesquisa Menu Sticky',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_search_slicky_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_search_slicky_header',
            [
                'label' => 'Cor Hover icone Pesquisa Menu Sticky',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_hover_search_slicky_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_info_slicky_header',
            [
                'label' => 'Cor Icone info Menu Sticky',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_info_slicky_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_info_slicky_header',
            [
                'label' => 'Cor Hover icone ifno Menu Sticky',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_hover_info_slicky_header',
            ]
        )
    );


}