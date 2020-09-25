<?php get_header(); ?>

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
        <div class="container espacotopo" draggable="false"> 
            <div class="service_detail"> 
                <h2 class="text-center text-uppercase" style="font-weight: 500;"><?php echo get_theme_mod( 'blog_titulo', __( 'blog e Notícias', 'grupo_roland13' ) ); ?></h2> 
                <section>
                    <div class="container">
                        <div class="row">
                            <?php
                                $post_query_args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 999,
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

<?php get_footer(); ?>