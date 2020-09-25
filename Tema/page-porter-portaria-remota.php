<?php get_header( 'page-porter-portaria-remota' ); ?>

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
<section id="monitoramento" style="text-align: left;" class="layout_padding ml-3 mr-3">
    <section class="fdb-block pg-lib-item pg-lib-item-locked" draggable="true" pg-draggable="true">
        <div class="container align-items-end justify-content-center d-flex" draggable="false">
            <div class="row align-items-top text-left" draggable="false">
                <div class="col-12 col-md-6 col-lg-5" draggable="false">
                    <p class="mb-5 mt-5" draggable="false"></p>
                    <h1 draggable="false"><?php _e( 'Acesso Seguro', 'grupo_roland13' ); ?></h1>
                    <p class="lead" draggable="false"><?php _e( 'Atendentes trabalham em uma base de atendimento de portaria remota, onde supervisionam os acessos.', 'grupo_roland13' ); ?></p>
                    <p class="lead" draggable="false"><?php _e( 'O atendimento é feito remotamente contando com equipamentos de alta tecnologia instalados', 'grupo_roland13' ); ?><?php _e( 'no condomínio, como:', 'grupo_roland13' ); ?></p>
                </div>
                <div class="col-12 col-sm-4 col-md-6 col-lg-4 m-auto pt-5" draggable="false">
                    <img alt="image" class="img-fluid rounded-0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/celporter.png" draggable="false">
                </div>
            </div>
        </div>
    </section>
    <section class="fdb-block pg-lib-item pg-lib-item-locked" draggable="true" pg-draggable="true">
        <div class="container" draggable="false">
            <div class="row pt-5 justify-content-center align-items-center" draggable="false">
                <div draggable="false" class="col-3" style="text-align: center;">
                    <img alt="image" draggable="false" src="<?php echo PG_Image::getUrl( get_theme_mod( 'porter_imagem01', esc_url( get_template_directory_uri() . '/assets/images/minha-colecao-de-icones/png/002-interfone.png' ) ), 'large' ) ?>" class="img-fluid">
                    <h2 draggable="false" class="text-center"><?php _e( 'Interfones Inteligentes', 'grupo_roland13' ); ?></h2>
                </div>
                <div class="col-3 offset-1" draggable="false" style="text-align: center;">
                    <img alt="image" class="img-fluid" src="<?php echo PG_Image::getUrl( get_theme_mod( 'porter_imagem02', esc_url( get_template_directory_uri() . '/assets/images/minha-colecao-de-icones/png/004-controle-remoto-1.png' ) ), 'large' ) ?>" draggable="false">
                    <h2 draggable="false" class="text-center"><?php _e( 'Controles Anticlonagem', 'grupo_roland13' ); ?></h2>
                </div>
                <div class="col-3 offset-1" draggable="false" style="text-align: center;">
                    <img alt="image" class="img-fluid" src="<?php echo PG_Image::getUrl( get_theme_mod( 'porter_imagem03', esc_url( get_template_directory_uri() . '/assets/images/minha-colecao-de-icones/png/005-codigo-qr.png' ) ), 'large' ) ?>" draggable="false">
                    <h2 draggable="false" class="text-center"><?php _e( 'Leitor de QR Code e Tag', 'grupo_roland13' ); ?></h2>
                </div>
            </div>
        </div>
    </section>
    <section class="fdb-block pg-lib-item pg-lib-item-locked" draggable="true" pg-draggable="true" style="margin-top: 40px; margin-bottom: 40px; background-color: #476be5; padding-top: 30px; padding-bottom: 30px;">
        <div class="container" draggable="false">
            <div class="row justify-content-center" draggable="false">
                <div class="col-12 col-lg-8 col-xl-6 text-center" draggable="false">
                    <h1 draggable="false" class="text-center text-white"><?php _e( 'Portaria Remota', 'grupo_roland13' ); ?></h1>
                    <p class="lead text-white" draggable="false"><?php _e( 'A portaria remota é a mais moderna solução tecnológica para acesso seguro existente no mercado, ela permite a entrada e saída de pessoas e veículos de forma simples e segura.', 'grupo_roland13' ); ?><?php _e( 'Com a portaria remota Porter, você tem aumento significativo na segurança do seu condomínio, além de economia nos custos da portaria convencional.', 'grupo_roland13' ); ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="fdb-block pg-lib-item pg-lib-item-locked" draggable="true" pg-draggable="true">
        <div class="container" draggable="false">
            <div class="justify-content-center pb-5 row" draggable="false">
                <div class="col-12 text-center" draggable="false">
                    <h1 draggable="false" class="text-center"><?php _e( 'Como Funciona a Portaria Remota', 'grupo_roland13' ); ?></h1>
                </div>
            </div>
            <div class="align-items-center pb-md-5 pt-5 row text-left" draggable="false">
                <div class="col-4 col-md-5 text-center" draggable="false">
                    <img alt="image" class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/interfonekiper.jpg" draggable="false" style="border-radius: 30px;" width="200">
                </div>
                <div class="col-12 col-md-5 m-md-auto" draggable="false">
                    <h2 draggable="false"><strong draggable="false" style="font-size: 25px;"><?php _e( 'Moradores', 'grupo_roland13' ); ?></strong></h2>
                    <p class="lead" draggable="false"><b><?php _e( '1° -', 'grupo_roland13' ); ?></b> <?php _e( 'Através do aplicativo Porter o morador tem acesso à chave do seu condomínio.', 'grupo_roland13' ); ?><br> <b><?php _e( '2° -', 'grupo_roland13' ); ?></b> <?php _e( 'O morador aproxima o celular com o aplicavito aberto, o sistema faz a leitura do QR code e libera o acesso.', 'grupo_roland13' ); ?></p>
                </div>
            </div>
            <div class="align-items-center pb-md-5 pt-5 row text-left" draggable="false">
                <div class="col-4 col-md-5 m-md-auto order-md-5 text-center" draggable="false">
                    <img alt="image" class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Entrada-no-Condom%C3%ADnio-com-QR-code-e-convites-virtuais-para-visitantes-Veja-como-a-tecnologia-auxilia-no-dia-a-dia-de-s%C3%ADndicos-e-moradores-1024x687.png" draggable="false" style="border-radius: 30px;">
                </div>
                <div class="col-12 col-md-5" draggable="false">
                    <h2 draggable="false"><strong draggable="false" style="font-size: 25px;"><?php _e( 'Visitantes com QR code', 'grupo_roland13' ); ?></strong></h2>
                    <p class="lead" draggable="false"><b><?php _e( '1° -', 'grupo_roland13' ); ?></b> <?php _e( 'Através do aplicativo Porter o morador envia um convite para o visitante.', 'grupo_roland13' ); ?><br><b><?php _e( '2° -', 'grupo_roland13' ); ?></b> <?php _e( 'O visitante recebe o convite por SMS ou Whatsapp, contendo o QR code e a localização do Condomínio.', 'grupo_roland13' ); ?><br><b><?php _e( '3° -', 'grupo_roland13' ); ?> </b><?php _e( 'O visitante, ao chegar no condomínio, aproxima o QR code no leitor.', 'grupo_roland13' ); ?><br><br></p>
                </div>
            </div>
            <div class="align-items-center pt-5 row text-left" draggable="false">
                <div class="col-4 col-md-5 text-center" draggable="false">
                    <img alt="image" class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/qrkiper.jpg" draggable="false" style="border-radius: 30px;" width="200">
                </div>
                <div class="col-12 col-md-5 m-md-auto" draggable="false">
                    <h2 draggable="false"><strong draggable="false" style="font-size: 25px;"><?php _e( 'Visitante com interfone', 'grupo_roland13' ); ?></strong></h2>
                    <p class="lead" draggable="false"><b><?php _e( '1° -', 'grupo_roland13' ); ?></b> <?php _e( 'Ao chegar no condomínio o visitante chama o operador através do interfone.', 'grupo_roland13' ); ?><br><b><?php _e( '2° -', 'grupo_roland13' ); ?></b> <?php _e( 'O operador identifica o visitante e em seguida entra em contato com o morador.', 'grupo_roland13' ); ?><br><b><?php _e( '3° -', 'grupo_roland13' ); ?></b> <?php _e( 'Encontrando o morador onde quer que ele esteja, o mesmo pode ou não autorizar a entrada. O morador pode pedir para falar com o visitante.', 'grupo_roland13' ); ?><br><b><?php _e( '4° -', 'grupo_roland13' ); ?></b> <?php _e( 'Somente após a liberação do morador o operador irá liberar o acesso.', 'grupo_roland13' ); ?><br><b><?php _e( 'Todo o processo é registrado e arquivado automaticamente pelo sistema.', 'grupo_roland13' ); ?></b></p>
                </div>
            </div>
        </div>
    </section>
    <section class="fdb-block pg-lib-item" draggable="true" pg-draggable="true">
        <div class="container">
            <div class="align-items-center row text-left" draggable="false">
                <div class="col-md-11">
                    <h3><h1 draggable="false" spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="1" medium-editor-index="a40f08b8-c495-b781-a5ba-d1edf35f2eec" data-placeholder="Type your text" data-medium-focused="true" class="text-center"><?php _e( 'Ter a portaria remota em seu condomínio faz toda a diferença!', 'grupo_roland13' ); ?></h1></h3>                              
                </div>
                <div class="col-md-6">
                    <h3><b spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="5" medium-editor-index="ee54f7f0-a47e-17c8-50fd-0899c583cbc0" data-placeholder="Type your text" data-medium-focused="true"><?php _e( 'Vantagens que a Porter oferece:', 'grupo_roland13' ); ?></b></h3> 
                    <p><p class="lead"><?php _e( '&bull; Controle de acesso com relatório contendo hora, data e imagens da entrada e saída de usuários e visitantes.', 'grupo_roland13' ); ?><br><?php _e( '&bull; Aumento significativo na segurança.', 'grupo_roland13' ); ?><br><?php _e( '&bull; Localização do usuário, estando ele no local ou não, via telefone fixo ou celular, permitindo assim, conferência com o visitante.', 'grupo_roland13' ); ?></p></p> 
                </div>
                <div class="col-md-6"> 
                    <p><p class="lead"><?php _e( '&bull; Profissionais treinados e capacitados, de acordo com os padrões internacionais de qualidade e segurança para atuar no setor de acesso seguro.', 'grupo_roland13' ); ?> <br><?php _e( 'FUNÇÃO PÂNICO, que alerta a base de atendimento para uma situação de risco.', 'grupo_roland13' ); ?><br><?php _e( '&bull; Manutenção preventiva e corretiva.', 'grupo_roland13' ); ?><br><?php _e( '&bull; Redução do risco de ações trabalhistas.', 'grupo_roland13' ); ?><br><?php _e( '&bull; Em caso de pane elétrica, a portaria remota funciona normalmente.', 'grupo_roland13' ); ?></p></p> 
                </div>
            </div>
        </div>
    </section>
    <section class="fdb-block pg-lib-item pg-lib-item-locked" pg-draggable="true" draggable="true" style="background-color: #476be5; padding-top: 30px; padding-bottom: 30px;">
        <div class="container" draggable="false">
            <div class="align-items-center row" draggable="false">
                <div class="col-12 col-lg-6 col-xl-5">
                    <h1 class="text-white"><?php _e( 'Funções do App Porter', 'grupo_roland13' ); ?></h1>
                    <div class="col-12 col-md-12">
                        <h4 draggable="false"><strong draggable="false" class="text-white" style="font-size: 25px;"><?php _e( 'QR code', 'grupo_roland13' ); ?></strong></h4>
                        <p draggable="false" class="lead text-white"><?php _e( 'O QR Code que aparece na tela do smartphone é a chave pessoal de cada usuário, o código é gerado automaticamente e atualizado a cada 30 segundos. Após aproximar o celular do leitor, a entrada é liberada rapidamente.', 'grupo_roland13' ); ?></p>
                    </div>
                    <div class="col-12 col-md-12">
                        <h4 draggable="false"><strong draggable="false" class="text-white" style="font-size: 25px;"><?php _e( 'Registro de acessos', 'grupo_roland13' ); ?></strong></h4>
                        <p draggable="false" class="lead text-white"><?php _e( 'Registros de acessos e notificações push de entrada e saída dos usuários selecionados, tudo na palma da sua mão.', 'grupo_roland13' ); ?></p>
                    </div>
                    <div class="col-12 col-md-12">
                        <h4 draggable="false"><strong draggable="false" class="text-white" style="font-size: 25px;"><?php _e( 'Entrada facilitada para convidados', 'grupo_roland13' ); ?></strong></h4>
                        <p draggable="false" class="lead text-white"><?php _e( 'Seus convidados também podem utilizar essa tecnologia. Através de mensagem, recebem o convite via QR Code, tornando o acesso mais prático e cômodo.', 'grupo_roland13' ); ?></p>
                    </div>
                    <div class="col-12 col-md-12">
                        <h4 draggable="false"><strong draggable="false" class="text-white" style="font-size: 25px;"><?php _e( 'Convites para festas e reuniões com QR code de acesso', 'grupo_roland13' ); ?></strong></h4>
                        <p draggable="false" class="lead text-white"><?php _e( 'No caso de reuniões, festas ou qualquer outro evento, você envia um QR Code para seus convidados com a data e hora específica. O código recebido por eles torna-se o convite para o evento. Acompanha localização do Google Maps.', 'grupo_roland13' ); ?></p>
                        <p draggable="false" class="lead text-white"><?php _e( 'Quer saber mais sobre o App Porter? Clique no botão abaixo e preencha o formulário, que um de nossos consultores entrará em contato com você:', 'grupo_roland13' ); ?></p>
                        <p class="mt-5 mt-sm-4 pg-lib-item pg-lib-item-locked" draggable="true" pg-draggable="true"> <a class="btn btn-lg btn-outline-light" href="<?php echo get_theme_mod( 'porter_porter_orcamento_link', 'https://www.froala.com' ); ?>" draggable="false" style="background-color: #ffffff; color: #476be5;"><?php echo get_theme_mod( 'porter_porter_orcamento', __( 'Solicite contato', 'grupo_roland13' ) ); ?></a></p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-8 m-auto ml-lg-auto mr-lg-0 pt-5 pt-lg-0">
                    <img alt="image" class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/celporter.png">
                </div>
            </div>
        </div>
    </section>
    <section class="fdb-block pg-lib-item pg-lib-item-locked" pg-draggable="true" draggable="true" style="padding-top: 30px; padding-bottom: 30px;">
        <div class="container" draggable="false">
            <div class="align-items-center row" draggable="false">
                <div class="col-12 col-lg-6 col-md-8 m-auto ml-lg-auto mr-lg-0 pt-5 pt-lg-0">
                    <img alt="image" class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/controle.png" width="500">
                </div>
                <div class="col-12 col-lg-6 col-xl-5">
                    <h1><b><?php _e( 'Controle de Garagem', 'grupo_roland13' ); ?></h1>
                    <h1><?php _e( 'Praticidade e segurança', 'grupo_roland13' ); ?></h1>
                    <div class="col-12 col-md-12">
                        <p draggable="false" class="lead"><?php _e( '&bull; O acesso à garagem é feito através de um controle remoto exclusivo para cada usuário, com sistema anticlonagem.', 'grupo_roland13' ); ?><br><?php _e( '&bull; Todos os dispositivos possuem a FUNÇÃO PÂNICO, que alerta a central de atendimento em caso de algum atentado à segurança do usuário.', 'grupo_roland13' ); ?><br><?php _e( '&bull; A solução continua funcionando mesmo em caso de pane elétrica.', 'grupo_roland13' ); ?><br><?php _e( '&bull; Seu material é feito de componentes que protegem contra água, poeira e impactos.', 'grupo_roland13' ); ?></p>
                        <p draggable="false" class="lead" style="color: #476be5; font-weight: bolder;"><b><?php _e( 'O controle é configurado de acordo com o acesso de cada condomínio.', 'grupo_roland13' ); ?></b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fdb-block pg-lib-item pg-lib-item-locked" draggable="true" pg-draggable="true" style="padding-top: 30px; padding-bottom: 30px;">
        <div class="container" draggable="false">
            <div class="row text-center" draggable="false">
                <div class="col" draggable="false">
                    <h1 draggable="false" style="color: #515157; font-weight: bolder;" class="text-center"><?php _e( 'Planos', 'grupo_roland13' ); ?></h1>
                </div>
            </div>
            <div class="row mt-5 align-items-center" draggable="false">
                <div class="col-12 col-sm-10 col-md-8 col-md-8 m-auto col-lg-4 text-center" draggable="false">
                    <div class="fdb-box shadow pb-5 pt-5 pl-3 pr-3 rounded" draggable="false">
                        <h2 draggable="false"><?php _e( 'Plano Assistence', 'grupo_roland13' ); ?></h2>
                        <p class="h3 font-weight-light" draggable="false"><?php _e( 'Prático e ágil, plano para condomínios que já possuem sistema de segurança.', 'grupo_roland13' ); ?></p>
                        <ul class="text-left mt-5 mb-5" draggable="false">
                            <li draggable="false">
                                <?php _e( '• Assistência técnica 24h.', 'grupo_roland13' ); ?>
                            </li>
                            <li draggable="false">
                                <?php _e( '• Manutenção preventiva e corretiva.', 'grupo_roland13' ); ?>
                            </li>
                            <li draggable="false">
                                <?php _e( '• Economia.', 'grupo_roland13' ); ?>
                            </li>
                            <li draggable="false">
                                <?php _e( '• Versatilidade.', 'grupo_roland13' ); ?>
                            </li>
                            <li draggable="false">
                                <?php _e( '• Agilidade e segurança na prestação dos serviços.', 'grupo_roland13' ); ?>
                            </li>
                        </ul>
                        <p draggable="false"><a href="<?php echo get_theme_mod( 'porter_porter_orcamento_link', 'https://www.froala.com' ); ?>" class="btn btn-outline-primary mt-4" draggable="false"><?php echo get_theme_mod( 'porter_porter_orcamento', __( 'Quero saber mais', 'grupo_roland13' ) ); ?></a></p>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-8 col-md-8 m-auto col-lg-4 text-center" draggable="false">
                    <div class="fdb-box shadow pb-5 pt-5 pl-3 pr-3 rounded" draggable="false">
                        <h2 draggable="false"><?php _e( 'Plano Access', 'grupo_roland13' ); ?></h2>
                        <p class="h3 font-weight-light" draggable="false"><?php _e( 'Ideal para pequenos condomínios.', 'grupo_roland13' ); ?><?php _e( 'Acesso seguro, rápido e econômico!', 'grupo_roland13' ); ?></p>
                        <ul class="text-left mt-5 mb-5" draggable="false">
                            <li draggable="false">
                                <?php _e( '• Portaria remota básica.', 'grupo_roland13' ); ?>
                            </li>
                            <li draggable="false">
                                <?php _e( '• Gerenciamento de acesso.', 'grupo_roland13' ); ?>
                            </li>
                            <li draggable="false">
                                <?php _e( '• Economia para o condomínio.', 'grupo_roland13' ); ?>
                            </li>
                            <li draggable="false">
                                <?php _e( '• Mais segurança.', 'grupo_roland13' ); ?>
                            </li>
                            <li draggable="false">
                                <?php _e( '• Acesso liberado somente com autorização do morador.', 'grupo_roland13' ); ?>
                            </li>
                        </ul>
                        <p draggable="false"><a href="<?php echo get_theme_mod( 'porter_porter_orcamento_link', 'https://www.froala.com' ); ?>" class="btn btn-outline-primary mt-4" draggable="false"><?php echo get_theme_mod( 'porter_porter_orcamento', __( 'Quero saber mais', 'grupo_roland13' ) ); ?></a></p>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-8 col-md-8 m-auto col-lg-4 text-center" draggable="false">
                    <div class="fdb-box shadow pb-5 pt-5 pl-3 pr-3 rounded" draggable="false">
                        <h2 draggable="false"><?php _e( 'Plano Full', 'grupo_roland13' ); ?></h2>
                        <p class="h3 font-weight-light" draggable="false"><?php _e( 'O plano completo com mais segurança, economia e tecnologia para o seu condomínio!', 'grupo_roland13' ); ?></p>
                        <ul class="text-left mt-5 mb-5" draggable="false">
                            <li draggable="false">
                                <?php _e( '• Portaria remota completa.', 'grupo_roland13' ); ?>
                            </li>
                            <li draggable="false">
                                <?php _e( '• Gerenciamento de acesso.', 'grupo_roland13' ); ?>
                            </li>
                            <li draggable="false">
                                <?php _e( '• App Porter.', 'grupo_roland13' ); ?>
                            </li>
                            <li draggable="false">
                                <?php _e( '• Atendimento completo.', 'grupo_roland13' ); ?>
                            </li>
                            <li draggable="false">
                                <?php _e( '• Mais tecnologia para o condomínio.', 'grupo_roland13' ); ?>
                            </li>
                            <li draggable="false">
                                <?php _e( '• Valorização do imóvel.', 'grupo_roland13' ); ?>
                            </li>
                        </ul>
                        <p draggable="false"><a href="<?php echo get_theme_mod( 'porter_porter_orcamento_link', 'https://www.froala.com' ); ?>" class="btn btn-outline-primary mt-4" draggable="false"><?php echo get_theme_mod( 'porter_porter_orcamento', __( 'Quero saber mais', 'grupo_roland13' ) ); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<div class="copyright-bar bg-black">
    <div class="container">
        <?php if( get_theme_mod( 'blocks_copyright_1_text_left' ) ) : ?>
            <p class="pull-left small"><?php echo get_theme_mod( 'blocks_copyright_1_text_left', __( '© pgblocks - Pinegrow Blocks', 'grupo_roland13' ) ); ?></p>
        <?php endif; ?>
    </div>
</div>        

<?php get_footer( 'page-porter-portaria-remota' ); ?>