<!DOCTYPE html>
<html lang="en" dir="ltr" >
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?>

  </head>

  <header>

<div class="headerContainer">

<?php the_custom_logo(); ?>

<a href="<?php echo esc_url(home_url() );?>"> <?php echo get_bloginfo('name');?> </a>

<div class="navigationBar">
<?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>
</div>


</div>


  <body>