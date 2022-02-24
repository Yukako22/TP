<?php get_header() ?>
<main class="site__main">

    <h1>---- Erreur 404 ------</h1>

    <section class="erreur-404">

    <h1>
         La page n'existe pas
    </h1>
    </section>
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>        
   <?php endif ?>
</main>
<?php get_footer() ?>