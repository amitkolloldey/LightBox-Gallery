<?php
get_header();
?>

<div class="products">
    <?php while( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php  endwhile; ?>
</div>
<?php get_footer(); ?>