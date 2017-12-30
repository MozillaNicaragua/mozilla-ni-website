<?php /* Template Name: Home */
get_header(); 

$home_posts_args = array(
    'post_type' => 'post',
    'posts_per_page' => 3);
$home_posts = new WP_Query( $home_posts_args );
$member_args = array(
    'post_type' => 'members',
    'posts_per_page' => 4,
    'orderby' => 'rand');
$members = new WP_Query( $member_args );

?>

    <main>
        <section class="hero-page" style="background-image:url('<?php echo get_template_directory_uri() ?>/assets/mozilla-ni-header.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5">
                        <h1 class="title text-white">Mozilla Nicaragua</h1>
                        <p class="text-white">Somos una comunidad que apoya la innovacion y la web abierta para todos.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-page">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex align-items-center">
                        <div class="about-mozilla">
                            <h2 class="title">Hacemos Internet más seguro, saludable y rápido para siempre.</h2>
                            <p>Mozilla es la organización sin ánimo de lucro responsable de Firefox, el navegador alternativo original. Creamos productos y políticas para mantener Internet al servicio de las personas, no del beneficio.</p>
                            <a href="https://www.mozilla.org/es-ES/" class="btn btn-primary">Conoce mas</a>                            
                        </div>
                    </div>
                    <div class="col-12 col-md-6 text-center">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/mozilla-ni-logo-secondary.png" alt="Mozilla Nicaragua" />
                        <p>Somos muchos los que colaboramos con los principios y valores de Mozilla con el fin de promover un mejor futuro para web, construir las bases de las tecnologías y compartir con más amigos los proyectos más fabulosos.</p>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <i class="fa fa-shield circle-icons" aria-hidden="true"></i>
                                <a href="https://advocacy.mozilla.org/es/encrypt/codemoji/1" target="_blank">
                                    Defiende la encriptación
                                </a>
                            </div>
                            <div class="col-12 col-md-6">
                                <i class="fa fa-globe circle-icons" aria-hidden="true"></i>
                                <a href="https://learning.mozilla.org/en-US/" target="_blank">Enseñar la Web</a>
                            </div>
                            <div class="col-12 col-md-6">
                                <i class="fa fa-wrench circle-icons" aria-hidden="true"></i>
                                <a href="https://www.mozilla.org/en-US/about/policy/lean-data/" target="_blank">Prueba el kit de herramientas Lean Data</a>
                            </div>
                            <div class="col-12 col-md-6">
                                <i class="fa fa-flag circle-icons" aria-hidden="true"></i>
                                <a href="https://internethealthreport.org/v01/es/" target="_blank">
                                    Lee nuestro Reporte de Salud de Internet
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="download-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="title text-white">Descarga el nuevo Firefox</h2>
                        <p class="text-white mx-width-400">Con el doble de velocidad, protección de privacidad incorporada y Mozilla detrás, el nuevo Firefox es la mejor forma de navegar.</p>
                        <a href="<?php the_field('theme_download_firefox_link', 'option') ?>" class="btn btn-rounded-success btn-lg" target="_blank">Descargar Firefox</a>
                        <div>
                            <img src="https://www.mozilla.org/media/img/home/laptop.cad96eee9ddb.png" alt="Mozilla Firefox" class="download-image" />

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title text-center mb-5">Blog</h2>
                    </div>
                    <?php if ( $home_posts->have_posts() ) : ?>
                        <?php while ( $home_posts->have_posts() ) : $home_posts->the_post(); ?>
                            <div class="col-12 col-md-4">
                                <div class="card-blog">
                                    <div class="card-image">
                                        <img src="<?php the_post_thumbnail_url('card-blog'); ?>" alt="<?php the_title(); ?>">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h4>
                                        <p class="card-excerpt"><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="col-12 text-center">
                        <a href="/blog/" class="btn btn-primary">Ver mas</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="members-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title text-center mb-5">Colaboradores de Mozilla Nicaragua</h2>
                    </div>
                    <?php if ( $members->have_posts() ) : ?>
                        <?php while ( $members->have_posts() ) : $members->the_post(); ?>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card-member">
                                    <img src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title() ?>">
                                    <h4 class="card-name"><?php the_title() ?></h4>
                                    <span class="card-position"><?php the_field( 'member_position' ); ?></span>
                                    <div class="card-description">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="col-12 text-center mt-5">
                        <a href="/colaboradores/" class="btn btn-primary">Ver mas colaboradores</a>
                    </div>
                </div>
            </div>
        </section>
    </main>


<?php get_footer(); ?>