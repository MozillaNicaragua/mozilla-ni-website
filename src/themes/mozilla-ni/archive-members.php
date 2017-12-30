<?php get_header(); 

$members_args = array(
    'post_type' => 'members',
    'posts_per_page' => -1,
    'orderby' => 'rand');

$members = new WP_Query( $members_args );

?>

    <main class="main pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="title mt-5 mb-5">Colaboradores de Mozilla Nicaragua</h1>
                </div>
                <?php if ( $members->have_posts() ) : ?>
                    <?php while ( $members->have_posts() ) : $members->the_post(); ?>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card-member">
                                <img src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title() ?>">
                                <h4 class="card-name"><?php the_title() ?></h4>
                                <span class="card-position"><?php the_field( 'member_ocupation' ); ?></span>
                                <div class="card-description">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>