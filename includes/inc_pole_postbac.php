<?php
/*
 * Inclus la vue , ajoute une differenciation de variable
 * Si vide affiche le texte vide de la vue 
 * $viewname_fl3 = 'NOM_De_LA_VUE';
 * $viewdisplay_fl3 = $view->set_display('DISPLAY_CHOISI');
 * Si besoin d'argument, utiliser la ligne dédiée $args et l'ajouter comme ceci $view->preview($viewdisplay_fl3, $args)
 * Pour indiquer le TID comme argument : $args = $view->set_arguments(array(7)); avec le tid voulu
 * Liste tid : 14 >> Métiers de la Restauration
 * 15 >> Métiers du Commerce et de la vente
 * 16 >> Métiers de la Gestion Administrative
 * 17 >> Formation POST-BAC
 */

?>


    <?php

$viewname_fl3 = 'Pole_metiers';
$view = views_get_view ($viewname_fl3);
$viewdisplay_fl3 = $view->set_display('block_1');
$args_fl3 = $view->set_arguments(array(17));

$emptyTextVue = $view->set_display('block_1')->display_options['empty'];
$emptyText = $view->display_handler->set_option('empty','<div class="texte-vide">Nous ne proposons pas de formation de ce type pour le moment.</div>');
//$footer_text = '<a href="/node/8" >Voir les archives</a>';
//$view->display_handler->set_option('footer',$footer_text);

// Récupérer le terme pour le titre de la vue
$term = taxonomy_get_term(17);
$titre_vue = $term->name;
$view->display_handler->set_option('title',$titre_vue);


//Exécution de le vue
$view->pre_execute();
$view->execute();

if (!empty($view->result)) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="postbac" class="bloc-pole"><h3 class="CLASS_NAME">'.$view->get_title().'</h3>' .$view->preview($viewdisplay_fl3,$args_fl3).'</div>';

  //Affiche la vue si contenu
print $output;
}
//sinon affiche texte vide
elseif (empty($view->result)) {
    //Formatage du texte vide,ajout du titre de la vue
     $outputEmpty = '<div id="postbac" class="bloc-pole"><h3 class="CLASS_NAME">'.$view->get_title().'</h3>' .$emptyText.'<br>'.$emptyTextVue.'</div>';
     //drupal_set_message('$EmptyTextVue : '.$emptyTextVue,'status');
     //Affichage du texte vide
  print $outputEmpty;
}


?>
