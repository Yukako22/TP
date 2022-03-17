<?php get_header() ?>
<main class="site__main">

<section class="animation">
    <div class="animation__bloc">Créatif</div>
    <div class="animation__bloc">Logique</div>
    <div class="animation__bloc">Ingénieux</div>
    
</section>

    
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>