<?php get_header(); ?>

<section class="page-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php 
            $content = get_the_content(); 
            $categoriesArr = get_the_category();
            $tagsArr = get_the_tags();
            $author = get_the_author();
            $title = get_the_title();
            
            $categories = [];
            // $tags = [];
            
            foreach($categoriesArr as $category) {
                array_push($categories, '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>');
            }
            $categories = implode(', ', $categories);

            /* foreach($tagsArr as $tag) {
                array_push($tags, '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>');
            }
            $tags = implode(', ', $tags); */
        ?>
        <?php if (!empty($title)): ?>
            <h1 class="h1"><?= $title; ?></h1>
        <?php endif; ?>
        
        <?php if (has_post_thumbnail()): ?>
            <div class="post_image"><?php the_post_thumbnail('large'); ?></div>
        <?php endif; ?>
        
        <?php if (!empty($content)): ?>
            <div class="post-content"><?= $content; ?></div>
        <?php endif; ?>

        <?php if (!empty($date = get_the_date())): ?>
            <div class="post_date">Добавлено: <?= $date; ?></div>
        <?php endif; ?>

        <?php if (!empty($author)): ?>
            <div class="post_author">Автор: <?= $author; ?></div>
        <?php endif; ?>

        
        
        <?php if (!empty($categories)): ?>
            <div>Категория: <?= $categories; ?></div>
        <?php endif; ?>
        
        <?php if (!empty($tags)): ?>
            <div>Метки: <?= $tags; ?></div>
        <?php endif; ?>
        
    <?php endwhile; endif; ?>

    <?php 
        /* if (comments_open()): 
            comments_template(); 
        endif; */
    ?>

    <div class="return"><a href="#" onclick="history.back();return false;">Вернуться назад</a></div>
</section>

<?php get_footer(); ?>