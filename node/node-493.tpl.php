<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL(ID) POUR PAGE.TPL RESTAURANT  CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
 <div class="node-inner">
        <!--______________COLONNE 1________________ -->
        <?php /* choix du layout selon nombre de colonne
         * .col1_layout_200_590_200{} .col1_layout_330_all{} .col1_layout_18_56_25{}
         * .col2_layout_200_590_200{} .col2_layout_330_all{} .col2_layout_18_56_25{}
         * .col3_layout_200_590_200{} .col3_layout_330_all{} .col3_layout_18_56_25{}
         */?>
        <div id="colonne-1" class="pageLycee col1_layout_610_335 border-R-rose">
            <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_page"><?php print $title; ?></h1>
            <?php endif; ?>
            
                  <div class="content">
                       <?php if ($node->field_logo_resto[0]['view']): ?>
            <div class="logo-resto">
                    <?php  print $node->field_logo_resto[0]['view']  ?>
            </div>
            <?php endif;?>
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
                         <?php if ($node->field_choix_galerie_vdl[0]['view']): ?>
            <div class="galerie-resto">
                    <?php  print $node->field_choix_galerie_vdl[0]['view']  ?>
            </div>
            <?php endif;?>       
                      
            </div>
             <?php
              $theme_path = drupal_get_path('theme', 'cyrano_bl');
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
        </div>
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="colonne-2" class="pageLycee col2_layout_610_335">

            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

                 <?php if ($node->field_fichier_attache[0]['view']): ?>
            <div class="menu-resto">
                <h3>Le Menu du Restaurant</h3>
                    <?php  print $node->field_fichier_attache[0]['view']  ?>
            </div>
            <?php endif;?>
                   <?php
              $theme_path = drupal_get_path('theme', 'cyrano_bl');
              include ($theme_path.'/includes/inc_region_col_G2.php');
              ?>
      

        </div>

 

    </div> <!-- /node-inner -->
</div> <!-- /node-->