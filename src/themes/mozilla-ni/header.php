<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mozilla-ni
 */

$header_logo = get_field( 'theme_header_logo', 'option' );

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<script src='https://www.google.com/recaptcha/api.js'></script>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Zilla+Slab:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header-site">
	    <div class="container">
	        <div class="row">
	            <div class="col-12">
	                <nav class="nav-container">
	                    <a href="/">
	                    	<?php if ( $header_logo ) : ?>
	                        	<img src="<?php echo $header_logo; ?>" alt="Mozilla Nicaragua" class="primary-logo" />
	                        <?php else: ?>
	                        	<img src="<?php echo get_template_directory_uri(); ?>/assets/logo-mozilla-ni.png" alt="Mozilla Nicaragua" class="primary-logo" />
	                        <?php endif; ?>
	                    </a>
	                    <div class="d-flex align-items-center desk-menu">
	                        <?php
					            wp_nav_menu( array(
					                'menu'              => 'menu-1',
					                'menu_class'        => 'nav',
					            ));
					        ?>
	                        <a href="<?php the_field('theme_download_firefox_link', 'option') ?>" class="btn btn-outline-success" target="_blank">Descargar Firefox</a>
	                    </div>
	                    <button type="button" class="open-menu">
	                    	<i class="fa fa-bars" aria-hidden="true"></i>
	                    </button>
	                </nav>
	            </div>
	        </div>
	    </div>
	</header>
