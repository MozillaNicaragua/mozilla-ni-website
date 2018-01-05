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
				<div class="col-12 text-center">
					<h1 class="title mb-5">Blog</h1>
				</div>
                <div class="col-12 col-md-4">
                    <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'category-menu',
                            'menu'              => 'category-menu',
                            'menu_class'        => 'nav flex-column nav-pills nav-category',
                        ));
                    ?>
                </div>
                <div class="col-12 col-md-8">
                    <div class="row">
        				<?php if ( have_posts() ) : ?>
        					<?php while ( have_posts() ) : the_post(); ?>
        						<div class="col-12 col-md-6">
                                    <?php get_template_part( 'template-parts/blog', 'card' ); ?>
                                </div>
        					<?php endwhile; ?>
                            <div class="col-12 text-center paginate-buttons mb-5">
                                <?php previous_posts_link( 'Regresar' ); ?>
                                <?php echo get_next_posts_link( 'Siguiente' ); ?>
                            </div>
        				<?php endif; ?>                        
                    </div>    
                </div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.paginate-buttons').find('a').addClass('btn btn-primary');
    });
</script>
