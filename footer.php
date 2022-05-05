</html>
<footer class="site__footer">
    <!-- première rangé de colonne -->
    <div class="site__footer__colonne">
        <section class="footer__article">  	
                <?php get_sidebar( 'footer_colonne_1' ); ?>
                <?php get_search_form(); ?>
        </section>
        <section class="footer__adresse">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.9731813796834!2d-73.5554881842448!3d45.550865035676985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91bf5bacbeffd%3A0x68ff300997eff5c!2sColl%C3%A8ge%20de%20Maisonneuve!5e0!3m2!1sfr!2sca!4v1649620179975!5m2!1sfr!2sca" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
        </section>
        <section class="footer__liens">
        <?php get_sidebar( 'footer_colonne_3' ); ?>
        
        </section>
    </div>
    <!-- section de plusieurs lignes -->
    <div class="site__footer__ligne">
        <section class="footer__description"></section>
        <section class="footer__nav"></section>
        <section class="footer__sociaux"><?php get_sidebar( 'footer_ligne_1' ); ?></section>
        <section class="copyright"></section>
        <section class="footer__auteur"><h4>Fait par Alexandre Boudreau</h4></section>
    </div>
    <div class="menu">

    <?php 

        $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#f00"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
        wp_nav_menu(array(
                    "menu"=>"simple",
                    "container"=>"nav",
                    "container_class"=>"site__footer__menu",
                    "menu_class"=>"site__footer__menu__ul",

                    "link_before"=>$icone)); ?>
    </div>
</footer>

<div class="boite__modale">
    <button class="boite__modale__fermeture">-</button>
    <article class="boite__modale__texte"></article>
</div>
<div class="boite__carrousel">
    <button class="boite__carrousel__fermeture">-</button>
    <article class="boite__carrousel__navigation"></article>
</div>
<?php wp_footer(); ?>
</body>

    