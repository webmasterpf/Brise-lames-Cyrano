<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
 * Modifier en 02/2014 pour nouveau système de blocs
*/?>
<!--______________NODE TPL POUR POLE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
 <div class="node-inner">
        <!--______________COLONNE 1________________ -->
        <?php /* choix du layout selon nombre de colonne
         * .col1_layout_200_590_200{} .col1_layout_330_all{} .col1_layout_18_56_25{}
         * .col2_layout_200_590_200{} .col2_layout_330_all{} .col2_layout_18_56_25{}
         * .col3_layout_200_590_200{} .col3_layout_330_all{} .col3_layout_18_56_25{}
         */?>
        <div id="zone-1" class="CHOIX_DU_LAYOUT">
            <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_page"><?php print $title; ?></h1>
            <?php endif; ?>
            
            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
            </div>
            
          <?php //regions pour affiche le pole vente-commerce
            if ($pole_1):
                ?>
                <div id="orange" class="bloc-pole">
                <?php print $pole_1; ?>
                </div>
            <?php endif; ?>
            
              <?php //regions pour affiche le pole gestion-admin
            if ($pole_2):
                ?>
                <div id="bleu" class="bloc-pole">
                <?php print $pole_2; ?>
                </div>
            <?php endif; ?>
            
              <?php //regions pour affiche le pole restauration
            if ($pole_3):
                ?>
                <div id="vert" class="bloc-pole">
                <?php print $pole_3; ?>
                </div>
            <?php endif; ?>
            
              <?php //regions pour affiche le pole reussite scolaire
            if ($pole_4):
                ?>
                <div id="rose" class="bloc-pole">
                <?php print $pole_4; ?>
                </div>
            <?php endif; ?>
            
            
        </div>
       

    </div> <!-- /node-inner -->
</div> <!-- /node-->