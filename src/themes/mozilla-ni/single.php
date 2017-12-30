<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mozilla-ni
 */

get_header(); 

$related_posts_args = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
	'orderby' => 'rand');
$related_posts = new WP_Query( $related_posts_args );

?>

	<main class="main">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="post">
						<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" class="post-thumbnail">
						<div class="p-5">
							<h1 class="post-headline">
								<?php the_title(); ?>
							</h1>
							<div class="post-meta">
								<span class="post-meta-cat"><?php echo esc_html(get_the_category()[0]->name) ?></span>
								-
								<span class="post-meta-date"><?php echo the_time('F j, Y'); ?></span>
							</div>
							<div class="post-content">
								<?php the_content(); ?>
								<div class="post-author">
									<div class="media align-items-center">
									 	<?php echo get_avatar( get_the_author_meta( 'ID' ), 65 ); ?>
									  	<div class="media-body">
									    	<h5 class="mt-0 ml-3"><span>Por</span> <span class="text-primary"><?php the_author(); ?></span></h5>
										</div>
									</div>
								</div>
							</div>
							<div class="post-navigation">
								<?php the_post_navigation(); ?>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
				<div class="col-12 mb-5">
					<h4 class="title mb-4">Tambien te puede interesar</h4>
					<?php if ( $related_posts->have_posts() ) : ?>
						<div class="row">
							<?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
								<div class="col-12 col-md-6 col-lg-4">
		                            <div class="card-blog">
		                                <div class="card-image">
		                                    <img src="<?php the_post_thumbnail_url('card-blog'); ?>" alt="<?php the_title(); ?>">
		                                </div>
		                                <div class="card-body">
		                                    <h4 class="card-title">
		                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		                                    </h4>
		                                </div>
		                            </div>
		                        </div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</main>

<?php
get_footer(); ?>

<script type="text/javascript">
	$(document).ready(function(){
		$('.gallery').magnificPopup({
		  	delegate: 'a', // child items selector, by clicking on it popup will open
		  	type: 'image',
		  	gallery: { enabled: true },
		});
	});
</script>
