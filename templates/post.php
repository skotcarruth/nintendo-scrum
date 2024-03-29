<?php
/**
 * Default Post Template
 * Blog
 *
 */

?>

<div class="content-block">

  <?php 
    $featured_image = get_field('featured_image');  
    if ($featured_image) :  
      printf('<figure class="featured-image"><img src="%s" class="rellax object-fit-cover" alt="" /></figure>', 
        $featured_image['sizes']['large']
      );
    endif;
  ?>

  <div class="content-inner">
    <div class="copy">
      <h1 class="title"><?php the_title(); ?></h1>
      <?php the_content(); ?> 
    </div>
  </div>
</div>
