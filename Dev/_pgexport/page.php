<?php get_header( 'page' ); ?>

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
    <section id="monitoramento" style="text-align: left;" class="layout_padding">
        <div class="container">
            <div class="mt-5 pjustificado row" draggable="false" style="justify-content: center;">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php PG_Helper::rememberShownPost(); ?>
                        <div class="col-md-7 text-left">
                            <div class="ml-3 mr-3">
                                <h2 style="text-align: left !important; font-weight: 600;"><?php the_title(); ?></h2>
                                <?php echo PG_Image::getPostImage( null, 'large', array(
                                        'class' => 'img-fluid rounded',
                                        'draggable' => 'false'
                                ), 'both', null ) ?>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'grupo_roland13' ); ?></p>
                <?php endif; ?>
            </div>                 
        </div>
    </section>
    <div class="copyright-bar bg-black">
        <div class="container">
            <?php if( get_theme_mod( 'blocks_copyright_1_text_left' ) ) : ?>
                <p class="pull-left small"><?php echo get_theme_mod( 'blocks_copyright_1_text_left', __( '© pgblocks - Pinegrow Blocks', 'grupo_roland13' ) ); ?></p>
            <?php endif; ?>
        </div>
    </div>        

<?php get_footer( 'page' ); ?>