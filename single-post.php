<?php get_header() ?>
<main class="site__main">

    <h1>Le poulet c'est génial</h1>
   <?php if (have_posts()): the_post(); ?>
     <article class="article">
        <?php the_title() ?>
          <div class="article__contenu">
                     
                    <?php if(has_post_thumbnail()): ?>
               <figure class="article__figure">
                    <?php the_post_thumbnail("medium");  ?>
               </figure>
               <?php the_content() ?>  
          </div>
          </article>
     <?php endif ?>     
   <?php endif ?>
</main>
<?php get_footer() ?>