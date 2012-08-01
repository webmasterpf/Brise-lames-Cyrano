<?php include "inc_header.php"; ?>
<!-- ______________________ LAYOUT HOMEPAGE _______________________ -->
 <!-- ______________________ CONTENU _______________________ -->
    
	<div id="mainPage">
	
          <?php if ($content_top): ?>
            <div id="content-top">
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>

   <!-- ______________________ ZONE DIAPO _______________________ -->
			
              <?php if ($DiapoHP): ?>
                 <div id="HPDiapo"><?php print $DiapoHP; ?></div>
              <?php endif; ?>
         
<br clear="all"/>


<!-- ______________________ PARTIE BAS GAUCHE _______________________ -->
                 <?php if ($HPBasGauche): ?>
                 <div id="BasGaucheHP"><?php print $HPBasGauche; ?>


                        <?php if ($mission || $messages || $help || $tabs): ?>
            <div id="content-header">

              <?php if ($mission): ?>
                <div id="mission"><?php print $mission; ?></div>
              <?php endif; ?>

              <?php print $messages; ?>

              <?php print $help; ?>

              <?php if ($tabs): ?>
                <div class="tabs"><?php print $tabs; ?></div>
              <?php endif; ?>
                

                 </div>
              <?php endif; ?>  
		  </div>
<!-- ______________________ PARTIE BAS DROITE _______________________ -->
      
	  
	 
        <?php if ($HPBasDroit): ?>
     <div id="BasDroitHP"><?php print $HPBasDroit; ?></div>
        <?php endif; ?>
	
	<br clear="all"/>
	<!-- ______________________ CONTENU BAS _______________________ -->
    <?php if ($content_bottom_home): ?>
    <div id="content-bottom-home">
      <?php print $content_bottom_home; ?>
         <?php print $feed_icons; ?>
    </div><!-- /#content-bottom -->
    <?php endif; ?>
	
	
	 </div> <!-- /mainPage -->
     <?php include "inc_footer.php";?>
 <?php endif; ?>