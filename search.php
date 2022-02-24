<?php get_header(); ?>
<main class="site__main">
    <?php if(have_posts()): ?>

        <?php while(have_posts()):the_post(); ?>
            <?php the_title(); ?>
            <p><?php echo wp_trim_words(get_the_content(),20,"...>") ; ?></p>
            <hr>
        <?php endwhile ?>

    <?php else : ?>
            <p>Va manger du poulet</p>
    <?php endif ?>

</main>
<?php get_footer(); ?>