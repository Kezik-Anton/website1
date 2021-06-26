<?php get_header(); ?>

<h1>Страница поиска</h1>

<?php if (have_posts()) :  ?>
    
    <div class="post_entries">
        <?php while (have_posts()) : the_post(); ?>

            <?php $excerpt = get_the_excerpt(); ?>

            <div class="post_entry">
                <?php if (!empty($date = get_the_date())): ?>
                    <div class="post_date"><?= $date; ?></div>
                <?php endif; ?>
                <a href="<?= get_permalink();?>" class="post-blog"><?php the_title(); ?></a>
                    <?php if (!empty($excerpt)) : ?>
                        <div class="entry_exerpt"><?= $excerpt;?></div>
                    <?php endif; ?>
                <?php if (has_post_thumbnail()): ?>    
                    <div class="entry_more_link">
                        <a href="<?= get_permalink();?>" class="post-blog">подробнее</a>
                    </div>
                <?php endif; ?>
            </div>

        <?php endwhile; ?>
        <?php  the_posts_pagination(); ?>
    </div>

<?php else : ?>

    <div class="post_content">Результат поиска не дал никаких результатов.</div>

<?php endif; ?>

<?php get_footer(); ?>