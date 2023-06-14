<?php
/* Template Name: Home */
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
    <div class="entry-content-page">
        <?php the_content(); ?> <!-- This is where the content of the page will display -->
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>