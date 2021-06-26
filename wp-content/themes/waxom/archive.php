<?php get_header(); ?>

<?php $archive_title = preg_replace('~^[^:]+: ~', '', get_the_archive_title()); ?>

<section class="blog">
    <h1 class="h1-single"><?php echo is_tag() ? 'Записи по тегу - ' . $archive_title : $archive_title; ?></h1>

    <?php if (have_posts()) :  ?>
        
        <div class="recentposts-block">
            <?php while (have_posts()) : the_post(); ?>

                <?php $excerpt = get_the_excerpt(); ?>
                    <article class="recentposts-article">
                        <div class="img-effect">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('thumbnail'); ?>
                            <?php else: ?>
                                    <img class="no-img" src="<?= get_template_directory_uri() ?>/assets/image/no_image.png" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                            <?php if (!empty($date = get_the_date())): ?>
                                <div class="data-recentposts"> <span class="data-day">
                                    <?= $date; ?>
                                </div>
                            <?php endif; ?></span></div>
                        <div class="recentposts-text">
                            <h4><a href="<?= get_permalink();?>" class="post-blog"><?php the_title(); ?></a></h4>
                            <?php if (!empty($excerpt)) : ?>
                                <p><?= $excerpt;?></p>
                            <?php endif; ?>
                            <div class="read-more"><a href="<?= get_permalink();?>">Подробнее</a> </div>
                        </div>
                    </article>
            <?php endwhile; ?>
            
        </div>

        <?php  the_posts_pagination(); ?>

    <?php else : ?>

        <div class="post_content">Записей нет</div>

    <?php endif; ?>
</section>

<?php get_footer(); ?>