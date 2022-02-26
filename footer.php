<footer class="site__footer">

        <div class="adresse">
        <h2 class="footer__titre">3800 Rue Sherbrooke E</h2>
        <h2 class="footer__titre">Montréal,QC</h2>
        <h2 class="footer__titre">H1X 2A2</h2>
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
    <div class="presentation">
        <h3 class="footer__presentation">Un site web fait par une élève du TIM à l'aide de Wordpress.</h3>
        <h4 class="footer__author">Fait par Alexandre Boudreau</h4>
    </div>
    
    

</footer>
<?php wp_footer(); ?>
</body>

</html>