<?php get_header() ?>
<main class="site__main">

    <h1>---- Erreur 404------</h1>
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>        
   <?php endif ?>
</main>
<?php get_footer() ?>