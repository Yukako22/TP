<?php
/**
    *Ajout d'une fonction de personalisation en utilisant la classe WP_Customizer
    *Le hook : 'customize_register' qui sera utilisé dans le l'écouteur add_action()
    * La fonction de rappel : function(WP_Customizer, $manager)
*/
  
 add_action('customize_register',function(WP_Customize_Manager $manager){
    $manager->add_section("apparence_body",
                           [
                               "title"=> "apparence body"
                           ]);
    $manager->add_setting( "background_body",
                            [   "default" => "black",
                                "sanitize_callback"=> "sanitize_hex_color" // permet de valider/filtrer la donnée
                            ]);
    $manager->add_control(  "background_body",
                            ["section"=> "apparence_body",
                            "setting"=> "background_body",
                            "label"=> "La couleur de notre background body" 
                        ]);
 });
?>