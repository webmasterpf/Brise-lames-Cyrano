<?php
/* 
 * Inclusion d'une vue filtrée selon argument : TID
 */

?>
<?php
      
$viewname = 'NOM_DE_LA_VUE';
$view = views_get_view ($viewname);
$viewdisplay = $view->set_display('block_1');


$emptyTextVue = $view->set_display('block_1')->display_options['empty'];
$emptyText = $view->display_handler->set_option('empty','<div class="ma-classe">Nous ne proposons pas de formation de ce type pour le moment.</div>');
//$footer_text = '<a href="/node/8" >Voir les archives</a>';
//$view->display_handler->set_option('footer',$footer_text);
   
//Exécution de le vue
$view->pre_execute();
$view->execute();

$lesVid=array('2');//vid = 2 , indiquer le Vid du vocabulaire à filtrer

// on recupere le vid (taxonomie) et l'on verifie si c'est celui voulu
       if ( ! empty($node->taxonomy)  ) {
// Récupération du 1er element du tableau
           $term = array_shift($node->taxonomy);
    // verifie si l'un des termes appartiennent bien à l'un des vid définis dans le tableau
           if ( in_array($term->vid,$lesVid) ) {
               $args = $term->tid;
               $view->set_arguments($args);
              //si résultat on affiche la vue
               if (!empty($view->result)) {
 $output = '<div id="ID_NAME"><h3 class="CLASS_NAME">'.$view->get_title().'</h3>'. $view->preview($viewdisplay, $args).'</div>';
  print $output;
}
//sinon affiche texte vide de la vue
elseif (empty($view->result)) {
    //Formatage du texte vide,ajout du titre de la vue
     $outputEmpty = '<div id="ID_NAME"><h3 class="CLASS_NAME">'.$view->get_title().'</h3>' .$emptyText.'<br>'.$emptyTextVue.'</div>';
    // drupal_set_message('$EmptyTextVue : '.$emptyTextVue,'status');
     //Affichage du texte vide
  print $outputEmpty;
}

           }
       }
?>
