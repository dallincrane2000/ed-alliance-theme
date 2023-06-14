<?php get_header(); ?>

<main id="main-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">Read more</a>
        </article>
    <?php endwhile; else : ?>
        <p>There are no posts to display.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
