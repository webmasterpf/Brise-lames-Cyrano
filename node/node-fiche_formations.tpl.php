<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR FICHE FORMATION .TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
 <div class="node-inner">
        <!--______________COLONNE 1________________ -->
        <?php /* choix du layout selon nombre de colonne
         * .col1_layout_200_590_200{} .col1_layout_330_all{} .col1_layout_18_56_25{}
         * .col2_layout_200_590_200{} .col2_layout_330_all{} .col2_layout_18_56_25{}
         * .col3_layout_200_590_200{} .col3_layout_330_all{} .col3_layout_18_56_25{}
         */?>
        <div id="colonne-1" class="col1_layout_225_700 fiche-formation1">
            <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_page"><?php print $title; ?></h1>
            <?php endif; ?>
            
             
            <?php if ($node->field_fiche_complement[0]['view']): ?>
            <div id="complement-fiche">
                    <?php  print $node->field_fiche_complement[0]['view']  ?>
            </div>
            <?php endif;?>
            <?php if ($node->field_programme_formation[0]['view']): ?>
            <div id="programme-fiche">
                    <?php  print $node->content['field_programme_formation']['field']['#title'] ?>:<?php  print $node->field_programme_formation[0]['view']  ?>
            </div>
            <?php endif;?>
            <?php if ($node->field_fiche_poursuite[0]['view']): ?>
            <div id="poursuite-fiche">
                    <?php  print $node->field_fiche_poursuite[0]['view']  ?>
            </div>
            <?php endif;?>
            
            
            
             <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
        </div>
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="colonne-2" class="col2_layout_225_700 fiche-formation">

            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
            </div>

        </div>

       
        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->