<?php
  $background_image = get_sub_field('background_image');
  $hero_copy = get_sub_field('hero_copy');
?>

<div class="content-block section-<?php echo get_row_layout(); ?>">

  <figure class="background-image">
    <img src="<?php echo $background_image['sizes']['large']; ?>" alt="" />
  </figure>

  <?php if ($hero_copy) : ?>
    <div class="copy">
      <?php
        if ($hero_copy['title']) :
          printf(__('<h1 class="title-hero">%s</h1>', 'ntsp'), $hero_copy['title']);
        endif;

        if ($hero_copy['copy']) :
          printf(__('<p>%s</p>', 'ntsp'), $hero_copy['copy']);
        endif;
      ?>
    </div>
  <?php endif; ?>

</div>