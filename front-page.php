<?php get_header() ?>
<main class="site__main">
<!-- Page d'accueil -->
<section class="animation">
    <div class="animation__bloc">Créatif</div>
    <div class="animation__bloc">Logique</div>
    <div class="animation__bloc">Ingénieux</div>    
</section>
<?php
    wp_nav_menu(array("menu"=>"menu_accueil",
                "container"=>"nav"));
?>
<?php
    wp_nav_menu(array("menu"=>"evenement",
                "container"=>"nav"));
?> 
   <?php if (have_posts()): the_post(); ?>
        <h1><?php the_title() ?></h1>    
        <?php the_content() ?>         
   <?php endif ?>
</main>
<?php get_footer() ?>