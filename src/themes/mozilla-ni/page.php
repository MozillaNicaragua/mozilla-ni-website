<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mozilla-ni
 */

get_header(); ?>

	<main class="main pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php while ( have_posts() ) : the_post(); ?>
						<h1 class="title mb-5"><?php the_title(); ?></h1>
						<div>
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</main>

<?php
get_footer();
