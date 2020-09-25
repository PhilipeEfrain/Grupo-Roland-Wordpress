<?php
if ( ! function_exists( 'grupo_roland13_setup' ) ) :

function grupo_roland13_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'grupo_roland13', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'grupo_roland13' ),
        'social'  => __( 'Social Links Menu', 'grupo_roland13' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // grupo_roland13_setup

add_action( 'after_setup_theme', 'grupo_roland13_setup' );


if ( ! function_exists( 'grupo_roland13_init' ) ) :

function grupo_roland13_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // grupo_roland13_setup

add_action( 'init', 'grupo_roland13_init' );


if ( ! function_exists( 'grupo_roland13_custom_image_sizes_names' ) ) :

function grupo_roland13_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'grupo_roland13_custom_image_sizes_names' );
endif;// grupo_roland13_custom_image_sizes_names



if ( ! function_exists( 'grupo_roland13_widgets_init' ) ) :

function grupo_roland13_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'grupo_roland13_widgets_init' );
endif;// grupo_roland13_widgets_init



if ( ! function_exists( 'grupo_roland13_customize_register' ) ) :

function grupo_roland13_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'blocks_header_2', array(
        'title' => __( 'Header 2', 'grupo_roland13' )
    ));

    $wp_customize->add_section( 'resumo_roland', array(
        'title' => __( 'Resumo Grupo Roland', 'grupo_roland13' ),
        'priority' => '0'
    ));

    $wp_customize->add_section( 'landing_page', array(
        'title' => __( 'Landing Page', 'grupo_roland13' )
    ));

    $wp_customize->add_section( 'portaria_remota', array(
        'title' => __( 'Resumo Portaria', 'grupo_roland13' ),
        'priority' => '2'
    ));

    $wp_customize->add_section( 'aplicativo', array(
        'title' => __( 'Resumo Aplicativo', 'grupo_roland13' ),
        'priority' => '1'
    ));

    $wp_customize->add_section( 'motinoramento24', array(
        'title' => __( 'Resumo Monitoramento', 'grupo_roland13' ),
        'priority' => '3'
    ));

    $wp_customize->add_section( 'seguranca_privada', array(
        'title' => __( 'Resumo Privada', 'grupo_roland13' ),
        'priority' => '4'
    ));

    $wp_customize->add_section( 'outros_servicos', array(
        'title' => __( 'Resumo de Outros Serviços', 'grupo_roland13' ),
        'priority' => '5'
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'blocks_header_2_logo', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_header_2_logo', array(
        'label' => __( 'Logo', 'grupo_roland13' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_header_2'
    ) ) );

    $wp_customize->add_setting( 'resumo_roland_img', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'resumo_roland_img', array(
        'label' => __( 'Imagem Esquerda', 'grupo_roland13' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'resumo_roland'
    ) ) );

    $wp_customize->add_setting( 'resumo_roland_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'Grupo Roland', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'resumo_roland_titulo', array(
        'label' => __( 'Título', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'resumo_roland'
    ));

    $wp_customize->add_setting( 'resumo_roland_sub', array(
        'type' => 'theme_mod',
        'default' => __( 'Nossa História', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'resumo_roland_sub', array(
        'label' => __( 'Subtítulo', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'resumo_roland'
    ));

    $wp_customize->add_setting( 'resumo_roland_texto', array(
        'type' => 'theme_mod',
        'default' => 'Fundado em 1993, o Grupo é composto por empresas do seguimento de Segurança Privada; Possui sedes operacionais e administrativas próprias e bem equipadas em uma área de 1.460m²; Conta com equipe especializada, treinada periodicamente para aperfeiçoamento; Dispõe de serviços de Segurança Eletrônica e Locação de mão de obra. Contar com o Grupo Roland é ter a tranquilidade de saber que o que você tanto preza está sendo cuidado por uma empresa de confiança e qualidade, que tem experiência, conhecimento, e é referência em sua área de atuação.<br>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'resumo_roland_texto', array(
        'label' => __( 'Texto', 'grupo_roland13' ),
        'type' => 'textarea',
        'section' => 'resumo_roland'
    ));

    $wp_customize->add_setting( 'landing_page_img', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'landing_page_img', array(
        'label' => __( 'Imagem', 'grupo_roland13' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'landing_page'
    ) ) );

    $wp_customize->add_setting( 'landing_page_botão_link', array(
        'type' => 'theme_mod',
        'default' => '<span style="color: #000000;">Saiba Mais</span>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'landing_page_botão_link', array(
        'label' => __( 'Saiba Mais', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'landing_page'
    ));

    $wp_customize->add_setting( 'landing_page_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'landing_page_link', array(
        'label' => __( 'link do Saiba Mais', 'grupo_roland13' ),
        'type' => 'url',
        'section' => 'landing_page'
    ));

    $wp_customize->add_setting( 'portaria_remota_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'Portaria Remota', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'portaria_remota_titulo', array(
        'label' => __( 'Título', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'portaria_remota'
    ));

    $wp_customize->add_setting( 'portaria_remota_texto', array(
        'type' => 'theme_mod',
        'default' => 'O Porter é o mais moderno e seguro sistema de monitoramento e controle de acessos existente no mercado. Ele permite o acesso de pessoas e veículos a condomínios de forma simples e segura, sempre monitorado e auditado por um atendente 24 horas por dia. <i class="text-justify">Com a Porter, além do aumento na segurança, você ainda tem uma economia de até 50% no custo da portaria 24 horas do seu condmínio.</i>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'portaria_remota_texto', array(
        'label' => __( 'Texto', 'grupo_roland13' ),
        'type' => 'textarea',
        'section' => 'portaria_remota'
    ));

    $wp_customize->add_setting( 'portaria_remota_img01', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'portaria_remota_img01', array(
        'label' => __( 'Imagem 01', 'grupo_roland13' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'portaria_remota'
    ) ) );

    $wp_customize->add_setting( 'portaria_remota_tituloimg01', array(
        'type' => 'theme_mod',
        'default' => __( 'Câmeras de Segurança', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'portaria_remota_tituloimg01', array(
        'label' => __( 'Título Imagem 01', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'portaria_remota'
    ));

    $wp_customize->add_setting( 'portaria_remota_img02', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'portaria_remota_img02', array(
        'label' => __( 'Imagem 02', 'grupo_roland13' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'portaria_remota'
    ) ) );

    $wp_customize->add_setting( 'portaria_remota_tituloimg02', array(
        'type' => 'theme_mod',
        'default' => __( 'Proteção Perimetral', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'portaria_remota_tituloimg02', array(
        'label' => __( 'Título Imagem 02', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'portaria_remota'
    ));

    $wp_customize->add_setting( 'portaria_remota_img03', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'portaria_remota_img03', array(
        'label' => __( 'Imagem 03', 'grupo_roland13' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'portaria_remota'
    ) ) );

    $wp_customize->add_setting( 'portaria_remota_tituloimg03', array(
        'type' => 'theme_mod',
        'default' => __( 'Controle de Acesso', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'portaria_remota_tituloimg03', array(
        'label' => __( 'Título Imagem 03', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'portaria_remota'
    ));

    $wp_customize->add_setting( 'portaria_remota_botão_link', array(
        'type' => 'theme_mod',
        'default' => '<span style="color: #000000;">Leia Mais </span>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'portaria_remota_botão_link', array(
        'label' => __( 'Leia Mais', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'portaria_remota'
    ));

    $wp_customize->add_setting( 'portaria_remota_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'portaria_remota_link', array(
        'label' => __( 'link do Leia Mais', 'grupo_roland13' ),
        'type' => 'url',
        'section' => 'portaria_remota'
    ));

    $wp_customize->add_setting( 'aplicativo_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'PORTARIA REMOTA ÉTECNOLOGIA', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'aplicativo_titulo', array(
        'label' => __( 'Título', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'aplicativo'
    ));

    $wp_customize->add_setting( 'aplicativo_texto', array(
        'type' => 'theme_mod',
        'default' => 'Atualmente, a tecnologia utilizada na solução de portaria remota pela Porter está na sua quarta geração, diferenciando-a de todos os players do mercado de portaria automatizada.<br>Trata-se de uma solução de controle de acessos com alta tecnologia, tanto de hardware quanto de software, totalmente integrados que, fornecem segurança, confiabilidade e eficiência na prestação dos serviços.<br>Oferece, ainda uma melhor qualidade na segurança e uma redução de até 50% no custo da portaria presencial 24h.',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'aplicativo_texto', array(
        'label' => __( 'Texto', 'grupo_roland13' ),
        'type' => 'textarea',
        'section' => 'aplicativo'
    ));

    $wp_customize->add_setting( 'aplicativo_texto_02', array(
        'type' => 'theme_mod',
        'default' => __( 'PORTARIA REMOTA ÉTECNOLOGIA', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'aplicativo_texto_02', array(
        'label' => __( 'Título 02', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'aplicativo'
    ));

    $wp_customize->add_setting( 'aplicativo_google_disponivel', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'aplicativo_google_disponivel', array(
        'label' => __( 'Disponível no Google', 'grupo_roland13' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'aplicativo'
    ) ) );

    $wp_customize->add_setting( 'aplicativo_google_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'aplicativo_google_link', array(
        'label' => __( 'Link do App no Google', 'grupo_roland13' ),
        'type' => 'url',
        'section' => 'aplicativo'
    ));

    $wp_customize->add_setting( 'aplicativo_apple_disponivel', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'aplicativo_apple_disponivel', array(
        'label' => __( 'Disponível na Apple', 'grupo_roland13' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'aplicativo'
    ) ) );

    $wp_customize->add_setting( 'aplicativo_apple_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'aplicativo_apple_link', array(
        'label' => __( 'Link do App na Apple', 'grupo_roland13' ),
        'type' => 'url',
        'section' => 'aplicativo'
    ));

    $wp_customize->add_setting( 'motinoramento24_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'monitoramento 24h do sistema de alarme', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'motinoramento24_titulo', array(
        'label' => __( 'Título', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'motinoramento24'
    ));

    $wp_customize->add_setting( 'motinoramento24_texto', array(
        'type' => 'theme_mod',
        'default' => __( 'O Grupo Roland utiliza sistemas, alarmes, acompanhamento online, softwares e equipamentos de segurança eletrônica mais recentes do mercado, contando com um centro de operações planejado para supervisionar áreas e situações críticas, sinais de alarme e imagens digitais com resposta rápida para qualquer ocorrência. Mão de obra qualificada e constantemente atualizada.', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'motinoramento24_texto', array(
        'label' => __( 'Texto', 'grupo_roland13' ),
        'type' => 'textarea',
        'section' => 'motinoramento24'
    ));

    $wp_customize->add_setting( 'motinoramento24_img01', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'motinoramento24_img01', array(
        'label' => __( 'Imagem 01', 'grupo_roland13' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'motinoramento24'
    ) ) );

    $wp_customize->add_setting( 'motinoramento24_tituloimg01', array(
        'type' => 'theme_mod',
        'default' => __( 'Câmeras de Segurança', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'motinoramento24_tituloimg01', array(
        'label' => __( 'Título Imagem 01', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'motinoramento24'
    ));

    $wp_customize->add_setting( 'motinoramento24_img02', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'motinoramento24_img02', array(
        'label' => __( 'Imagem 02', 'grupo_roland13' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'motinoramento24'
    ) ) );

    $wp_customize->add_setting( 'motinoramento24_tituloimg02', array(
        'type' => 'theme_mod',
        'default' => __( 'Proteção Perimetral', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'motinoramento24_tituloimg02', array(
        'label' => __( 'Título Imagem 02', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'motinoramento24'
    ));

    $wp_customize->add_setting( 'motinoramento24_img03', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'motinoramento24_img03', array(
        'label' => __( 'Imagem 03', 'grupo_roland13' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'motinoramento24'
    ) ) );

    $wp_customize->add_setting( 'motinoramento24_tituloimg03', array(
        'type' => 'theme_mod',
        'default' => __( 'Controle de Acesso', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'motinoramento24_tituloimg03', array(
        'label' => __( 'Título Imagem 013', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'motinoramento24'
    ));

    $wp_customize->add_setting( 'motinoramento24_botão_link', array(
        'type' => 'theme_mod',
        'default' => '<span style="color: #000000;">Leia Mais </span>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'motinoramento24_botão_link', array(
        'label' => __( 'Leia Mais', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'motinoramento24'
    ));

    $wp_customize->add_setting( 'motinoramento24_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'motinoramento24_link', array(
        'label' => __( 'link do Leia Mais', 'grupo_roland13' ),
        'type' => 'url',
        'section' => 'motinoramento24'
    ));

    $wp_customize->add_setting( 'seguranca_privada_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'SEGURANÇA PATRIMONIAL', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'seguranca_privada_titulo', array(
        'label' => __( 'Título', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'seguranca_privada'
    ));

    $wp_customize->add_setting( 'seguranca_privada_texto', array(
        'type' => 'theme_mod',
        'default' => __( 'A atuação do Grupo Roland em segurança é reconhecida como uma das mais confiáveis e experientes do mercado, devido ao conhecimento técnico adquirido ao longo de 15 anos de experiência. Atuamos com profissionais de segurança devidamente registrados e legalizados no Departamento de Polícia Federal. Totalmente preparados para atender necessidades de segurança patrimonial, os profissionais de nossa equipe são formados em defesa pessoal, primeiros socorros, armamentos e possuem noções de direito penal, prevenção e combate a incêndios.', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'seguranca_privada_texto', array(
        'label' => __( 'Texto', 'grupo_roland13' ),
        'type' => 'textarea',
        'section' => 'seguranca_privada'
    ));

    $wp_customize->add_setting( 'seguranca_privada_img01', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'seguranca_privada_img01', array(
        'label' => __( 'Imagem 01', 'grupo_roland13' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'seguranca_privada'
    ) ) );

    $wp_customize->add_setting( 'seguranca_privada_tituloimg01', array(
        'type' => 'theme_mod',
        'default' => __( 'Segurança Armada', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'seguranca_privada_tituloimg01', array(
        'label' => __( 'Título Imagem 01', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'seguranca_privada'
    ));

    $wp_customize->add_setting( 'seguranca_privada_img02', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'seguranca_privada_img02', array(
        'label' => __( 'Imagem 02', 'grupo_roland13' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'seguranca_privada'
    ) ) );

    $wp_customize->add_setting( 'seguranca_privada_tituloimg02', array(
        'type' => 'theme_mod',
        'default' => __( 'Segurança Desarmada', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'seguranca_privada_tituloimg02', array(
        'label' => __( 'Título Imagem 02', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'seguranca_privada'
    ));

    $wp_customize->add_setting( 'seguranca_privada_img03', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'seguranca_privada_img03', array(
        'label' => __( 'Imagem 03', 'grupo_roland13' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'seguranca_privada'
    ) ) );

    $wp_customize->add_setting( 'seguranca_privada_tituloimg03', array(
        'type' => 'theme_mod',
        'default' => __( 'Moto Patrulhamento', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'seguranca_privada_tituloimg03', array(
        'label' => __( 'Título Imagem 03', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'seguranca_privada'
    ));

    $wp_customize->add_setting( 'seguranca_privada_botão_link', array(
        'type' => 'theme_mod',
        'default' => '<span style="color: #000000;">Leia Mais </span>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'seguranca_privada_botão_link', array(
        'label' => __( 'Leia Mais', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'seguranca_privada'
    ));

    $wp_customize->add_setting( 'seguranca_privada_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'seguranca_privada_link', array(
        'label' => __( 'link do Leia Mais', 'grupo_roland13' ),
        'type' => 'url',
        'section' => 'seguranca_privada'
    ));

    $wp_customize->add_setting( 'outros_servicos_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'serviços', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'outros_servicos_titulo', array(
        'label' => __( 'Título', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'outros_servicos'
    ));

    $wp_customize->add_setting( 'outros_servicos_texto', array(
        'type' => 'theme_mod',
        'default' => __( 'Há 20 anos o Grupo Roland atua em diversos segmentos de serviço e possui experiência com clientes diversificados em portes e segmentos. Todos os nossos profissionais seguem um rigoroso processo de recrutamento, o que garante uma grande sinergia com as outras áreas do Grupo. Oferecendo serviço de mão de obra capacitada e treinada para exercer funções de porteiro, controlador de acesso, limpeza, jardinagem e zeladoria.', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'outros_servicos_texto', array(
        'label' => __( 'Texto', 'grupo_roland13' ),
        'type' => 'textarea',
        'section' => 'outros_servicos'
    ));

    $wp_customize->add_setting( 'outros_servicos_imagem01', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'outros_servicos_imagem01', array(
        'label' => __( 'Imagem 01', 'grupo_roland13' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'outros_servicos'
    ) ) );

    $wp_customize->add_setting( 'outros_servicos_produto01', array(
        'type' => 'theme_mod',
        'default' => __( 'Portaria', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'outros_servicos_produto01', array(
        'label' => __( 'Título Imagem 01', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'outros_servicos'
    ));

    $wp_customize->add_setting( 'outros_servicos_imagem02', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'outros_servicos_imagem02', array(
        'label' => __( 'Imagem 02', 'grupo_roland13' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'outros_servicos'
    ) ) );

    $wp_customize->add_setting( 'outros_servicos_produto02', array(
        'type' => 'theme_mod',
        'default' => __( 'Conservação e Limpeza', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'outros_servicos_produto02', array(
        'label' => __( 'Título Imagem 02', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'outros_servicos'
    ));

    $wp_customize->add_setting( 'outros_servicos_imagem03', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'outros_servicos_imagem03', array(
        'label' => __( 'Imagem 03', 'grupo_roland13' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'outros_servicos'
    ) ) );

    $wp_customize->add_setting( 'outros_servicos_produto03', array(
        'type' => 'theme_mod',
        'default' => __( 'Você por Dentro de Tudo', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'outros_servicos_produto03', array(
        'label' => __( 'Título Imagem 03', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'outros_servicos'
    ));

    $wp_customize->add_setting( 'outros_servicos_imagem04', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'outros_servicos_imagem04', array(
        'label' => __( 'Imagem 04', 'grupo_roland13' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'outros_servicos'
    ) ) );

    $wp_customize->add_setting( 'outros_servicos_produto04', array(
        'type' => 'theme_mod',
        'default' => __( 'Controle de Acesso', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'outros_servicos_produto04', array(
        'label' => __( 'Título Imagem 04', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'outros_servicos'
    ));

    $wp_customize->add_setting( 'outros_servicos_botão_link', array(
        'type' => 'theme_mod',
        'default' => '<span style="color: #000000;">Leia Mais </span>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'outros_servicos_botão_link', array(
        'label' => __( 'Leia Mais', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'outros_servicos'
    ));

    $wp_customize->add_setting( 'outros_servicos_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'outros_servicos_link', array(
        'label' => __( 'link do Leia Mais', 'grupo_roland13' ),
        'type' => 'url',
        'section' => 'outros_servicos'
    ));

    $wp_customize->add_setting( 'blog_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'blog e Notícias', 'grupo_roland13' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blog_titulo', array(
        'label' => __( 'Título', 'grupo_roland13' ),
        'type' => 'text',
        'section' => 'blog'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'grupo_roland13_customize_register' );
endif;// grupo_roland13_customize_register


if ( ! function_exists( 'grupo_roland13_enqueue_scripts' ) ) :
    function grupo_roland13_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true);

    wp_deregister_script( 'grupo_roland13-popper' );
    wp_enqueue_script( 'grupo_roland13-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', false, null, true);

    wp_deregister_script( 'grupo_roland13-bootstrap' );
    wp_enqueue_script( 'grupo_roland13-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'grupo_roland13-bootstrap' );
    wp_enqueue_style( 'grupo_roland13-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'grupo_roland13-style' );
    wp_enqueue_style( 'grupo_roland13-style', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'grupo_roland13_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";
require_once "inc/bootstrap/wp_bootstrap_navwalker.php";

    /* Pinegrow generated Include Resources End */
?>