<?php get_header()?>

    <main class="main">
        <section class="content">
            <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="content_item">
                <h2 class="content_item_title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <p> Опубликовано <?php the_time('F jS, Y'); ?></p>
                <p> Автор: <?php the_author(); ?>.</p>
                <p> Категория: <?php the_category(', '); ?></p>
                <?php the_excerpt(); ?>        
            </div>
            <?php endwhile; else : ?>
                <p>Записи отсутствуют</p>
            <?php endif;?>
        </section>
        <section class="categories">
            <h2 class="categories_title">Жанры</h2>
            <div class="categories_list">
                <?php
                    $args = array(
                        'orderby' => 'name', //сортировка по имении
                        'order' => 'ASC', //сортировка по возрастанию
                        'hide_empty' => 0 //показывать пустые рубрики
                    );
                    $categories = get_categories($args);
                    foreach($categories as $category){//вывод в список
                        echo '<a href="'.get_category_link($category->term_id).'">'.$category->name.'</a><br>';
                    };
                ?>
            </div>
        </section>
    </main>

<?php get_footer()?>