<?php get_header(); ?>

<?php if(is_active_sidebar('main-slider')): ?>
    <ul>
        <?php dynamic_sidebar('main-slider'); ?>
    </ul>
<?php endif; ?>

<section class="page-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1 class="h1-txt"><?php the_title(); ?></h1>
        <div class="post-content"><?php the_content(); ?></div>
        
    <?php endwhile; endif; ?>
</section>

<?php if(is_active_sidebar('main-pageb')): ?>
    <ul>
        <?php dynamic_sidebar('main-pageb'); ?>
    </ul>
<?php endif; ?>

<?php get_footer(); ?>