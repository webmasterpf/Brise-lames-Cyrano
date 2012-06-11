<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM : ACTU REDESIGN 2012________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        <!--______________ ZONE 1________________ -->
        <?php /* choix du layout selon nombre de colonne
         * .col1_layout_200_590_200{} .col1_layout_330_all{} .col1_layout_18_56_25{}
         * .col2_layout_200_590_200{} .col2_layout_330_all{} .col2_layout_18_56_25{}
         * .col3_layout_200_590_200{} .col3_layout_330_all{} .col3_layout_18_56_25{}
         */?>
        <div id="zone-1" class="CHOIX_DU_LAYOUT">
            <?php if ($title): /*copier le titre dans la zone desirée*/?>
            <h1 class="titre_page"><?php print $title; ?></h1>
            <?php endif; ?>
            
               <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la zone désirée*/ ?>
            </div>
         <!-- LES DERNIERS CONTENUS DE CHAQUE RUBRIQUE -->   
             <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_actu_last_sortie.php');
              ?>
           <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_actu_last_projet.php');
              ?>
         
         
             <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
        </div> <br/>
        <!--______________ ZONE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="zone-2" class="CHOIX_DU_LAYOUT">

         <!-- LES AUTRES CONTENUS DE CHAQUE RUBRIQUE -->
            <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_actu_other_sortie.php');
              ?>
          <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_actu_other_projets.php');
              ?>
          <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_actu_other_innovations.php');
              ?>
         
        </div> <br style="clear: both;" />

        <!--______________ ZONE 3 ________________ -->
        <div id="zone-3" class="CHOIX_DU_LAYOUT">
            <!--***********!!!!!!  EXEMPLE DE CHAMP CCK INCLUS AVEC CONDITION !!!!!!!!************ -->
            <?php if ($node->nom_du_champ[0]['view']): ?>
            <div id="nom-css">
                    <?php  print $node->nom_du_champ[0]['view']  ?>
            </div>
            <?php endif;?>
          <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_footer_actu.php');
              ?>

        </div><!-- /ZONE3 -->

        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->