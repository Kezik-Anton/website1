<?php get_header(); ?>

<section class="page-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1 class="h1-txt"><?php the_title(); ?></h1>
        <div class="post-content"><?php the_content(); ?></div>
        
    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>