<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mozilla-ni
 */

$footer_logo = get_field( 'footer_theme_logo', 'option' );
$facebook = get_field( 'theme_facebook', 'option' );
$twitter = get_field( 'theme_twitter', 'option' );
$github = get_field( 'theme_github', 'option' );

?>

<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
            	<?php if ( $footer_logo ): ?>
                	<img src="<?php echo $footer_logo; ?>" alt="Mozilla Nicaragua" class="footer-logo">
            	<?php else: ?>
            		<img src="<?php echo get_template_directory_uri(); ?>/assets/logo-mozilla-ni.png" alt="Mozilla Nicaragua" class="primary-logo" />
            	<?php endif; ?>
                <h4 class="subtitle">Permanece en conacto</h4>
                <ul class="nav">
                	<?php if ( $facebook ) : ?>
                    <li class="nav-item">
                        <a href="<?php echo $facebook; ?>" class="nav-link" target="_blank">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        </a>
                    </li>
                	<?php endif; ?>
                	<?php if ( $twitter ) : ?>
                    <li class="nav-item">
                        <a href="<?php echo $twitter; ?>" class="nav-link" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                	<?php endif; ?>
                	<?php if ( $github ) : ?>
                    <li class="nav-item">
                        <a href="<?php echo $github; ?>" class="nav-link" target="_blank">
                            <i class="fa fa-github" aria-hidden="true"></i>
                        </a>
                    </li>
                	<?php endif; ?>
                </ul>
            </div>
            <div class="col-12 col-md-3">
                <h4 class="subtitle">Mozilla Nicaragua</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">Blog / Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">Contacto</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-3">
                <h4 class="subtitle">Mozilla</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="https://www.mozilla.org/es-ES/about/" class="nav-link" target="_blank">Conócenos</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://blog.mozilla.org/" class="nav-link" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://donate.mozilla.org/es-ES/?presets=50,30,20,10&amount=30&utm_source=mozilla.org&utm_medium=referral&utm_content=footer&currency=eur" class="nav-link" target="_blank">Donar</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-3">
                <h4 class="subtitle">Firefox</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="https://www.mozilla.org/es-ES/firefox/new/" class="nav-link" target="_blank">Descaregar Firefox</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.mozilla.org/es-ES/firefox/" class="nav-link" target="_blank">Escritorio</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.mozilla.org/es-ES/firefox/mobile/" class="nav-link" target="_blank">Movil</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.mozilla.org/es-ES/firefox/channel/desktop/" class="nav-link" target="_blank">Edición para desarrolladores, Beta, Nightly</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
