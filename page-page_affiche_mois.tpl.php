<?php include "inc_header.php"; ?>
 <!-- ______________________ LAYOUT page_affiche_mois REDESIGN 2012_______________________ -->
  <!-- ______________________ CONTENU _______________________ -->
  
      <div id="contentPageActu">
      
          <!-- ______________________ CONTENT TOP _______________________ -->
      <?php if ($breadcrumb ||$content_top ): ?>
            <div id="content-top">
	<span id="ariane"> <?php print $breadcrumb; ?></span>
        <br clear="all"/>
                      
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->

            <!-- ______________________ CONTENT TOP NODE_______________________ -->
               <?php if ($content_top_node): ?>
            <div id="content-top-node">
	              <?php print $content_top_node; ?>
            </div> <!-- /#content-top-node -->
            <?php endif; ?>  
       
    <!-- ______________________ CONTENU CENTRAL _______________________ -->
            
                  <div id="middle-content-actualites">
          
                   
              <br clear="all"/>
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

            </div> <!-- /#content-header -->
          <?php endif; ?>
            <?php print $content; ?>
              <?php print $feed_icons; ?>
              
        

          </div> <!-- /#content-area -->

        
          
          
      </div> <!-- /content-inner /content -->
 
            
        <?php if (!empty($primary_links) or !empty($secondary_links)): ?>
          <div id="navigation" class="menu <?php if (!empty($primary_links)) { print "with-main-menu"; } if (!empty($secondary_links)) { print " with-sub-menu"; } ?>">
            <?php if (!empty($primary_links)){ print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu')); } ?>
            <?php if (!empty($secondary_links)){ print theme('links', $secondary_links, array('id' => 'secondary', 'class' => 'links sub-menu')); } ?>
          </div> <!-- /navigation -->
        <?php endif; ?>

       
    	 <br clear="all"/>
         <!-- ______________________ CONTENU BAS _______________________ -->
          <?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>
            
	 </div> <!-- /contentPage -->
	  
	  <?php include "inc_footer.php";?>
         <?php endif; ?>    