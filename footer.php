
<footer>


  
<footer class="bg-dark text-info footerclass">
  <div class="footer ">
  <?php
  wp_nav_menu(
    array(
    'theme_location' => 'footer-menu',
   //  'menu' => 'Top Bar',
    'menu_class' => 'top-bar'
    )
  );
  ?>

copyright@2020
</div>

  
</footer>

<?php  wp_footer(); ?>
  </body>
</html>