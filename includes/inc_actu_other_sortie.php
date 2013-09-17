<?php
/*
 * Inclus la vue , ajoute une differenciation de variable
 * Si vide affiche le texte vide de la vue 
 * $viewname_ag5 = 'NOM_De_LA_VUE';
 * $viewdisplay_ag5 = $view->set_display('DISPLAY_CHOISI');
 * Si besoin d'argument, utiliser la ligne dédiée $args et l'ajouter comme ceci $view->preview($viewdisplay_ag5, $args)
 * 
 * Pour l'argument il faut le TiD selon la liste :
 * Action 4
 * Revue de presse 12
 * Innovation 7
 * Intervenant 6
 * Projet 5 
 * Sortie 3
 */

?>
<?php
$viewname_ag5 = 'Actu_globale';
$view = views_get_view ($viewname_ag5);
$viewdisplay_ag5 = $view->set_display('block_5');
$args_ag5 = $view->set_arguments(array(3));

$emptyTextVue = $view->set_display('block_5')->display_options['empty'];
$emptyText = $view->display_handler->set_option('empty','<div class="ma-classe">Pas de contenu à afficher.</div>');
//Pour Views 2
$footer_text = '<a href="/node/8" >Voir les archives</a>';
$view->display_handler->set_option('footer',$footer_text);
//Pour Views 3 
$view->display[$viewdisplay_ag5]->set_options['footer'] = "$footer_text";
//Exécution de le vue
$view->pre_execute();
$view->execute();

if (!empty($view->result)) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="other-sortie"><h3 class="CLASS_NAME">'.$view->get_title().'</h3>' .$view->preview($viewdisplay_ag5,$args_ag5).'</div>';
//Debug
drupal_set_message('$Footer Views3: '.$FooterV3,'status');
drupal_set_message('$EmptyTextVue Views3 : '.$emptyTextVue_v3,'status');
  //Affiche la vue si contenu
print $output;
}
//sinon affiche texte vide
elseif (empty($view->result)) {
    //Formatage du texte vide,ajout du titre de la vue
     $outputEmpty = '<div id="other-sortie"><h3 class="CLASS_NAME">'.$view->get_title().'</h3>' .$emptyText.'<br>'.$emptyTextVue.'</div>';
    // drupal_set_message('$EmptyTextVue : '.$emptyTextVue,'status');
     //drupal_set_message('$EmptyTextVue Views3 : '.$emptyTextVue_v3,'status');
     
    
     //Affichage du texte vide
  print $outputEmpty;
}
?>
