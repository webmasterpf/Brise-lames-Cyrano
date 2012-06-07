<?php
/* 
 * Inclus la vue Documents joints pour page lycee tpl
 * conditionné à la présence de champs CCK non vide
 * Affichage selon argument : nid ou tid
 */

?>
<div id="bloc_vdl_autres_evenements">
       <?php
      
  $viewname = 'liste_autres_vdl';
$view = views_get_view ($viewname);
$viewdisplay = $view->set_display('block_1');


$lesVid=array('2');//vid = 2 , type d'evenement

// on recupere le vid (taxonomie) et l'on verifie si c'est celui voulu
       if ( ! empty($node->taxonomy)  ) {
// Récupération du 1er element du tableau
           $term = array_shift($node->taxonomy);
    // verifie si l'un des termes appartiennent bien à l'un des vid définis dans le tableau
           if ( in_array($term->vid,$lesVid) ) {
               $args = $term->tid;
               $view->set_arguments($args);
               $output = '<div id="ac"><h3>'.$view->get_title().'</h3>' . $view->preview($viewdisplay, $args).'</div>';
               if (!empty($view->result)) {
  print $output;
}
           }
       }
           ?>
</div>