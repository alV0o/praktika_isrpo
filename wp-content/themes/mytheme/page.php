<?php get_header(); ?>

    <main class="page_item">

        <section class="page_item">
            <?php while(have_posts()):the_post(); ?>
            <?php endwhile;?>
        
            <div class="page_item_content" id="post-<?php the_ID();?>" <?php post_class();?>>
                <h1 class="page_item_title"><?php the_title(); ?></h1>
                <?php the_content();?>
            </div>
        </section>

    </main>

<?php get_footer(); ?>