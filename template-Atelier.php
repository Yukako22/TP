<?php
    /**
     * 
     * Template Name: Atelier
     * 
     * @package Wordpress
     * @subpackage cidw_4w4
     * 
     */
?>
<?php get_header() ?>
<main class="site__main">

    <article class="atelier">
   <?php if (have_posts()): the_post(); ?>
        <h1><?php the_title() ?></h1>
        <H2>Description de l'atelier</H2>
          <section class="atelier__resume">
               <p>Animation en charge :<?php the_field('animateur')?> </p>
               
               
               <p>Local de t'atelier :<?php the_field('local_ou_se_deroulera_l’atelier_')?> </p>
               <p><?php the_field('description_de_l’atelier_')?> </p>
          </section>
          <p class="atelier__endroit">
               <p>Durée d'une séance : <?php the_field('duree_d’une_seance_d’atelier');?></p>
               <p> Heure de début :<?php the_field('heure_de_debut');?></p>
               <p>Heure de fin :<?php
                    the_field('heure_de_fin_');
               ?></p>
               <p> DAte de début :<?php
                    the_field('date_de_debut_de_l’atelier_');
               ?></p>
               <p>Date de fin :<?php
                    the_field('date_de_fin_de_l’atelier_');
               ?></p>
               
          </p>
          
          
     </article>
   <?php endif ?>
</main>
<?php get_footer() ?>