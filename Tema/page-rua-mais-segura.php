<?php get_header(); ?>

        <!-- header section strats -->
        <!-- end header section -->
        <!-- story section -->
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"> <img height="50" alt="image" draggable="false" src="<?php echo PG_Image::getUrl( get_theme_mod( 'logo_img', esc_url( get_template_directory_uri() . '/assets/images/logo01.png' ) ), 'large' ) ?>"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav3" aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation" draggable="false">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/menu.png"/>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav3">
                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                    <?php
                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="nav-item {CLASSES}" id="{ID}">
                                        <a class="nav-link" draggable="false" {ATTRS}>{TITLE}<span class="sr-only" draggable="false">(current)</span></a>
                                    </li>';
                        PG_Smart_Walker_Nav_Menu::$options['current_class'] = 'active';
                        wp_nav_menu( array(
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul class="%2$s ml-auto navbar-nav" draggable="false" id="%1$s">%3$s</ul>',
                            'walker' => new PG_Smart_Walker_Nav_Menu()
                    ) ); ?>
                <?php endif; ?>
            </div>
            <a class="btn btn-dark ml-md-3" href="<?php echo get_theme_mod( 'botao_chamada_link', '#' ); ?>"><?php echo get_theme_mod( 'botao_chamada_botao', __( 'Button', 'grupo_roland13' ) ); ?></a>
        </nav>
        <section style="background-color: #001cfe;">
            <div class="jumbotron jumbotron-fluid" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/capa3.jpg'); min-height: 400px; background-position: left center; background-size: cover; background-repeat: no-repeat;">
</div>
            <div class="container" style="border-width: 7px;">
                <div class="col-md-12" style="margin-bottom: 50PX;">
                    <div class="container">
                        <h3 class="text-center titulolanding" style="color: #ffffff;"><?php _e( 'Qualidade e tecnologia protegendo pessoas e bens', 'grupo_roland13' ); ?></h3>
                        <p class="textolanding" style="color: #ffffff;"><?php _e( 'O Grupo Roland, dentro de um novo conceito de segurança, preparou 01 pacote que cabe no seu bolso. Reúna-se, converse com seus vizinhos, assim sua rua terá um sistema de segurança integralizado, por um precinho bem camarada, e a prestação de serviço de uma das mais conceituadas empresas do ramo cuidando do seu patrimônio.', 'grupo_roland13' ); ?></p>
                    </div>                     
                </div>
                <div class="row">
                    <div class="align-self-end col-12 col-md-6"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Grupo%20Roland%20-%20add%20site.png" class="embed-responsive"/>
                    </div>
                    <div class="col-md-6" style="align-self: center;">
                        <div class="container">
                            <h3 class="titulolanding" style="color: #ffffff;"><?php _e( '1- MONITORAMENTO SOLIDÁRIO', 'grupo_roland13' ); ?></h3>
                            <p class="textolanding" style="color: #ffffff;"><?php _e( 'Consiste no monitoramento de câmeras e alarmes entre a vizinhança seja uma rua, quarteirão ou bairro, você tem o seu monitoramento na palma da sua mão, através do App Roland Mobile.', 'grupo_roland13' ); ?></p>
                            <p class="textolanding" style="color: #ffffff;"><?php _e( 'Permite o acesso às imagens das câmeras de vigilância através de celulares, tablets ou computadores, desde que haja uma conexão com a Internet.', 'grupo_roland13' ); ?></p>
                            <p class="textolanding" style="color: #ffffff;"><?php _e( 'É uma forma de engajar a comunidade em um projeto colaborativo para monitoramento de bairros onde há a participação coletiva dos moradores.', 'grupo_roland13' ); ?></p>
                        </div>                         
                    </div>
                </div>
                <div class="row">
                    <div class="align-self-center col-md-6">
                        <div class="container">
                            <h3 class="titulolanding" style="color: #ffffff;"><?php _e( '2- ALARME 24H MONITORADO', 'grupo_roland13' ); ?></h3>
                            <p class="textolanding" style="color: #ffffff;"><?php _e( 'Permite o monitoramento dos locais protegidos através de sensores infravermelho passivo, ativo ou de abertura. Após detectarem qualquer tipo de violação, acionam as sirenes informando remotamente a central de operações do Grupo Roland, com atendimento da pronta resposta.', 'grupo_roland13' ); ?></p>
                        </div>                         
                    </div>
                    <div class="align-self-end col-12 col-md-6"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/mao%20casa.png" class="embed-responsive"/>
                    </div>
                </div>
                <div class="row">
                    <div class="align-self-end col-12 col-md-6"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/patrulha%20moto.png" class="embed-responsive"/>
                    </div>
                    <div class="align-self-end col-md-6">
                        <div class="container">
                            <h3 class="titulolanding" style="color: #ffffff;"><?php _e( '3- PRONTA RESPOSTA', 'grupo_roland13' ); ?></h3>
                            <p class="textolanding" style="color: #ffffff;"><?php _e( 'Atendimento operacional por profissionais capacitados em nosso Centro de Treinamento de Táticas Defensivas.', 'grupo_roland13' ); ?></p>
                        </div>                         
                    </div>
                </div>
                <div class="col-md-12" style="margin-bottom: 50PX; margin-top: 50px;">
                    <div class="container text-center" style="padding-bottom: 50px;">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/final.png" width="50%" height="auto"/>
                        <div class="col-md-12">
                            <h3 class="text-center textolanding" style="color: #ffffff;"><?php _e( 'Siga-nos', 'grupo_roland13' ); ?></h3> 
                        </div>
                        <div class="col-md-12">
                            <a href="https://www.facebook.com/Grupo-Roland-111986543753021" target="_blank"><i class="fa fa-2x fa-facebook-square text-white"></i></a>
                            <a href="https://www.instagram.com/gruporolandrn/" target="_blank"><i class="fa fa-2x fa-instagram text-white"></i></a> 
                        </div>
                    </div>                     
                </div>
            </div>
            <div class="copyright-bar bg-black">
                <div class="container">
                    <?php if( get_theme_mod( 'blocks_copyright_1_text_left' ) ) : ?>
                        <p class="pull-left small"><?php echo get_theme_mod( 'blocks_copyright_1_text_left', __( '© pgblocks - Pinegrow Blocks', 'grupo_roland13' ) ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </section>        

<?php get_footer(); ?>