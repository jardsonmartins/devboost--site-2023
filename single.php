<?php get_header(); ?>

<?php setPotsViews(get_the_ID()); ?>

    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

    <?php endwhile; endif; wp_reset_query() ?>

<?php get_footer() ?>