 <?php
/**
 * File footer.php
 *
 * footer of the site
 *
 * @package Site for HUG
 * @since Site for HUG  1.0
 */
?>
</div>
   <!-- end wraper -->
    <footer>
    <div class="FooterInfo">

          <div class="leftAdrPanel">
            <div class="inLeftPanel">
                 <div class="address">
                 <?php if ( is_active_sidebar( 'bottom-sidebar' ) ) :
                        dynamic_sidebar( 'bottom-sidebar' );
                endif; ?>

                 </div> <!-- end address -->

                 <div class="contacts">
                 <?php if ( is_active_sidebar( 'top-sidebar' ) ) :
                        dynamic_sidebar( 'top-sidebar' );
                endif; ?>
                 </div> <!-- end contacts -->
                 </div><!-- end leftAdrPanel -->
           </div> <!-- end inLeftPanel -->

     <div class="rightAdrPAnel">
         <div class="inRightPanel">
             <div  id="bottomLogoimg">
                 <?php if ( is_active_sidebar( 'left-sidebar' ) ) :
                        dynamic_sidebar( 'left-sidebar' );
                endif; ?>
             </div>
             <div  id="bottomLogoimgTwo">
                 <?php if ( is_active_sidebar( 'right-sidebar' ) ) :
                        dynamic_sidebar( 'right-sidebar' );
                endif; ?>
             </div>
           <!-- <img  src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/logokurt2BotomLogo.png" alt="" />
            <img class="" src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/memberOSwiss.png" alt="" />
-->
        </div> <!-- end inRightPanel -->
     </div><!-- end rightAdrPAnel -->



     </div> <!-- end FooterInfo -->
    </footer>    <!-- end footer -->
    <!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
    <?php wp_footer(); ?>
</body>
</html>