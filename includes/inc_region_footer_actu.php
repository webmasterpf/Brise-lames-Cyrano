<?php
/* 
 * Permet de créer une region pour la colonne G1 dans les node.tpl
 * <p>LA REGION EXISTE</p>
 */

?>

<?php //regions pour inserer un bloc dans la colonne G1
if ($actuAssociation): ?>
<div id="region_footer_actu">
    <?php  print $actuAssociation; ?>
</div>
    <?php endif; ?>
<br clear="all"/>
