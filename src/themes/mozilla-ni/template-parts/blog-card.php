<article id="post-<?php the_ID(); ?>" <?php post_class( 'article' ); ?>>
    <div class="article-thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'card-blog' ); ?>            
        </a>
    </div>
    <div class="article-body">
        <span class="article-date"><?php the_time( 'j F, Y' ); ?></span>
        <h4 class="article-headline">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h4>
    </div>
</article>