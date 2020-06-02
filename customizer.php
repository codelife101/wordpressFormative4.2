



<?php

//Hook1: customize-register to define new Cutomizer panels, settings, controls
function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here


    // Background Colour
  $wp_customize->add_setting( 'twenty20s_backgroundColour' , array(
      'default'   => '#fff4f2',
      'transport' => 'refresh',
  ) );


  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'twenty20s_backgroundColourControl', array(
    'label'      => __( 'Background Colour', 'twenty20s' ),
   'description' => 'Change the background Colour',
    'section'    => 'colors',
    'settings'   => 'twenty20s_backgroundColour',
  ) ) );

  $wp_customize->add_setting( 'twenty20s_headerFooterColour' , array(
   'default'   => '#ffa286',
   'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'twenty20s_headerFooterColourControl', array(
     'label'      => __( 'header/footer Colour', 'twenty20s' ),
   'description' => 'Change the header Colour',
     'section'    => 'colors',
     'settings'   => 'twenty20s_headerFooterColour',
   ) ) );


  



   }

 add_action( 'customize_register', 'mytheme_customize_register' );


//Hook2: wp_head to output custom-generated CSS
 function mytheme_customize_css()

 {

   ?>
    <style type="text/css">
    body {
      background-color: <?php echo get_theme_mod('twenty20s_backgroundColour','#fff4f2'); ?>!important;
         }
    .headerContainer, .footer{
      background-color: <?php echo get_theme_mod('twenty20s_headerFooterColour','#ffa286'); ?>!important;
    }



  </style>
<?php
}
add_action( 'wp_head', 'mytheme_customize_css');