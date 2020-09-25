<?php get_header( 'page-home' ); ?>

        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
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
        <?php echo do_shortcode('[smartslider3 slider=2]') ?>
        <div class="container">
            <section class="espacotopo layout_padding welcome_section" id="gruporoland"> 
                <div class="justify-content-center row"> 
                    <div style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/selosite.png'); background-repeat: no-repeat; background-position: center center; background-size: contain;" class="col-md-5" src="<?php echo PG_Image::getUrl( get_theme_mod( 'resumo_roland_img' ), 'large' ) ?>"> 
</div>                     
                    <div class="align-self-center col-md-5"> 
                        <div class="welcome_detail"> 
                            <h1 class="text-info text-center"><?php echo get_theme_mod( 'resumo_roland_titulo', __( 'Grupo Roland', 'grupo_roland13' ) ); ?></h1> 
                            <h2 class="text-center text-uppercase" style="font-weight: 500;"><?php echo get_theme_mod( 'resumo_roland_sub', __( 'Nossa História', 'grupo_roland13' ) ); ?></h2> 
                            <p align="justify" class="text-justify"><?php echo get_theme_mod( 'resumo_roland_texto', 'Fundado em 1993, o Grupo é composto por empresas do seguimento de Segurança Privada; Possui sedes operacionais e administrativas próprias e bem equipadas em uma área de 1.460m²; Conta com equipe especializada, treinada periodicamente para aperfeiçoamento; Dispõe de serviços de Segurança Eletrônica e Locação de mão de obra. Contar com o Grupo Roland é ter a tranquilidade de saber que o que você tanto preza está sendo cuidado por uma empresa de confiança e qualidade, que tem experiência, conhecimento, e é referência em sua área de atuação.<br>' ); ?></p> 
                        </div>                         
                    </div>                     
                </div>                 
            </section>
            <div class="espacotopo">
                <section class="espacotopo pg-empty-placeholder ruamaisegura" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/capa%20novo.jpg'); min-height: 400px;background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'landing_page_img' ), 'large' ).')' ?>;"></section>
            </div>
            <div class="security_btn text-center" style="margin-top: 15px; font-weight: 600; text-align: center;">
                <a href="<?php echo get_theme_mod( 'landing_page_link', '#' ); ?>"><?php echo get_theme_mod( 'landing_page_botão_link', '<span style="color: #000000;">Saiba Mais</span>' ); ?></a>
            </div>
            <section class="espacotopo layout_padding security_section" id="monitoramento"> 
                <div class="container"> 
                    <h2 class="text-center text-uppercase" style="font-weight: 500;"><?php echo get_theme_mod( 'portaria_remota_titulo', __( 'Portaria Remota', 'grupo_roland13' ) ); ?></h2>
                    <div class="col-md-12"> 
                        <p align="justify" class="text-justify"><?php echo get_theme_mod( 'portaria_remota_texto', 'O Porter é o mais moderno e seguro sistema de monitoramento e controle de acessos existente no mercado. Ele permite o acesso de pessoas e veículos a condomínios de forma simples e segura, sempre monitorado e auditado por um atendente 24 horas por dia. <i class="text-justify">Com a Porter, além do aumento na segurança, você ainda tem uma economia de até 50% no custo da portaria 24 horas do seu condmínio.</i>' ); ?></p> 
                    </div>                     
                    <div class="security_container"> 
                        <div class="col-md-12"> 
</div>                         
                        <div class="form"> 
                            <div class="row" style="justify-content: center;"> 
                                <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xl-4 imagemcoluna" align="center" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/46395516-3934-4587-b363-f891e7774752.jpg');background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'portaria_remota_img01' ), 'large' ).')' ?>;"> 
                                    <div class="textodentroimg"> 
                                        <p align="center" class="textodedentro textodentroimagem"><?php echo get_theme_mod( 'portaria_remota_tituloimg01', __( 'Câmeras de Segurança', 'grupo_roland13' ) ); ?></p> 
                                    </div>                                     
                                </div>                                 
                                <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xl-4 imagemcoluna" align="center" style="background-position: right center; background-repeat: no-repeat; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/controle-de-acesso-garagem.jpg');background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'portaria_remota_img02' ), 'large' ).')' ?>;"> 
                                    <div class="textodentroimg"> 
                                        <p align="center" class="textodedentro textodentroimagem"><?php echo get_theme_mod( 'portaria_remota_tituloimg02', __( 'Proteção Perimetral', 'grupo_roland13' ) ); ?></p> 
                                    </div>                                     
                                </div>                                 
                                <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xl-4 colunacolada imagemcoluna" align="center" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cameras.jpg');background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'portaria_remota_img03' ), 'large' ).')' ?>;"> 
                                    <div class="textodentroimg"> 
                                        <p align="center" class="textodedentro textodentroimagem"><?php echo get_theme_mod( 'portaria_remota_tituloimg03', __( 'Controle de Acesso', 'grupo_roland13' ) ); ?></p> 
                                    </div>                                     
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>
                <div class="security_btn text-center" style="margin-top: 15px; font-weight: 600; text-align: center;">
                    <a href="<?php echo get_theme_mod( 'portaria_remota_link', '#' ); ?>"><?php echo get_theme_mod( 'portaria_remota_botão_link', '<span style="color: #000000;">Leia Mais </span>' ); ?></a>
                </div>                 
            </section>
        </div>
        <section class="app espacotopo layout_padding" id="monitoramento"> 
            <div class="divoverlay">
                <div class="container "> 
                    <h2 class="apptitulo text-center text-uppercase text-white"><?php echo get_theme_mod( 'aplicativo_titulo', __( 'PORTARIA REMOTA ÉTECNOLOGIA', 'grupo_roland13' ) ); ?></h2> 
                    <div class="security_container"> 
                        <div class="col-md-12"> 
                            <p align="justify" class="text-justify text-white"><?php echo get_theme_mod( 'aplicativo_texto', 'Atualmente, a tecnologia utilizada na solução de portaria remota pela Porter está na sua quarta geração, diferenciando-a de todos os players do mercado de portaria automatizada.<br>Trata-se de uma solução de controle de acessos com alta tecnologia, tanto de hardware quanto de software, totalmente integrados que, fornecem segurança, confiabilidade e eficiência na prestação dos serviços.<br>Oferece, ainda uma melhor qualidade na segurança e uma redução de até 50% no custo da portaria presencial 24h.' ); ?></p>
                        </div>                         
                        <h3 class="apptitulo text-center text-uppercase text-white"><?php echo get_theme_mod( 'aplicativo_texto_02', __( 'PORTARIA REMOTA ÉTECNOLOGIA', 'grupo_roland13' ) ); ?></h3>
                        <div class="form"> 
                            <h3 align="center" class="text-center"><strong></strong></h3>
                            <div class="row" style="justify-content: center;"> 
                                <div class="col-12 col-lg-3 col-md-4 col-sm-12 col-xl-3" align="center">
                                    <a class="btn" href="<?php echo get_theme_mod( 'aplicativo_google_link', '#' ); ?>" src="<?php echo PG_Image::getUrl( get_theme_mod( 'aplicativo_google_disponivel' ), 'large' ) ?>"> <img width="200" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/disponivel-google-play-badge.png"> </a> 
                                </div>
                                <div class="col-12 col-lg-3 col-md-4 col-sm-12 col-xl-3" align="center">
                                    <a class="btn" href="<?php echo get_theme_mod( 'aplicativo_apple_link', '#' ); ?>" src="<?php echo PG_Image::getUrl( get_theme_mod( 'aplicativo_apple_disponivel' ), 'large' ) ?>"> <img width="200" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/disponivel-na-app-store-botao.png"> </a> 
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>
            </div>             
        </section>
        <div class="container">
            <section class="espacotopo layout_padding security_section" id="monitoramento"> 
                <div class="container"> 
                    <h2 class="text-center text-uppercase" style="font-weight: 500;"><?php echo get_theme_mod( 'motinoramento24_titulo', __( 'monitoramento 24h do sistema de alarme', 'grupo_roland13' ) ); ?></h2> 
                    <div class="security_container"> 
                        <div class="col-md-12"> 
                            <p align="justify" class="text-justify"><?php echo get_theme_mod( 'motinoramento24_texto', __( 'O Grupo Roland utiliza sistemas, alarmes, acompanhamento online, softwares e equipamentos de segurança eletrônica mais recentes do mercado, contando com um centro de operações planejado para supervisionar áreas e situações críticas, sinais de alarme e imagens digitais com resposta rápida para qualquer ocorrência. Mão de obra qualificada e constantemente atualizada.', 'grupo_roland13' ) ); ?></p> 
                        </div>                         
                        <div class="form"> 
                            <div class="row" style="justify-content: center;"> 
                                <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xl-4 colunacolada imagemcoluna" align="center" style="background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'motinoramento24_img01' ), 'large' ).')' ?>;"> 
                                    <div class="textodentroimg"> 
                                        <p align="center" class="textodedentro textodentroimagem"><?php echo get_theme_mod( 'motinoramento24_tituloimg01', __( 'Câmeras de Segurança', 'grupo_roland13' ) ); ?></p> 
                                    </div>                                     
                                </div>                                 
                                <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xl-4 colunacolada imagemcoluna" align="center" style="background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'motinoramento24_img02' ), 'large' ).')' ?>;"> 
                                    <div class="textodentroimg"> 
                                        <p align="center" class="textodedentro textodentroimagem"><?php echo get_theme_mod( 'motinoramento24_tituloimg02', __( 'Proteção Perimetral', 'grupo_roland13' ) ); ?></p> 
                                    </div>                                     
                                </div>                                 
                                <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xl-4 colunacolada imagemcoluna" align="center" style="background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'motinoramento24_img03' ), 'large' ).')' ?>;"> 
                                    <div class="textodentroimg"> 
                                        <p align="center" class="textodedentro textodentroimagem"><?php echo get_theme_mod( 'motinoramento24_tituloimg03', __( 'Controle de Acesso', 'grupo_roland13' ) ); ?></p> 
                                    </div>                                     
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>
                <div class="security_btn text-center" style="margin-top: 15px; font-weight: 600; text-align: center;">
                    <a href="<?php echo get_theme_mod( 'motinoramento24_link', '#' ); ?>"><?php echo get_theme_mod( 'motinoramento24_botão_link', '<span style="color: #000000;">Leia Mais </span>' ); ?></a>
                </div>                 
            </section>
            <section class="espacotopo service_section" id="patrimonial"> 
                <div class="container"> 
                    <div class="service_detail"> 
                        <h2 class="text-center text-uppercase" style="font-weight: 500;"><?php echo get_theme_mod( 'seguranca_privada_titulo', __( 'SEGURANÇA PATRIMONIAL', 'grupo_roland13' ) ); ?></h2> 
                        <p align="justify" class="text-justify"><?php echo get_theme_mod( 'seguranca_privada_texto', __( 'A atuação do Grupo Roland em segurança é reconhecida como uma das mais confiáveis e experientes do mercado, devido ao conhecimento técnico adquirido ao longo de 15 anos de experiência. Atuamos com profissionais de segurança devidamente registrados e legalizados no Departamento de Polícia Federal. Totalmente preparados para atender necessidades de segurança patrimonial, os profissionais de nossa equipe são formados em defesa pessoal, primeiros socorros, armamentos e possuem noções de direito penal, prevenção e combate a incêndios.', 'grupo_roland13' ) ); ?></p> 
                    </div>                     
                    <p> 
            &nbsp; </p> 
                    <div class="form"> 
                        <div class="row" style="justify-content: center;"> 
                            <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xl-4 colunacolada imagemcoluna" align="center" style="background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'seguranca_privada_img01' ), 'large' ).')' ?>;"> 
                                <div class="textodentroimg"> 
                                    <p align="center" class="textodedentro textodentroimagem"><?php echo get_theme_mod( 'seguranca_privada_tituloimg01', __( 'Segurança Armada', 'grupo_roland13' ) ); ?></p> 
                                </div>                                 
                            </div>                             
                            <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xl-4 colunacolada imagemcoluna" align="center" style="background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'seguranca_privada_img02' ), 'large' ).')' ?>;"> 
                                <div class="textodentroimg"> 
                                    <p align="center" class="textodedentro textodentroimagem"><?php echo get_theme_mod( 'seguranca_privada_tituloimg02', __( 'Segurança Desarmada', 'grupo_roland13' ) ); ?></p> 
                                </div>                                 
                            </div>                             
                            <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xl-4 colunacolada imagemcoluna" align="center" style="background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'seguranca_privada_img03' ), 'large' ).')' ?>;"> 
                                <div class="textodentroimg"> 
                                    <p align="center" class="textodedentro textodentroimagem"><?php echo get_theme_mod( 'seguranca_privada_tituloimg03', __( 'Moto Patrulhamento', 'grupo_roland13' ) ); ?></p> 
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>
                <div class="security_btn text-center" style="margin-top: 15px; font-weight: 600; text-align: center;">
                    <a href="<?php echo get_theme_mod( 'seguranca_privada_link', '#' ); ?>"><?php echo get_theme_mod( 'seguranca_privada_botão_link', '<span style="color: #000000;">Leia Mais </span>' ); ?></a>
                </div>                 
            </section>
            <section class="espacotopo service_section" id="serviços"> 
                <div class="container"> 
                    <div class="service_detail"> 
                        <h2 class="text-center text-uppercase" style="font-weight: 500;"><?php echo get_theme_mod( 'outros_servicos_titulo', __( 'serviços', 'grupo_roland13' ) ); ?></h2> 
                        <p align="justify"><?php echo get_theme_mod( 'outros_servicos_texto', __( 'Há 20 anos o Grupo Roland atua em diversos segmentos de serviço e possui experiência com clientes diversificados em portes e segmentos. Todos os nossos profissionais seguem um rigoroso processo de recrutamento, o que garante uma grande sinergia com as outras áreas do Grupo. Oferecendo serviço de mão de obra capacitada e treinada para exercer funções de porteiro, controlador de acesso, limpeza, jardinagem e zeladoria.', 'grupo_roland13' ) ); ?></p> 
                    </div>                     
                    <form> 
                        <div class="row" style="justify-content: center;"> 
                            <div class="imagemcoluna imgportaria col-md-6" align="center" style="background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'outros_servicos_imagem01' ), 'large' ).')' ?>;"> 
                                <div class="textodentroimg"> 
                                    <p align="center" class="textodedentro"><?php echo get_theme_mod( 'outros_servicos_produto01', __( 'Portaria', 'grupo_roland13' ) ); ?></p> 
                                </div>                                 
                            </div>                             
                            <div class="imagemcoluna imglimpeza col-md-6" align="center" style="background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'outros_servicos_imagem02' ), 'large' ).')' ?>;"> 
                                <div class="textodentroimg"> 
                                    <p align="center" class="textodedentro"><?php echo get_theme_mod( 'outros_servicos_produto02', __( 'Conservação e Limpeza', 'grupo_roland13' ) ); ?></p> 
                                </div>                                 
                            </div>                             
                            <div class="imagemcoluna imgpordentro col-md-6" style="background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'outros_servicos_imagem03' ), 'large' ).')' ?>;"> 
                                <div class="textodentroimg"> 
                                    <p align="center" class="textodedentro"><?php echo get_theme_mod( 'outros_servicos_produto03', __( 'Você por Dentro de Tudo', 'grupo_roland13' ) ); ?></p> 
                                </div>                                 
                            </div>                             
                            <div class="imagemcoluna imgacesso col-md-6" style="background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'outros_servicos_imagem04' ), 'large' ).')' ?>;"> 
                                <div class="textodentroimg"> 
                                    <p align="center" class="textodedentro"><?php echo get_theme_mod( 'outros_servicos_produto04', __( 'Controle de Acesso', 'grupo_roland13' ) ); ?></p> 
                                </div>                                 
                            </div>                             
                        </div>                         
                    </form>                     
                </div>
                <div class="security_btn text-center" style="margin-top: 15px; font-weight: 600; text-align: center;">
                    <a href="<?php echo get_theme_mod( 'outros_servicos_link', '#' ); ?>"><?php echo get_theme_mod( 'outros_servicos_botão_link', '<span style="color: #000000;">Leia Mais </span>' ); ?></a>
                </div>                 
            </section>
            <div class="container espacotopo" draggable="false"> 
                <div class="service_detail"> 
                    <h2 class="text-center text-uppercase" style="font-weight: 500;"><?php echo get_theme_mod( 'blog_titulo', __( 'blog e Notícias', 'grupo_roland13' ) ); ?></h2> 
                    <section>
                        <div class="container">
                            <div class="row">
                                <?php
                                    $post_query_args = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 3,
                                        'paged' => get_query_var( 'paged' ) ?: 1,
                                        'order' => 'DESC',
                                        'orderby' => 'date'
                                    )
                                ?>
                                <?php $post_query = new WP_Query( $post_query_args ); ?>
                                <?php if ( $post_query->have_posts() ) : ?>
                                    <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                                        <?php PG_Helper::rememberShownPost(); ?>
                                        <div <?php post_class( 'col-sm-4 team-member-wrap' ); ?> id="post-<?php the_ID(); ?>">
                                            <div class="team-member">
                                                <?php if ( is_singular() ) : ?>
                                                    <?php echo PG_Image::getPostImage( null, 'post-thumbnail', array(
                                                            'class' => 'img-fluid',
                                                            'style' => 'margin-bottom: 10px;'
                                                    ), 'both', null ) ?>
                                                <?php else : ?>
                                                    <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo PG_Image::getPostImage( null, 'post-thumbnail', array(
                                                                'class' => 'img-fluid',
                                                                'style' => 'margin-bottom: 10px;'
                                                        ), 'both', null ) ?></a>
                                                <?php endif; ?>
                                                <div class="team-details">
                                                    <h4 class="member-name"><?php the_title(); ?></h4>
                                                    <p class="text-justify"><?php echo get_the_excerpt(); ?></p>
                                                    <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-primary"><?php _e( 'Leia mais', 'grupo_roland13' ); ?></a>
                                                    <!-- /.social -->
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php else : ?>
                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'grupo_roland13' ); ?></p>
                                <?php endif; ?>
                                <!-- /.team-member-wrap -->
                                <!-- /.team-member-wrap -->
                                <!-- /.team-member-wrap -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container -->
                    </section>                     
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

<?php get_footer( 'page-home' ); ?>