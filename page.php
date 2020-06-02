<?php get_header(); ?>


<section class="page-wrap">
<div class="">

  <section class="row ">

    <div class="col-lg-9 pageContainer">

     

    

      <?php get_template_part('includes/section','content'); ?>
    </div>

    <div class="col-lg-3 widget">

      <?php if(is_active_sidebar('page-sidebar')) :?>
        <?php dynamic_sidebar('page-sidebar'); ?>

      <?php endif; ?>
    </div>

</section>


<?php get_footer(); ?>