<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mozilla-ni
 */

get_header(); ?>

	<main class="main">
		<div class="container pt-5">
			<div class="row">
				<div class="col-12">
					<h1 class="title mb-5">Blog</h1>
				</div>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-12 col-md-6 col-lg-4">
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
			</div>
		</div>
	</main>

<?php
get_footer();
