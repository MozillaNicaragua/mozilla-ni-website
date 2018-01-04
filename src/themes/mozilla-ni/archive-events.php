<?php get_header(); ?>

    <main class="main pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="title mb-5">Eventos</h1>
                </div>
                <div class="col-12">
                    <?php if ( have_posts() ) : ?>
                        <div class="card-columns">
                            <?php while ( have_posts() ) : the_post(); ?>
                            <div class="card">
                                <img class="card-img-top" src="<?php the_post_thumbnail_url( 'card-blog' ); ?>" alt="<?php the_title(); ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php the_field('event_date') ?></h6>
                                    <hr>
                                    <h6 class="card-subtitle mb-2 text-muted"><strong>Lugar: </strong><?php the_field('event_place') ?></h6>
                                    
                                    <p class="card-text"><?php the_content(); ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    <?php else: ?>
                        <h4 class="text-center">No hay eventos proximos... :(</h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>