<?php
    /**
     * 
     * Template Name: Annonce
     * 
     * @package Wordpress
     * @subpackage cidw_4w4
     * 
     */
?>
<?php get_header() ?>
<main class="site__main">

    <h1>---------------Annonce----------------</h1>
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>        
   <?php endif ?>
</main>
<?php get_footer() ?>